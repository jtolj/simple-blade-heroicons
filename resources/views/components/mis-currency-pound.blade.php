@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])

  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}><use href="#heroicon-mis-currency-pound" /></svg>
    @endif
  @once('heroicon-mis-currency-pound')
    @push('simple-blade-icons')
      <g id="heroicon-mis-currency-pound"><path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0ZM7.94 4.94c-.294.293-.44.675-.44 1.06v1.25h1.25a.75.75 0 1 1 0 1.5H7.5v1c0 .263-.045.516-.128.75h3.878a.75.75 0 0 1 0 1.5h-6.5a.75.75 0 0 1 0-1.5h.5A.75.75 0 0 0 6 9.75v-1H4.75a.75.75 0 0 1 0-1.5H6V6a3 3 0 0 1 5.121-2.121.75.75 0 1 1-1.06 1.06 1.5 1.5 0 0 0-2.121 0Z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}>
  <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0ZM7.94 4.94c-.294.293-.44.675-.44 1.06v1.25h1.25a.75.75 0 1 1 0 1.5H7.5v1c0 .263-.045.516-.128.75h3.878a.75.75 0 0 1 0 1.5h-6.5a.75.75 0 0 1 0-1.5h.5A.75.75 0 0 0 6 9.75v-1H4.75a.75.75 0 0 1 0-1.5H6V6a3 3 0 0 1 5.121-2.121.75.75 0 1 1-1.06 1.06 1.5 1.5 0 0 0-2.121 0Z" clip-rule="evenodd"></path>
</svg>
  @endif
  