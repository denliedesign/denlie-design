<nav class="mt-nav d-flex justify-content-around align-items-center font-xs mt-4" aria-label="Main navigation">
    <a href="/" class="mt-nav-logo" aria-label="Denlie home"><img src="/images/denlie-logo-super-cropped.png" alt="Denlie" class="img-fluid" style="width: auto; height: 64px;"></a>
    @if(request()->routeIs('custom-websites'))
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="/">Explore Denlie</a></div>
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="#testimonials">Our work</a></div>
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="#pricing">Pricing</a></div>
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="#about">About</a></div>
    @elseif(request()->routeIs('denlie.preview'))
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="#explore">Explore Denlie</a></div>
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="#how-it-works">How it works</a></div>
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="#pricing">Pricing</a></div>
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="{{ route('custom-websites') }}">Custom websites</a></div>
    @else
        <div class="text-uppercase mt-nav-link"><a class="deep-charcoal" href="{{ route('custom-websites') }}">Custom websites</a></div>
    @endif
    <a class="text-uppercase soft-gold-bg px-4 py-2 shadow-sm mt-nav-cta deep-charcoal text-decoration-none" href="#studio-interest">{{ request()->routeIs('custom-websites') ? 'Plan your website' : 'Contact Dennis' }}</a>
</nav>
