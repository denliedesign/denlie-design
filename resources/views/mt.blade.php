@extends('layouts.app-mt')
@section('content')

    <div class="container py-5 mt-hero" style="position: relative;">
        <div><img src="/images/fluid-frames-landscape-indoors-2.jpg" class="img-fluid gsap-move" alt=""></div>
        <div class="mt-hero-copy" style="position: absolute; top: 46%; left: 44%; transform: translate(-50%, -50%);">
            <h1 class="font-xl soft-white">Denlie</h1>
            <p class="font-lg soft-white">a dance website for every season</p>
        </div>
    </div>

    <div class="container py-5 d-flex justify-content-end section-reveal mt-goal" style="position: relative;">
        <div class="blush-pink-bg mt-goal-panel" style="width: 900px; height: 450px;"></div>
        <div class="mt-goal-copy" style="position: absolute; top: 45%; left: 44%; transform: translate(-50%, -50%);">
            <p class="font-xl deep-charcoal">Our goal is <u>more families</u> walking through your door</p>
        </div>
    </div>

    <div class="container py-5 section-reveal" id="what-you-get">
        <div class="row g-4 pillar-row">
            <div class="col-12 col-md-3 d-flex align-items-center pillar-image">
                <img src="/images/dance-website-design.jpg" class="img-fluid" alt="dancer leaping in yellow outfit">
            </div>
            <div class="col-12 col-md-9 d-flex align-items-center pillar-copy">
                <div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <h2 class="deep-charcoal font-lg" style="">FREEDOM</h2>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Freedom to edit anytime.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Freedom to change without extra charges.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Freedom from templates and limitations.</p>
                    </div>
                    <div>
                        <p class="deep-navy font-sm mb-0 mt-4 fst-italic">
                            Powered by <strong>SiteMaster CMS</strong>. <br> Includes your monthly <strong>Creative Hour</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 section-reveal">
        <div class="row g-4 pillar-row">
            <div class="col-12 col-md-9 d-flex align-items-center order-2 order-md-1 pillar-copy">
                <div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <h2 class="deep-charcoal font-lg" style="">GROWTH</h2>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Built to increase enrollment.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Built to support retention.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Built for long-term studio success.</p>
                    </div>
                    <div>
                        <p class="deep-navy font-sm mb-0 mt-4 fst-italic">
                            Driven by <strong>Family Flex Scheduler</strong>. <br> Supported by <strong>Ascension Level Placement</strong>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex align-items-center order-1 order-md-2 pillar-image">
                <img src="/images/dance-studio-web.jpg" class="img-fluid" alt="young dancer in ballet first position">
            </div>
        </div>
    </div>

    <div class="container py-5 section-reveal">
        <div class="row g-4 pillar-row">
            <div class="col-12 col-md-3 d-flex align-items-center pillar-image">
                <img src="/images/dance-studio-website-design.jpg" class="img-fluid" alt="dancer leaping in yellow outfit">
            </div>
            <div class="col-12 col-md-9 d-flex align-items-center pillar-copy">
                <div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <h2 class="deep-charcoal font-lg" style="">FLEXIBILITY</h2>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Easily adapt for seasons, camps, and recitals.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Add pages, programs, and updates anytime.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Your site evolves as your studio evolves.</p>
                    </div>
                    <div>
                        <p class="deep-navy font-sm mb-0 mt-4 fst-italic">
                            Powered by the <strong>Recital Hub</strong>. <br>Built on our <strong>Open Build System</strong> (add anything, anytime).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 section-reveal">
        <div class="row g-4 pillar-row">
            <div class="col-12 col-md-9 d-flex align-items-center order-2 order-md-1 pillar-copy">
                <div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <h2 class="deep-charcoal font-lg" style="">CRAFT</h2>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Custom, one-of-a-kind design.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Crafted from the ground up.</p>
                    </div>
                    <div style="position: relative;" class="d-flex align-items-center">
                        <div class="line" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);"></div>
                        <p class="deep-charcoal font-lg mb-0" style="transform: translateX(80px);">Created by a dancer who gets it.</p>
                    </div>
                    <div>
                        <p class="deep-navy font-sm mb-0 mt-4 fst-italic">
                            Every site is a <strong>Custom Build</strong>. <br>Designed with the <strong>Dancer’s Touch</strong>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex align-items-center order-1 order-md-2 pillar-image">
                <img src="/images/dance-web-design.jpg" class="img-fluid" alt="young dancer in ballet first position">
            </div>
        </div>
    </div>

    <div class="blush-pink-bg py-5 section-reveal">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-5 d-flex align-items-center">
                    <p class="font-xl text-uppercase" style="text-align: right;">a living studio website that adapts with the seasons</p>
                </div>
                <div class="col-12 col-lg-7 d-flex align-items-center">
                    <div>
                        <div class="py-3">
                            <h3 class="font-lg">Family Flex Scheduler</h3>
                            <p class="font-md">
                                Helps families quickly find classes that fit real schedules — making “this won’t work” turn into “we can do this.”
                            </p>
{{--                            <div style="width: max-content;" class="text-uppercase soft-gold-bg px-4 py-2 shadow-sm">--}}
{{--                                <a class="deep-charcoal text-decoration-none" style="font-weight: 500 !important;" href="/">enrollment</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="py-3">
                            <h3 class="font-lg">Ascension Level Placement</h3>
                            <p class="font-md">
                                Clear placement results, teacher comments, and summer recommendations — reinforcing growth and keeping families engaged year after year.
                            </p>
{{--                            <div style="width: max-content;" class="text-uppercase soft-gold-bg px-4 py-2 shadow-sm">--}}
{{--                                <a class="deep-charcoal text-decoration-none" style="font-weight: 500 !important;" href="/">retention</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="py-3">
                            <h3 class="font-lg">Recital Hub</h3>
                            <p class="font-md">
                                A centralized home for tickets, schedules, and key downloads — reducing confusion during the busiest time of the year.
                            </p>
{{--                            <div style="width: max-content;" class="text-uppercase soft-gold-bg px-4 py-2 shadow-sm">--}}
{{--                                <a class="deep-charcoal text-decoration-none" style="font-weight: 500 !important;" href="/">recital season</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="py-3">
                            <h3 class="font-lg">Studio-Specific Tools</h3>
                            <p class="font-md">
                                Need something tailored? Custom forms, internal systems, or workflow tools built around your studio’s unique structure.
                            </p>
{{--                            <div style="width: max-content;" class="text-uppercase soft-gold-bg px-4 py-2 shadow-sm">--}}
{{--                                <a class="deep-charcoal text-decoration-none" style="font-weight: 500 !important;" href="/">custom</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5 section-reveal">
        <section class="my-5" id="testimonials">
            <x-testimonial-mt order="odd" background="soft-gold" state="WISCONSIN" scroll="mdu-new" logo="mdu" studio="Misty's Dance Unlimited" quote="Grateful! Denlie Designs has been highly responsive and skilled at customizing our sites to our ever-changing needs."  />
            <x-testimonial-mt order="even" background="blush-pink" state="NEW YORK" scroll="bgdc" logo="bgdc" studio="Breaking Ground Dance Center" quote="Dennis is the easiest and nicest web designer to work with. He responds quickly, does amazing work and helped see our vision come to life!"  />
            <x-testimonial-mt order="odd" background="deep-navy" state="NEW YORK" scroll="aim" logo="aim" studio="Attitudes In Motion" quote="We had the pleasure of working with Dennis to launch our new site.  He is a true professional who takes the time to understand your business needs and goals to ensure the end result is as expected.  His action is swift, always very fast to respond to questions and share ideas.  Highly recommend his service."  />
            <x-testimonial-mt order="even" background="soft-gold" state="ALABAMA" scroll="darbys" logo="darbys" studio="Darby's Dancers" quote="Dennis is a super guy to work with!  He is very responsive, dependable and trustworthy. Excellent service!"  />
            <x-testimonial-mt order="odd" background="blush-pink" state="NEW YORK" scroll="pulse" logo="pulse" studio="The Pulse" quote="Dennis was highly recommended from other reputable dance education facilities.  We needed a major upgrade for our site, to coincide with marketing efforts, and in a relatively short amount of time.  Dennis's experience here, and knowledge of this particular space, proved to be incredibly valuable.  We are thrilled with his work, and feel we have a terrific lasting relationship.  Such things are critical, and not often easily attained."  />
            <x-testimonial-mt order="even" background="deep-navy" state="FLORIDA" scroll="edt" logo="edt" studio="Encore Dance Theatre" quote="Dennis at Denlie Design has been amazing to work with! He created a beautiful website for my business and worked alongside me to create something that we could be proud of. Customers find it easy to navigate and Dennis is always there to help update the site as needed! I would highly recommend Denlie Design!"  />
            <x-testimonial-mt order="odd" background="soft-gold" state="TEXAS" scroll="seventeen" logo="seventeen" studio="Studio 17" quote="Dennis created an awesome design for my website and has been so easy to work with over the last year or so! He has great communication and gets things done efficiently."  />
        </section>
    </div>

    {{-- PRICING --}}
    <section class="container py-5 section-reveal" id="pricing">
        <div class="">
            <div class="row g-4 align-items-stretch">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card dd-card h-100">
                        <div class="card-body p-4 p-lg-5">
                            <span class="badge bg-dark dd-badge mb-2 text-uppercase fw-bold">One-time</span>
                            <h3 class="h5 text-muted mb-1 font-md">Custom Website Build</h3>
                            <div class="dd-price mb-0 pb-0 font-lg fw-bold">$6,000</div>
{{--                            <div class="dd-price mb-0 pb-0 font-lg fw-bold text-danger">$6,000</div>--}}
{{--                            <div><s class="font-xs text-muted mt-0 pt-0 fw-bold">$7,000</s> Memorial Day Sale Ends 5/26/26</div>--}}
                            <p class="text-muted font-md mt-2">
                                A fully custom website designed to increase clarity, build trust with dance families,
                                and turn more visitors into enrolled students.
                            </p>
                            <ul class="list-group list-group-flush mb-3 font-md">
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Fully custom design (no cookie-cutter theme)</li>
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Easy content editing (headings, text, images, PDFs)</li>
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Mobile-first, fast, and accessible</li>
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Launch support (DNS/SSL) + SEO foundation</li>
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Includes the Denlie Framework (Family Flex + Ascension + Recital Hub)</li>
                            </ul>
                            <a href="#studio-interest" class="btn btn-dark w-100 dd-cta font-md mt-4">Plan your studio website</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card dd-card dd-accent h-100" style="background: #212529; color: white;">
                        <div class="card-body p-4 p-lg-5">
                            <span class="badge bg-light text-dark dd-badge mb-2 text-uppercase fw-bold">Monthly</span>
                            <h3 class="h5 mb-1 font-md">Care & Maintenance</h3>
                            <div class="dd-price mb-2 font-lg fw-bold">$99<span class="fs-6 fw-normal font-xs">/mo</span></div>
                            <p class="font-md">
                                Secure hosting, system oversight, and <strong>1 full hour</strong> of dedicated development time each month.
                                Use it however you’d like.
                            </p>
                            <ul class="list-group list-group-flush mb-3 font-md">
                                <li class="list-group-item" style="background-color: #212529; color: white;"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Hosting, backups, monitoring, and security updates</li>
                                <li class="list-group-item" style="background-color: #212529; color: white;"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Performance tuning & uptime oversight</li>
                                <li class="list-group-item" style="background-color: #212529; color: white;"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>1 hour/month for anything — pages, popups, forms, layout changes, redesign ideas</li>
                            </ul>
                            <div class="font-xs">
                                If a project extends beyond the included hour, I’ll continue at <strong>$90/hr</strong> with a quick estimate before proceeding.
                            </div>
                            <div class="font-xs mt-1">
                                Typical response time: <strong>1–5 business days</strong>; same-day for urgent issues when possible.
                            </div>
                            <a href="#studio-interest" class="btn btn-outline-light w-100 dd-cta font-md mt-4">
                                Plan your studio website
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card dd-card h-100">
                        <div class="card-body p-4 p-lg-5">

                            <span class="badge bg-secondary dd-badge mb-2 text-uppercase fw-bold">Add-On</span>

                            <h3 class="h5 text-muted mb-1 font-md">Dance-Specific SEO</h3>

                            <div class="dd-price mb-1">
                                <span class="font-lg fw-bold price-monthly">$399</span>
                                <span class="font-lg fw-bold price-yearly d-none">$332.50</span>
                                <span class="font-lg fw-bold price-seasonal d-none">$332.50</span>
                                <span class="fs-6 fw-normal font-xs">/mo</span>
                            </div>

                            <div class="font-xs text-muted mb-3">
                                <small>
                                    <span class="billing-monthly">Billed monthly</span>
                                    <span class="billing-yearly d-none">Billed annually - 2 months free</span>
                                    <span class="billing-seasonal d-none">6-month Enrollment Season Push (June–November) — 1 month free</span>
                                </small>
                            </div>

                            <div class="mb-4 d-flex gap-2 flex-wrap font-md">
                                <button class="btn btn-outline-dark pricing-toggle active" data-mode="monthly">
                                    Monthly
                                </button>

                                <button class="btn btn-outline-dark pricing-toggle" data-mode="yearly">
                                    Yearly (Save 17%)
                                </button>

{{--                                <button class="btn pricing-toggle" data-mode="seasonal" style="background: #C9A96E; color: white;">--}}
{{--                                    🔥 Enrollment Push--}}
{{--                                </button>--}}
                            </div>

                        {{--                                    <!-- PRICE -->--}}
                        {{--                                    <div class="dd-price mb-1">--}}
                        {{--                                        <span class="price-monthly">$499</span>--}}
                        {{--                                        <span class="price-yearly d-none">$424</span>--}}
                        {{--                                        <span class="fs-6 fw-normal">/mo</span>--}}
                        {{--                                    </div>--}}

                        {{--                                    <!-- SUBTEXT -->--}}
                        {{--                                    <div class="small text-muted mb-3">--}}
                        {{--                                        <small>--}}
                        {{--                                            <span class="billing-monthly">Billed monthly</span>--}}
                        {{--                                            <span class="billing-yearly d-none">Billed annually (Save 15% — ~2 months free)</span>--}}
                        {{--                                        </small>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="mb-4">--}}
                        {{--                                        <button id="togglePricing" class="btn btn-outline-dark">--}}
                        {{--                                            Switch to Yearly (Save 15%)--}}
                        {{--                                        </button>--}}
                        {{--                                    </div>--}}

                        <!-- TRUST LINE -->
                            {{--                                    <div class="small text-muted mb-3">--}}
                            {{--                                        <small>12-month growth plan designed for long-term ranking and enrollment</small>--}}
                            {{--                                    </div>--}}

                            <p class="text-muted font-md">
                                Get found when parents search for dance classes in your city.
                                Ongoing SEO built specifically for dance studios — by a dancer who understands your programs,
                                your seasonality, and how parents actually search.
                            </p>

                            <ul class="list-group list-group-flush mb-3 font-md">
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Keyword plan + on-page optimization</li>
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Program pages & local targeting support</li>
                                <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Monthly insights & practical next steps</li>
                            </ul>

                            <a href="#studio-interest" class="btn btn-dark w-100 dd-cta font-md mt-4">
                                Plan your studio website
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- END PRICING --}}

    <section id="about" class="section-reveal">
        <div class="blush-pink-bg py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center"><img src="/images/contact-dennis-new.jpg" class="img-fluid" alt="headshot" style="object-fit: cover; object-position: top; height: 400px; width: 450px;"></div>
                    <div class="col-12 col-lg-6 d-flex align-items-center justify-content-start">
                        <div class="py-3">
                            <h3 class="font-lg">Meet the Founder</h3>
                            <p class="font-md">
                                Dennis Williams blends two worlds: web craftsmanship and dance training. By age nine he was building websites
                                with HTML/CSS/JS and studying design with online mentors. At fifteen he began dance training that led to a BFA
                                and a decade of teaching. In 2019 he launched Denlie Design to craft fast, elegant websites for studios nationwide —
                                built for real families, real seasons, and ever-changing studio life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 section-reveal" id="studio-interest">
        <div class="row g-4 align-items-start">
            <div class="col-12 col-lg-5">
                <h3 class="font-xl deep-charcoal">Ready to plan your studio website?</h3>
                <p class="font-lg">Tell me where your studio is now, what is changing next, and what you want your website to handle better.</p>
            </div>
            <div class="col-12 col-lg-7">
                <div id="mt-interest-form" data-action="{{ route('mt.interest') }}"></div>
            </div>
        </div>
    </div>

    <script>
        const buttons = document.querySelectorAll('.pricing-toggle');

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const mode = this.dataset.mode;

                // Reset active states
                buttons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Hide all prices
                document.querySelectorAll('.price-monthly, .price-yearly, .price-seasonal')
                    .forEach(el => el.classList.add('d-none'));

                document.querySelectorAll('.billing-monthly, .billing-yearly, .billing-seasonal')
                    .forEach(el => el.classList.add('d-none'));

                // Show selected
                document.querySelectorAll(`.price-${mode}`)
                    .forEach(el => el.classList.remove('d-none'));

                document.querySelectorAll(`.billing-${mode}`)
                    .forEach(el => el.classList.remove('d-none'));
            });
        });
    </script>



@endsection
