<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('icons/solid/map-location-dot.svg') }}" class="logo" alt="Laravel Logo">
<h1> Aluga-SC<h1>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
