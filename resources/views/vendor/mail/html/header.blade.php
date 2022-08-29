<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<p class="text-warning">JobHunt</p>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
