 @props(['name'])
 <label for="{{ $name }}"
     class="flex justify-center items-center gap-2 text-label-small leading-label-small text-content-primary cursor-pointer">
     <x-icons.arrow-up class="w-4 h-4" />
     Adicionar imagem
     <input type="file" name="{{ $name }}" {{ $attributes }} class="hidden" />
 </label>
