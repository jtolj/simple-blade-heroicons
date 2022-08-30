@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-arrow-path" /></svg>
    @endif
  @once('heroicon-ms-arrow-path')
    @push('simple-blade-icons')
      <g id="heroicon-ms-arrow-path"><path fill-rule="evenodd" d="M10 4.5c-1.215 0-2.417.055-3.604.162a.68.68 0 00-.615.597 39.78 39.78 0 00-.25 3.15l1.689-1.69A.75.75 0 118.28 7.78l-2.999 3a.75.75 0 01-1.06 0l-3.001-3a.75.75 0 011.06-1.06l1.748 1.747c.042-1.141.13-2.27.264-3.386a2.18 2.18 0 011.97-1.913 41.51 41.51 0 017.477 0 2.18 2.18 0 011.969 1.913c.064.534.117 1.07.16 1.61a.75.75 0 01-1.495.12 39.518 39.518 0 00-.154-1.552.68.68 0 00-.615-.597A40.013 40.013 0 0010 4.5zm4.719 4.72a.75.75 0 011.06 0l3.001 3a.75.75 0 11-1.06 1.06l-1.748-1.747a41.309 41.309 0 01-.264 3.386 2.18 2.18 0 01-1.97 1.913 41.534 41.534 0 01-7.477 0 2.18 2.18 0 01-1.969-1.913 41.176 41.176 0 01-.16-1.61.75.75 0 011.495-.12c.041.52.093 1.037.154 1.552a.68.68 0 00.615.597 40.012 40.012 0 007.208 0 .68.68 0 00.615-.597c.124-1.038.208-2.088.25-3.15l-1.689 1.69a.75.75 0 01-1.06-1.061l2.999-3z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path fill-rule="evenodd" d="M10 4.5c-1.215 0-2.417.055-3.604.162a.68.68 0 00-.615.597 39.78 39.78 0 00-.25 3.15l1.689-1.69A.75.75 0 118.28 7.78l-2.999 3a.75.75 0 01-1.06 0l-3.001-3a.75.75 0 011.06-1.06l1.748 1.747c.042-1.141.13-2.27.264-3.386a2.18 2.18 0 011.97-1.913 41.51 41.51 0 017.477 0 2.18 2.18 0 011.969 1.913c.064.534.117 1.07.16 1.61a.75.75 0 01-1.495.12 39.518 39.518 0 00-.154-1.552.68.68 0 00-.615-.597A40.013 40.013 0 0010 4.5zm4.719 4.72a.75.75 0 011.06 0l3.001 3a.75.75 0 11-1.06 1.06l-1.748-1.747a41.309 41.309 0 01-.264 3.386 2.18 2.18 0 01-1.97 1.913 41.534 41.534 0 01-7.477 0 2.18 2.18 0 01-1.969-1.913 41.176 41.176 0 01-.16-1.61.75.75 0 011.495-.12c.041.52.093 1.037.154 1.552a.68.68 0 00.615.597 40.012 40.012 0 007.208 0 .68.68 0 00.615-.597c.124-1.038.208-2.088.25-3.15l-1.689 1.69a.75.75 0 01-1.06-1.061l2.999-3z" clip-rule="evenodd"></path>
</svg>
  @endif
  