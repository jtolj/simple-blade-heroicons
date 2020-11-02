# Simple Blade Heroicons

[Heroicons](https://heroicons.com/) are a set of icons developed by Steve Schoger and Adam Wathan.

This package is a lightweight alternative to [blade-ui-kit/blade-heroicons](https://github.com/blade-ui-kit/blade-heroicons) in that it simply wraps each SVG in an anonymous Blade component.

## Requirements

- PHP 7.3 or higher
- Laravel 7.14 or higher

## Installation

```bash
composer require jtolj/simple-blade-heroicons
```

## Usage

Icons can be included in blade templates by making use of the anonymous components that have been generated.

You can see a list of available icons at [https://heroicons.com/](https://heroicons.com/).

For the 24x24 2px stroke version, prefix the name with `o-`.

For the 20x20 solid fill version, prefix the name with `s-`.

```blade
<x-heroicon::o-exclamation>
<x-heroicon::s-exclamation>
```

All attributes are passed down to the SVG tag.

For example:

```blade
<x-heroicon::o-arrow-up aria-description="An arrow pointing up" class="text-gray-500">
```

Would render in the browser as:

```
<svg class="text-gray-500" aria-description="An arrow pointing up" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
</svg>
```

For convenience a generic icon component is also available. The icon name can be be dynamically passed through the "name" property.

For example:

```blade
@php
  $iconName = 'o-arrow-up';
@php
<x-heroicon::icon name="{{ $iconName }} ">
```
