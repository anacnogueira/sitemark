<x-layout.app-auth>
    <header class="flex justify-between items-center">
        <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span
                class="border-b-2 border-orange-500">Li</span>nks</h1>
        <x-button :href="route('links.create')" class="flex">
            <x-icons.plus-circle class="w-5 h-5" />
            Adicionar link
        </x-button>

    </header>
</x-layout.app-auth>
