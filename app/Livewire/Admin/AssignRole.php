<?php

namespace App\Livewire\Admin;

use App\Models\Role;
use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use App\Models\User;
use Filament\Tables\Actions\Action;
use Illuminate\Contracts\View\View;
use WireUi\Traits\WireUiActions;

class AssignRole extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use WireUiActions;
    use InteractsWithForms;

    public ?array $userData =[];

    public function table(Table $table): Table
    {
        return $table
            ->query(User::query())
            ->columns([
            TextColumn::make('name'),
            TextColumn::make('email'),
            TextColumn::make('role.name')

            ])
            ->filters([
                // ...
            ])
            ->actions([

                Action::make('Voir')
                 ->button()
                ->outlined(),
                Action::make('modifier')
                  ->action(fn(User $record) => $this->AssigerRoleModal($record))
                ->button()

                ->outlined(),
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
    public function render()
    {
        return view('livewire.admin.assign-role',['roles'=>Role::all()]);
    }

    public function ModifierUtilisateur()
    {
        $this->validate([
            'userData.name' => 'required',
            'userData.email' => 'required',
            'userData.role_id' => 'required',
        ]);
        try{


        $user=User::find($this->userData['id'])->update($this->userData);


            $this->dispatch('close-modal', id: 'assigner-role');


            $this->successNotification();




        }catch(\Exception $e){

            dd($e->getMessage());

        }
    }

    public function AssigerRoleModal(User $user){

        $this->userData=$user->toArray();
        $this->dispatch('open-modal', id: 'assigner-role');

    }

    public function successNotification(): void
    {
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'utilisateur modifier',

        ]);
    }

    public function errorNotification(): void
    {
        $this->notification()->send([
            'icon' => 'error',
            'title' => 'Error Notification!',
            'description' => 'Woops, its an error.',
        ]);
    }


}
