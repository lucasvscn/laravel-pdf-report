@props([
    'size' => 12,
])
<td {{ $attributes->merge(['class' => 'col-'.$size]) }}>
    <span class="cell-content">{{ $slot }}</span>
</td>
