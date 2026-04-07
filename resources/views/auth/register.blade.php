<x-layout.app-guest>
    <x-form :route="route('register')" post id="register-form">
        <h1 class="text-heading-small leading-heading-small font-bold text-content-primary pb-5"><span
                class="border-b-2 border-orange-500">Cr</span>iar conta</h1>
        <div class="flex gap-2">
            <x-input type="text" name="name" label="Nome" value="{{ old('name') }}" />
            <x-input type="text" name="lastname" label="Sobrenome" value="{{ old('lastname') }}" />
        </div>

        <x-input type="email" name="email" label="E-mail" value="{{ old('email') }}" />
        <x-input type="password" name="password" label="Senha" value="{{ old('password') }}" />

        <x-button type="submit"
            class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">Criar
            Conta</x-button>
    </x-form>
</x-layout.app-guest>
