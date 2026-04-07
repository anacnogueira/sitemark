<x-layout.app-guest>
    <x-form :route="route('register')" post id="register-form">
        <h1 class="text-heading-small leading-heading-small font-bold text-content-primary pb-5"><span
                class="border-b-2 border-orange-500">Ac</span>essar conta</h1>


        <x-input type="email" name="email" label="E-mail" value="{{ old('email') }}" />
        <x-input type="password" name="password" label="Senha" value="{{ old('password') }}" />

        <x-button type="submit"
            class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-full transition duration-300">Acessar
            Conta</x-button>
    </x-form>
    <div class="flex text-paragraph-medium leading-paragraph-medium text-content-secondary gap-2">
        Não tem cadastro? <x-a default :href="route('register')">Criar conta</x-a>
    </div>
</x-layout.app-guest>
