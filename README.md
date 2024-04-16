# Simple Blade Heroicons 2.0

[Heroicons](https://heroicons.com/) are a set of icons developed by Steve Schoger and Adam Wathan.

This package is a lightweight alternative to [blade-ui-kit/blade-heroicons](https://github.com/blade-ui-kit/blade-heroicons) in that it simply wraps each SVG in an anonymous Blade component.

This version of the package uses Heroicons 2.

## Requirements

- PHP 7.3 or higher
- Laravel 7.14 or higher

## Installation

```bash
composer require jtolj/simple-blade-heroicons
```

Optionally publish the configuration file:
```bash
php artisan vendor:publish --tag=simple-blade-heroicons-config
```


## Usage

Icons can be included in Blade templates by making use of the anonymous components that have been generated.

You can see a list of available icons at [https://heroicons.com/](https://heroicons.com/).

For the 24x24 outline version, prefix the name with `o-`.

For the 24x24 solid fill version, prefix the name with `s-`.

For the 20x20 mini-solid version, prefix the name with `ms-`.

For the 20x20 micro-solid version, prefix the name with `mis-`.

```blade
<x-heroicon::o-exclamation-circle />
<x-heroicon::s-exclamation-circle />
<x-heroicon::ms-exclamation-circle />
<x-heroicon::mis-exclamation-circle />
```

### Attributes

All attributes are passed through to the SVG tag.

For example:

```blade
<x-heroicon::o-arrow-up aria-description="An arrow pointing up" class="text-gray-500">
```

Would render in the browser as:

```
<svg aria-description="An arrow pointing up" class="text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
</svg>
```

### Dynamic Component

A dynamic icon component is also available. The icon name can be be passed through the "icon" property.

For example:

```blade
@php
  $iconName = 'o-arrow-up';
@endphp
<x-heroicon::icon icon="{{ $iconName }}" />
```

### `<use href="#id">` support

This version of the package supports using references to the icon instead of outputting the full content of the SVG each time a component is used in Blade.

This results in a significantly lighter DOM when the same icon is used repeatedly on a page.

To use this feature, first add the following to your `layout.blade.php` **just before your closing `</body>` tag**:
```
<body>
    ...contents...
    <x-heroicon::defs />
</body>
```

You may then either update the 'use_references' configuration option to true to default to references, or set the `push-ref` property to `true` when rendering an icon.

```
<x-heroicon::o-arrow-up :push-ref="true" />
```

### JavaScript Frameworks

To use the icons in this package with JavaScript frameworks, set up the `<x-heroicon::defs>` component as described above.

Next, pass a list of icons into the provided `<x-heroicon::iconset>` component. This must appear *before* `<x-heroicon::defs>` in your template.

The icons you list will become available to reference inside your JavaScript components.

A simple Vue.js example:

```
<html>
<head>
...
</head>
<body>
    <x-heroicon::iconset :icons="['o-arrow-up', 'o-arrow-down', 'o-arrow-left', 'o-arrow-right']" />
    <div id="vue-app"></div>
    <x-heroicon::defs />
</body>
```


```
// Heroicon.vue
<script>
export default {
  props: {
    icon: String
  },
  computed: {
    fill() {
      return this.icon.startsWith('o') ? 'none' : 'currentColor';
    },
    stroke() {
      return this.icon.startsWith('o') ? 'currentColor' : null;
    },
    strokeWidth() {
      return this.icon.startsWith('o') ? '1.5' : null;
    },
    reference() {
      return '#heroicon-' + this.icon;
    },
    viewBox() {
      if (this.icon.startsWith('mi')) {
        return '0 0 16 16';
      } elseif (this.icon.startsWith('m')) {
        return '0 0 20 20';
      } else {
        return '0 0 24 24';
      }
    },
  }
}
</script>
<template>
   <svg
      xmlns="http://www.w3.org/2000/svg"
      :viewBox="viewBox"
      :fill="fill"
      :stroke="stroke"
      :stroke-width="strokeWidth"
      >
      <use :href="reference" />
    </svg>
</template>
```

```
// MyComponent.vue
import Heroicon from './Heroicon.vue';
<script>
export default {
  components: {
    Heroicon
  }
}
</script>

<template>
  <heroicon :icon="o-arrow-up" class="h-5 w-5 text-gray-500" />
  <heroicon :icon="o-arrow-down" class="h-5 w-5 text-gray-500" />
  <heroicon :icon="o-arrow-left" class="h-5 w-5 text-gray-500" />
  <heroicon :icon="o-arrow-right" class="h-5 w-5 text-gray-500" />
</template>

```