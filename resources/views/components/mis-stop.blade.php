@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])

  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}><use href="#heroicon-mis-stop" /></svg>
    @endif
  @once('heroicon-mis-stop')
    @push('simple-blade-icons')
      <g id="heroicon-mis-stop"><rect width="10" height="10" x="3" y="3" rx="1.5"></rect></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}>
  <rect width="10" height="10" x="3" y="3" rx="1.5"></rect>
</svg>
  @endif
  