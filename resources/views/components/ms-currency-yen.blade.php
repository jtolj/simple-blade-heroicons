@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-currency-yen" /></svg>
    @endif
  @once('heroicon-ms-currency-yen')
    @push('simple-blade-icons')
      <g id="heroicon-ms-currency-yen"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7.346 5.294a.75.75 0 00-1.192.912L9.056 10H6.75a.75.75 0 000 1.5h2.5v1h-2.5a.75.75 0 000 1.5h2.5v1.25a.75.75 0 001.5 0V14h2.5a.75.75 0 100-1.5h-2.5v-1h2.5a.75.75 0 100-1.5h-2.306l2.902-3.794a.75.75 0 10-1.192-.912L10 8.765l-2.654-3.47z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7.346 5.294a.75.75 0 00-1.192.912L9.056 10H6.75a.75.75 0 000 1.5h2.5v1h-2.5a.75.75 0 000 1.5h2.5v1.25a.75.75 0 001.5 0V14h2.5a.75.75 0 100-1.5h-2.5v-1h2.5a.75.75 0 100-1.5h-2.306l2.902-3.794a.75.75 0 10-1.192-.912L10 8.765l-2.654-3.47z" clip-rule="evenodd"></path>
</svg>
  @endif
  