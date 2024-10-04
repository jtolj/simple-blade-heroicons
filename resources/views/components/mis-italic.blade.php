@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])

  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}><use href="#heroicon-mis-italic" /></svg>
    @endif
  @once('heroicon-mis-italic')
    @push('simple-blade-icons')
      <g id="heroicon-mis-italic"><path fill-rule="evenodd" d="M6.25 2.75A.75.75 0 0 1 7 2h6a.75.75 0 0 1 0 1.5h-2.483l-3.429 9H9A.75.75 0 0 1 9 14H3a.75.75 0 0 1 0-1.5h2.483l3.429-9H7a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}>
  <path fill-rule="evenodd" d="M6.25 2.75A.75.75 0 0 1 7 2h6a.75.75 0 0 1 0 1.5h-2.483l-3.429 9H9A.75.75 0 0 1 9 14H3a.75.75 0 0 1 0-1.5h2.483l3.429-9H7a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"></path>
</svg>
  @endif
  