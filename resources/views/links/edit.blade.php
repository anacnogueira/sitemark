<x-layout.app-auth>
    <div class="w-full flex flex-col gap-11">
        <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span
                class="border-b-2 border-orange-500">Ed</span>itar link</h1>
        <x-form :route="route('links.update', $link->id)" post id="add-link-form" enctype="multipart/form-data">
            <div class="flex">
                <div class="w-3/4">
                    <div class="flex gap-8">
                        <x-input type="text" name="title" label="Título do link"
                            value="{{ old('title', $link->title) }}" />
                        <x-input type="text" name="streaming" label="Plataforma do streaming"
                            value="{{ old('streaming', $link->streaming) }}" />
                    </div>

                    <x-input type="url" name="url" label="URL" placeholder="Cole a URL do conteúdo"
                        value="{{ old('url', $link->url) }}" />
                </div>

                <div class="w-1/4 flex flex-col justify-center items-center gap-2">
                    <x-img alt="100 x 100" src="/storage/{{ $link->poster }}"
                        class="flex justify-center items-center bg-orange-500 text-content-inverse" />
                    <x-file name="poster" id="poster" />
                </div>
            </div>
            <div class="flex gap-4 justify-center">
                <x-button :href="route('dashboard')">Voltar</x-button>
                <x-button type="submit" class="bg-orange-500">Salvar</x-button>
            </div>

        </x-form>
    </div>
    <x-footer />
</x-layout.app-auth>
