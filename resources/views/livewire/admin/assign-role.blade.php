<div class="h-full min-h-screen py-12">
    {{-- The whole world belongs to you. --}}


    <div class="flex justify-end px-6">
       <div class="flex flex-row justify-between">
        <x-filament::button href="{{route('user.roles')}}" tag='a'>
            Ajouter un role
        </x-filament::button>



        <x-filament::button href="{{route('user.new')}}" tag="a">
            Nouveau utilisateur
        </x-filament::button>
       </div>

    </div>

    <div class="px-4 mt-8">
        {{ $this->table }}
    </div>

    <x-filament::modal sticky-header icon-color="success" id="assigner-role">


            <div>
                <x-slot name="heading">
                    Modifier utilisateur
                </x-slot>
                <div class="my-4">

                    <div class="">

                        <x-input label="name" wire:model='userData.name' placeholder="Role" />
                        <x-input label="email" wire:model='userData.email' placeholder="Role" />
                        <x-input label="mot de passe" wire:model='userData.password' placeholder="Role" />

                        <x-native-select label="Select Status" wire:model='userData.role_id'
                        placeholder="Select one status"
                        :options="$roles" option-label="name" option-value="id" />
                    </div>


                </div>
                <div class="flex justify-end ">
                    <x-button positive label="modifier" wire:click='ModifierUtilisateur()' />

                </div>
            </div>

            {{-- Modal content --}}
        </x-filament::modal>


</div>
