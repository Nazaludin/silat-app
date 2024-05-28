@props(['status_error'])

@if ($status_error)
<div {{ $attributes->merge(['class' => 'font-medium text-sm text-red-600']) }}>
    {{ $status_error }}
</div>
@endif