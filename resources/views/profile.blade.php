<x-layout.app-auth>
    <div class="w-full flex flex-col gap-11">
        <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span
                class="border-b-2 border-orange-500">Ed</span>itar link</h1>
        <x-form :route="route('profile.update')" put id="update-profile-form" enctype="multipart/form-data">
            <div class="flex">
                <div class="w-3/4">
                    <div class="flex gap-8">
                        <x-input type="text" name="name" label="Nome" value="{{ old('name', $user->name) }}" />
                        <x-input type="text" name="lastname" label="Sobrenome"
                            value="{{ old('lastname', $user->lastname) }}" />
                    </div>

                    <x-input type="email" name="email" label="E-mail" value="{{ old('email', $user->email) }}" />
                    <x-textarea name="description"
                        label="Bio">{{ old('description', $user->description) }}</x-textarea>
                </div>

                <div class="w-1/4 flex flex-col justify-center items-center gap-2">
                    <x-img alt="100 x 100" src="/storage/{{ $user->photo }}"
                        class="flex justify-center items-center bg-orange-500 text-content-inverse" />
                    <x-file name="photo" id="photo" />
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
