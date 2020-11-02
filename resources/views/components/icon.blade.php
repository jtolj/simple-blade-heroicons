@props(['icon'])

<x-dynamic-component :component="'heroicon::' . $icon" {{ $attributes }} />
