@props([
    'href' => '#',
    'variant' => 'primary',
    'icon' => 'true'
])

@php
    $styles = [
        'primary' => 'inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-3 text-sm font-semibold text-white shadow-[0_15px_40px_rgba(139,92,246,0.35)] transition hover:-translate-y-0.5 hover:shadow-[0_20px_45px_rgba(139,92,246,0.45)]',

        'secondary' => 'inline-flex items-center justify-center rounded-full border border-purple-500/30 bg-slate-900/80 px-6 py-3 text-sm font-medium text-slate-100 transition hover:border-purple-400 hover:text-white hover:bg-slate-900',

        'danger' => 'inline-flex items-center justify-center rounded-full bg-red-500 px-6 py-3 text-sm font-semibold text-white hover:bg-red-600 transition',
    ];
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => $styles[$variant] ?? $styles['primary']
    ]) }}
>
    {{ $slot }}
    
    @if ($icon)

    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
    </svg>
    
    @endif
</a>