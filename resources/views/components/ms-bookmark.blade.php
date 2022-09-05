@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-bookmark" /></svg>
    @endif
  @once('heroicon-ms-bookmark')
    @push('simple-blade-icons')
      <g id="heroicon-ms-bookmark"><path fill-rule="evenodd" d="M10 1c-1.716 0-3.408.106-5.07.31C3.806 1.45 3 2.414 3 3.517V18.25a.75.75 0 001.075.676L10 16.082l5.925 2.844A.75.75 0 0017 18.25V3.517c0-1.103-.806-2.068-1.93-2.207A41.403 41.403 0 0010 1z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path fill-rule="evenodd" d="M10 1c-1.716 0-3.408.106-5.07.31C3.806 1.45 3 2.414 3 3.517V18.25a.75.75 0 001.075.676L10 16.082l5.925 2.844A.75.75 0 0017 18.25V3.517c0-1.103-.806-2.068-1.93-2.207A41.403 41.403 0 0010 1z" clip-rule="evenodd"></path>
</svg>
  @endif
  