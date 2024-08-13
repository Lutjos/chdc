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
use Filament\Actions\Action;
use Filament\Forms\Components\Actions\Action as ActionsAction;
use League\Csv\Query\Row;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

use Filament\Forms\Form;

use Filament\Forms\Components\Section;
use Filament\Tables\Actions\Action as TablesActionsAction;

class RoleListe extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    public string $role, $roleEdit;

    Public Role $roleModel;

    public function table(Table $table): Table
    {
        return $table
            ->query(Role::query())
            ->columns([
            TextColumn::make('name')->label('roles'),



            ])
            ->filters([
                // ...
            ])
            ->actions([
                TablesActionsAction::make('modifier')

            ->action(fn(Role $record) => $this->EditModel($record)),


                // ...
            ])

            ->bulkActions([
                // ...
            ]);
    }

    public function EditModel(Role $role){


        $this->roleModel=$role;

        $this->roleEdit=$role->name;

        $this->dispatch('open-modal', id: 'edit-role');

    }
    public function openModal(){

        $this->dispatch('open-modal', id: 'new-role');
    }


    public function addRole(){

        $this->validate(['role'=>'required']);

        Role::create(['name'=>$this->role]);

        $this->role='';

        $this->dispatch('close-modal', id: 'new-role');


    }
    public function EditRole()
    {

        $this->validate(['roleEdit' => 'required']);

        $this->roleModel->update(['name' => $this->roleEdit]);

        $this->roleEdit = '';

        $this->dispatch('close-modal', id: 'edit-role');
    }




    public function render()
    {
        return view('livewire.admin.role-liste');
    }
}
