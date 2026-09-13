@props(['file', 'alt', 'caption'])
@php
    $dimensions = getimagesize(public_path('images/denlie/' . $file));
@endphp
<figure class="denlie-screen mb-0">
    <a href="{{ asset('images/denlie/' . $file) }}" target="_blank" rel="noopener" aria-label="{{ $alt }} — open full-size screenshot">
        <img src="{{ asset('images/denlie/' . $file) }}" alt="{{ $alt }}" width="{{ $dimensions[0] }}" height="{{ $dimensions[1] }}" loading="lazy" decoding="async" class="img-fluid">
    </a>
    <figcaption class="font-sm mt-3">{{ $caption }} <a href="{{ asset('images/denlie/' . $file) }}" target="_blank" rel="noopener" class="deep-charcoal">View full size ↗</a></figcaption>
    <p class="font-xs text-muted mt-2 mb-0">Demo preview of Denlie in development. Design, features, and availability may change before release.</p>
</figure>
