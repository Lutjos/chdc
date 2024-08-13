<?php

namespace App\Livewire\Admin;

use App\Models\Role;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Section;
use WireUi\Traits\WireUiActions;
use App\Models\User;

class FormAssignRole extends Component implements HasForms
{
    use InteractsWithForms;
    use WireUiActions;

    public ? array $data=[];
    public function mount(){
        $this->form->fill();

    }
    public function form(Form $form):Form
    {
        return $form->schema([

            Section::make()
            ->id('main-section')
            ->schema([
                TextInput::make('name')
                ->label('nom complet')
                ->required(),
                TextInput::make('email')
                    ->unique(table: User::class)
                    ->label('Email')
                    ->required(),
                TextInput::make('password')
                ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                    ->label('mot de passe')
                    ->required(),
                Select::make('role_id')
                ->required()
                    ->options(Role::all()->pluck('name','id'))
                    ->native(false)
                ])


           ])->statePath('data');
    }

    public function addRole()
    {
        $this->form->validate();
        $data = $this->form->getState();

        try{

            User::create($data);



            $this->form->fill();

            $this->successNotification();
        }catch(\Exception $e){

            error_log($e);
            $this->errorNotification();

        }



    }

    public function successNotification(): void
    {
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Nouvelle utilisateur ajouter!',

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

    public function render()
    {
        return view('livewire.admin.form-assign-role');
    }
}
