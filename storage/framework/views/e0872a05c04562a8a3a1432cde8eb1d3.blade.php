<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-gmdi-photo-camera-front-o  {{ $attributes }}>

{{ $slot ?? "" }}
</x-gmdi-photo-camera-front-o>