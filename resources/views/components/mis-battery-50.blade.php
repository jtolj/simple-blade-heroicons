@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])

  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}><use href="#heroicon-mis-battery-50" /></svg>
    @endif
  @once('heroicon-mis-battery-50')
    @push('simple-blade-icons')
      <g id="heroicon-mis-battery-50"><path fill-rule="evenodd" d="M1 6.25A2.25 2.25 0 0 1 3.25 4h8.5A2.25 2.25 0 0 1 14 6.25v.085a1.5 1.5 0 0 1 1 1.415v.5a1.5 1.5 0 0 1-1 1.415v.085A2.25 2.25 0 0 1 11.75 12h-8.5A2.25 2.25 0 0 1 1 9.75v-3.5Zm2.25-.75a.75.75 0 0 0-.75.75v3.5c0 .414.336.75.75.75h8.5a.75.75 0 0 0 .75-.75v-3.5a.75.75 0 0 0-.75-.75h-8.5Z" clip-rule="evenodd"></path>
  <path d="M4.75 7a.75.75 0 0 0-.75.75v.5c0 .414.336.75.75.75h2a.75.75 0 0 0 .75-.75v-.5A.75.75 0 0 0 6.75 7h-2Z"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}>
  <path fill-rule="evenodd" d="M1 6.25A2.25 2.25 0 0 1 3.25 4h8.5A2.25 2.25 0 0 1 14 6.25v.085a1.5 1.5 0 0 1 1 1.415v.5a1.5 1.5 0 0 1-1 1.415v.085A2.25 2.25 0 0 1 11.75 12h-8.5A2.25 2.25 0 0 1 1 9.75v-3.5Zm2.25-.75a.75.75 0 0 0-.75.75v3.5c0 .414.336.75.75.75h8.5a.75.75 0 0 0 .75-.75v-3.5a.75.75 0 0 0-.75-.75h-8.5Z" clip-rule="evenodd"></path>
  <path d="M4.75 7a.75.75 0 0 0-.75.75v.5c0 .414.336.75.75.75h2a.75.75 0 0 0 .75-.75v-.5A.75.75 0 0 0 6.75 7h-2Z"></path>
</svg>
  @endif
  