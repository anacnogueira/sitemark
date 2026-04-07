<x-layout.app-auth>
    <header class="flex justify-between items-center">
        <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span
                class="border-b-2 border-orange-500">Li</span>nks</h1>
        <x-button :href="route('links.create')" class="flex">
            <x-icons.plus-circle class="w-5 h-5" />
            Adicionar link
        </x-button>
    </header>
    <div class="w-full flex flex-col items-center gap-4 h-[590px] overflow-y-auto">
        @foreach ($links as $link)
            <div class="w-full flex gap-3">
                @unless ($loop->last)
                    <x-form :route="route('links.down', $link)" patch>
                        <x-button color="ghost">
                            <x-icons.arrow-down class="w-6 h-6" />
                        </x-button>
                    </x-form>
                @else
                    <x-button disabled color="ghost">
                        <x-icons.arrow-down class="w-6 h-6" />
                    </x-button>
                @endunless

                @unless ($loop->first)
                    <x-form :route="route('links.up', $link)" patch>
                        <x-button color="ghost">
                            <x-icons.arrow class="w-6 h-6" />
                        </x-button>
                    </x-form>
                @else
                    <x-button disabled color="ghost">
                        <x-icons.arrow class="w-6 h-6" />
                    </x-button>
                @endunless
                <div class="w-full flex justify-around items-centerp-3 gap-3 bg-white/20 p-6 rounded-lg">
                    <img src="/storage/{{ $link->poster }}" alt="Poster"
                        class="w-20 h-20 max-w-20 bg-green rounded-lg">
                    <div class="flex flex-col pt-1 pr-3 gap-3">
                        <div class="flex items-center gap-3">
                            <h3 class="text-heading-small leading-heading-small font-bold text-content-primary">
                                {{ $link->title }}</h3>
                            <x-tags>{{ $link->streaming }}</x-tags>
                        </div>
                        <a href="{{ $link->url }}" target="_blank"
                            class="text-paragraph-medium leading-paragraph-medium w-[650px] text-content-secondary">{{ $link->url }}</a>
                    </div>
                    <div class="flex justify-center items-center gap-1">
                        <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza?')">
                            <x-button arrows>
                                <x-icons.trash class="w-6 h-6" />
                            </x-button>
                        </x-form>

                        <x-button href="{{ route('links.edit', $link) }}">
                            <x-icons.edit class="w-6 h-6" />
                        </x-button>

                    </div>
                </div>
            </div>
        @endforeach
        </ul>
        <x-footer />
</x-layout.app-auth>
