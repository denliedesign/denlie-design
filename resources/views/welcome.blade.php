@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">

            {{-- HERO --}}
            <section>
                <div class="dd-wrap container my-4 my-lg-5" id="top">
                    <div class="card dd-card dd-hero dd-accent">
                        <div class="card-body p-4 p-lg-5">
                            <div class="row g-4 align-items-center">
                                <div class="col-12 col-lg-7">
                                    <div class="dd-kicker mb-2">DENLIE DESIGN</div>

                                    <h1 class="display-6 fw-bold mb-2">
                                        The Denlie Framework — a custom dance website built for the full season.
                                    </h1>

                                    <p class="mb-3">
                                        Built by a dancer and designed for real studio life: enrollment, retention, and recital season —
                                        so families feel confident, informed, and ready to say yes.
                                    </p>

                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#pricing" class="btn btn-light" style="color: black !important;">See Pricing</a>
                                        <a href="mailto:customdenlie@gmail.com?subject=Website%20Project%20Inquiry" class="btn btn-outline-light">Email customdenlie@gmail.com</a>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-5">
                                    <ul class="list-group list-group-flush dd-bullets">
                                        <li class="list-group-item">
                                            <span class="dd-icon"><ion-icon name="hammer-outline"></ion-icon></span>
                                            Fully custom — no off-the-shelf theme or template
                                        </li>
                                        <li class="list-group-item">
                                            <span class="dd-icon"><ion-icon name="create-outline"></ion-icon></span>
                                            You edit content (text/images/PDFs); I protect the layout
                                        </li>
                                        <li class="list-group-item">
                                            <span class="dd-icon"><ion-icon name="rocket-outline"></ion-icon></span>
                                            Fast, accessible, mobile-first — built for busy parents
                                        </li>
                                        <li class="list-group-item">
                                            <span class="dd-icon"><ion-icon name="calendar-outline"></ion-icon></span>
                                            Built to evolve with seasons, shows, camps, and new programs
                                        </li>
                                        <li class="list-group-item">
                                            <span class="dd-icon"><ion-icon name="sparkles-outline"></ion-icon></span>
                                            Includes Family Flex, Ascension, and Recital Hub (the Denlie Framework)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- OUTCOMES --}}
            <section class="my-4" id="outcomes">
                <div class="dd-wrap container">
                    <div class="card dd-card">
                        <div class="card-body p-4 p-lg-5 text-center">
                            <div class="d-inline-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-dark dd-badge">Outcomes</span>
                                <span class="text-uppercase text-muted dd-badge">What this is really for</span>
                            </div>

                            <h2 class="h3 fw-bold mb-2">
                                The goal isn’t a new website. It’s more families walking through your doors.
                            </h2>

                            <p class="text-muted mb-0">
                                Designed to support enrollment, retention, and long-term studio growth.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- THE DENLIE FRAMEWORK (3-PILLAR + CUSTOM) --}}
            <section class="mt-5" id="digital-systems">
                <div class="dd-wrap container my-4 my-lg-5">
                    <div class="card dd-card">
                        <div class="card-body p-4 p-lg-5">

                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-dark dd-badge">The Denlie Framework</span>
                                <span class="text-uppercase text-muted dd-badge">Enrollment • Retention • Recital • Custom</span>
                            </div>

                            <h2 class="display-6 mb-2" style="font-weight:800;">
                                A full-season website — built for the rhythm of studio life.
                            </h2>

                            <p class="text-muted mb-4">
                                Instead of a static site, you get a living system: tools that reduce confusion for families,
                                support student growth, and make recital season feel organized.
                            </p>

                            <div class="row g-4">

                                {{-- ENROLLMENT --}}
                                <div class="col-12 col-md-6">
                                    <div class="p-4 border rounded-3 h-100">
                                        <h3 class="h6 fw-bold mb-2">Enrollment</h3>
                                        <p class="text-muted mb-2"><strong>Family Flex Scheduler</strong></p>
                                        <p class="text-muted mb-0">
                                            Helps families quickly find classes that fit real schedules —
                                            making “this won’t work” turn into “we can do this.”
                                        </p>
                                    </div>
                                </div>

                                {{-- RETENTION --}}
                                <div class="col-12 col-md-6">
                                    <div class="p-4 border rounded-3 h-100">
                                        <h3 class="h6 fw-bold mb-2">Retention</h3>
                                        <p class="text-muted mb-2"><strong>Ascension Level Placement</strong></p>
                                        <p class="text-muted mb-0">
                                            Clear placement results, teacher comments, and summer recommendations —
                                            reinforcing growth and keeping families engaged year after year.
                                        </p>
                                    </div>
                                </div>

                                {{-- RECITAL SEASON --}}
                                <div class="col-12 col-md-6">
                                    <div class="p-4 border rounded-3 h-100">
                                        <h3 class="h6 fw-bold mb-2">Recital Season</h3>
                                        <p class="text-muted mb-2"><strong>Recital Hub</strong></p>
                                        <p class="text-muted mb-0">
                                            A centralized home for tickets, schedules, and key downloads —
                                            reducing confusion during the busiest time of the year.
                                        </p>
                                    </div>
                                </div>

                                {{-- CUSTOM --}}
                                <div class="col-12 col-md-6">
                                    <div class="p-4 border rounded-3 h-100">
                                        <h3 class="h6 fw-bold mb-2">Custom</h3>
                                        <p class="text-muted mb-2"><strong>Studio-Specific Tools</strong></p>
                                        <p class="text-muted mb-0">
                                            Need something tailored? Custom forms, internal systems,
                                            or workflow tools built around your studio’s unique structure.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-4 text-center">
                                <a href="#pricing" class="btn btn-dark">See Pricing</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            {{-- WHY DENLIE (KEEP IT SHORT + SCANNABLE) --}}
            <section class="mt-5" id="why-denlie">
                <div class="dd-wrap container my-4 my-lg-5">
                    <div class="card dd-card">
                        <div class="card-body p-4 p-lg-5">

                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-dark dd-badge">Why Denlie</span>
                            </div>

                            <h2 class="display-6 mb-2" style="font-weight:800;">
                                Built for the rhythm of real studio life.
                            </h2>

                            <p class="text-muted mb-4">
                                Templates stay the same. Studios don’t.
                            </p>

                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                    <tr>
                                        <th class="text-muted">What Matters</th>
                                        <th class="text-muted">Typical Template / Agency</th>
                                        <th class="text-muted">Denlie Design</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><strong>Design</strong></td>
                                        <td>Pre-built theme or layout</td>
                                        <td>Fully custom, studio-specific</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Flexibility</strong></td>
                                        <td>Changes require big fees or rebuilds</td>
                                        <td>Monthly creative hour included + $90/hr beyond</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Dance Understanding</strong></td>
                                        <td>Generic local business messaging</td>
                                        <td>Built by a dancer who understands studio seasons</td>
                                    </tr>
                                    <tr>
                                        <td><strong>The Denlie Framework</strong></td>
                                        <td>Not included</td>
                                        <td>Enrollment + Retention + Recital systems built-in</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            {{-- TESTIMONIALS (AFTER THEY UNDERSTAND THE OFFER) --}}
            <section class="my-5" id="testimonials">
                <x-testimonial order="odd" background="yellow" state="WISCONSIN" scroll="mdu-new" logo="mdu" studio="Misty's Dance Unlimited" quote="Grateful! Denlie Designs has been highly responsive and skilled at customizing our sites to our ever-changing needs."  />
                <x-testimonial order="even" background="peach" state="NEW YORK" scroll="bgdc" logo="bgdc" studio="Breaking Ground Dance Center" quote="Dennis is the easiest and nicest web designer to work with. He responds quickly, does amazing work and helped see our vision come to life!"  />
                <x-testimonial order="odd" background="coral" state="NEW YORK" scroll="aim" logo="aim" studio="Attitudes In Motion" quote="We had the pleasure of working with Dennis to launch our new site.  He is a true professional who takes the time to understand your business needs and goals to ensure the end result is as expected.  His action is swift, always very fast to respond to questions and share ideas.  Highly recommend his service."  />
                <x-testimonial order="even" background="yellow" state="ALABAMA" scroll="darbys" logo="darbys" studio="Darby's Dancers" quote="Dennis is a super guy to work with!  He is very responsive, dependable and trustworthy. Excellent service!"  />
                <x-testimonial order="odd" background="peach" state="NEW YORK" scroll="pulse" logo="pulse" studio="The Pulse" quote="Dennis was highly recommended from other reputable dance education facilities.  We needed a major upgrade for our site, to coincide with marketing efforts, and in a relatively short amount of time.  Dennis's experience here, and knowledge of this particular space, proved to be incredibly valuable.  We are thrilled with his work, and feel we have a terrific lasting relationship.  Such things are critical, and not often easily attained."  />
                <x-testimonial order="even" background="coral" state="FLORIDA" scroll="edt" logo="edt" studio="Encore Dance Theatre" quote="Dennis at Denlie Design has been amazing to work with! He created a beautiful website for my business and worked alongside me to create something that we could be proud of. Customers find it easy to navigate and Dennis is always there to help update the site as needed! I would highly recommend Denlie Design!"  />
                <x-testimonial order="odd" background="yellow" state="TEXAS" scroll="seventeen" logo="seventeen" studio="Studio 17" quote="Dennis created an awesome design for my website and has been so easy to work with over the last year or so! He has great communication and gets things done efficiently."  />
            </section>

            {{-- PRICING --}}
            <section class="mt-5" id="pricing">
                <div class="">
                    <div class="row g-4 align-items-stretch">

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card dd-card h-100">
                                <div class="card-body p-4 p-lg-5">
                                    <span class="badge bg-dark dd-badge mb-2">One-time</span>
                                    <h3 class="h5 text-muted mb-1">Custom Website Build</h3>
                                    <div class="dd-price mb-2">$8,000</div>
                                    <p class="text-muted">
                                        A fully custom website designed to increase clarity, build trust with dance families,
                                        and turn more visitors into enrolled students.
                                    </p>
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Fully custom design (no cookie-cutter theme)</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Easy content editing (headings, text, images, PDFs)</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Mobile-first, fast, and accessible</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Launch support (DNS/SSL) + SEO foundation</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Includes the Denlie Framework (Family Flex + Ascension + Recital Hub)</li>
                                    </ul>
                                    <a href="mailto:customdenlie@gmail.com?subject=Website%20Project%20Inquiry" class="btn btn-dark w-100 dd-cta">Email customdenlie@gmail.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card dd-card dd-accent h-100">
                                <div class="card-body p-4 p-lg-5">
                                    <span class="badge bg-light text-dark dd-badge mb-2">Monthly</span>
                                    <h3 class="h5 mb-1">Care & Maintenance</h3>
                                    <div class="dd-price mb-2">$99<span class="fs-6 fw-normal">/mo</span></div>
                                    <p>
                                        Secure hosting, system oversight, and <strong>1 full hour</strong> of dedicated development time each month.
                                        Use it however you’d like.
                                    </p>
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Hosting, backups, monitoring, and security updates</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Performance tuning & uptime oversight</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>1 hour/month for anything — pages, popups, forms, layout changes, redesign ideas</li>
                                    </ul>
                                    <div class="small">
                                        If a project extends beyond the included hour, I’ll continue at <strong>$90/hr</strong> with a quick estimate before proceeding.
                                    </div>
                                    <div class="small mt-1">
                                        Typical response time: <strong>1–5 business days</strong>; same-day for urgent issues when possible.
                                    </div>
                                    <a href="mailto:customdenlie@gmail.com?subject=Maintenance%20Plan%20Inquiry" class="btn btn-outline-light w-100 dd-cta">
                                        Email customdenlie@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="card dd-card h-100">
                                <div class="card-body p-4 p-lg-5">
                                    <span class="badge bg-secondary dd-badge mb-2">Add-On</span>
                                    <h3 class="h5 text-muted mb-1">Dance-Specific SEO</h3>
                                    <div class="dd-price mb-2">$499<span class="fs-6 fw-normal">/mo</span></div>
                                    <p class="text-muted">
                                        Get found when parents search for dance classes in your city.
                                        Ongoing SEO built specifically for dance studios — by a dancer who understands your programs,
                                        your seasonality, and how parents actually search.
                                    </p>
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Keyword plan + on-page optimization</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Program pages & local targeting support</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Monthly insights & practical next steps</li>
                                    </ul>
                                    <a href="mailto:customdenlie@gmail.com?subject=SEO%20Inquiry" class="btn btn-secondary w-100 dd-cta">Email customdenlie@gmail.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            {{-- ABOUT --}}
            <section>
                <div class="dd-wrap container my-4 my-lg-5" id="about">
                    <div class="card dd-card dd-founder">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-12 col-lg-6">
                                <img src="/images/contact-dennis-new.jpg" alt="Dennis Williams — Founder of Denlie Design" class="dd-founder-img">
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="p-4 p-lg-5 h-100 d-flex flex-column">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="badge bg-dark dd-badge">About</span>
                                        <span class="text-uppercase text-muted dd-badge">Founder</span>
                                    </div>

                                    <h2 class="display-6 mb-3" style="font-weight:800;">Meet the Founder</h2>

                                    <p class="text-muted mb-3">
                                        Dennis Williams blends two worlds: web craftsmanship and dance training. By age nine he was building websites
                                        with HTML/CSS/JS and studying design with online mentors. At fifteen he began dance training that led to a BFA
                                        and a decade of teaching. In 2019 he launched Denlie Design to craft fast, elegant websites for studios nationwide —
                                        built for real families, real seasons, and ever-changing studio life.
                                    </p>

                                    <div class="mt-auto">
                                        <a href="mailto:customdenlie@gmail.com?subject=Work%20with%20Denlie%20Design" class="btn btn-dark w-100 w-lg-auto">Email customdenlie@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- FINAL CTA --}}
            <section>
                <div class="dd-wrap container my-4 my-lg-5" id="contact">
                    <div class="card dd-card dd-cta-bottom dd-accent">
                        <div class="card-body p-4 p-lg-5 text-center">
                            <div class="d-inline-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-light text-dark dd-badge" style="color: black !important;">Ready?</span>
                                <span class="dd-badge">Let’s build something great</span>
                            </div>

                            <h2 class="display-6 fw-bold mb-2">
                                A full-season website for a full-season studio.
                            </h2>

                            <p class="mb-4">
                                Custom design, the Denlie Framework, and ongoing flexibility — built to support enrollment, retention,
                                and recital season year after year.
                            </p>

                            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                                <a style="color: black !important;" href="mailto:customdenlie@gmail.com?subject=I'd%20like%20to%20start%20a%20project%20with%20Denlie%20Design" class="btn btn-light btn-lg">
                                    <ion-icon name="mail-outline" class="me-2" style="color: black !important;"></ion-icon>Email customdenlie@gmail.com
                                </a>
                                <a href="#pricing" class="btn btn-outline-light btn-lg">
                                    <ion-icon name="pricetags-outline" class="me-2"></ion-icon>See Pricing
                                </a>
                            </div>

                            <div class="small mt-3">Typical reply: <strong>1–5 business days</strong>. If it’s urgent, mention it in your subject line.</div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
