@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])

  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}><use href="#heroicon-mis-flag" /></svg>
    @endif
  @once('heroicon-mis-flag')
    @push('simple-blade-icons')
      <g id="heroicon-mis-flag"><path d="M2.75 2a.75.75 0 0 0-.75.75v10.5a.75.75 0 0 0 1.5 0v-2.624l.33-.083A6.044 6.044 0 0 1 8 11c1.29.645 2.77.807 4.17.457l1.48-.37a.462.462 0 0 0 .35-.448V3.56a.438.438 0 0 0-.544-.425l-1.287.322C10.77 3.808 9.291 3.646 8 3a6.045 6.045 0 0 0-4.17-.457l-.34.085A.75.75 0 0 0 2.75 2Z"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 16 16', 'fill' => 'currentColor', 'aria-hidden' => 'true', 'data-slot' => 'icon']) }}>
  <path d="M2.75 2a.75.75 0 0 0-.75.75v10.5a.75.75 0 0 0 1.5 0v-2.624l.33-.083A6.044 6.044 0 0 1 8 11c1.29.645 2.77.807 4.17.457l1.48-.37a.462.462 0 0 0 .35-.448V3.56a.438.438 0 0 0-.544-.425l-1.287.322C10.77 3.808 9.291 3.646 8 3a6.045 6.045 0 0 0-4.17-.457l-.34.085A.75.75 0 0 0 2.75 2Z"></path>
</svg>
  @endif
  