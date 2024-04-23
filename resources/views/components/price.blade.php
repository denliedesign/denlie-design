<tr style="font-size: 16px; background: #FFF1E6; !important;">
    <td style="background: #FFF1E6; !important; border: none;">{{ $item }}</td>
    <td style="background: #FFF1E6; !important; border: none;">${{ $cost }}</td>
    <td style="background: #FFF1E6; !important; border: none;"><button class="btn btn-coral color-warm shadow rounded add-to-cart" data-name="addons[]" data-cost="{{ $cost }}" data-value="{{ str_replace(' ', '_', $item) }}">Add to Cart</button></td>
</tr>
