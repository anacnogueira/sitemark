@props(['href'])
<a href="{{ $href }}" {{ $attributes }}
    class="text-white font-bold link link-primary link-hover">{{ $slot }}</a>
