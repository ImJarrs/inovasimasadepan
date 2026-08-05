<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-gmdi-settings-suggest-o  {{ $attributes }}>

{{ $slot ?? "" }}
</x-gmdi-settings-suggest-o>