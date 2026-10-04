<nav class="denlie-global-nav container" aria-label="Main navigation">
    <a href="{{ route('home') }}" class="denlie-global-logo" aria-label="Denlie home" @if(request()->routeIs('home')) aria-current="page" @endif><img src="/images/denlie-logo-super-cropped.png" alt="Denlie" width="170" height="64"></a>
    <div class="denlie-global-links">
        <a href="{{ route('denlie.platform') }}" @if(request()->routeIs('denlie.platform')) aria-current="page" @endif>Denlie Platform <span class="denlie-preview-badge">Preview</span></a>
        <a href="{{ route('custom-websites') }}" @if(request()->routeIs('custom-websites')) aria-current="page" @endif>Custom Websites</a>
        <a href="{{ route('portfolio.denlie') }}" @if(request()->routeIs('portfolio.denlie')) aria-current="page" @endif>Our Work</a>
        <a href="{{ route('home') }}#studio-interest" class="denlie-contact-link">Contact</a>
    </div>
</nav>
@if(request()->routeIs('denlie.platform'))
    <nav class="denlie-section-nav" aria-label="On this platform page"><span>Explore the platform</span><a href="#explore">Overview</a><a href="#how-it-works">How it works</a><a href="#about-denlie">About</a><a href="#pricing">Get involved</a></nav>
@elseif(request()->routeIs('custom-websites'))
    <nav class="denlie-section-nav" aria-label="On this custom websites page"><span>Custom websites</span><a href="#what-you-get">What you get</a><a href="#testimonials">Website work</a><a href="#pricing">Pricing</a><a href="#about">About Dennis</a></nav>
@elseif(request()->routeIs('portfolio.denlie'))
    <nav class="denlie-section-nav" aria-label="On this project story"><span>The Denlie story</span><a href="#origins">The origins</a><a href="#mdu-levels">MDU Levels</a><a href="#denlie-platform">Denlie Platform</a></nav>
@endif
