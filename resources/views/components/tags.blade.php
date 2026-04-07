@if ($slot == 'prime' || $slot == 'disney+')
    <span
        class="text-label-small leading-label-small font-semibold px-2 py-1 bg-blue-400 text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif


@if ($slot == 'netflix' || $slot == 'youtube')
    <span
        class="text-label-small leading-label-small font-semibold px-2 py-1 bg-red-400 text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif

@if ($slot == 'paramount+' || $slot == 'max')
    <span
        class="text-label-small leading-label-small font-semibold px-2 py-1 bg-purple-400 text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif

@if ($slot == 'appletv' || $slot == 'globoplay')
    <span
        class="text-label-small leading-label-small font-semibold px-2 py-1 bg-green-400 text-content-inverse rounded-2xl">{{ $slot }}</span>
@endif
