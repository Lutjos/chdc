<div class="h-full min-h-screen px-12 py-12">
    {{-- The whole world belongs to you. --}}


    <x-filament::breadcrumbs :breadcrumbs="[
                    '/admin' => 'admin',
                    '/adminstration/utilisateurs' => 'Utilisateur',


                ]" />

    <div class="flex justify-end px-6">
        <div class="flex flex-row justify-between">




            <x-filament::button wire:click='openModal()'>
                Nouveau role
            </x-filament::button>
        </div>

    </div>


    <div class="px-4 mt-8">
        {{ $this->table }}
    </div>

    <x-filament::modal sticky-header

    icon-color="success" id="new-role">

    <div>
        <x-slot name="heading">
            Nouveau Role
        </x-slot>
        <div class="my-4">

            <div class="">

                <x-input label="Role" wire:model='role' placeholder="Role" />
            </div>


        </div>
        <div class="flex justify-end ">
            <x-button positive label="Ajouter" wire:click='addRole()' />

        </div>
    </div>

        {{-- Modal content --}}
    </x-filament::modal>
    <x-filament::modal sticky-header icon-color="success" id="edit-role">


        <div>
            <x-slot name="heading">
                Modifier Role
            </x-slot>
            <div class="my-4">

                <div class="">

                    <x-input label="Role" wire:model='roleEdit' placeholder="Role" />
                </div>


            </div>
            <div class="flex justify-end ">
                <x-button positive label="modifier" wire:click='EditRole()' />

            </div>
        </div>

        {{-- Modal content --}}
    </x-filament::modal>


</div>
