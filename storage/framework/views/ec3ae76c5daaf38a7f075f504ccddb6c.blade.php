<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<x-fluentui-people-checkmark-24-o  {{ $attributes }}>

{{ $slot ?? "" }}
</x-fluentui-people-checkmark-24-o>