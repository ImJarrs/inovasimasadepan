<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-mdi-smart-card-reader-outline  {{ $attributes }}>

{{ $slot ?? "" }}
</x-mdi-smart-card-reader-outline>