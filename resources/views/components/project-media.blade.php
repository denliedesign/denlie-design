@props(['image', 'alt', 'caption', 'device' => 'browser', 'video' => null, 'label' => 'Product preview'])
@php($size = getimagesize(public_path(ltrim($image, '/'))))
<figure {{ $attributes->class(['project-media', 'project-media--' . $device]) }}>
    <div class="project-media-stage">
        <div class="project-device">
            <div class="project-device-bar" aria-hidden="true"><span></span><span></span><span></span><small>{{ $label }}</small></div>
            <div class="project-device-screen">
                @if($video)
                    <video controls muted playsinline preload="none" poster="{{ $image }}" aria-label="{{ $alt }}. Silent walkthrough.">
                        <source src="{{ $video }}?v={{ filemtime(public_path(ltrim($video, '/'))) }}" type="video/mp4">
                        <a href="{{ $video }}">Watch the walkthrough</a>
                    </video>
                @else
                    <a href="{{ $image }}" target="_blank" rel="noopener" aria-label="{{ $alt }} — view full size"><img src="{{ $image }}" alt="{{ $alt }}" width="{{ $size[0] }}" height="{{ $size[1] }}" loading="lazy" decoding="async"></a>
                @endif
            </div>
        </div>
        @if($device === 'laptop')<div class="project-laptop-base" aria-hidden="true"></div>@endif
    </div>
    <figcaption>{{ $caption }} @if($video)<span class="project-media-hint">Press play for a short, silent walkthrough.</span>@else<a href="{{ $image }}" target="_blank" rel="noopener">View full size ↗</a>@endif</figcaption>
</figure>
