 <nav class="mx-auto flex gap-2 justify-center items-center mt-2 w-40 h-14">
     <x-a primary :href="route('dashboard')"><x-icons.list class="w-8 h-8" /></x-a>
     <x-a secondary :href="route('profile')"><x-icons.user class="w-8 h-8" /></x-a>
     <x-a secondary :href="route('logout')"><x-icons.exit class="w-8 h-8" /></x-a>
 </nav>
