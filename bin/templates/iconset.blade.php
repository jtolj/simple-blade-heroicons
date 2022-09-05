@props(['icons' => []])

@foreach ($icons as $icon)
    <x-heroicon::icon icon="{{ $icon }}" :push-ref="true" :show-icon="false" />
@endforeach