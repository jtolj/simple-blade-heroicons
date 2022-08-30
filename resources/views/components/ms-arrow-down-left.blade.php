@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-arrow-down-left" /></svg>
    @endif
  @once('heroicon-ms-arrow-down-left')
    @push('simple-blade-icons')
      <g id="heroicon-ms-arrow-down-left"><path fill-rule="evenodd" d="M14.78 5.22a.75.75 0 00-1.06 0L6.5 12.44V6.75a.75.75 0 00-1.5 0v7.5c0 .414.336.75.75.75h7.5a.75.75 0 000-1.5H7.56l7.22-7.22a.75.75 0 000-1.06z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path fill-rule="evenodd" d="M14.78 5.22a.75.75 0 00-1.06 0L6.5 12.44V6.75a.75.75 0 00-1.5 0v7.5c0 .414.336.75.75.75h7.5a.75.75 0 000-1.5H7.56l7.22-7.22a.75.75 0 000-1.06z" clip-rule="evenodd"></path>
</svg>
  @endif
  