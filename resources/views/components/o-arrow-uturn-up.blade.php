@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])

  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'fill' => 'none', 'viewBox' => '0 0 24 24', 'stroke-width' => '1.5', 'stroke' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}><use href="#heroicon-o-arrow-uturn-up" /></svg>
    @endif
  @once('heroicon-o-arrow-uturn-up')
    @push('simple-blade-icons')
      <g id="heroicon-o-arrow-uturn-up"><path stroke-linecap="round" stroke-linejoin="round" d="m9 9 6-6m0 0 6 6m-6-6v12a6 6 0 0 1-12 0v-3"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'fill' => 'none', 'viewBox' => '0 0 24 24', 'stroke-width' => '1.5', 'stroke' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}>
  <path stroke-linecap="round" stroke-linejoin="round" d="m9 9 6-6m0 0 6 6m-6-6v12a6 6 0 0 1-12 0v-3"></path>
</svg>
  @endif
  