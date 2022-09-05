@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-bookmark-slash" /></svg>
    @endif
  @once('heroicon-ms-bookmark-slash')
    @push('simple-blade-icons')
      <g id="heroicon-ms-bookmark-slash"><path d="M3 18.25V6.182l12.577 12.577L10 16.082l-5.925 2.844A.75.75 0 013 18.25zM17 3.517v10.301L4.568 1.386c.116-.035.237-.06.362-.076a41.401 41.401 0 0110.14 0C16.194 1.45 17 2.414 17 3.517zM3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06L3.28 2.22z"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path d="M3 18.25V6.182l12.577 12.577L10 16.082l-5.925 2.844A.75.75 0 013 18.25zM17 3.517v10.301L4.568 1.386c.116-.035.237-.06.362-.076a41.401 41.401 0 0110.14 0C16.194 1.45 17 2.414 17 3.517zM3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06L3.28 2.22z"></path>
</svg>
  @endif
  