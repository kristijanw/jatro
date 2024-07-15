@props(['text', 'type', 'link'])

<?php if(!isset($type)): ?>
<button type="button" {{ $attributes->merge(['class' => 'uppercase text-black font-bold px-5 py-3 border
    border-[#2A2A2A] rounded']) }}
    >
    {{ $text }}
    {{ $slot }}
</button>
<?php else: ?>
<a href="{{ $link ?? '#' }}" {{ $attributes->merge(['class' => 'inline-block uppercase text-black font-bold px-5 py-3
    border border-[#2A2A2A] rounded']) }}
    >
    {{ $text }}
    {{ $slot }}
</a>
<?php endif ?>