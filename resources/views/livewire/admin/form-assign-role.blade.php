<div class="px-6 py-12">

    <div class="mb-8">
        <h1 class="font-sans text-2xl">Nouvel utilisateur</h1>
    </div>

    <x-filament::breadcrumbs :breadcrumbs="[
        '/admin' => 'admin',
        '/adminstration/utilisateurs' => 'Utilisateur',


    ]" />



    <form>
    <div class="max-w-3xl mx-auto">
        {{$this->form}}

        <div class="flex justify-end mt-4">

        <x-filament::button wire:click='addRole()' size="xl">
            Enrigstrer
        </x-filament::button>
        </div>

    </div>

    </form>


    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
