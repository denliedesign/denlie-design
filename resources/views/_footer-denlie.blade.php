<footer class="container py-4 border-top d-flex flex-wrap justify-content-between gap-3 font-sm">
    <span>© {{ date('Y') }} Denlie</span>
    <a class="deep-charcoal" href="{{ request()->routeIs('custom-websites') ? '/' : route('custom-websites') }}">{{ request()->routeIs('custom-websites') ? 'Explore Denlie' : 'Looking for a custom website?' }}</a>
    <a class="deep-charcoal" href="mailto:customdenlie@gmail.com">customdenlie@gmail.com</a>
</footer>
