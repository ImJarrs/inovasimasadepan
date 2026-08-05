<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-fluentui-chevron-double-up-20  {{ $attributes }}>

{{ $slot ?? "" }}
</x-fluentui-chevron-double-up-20>