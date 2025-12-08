@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">

            <section>
                <div class="dd-wrap container my-4 my-lg-5" id="top">
                    <div class="card dd-card dd-hero dd-accent">
                        <div class="card-body p-4 p-lg-5">
                            <div class="row g-4 align-items-center">
                                <div class="col-12 col-lg-7">
                                    <div class="dd-kicker mb-2">DENLIE DESIGN</div>
                                    <h1 class="display-6 fw-bold mb-2">Custom Websites for Dance Studios</h1>
                                    <p class="mb-3">From‑scratch builds with a tailored CMS, designed to look beautiful, load fast, and make enrollment simple. One clear price. Care when you need it.</p>
                                    <div class="d-flex flex-wrap gap-3">
                                        <a href="#pricing" class="btn btn-light" style="color: black !important;">See Pricing</a>
                                        <a href="mailto:customdenlie@gmail.com?subject=Website%20Project%20Inquiry" class="btn btn-outline-light">Email customdenlie@gmail.com</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <ul class="list-group list-group-flush dd-bullets">
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="hammer-outline"></ion-icon></span>Built from scratch — no off‑the‑shelf theme</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="create-outline"></ion-icon></span>Editing you control — a CMS that fits your content</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="rocket-outline"></ion-icon></span>Fast, accessible, mobile‑first</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="shield-checkmark-outline"></ion-icon></span>Launch support: DNS, SSL, and best‑practice basics</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="construct-outline"></ion-icon></span>Simple maintenance — one hour included each month</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-5" id="pricing">

                <div class="">
                    <div class="row g-4 align-items-stretch">


                        <!-- Card 1: Website Build -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card dd-card h-100">
                                <div class="card-body p-4 p-lg-5">
                                    <span class="badge bg-dark dd-badge mb-2">One‑time</span>
                                    <h3 class="h5 text-muted mb-1">Custom Website Build</h3>
                                    <div class="dd-price mb-2">$2,999</div>
{{--                                    <div class="dd-price mb-2" style="color: red;"><s class="text-muted">$2,999</s> $1949</div>--}}
                                    <p class="text-muted">From‑scratch site with a tailored CMS for your studio.</p>
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Built from scratch (no cookie‑cutter theme)</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Custom editing control (your content, your way)</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Mobile‑first, fast, and accessible</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Launch support (DNS/SSL) + basic SEO setup</li>
                                    </ul>
                                    <a href="mailto:customdenlie@gmail.com?subject=Website%20Project%20Inquiry" class="btn btn-dark w-100 dd-cta">Email customdenlie@gmail.com</a>
                                </div>
                            </div>
                        </div>


                        <!-- Card 2: Monthly Maintenance (accent) -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card dd-card dd-accent h-100">
                                <div class="card-body p-4 p-lg-5">
                                    <span class="badge bg-light text-dark dd-badge mb-2">Monthly</span>
                                    <h3 class="h5 mb-1">Care & Maintenance</h3>
                                    <div class="dd-price mb-2">$129<span class="fs-6 fw-normal">/mo</span></div>
                                    <p>Managed hosting + up to <strong>1 hour</strong> of on‑demand edits each month.</p>
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Hosting, backups, monitoring, security updates</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Performance tune‑ups & uptime oversight</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>On‑demand edits included if they fit in an hour</li>
                                    </ul>
                                    <div class="small">If a request needs more time, I’ll send a quick estimate and continue at <strong>$90/hr</strong>.</div>
                                    <div class="small mt-1">Typical response time: <strong>1–5 business days</strong>; same‑day for urgent issues when possible.</div>
                                    <a href="mailto:customdenlie@gmail.com?subject=Maintenance%20Plan%20Inquiry" class="btn btn-outline-light w-100 dd-cta">Email customdenlie@gmail.com</a>
                                </div>
                            </div>
                        </div>


                        <!-- Card 3: SEO Add-on -->
                        <div class="col-12 col-lg-4">
                            <div class="card dd-card h-100">
                                <div class="card-body p-4 p-lg-5">
                                    <span class="badge bg-secondary dd-badge mb-2">Add‑On</span>
                                    <h3 class="h5 text-muted mb-1">SEO Growth</h3>
                                    <div class="dd-price mb-2">$299<span class="fs-6 fw-normal">/mo</span></div>
                                    <p class="text-muted">Ongoing content & rankings support built for local enrollment.</p>
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Keyword plan & on‑page optimization</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Blog/landing content guidance</li>
                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="checkmark-outline"></ion-icon></span>Monthly insights & quick wins</li>
                                    </ul>
                                    <a href="mailto:customdenlie@gmail.com?subject=SEO%20Add-on%20Inquiry" class="btn btn-secondary w-100 dd-cta">Email customdenlie@gmail.com</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </section>

            <section>
                <div class="dd-wrap container my-4 my-lg-5" id="about">
                    <div class="card dd-card dd-founder">
                        <div class="row g-0 align-items-stretch">
                            <!-- Image -->
                            <div class="col-12 col-lg-6">
                                <img src="/images/contact-dennis-new.jpg" alt="Dennis Williams — Founder of Denlie Design" class="dd-founder-img">
                            </div>
                            <!-- Content -->
                            <div class="col-12 col-lg-6">
                                <div class="p-4 p-lg-5 h-100 d-flex flex-column">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="badge bg-dark dd-badge">About</span>
                                        <span class="text-uppercase text-muted dd-badge">Founder</span>
                                    </div>
                                    <h2 class="display-6 mb-3" style="font-weight:800;">Meet the Founder</h2>
                                    <p class="text-muted mb-3">
                                        From a young age, Dennis Williams was destined for a digital and creative career. By age nine he was building websites with HTML/CSS/JS and studying design with online mentors. At fifteen he began dance training that led to a BFA and a decade of teaching. In 2019 he launched Denlie Design to craft fast, elegant websites for studios nationwide.
                                    </p>
{{--                                    <div class="dd-divider"></div>--}}
{{--                                    <ul class="list-group list-group-flush mb-4">--}}
{{--                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="code-slash-outline"></ion-icon></span><strong>Crafted in Laravel</strong> — custom CMS and components tailored to your studio.</li>--}}
{{--                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="speedometer-outline"></ion-icon></span><strong>Performance-first</strong> — mobile speed, accessibility, and clean architecture.</li>--}}
{{--                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="color-palette-outline"></ion-icon></span><strong>Design-forward</strong> — typography, layout, and imagery tuned for enrollment.</li>--}}
{{--                                        <li class="list-group-item"><span class="dd-icon"><ion-icon name="people-outline"></ion-icon></span><strong>Studio-native</strong> — a decade in the dance world; websites that speak your language.</li>--}}
{{--                                    </ul>--}}
                                    <div class="mt-auto">
                                        <a href="mailto:customdenlie@gmail.com?subject=Work%20with%20Denlie%20Design" class="btn btn-dark w-100 w-lg-auto">Email customdenlie@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

{{--            <section class="mt-5" id="about">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm">--}}
{{--                            <img src="/images/contact-dennis-new.jpg" alt="" class="img-fluid rounded">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm">--}}
{{--                            <h2 class="open-concept-title mt-5">Meet the Founder</h2>--}}
{{--                            <p>--}}
{{--                                From a young age, Dennis Williams was destined for a digital and creative career, thanks to his computer engineer parents who gifted him his first laptop as a child. By age 9, Dennis had built his first website using HTML, CSS, and JavaScript, and was honing his graphic design skills under the guidance of online art community tutors. His journey into the world of dance began at 15, culminating in a BFA in Dance. Since 2014, Dennis has been a valued instructor at Misty's Dance Unlimited. Inspired by collaborating with Misty Lown—owner of the studio and founder of More Than Just Great Dancing®—on her studio website, Dennis launched Denlie Design in 2019. His company now enhances the online presence of dance studios nationwide.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

            <section class="my-5" id="testimonials">
                <x-testimonial order="odd" background="yellow" state="WISCONSIN" scroll="mdu-new" logo="mdu" studio="Misty's Dance Unlimited" quote="Grateful! Denlie Designs has been highly responsive and skilled at customizing our sites to our ever-changing needs."  />
                <x-testimonial order="even" background="peach" state="NEW YORK" scroll="bgdc" logo="bgdc" studio="Breaking Ground Dance Center" quote="Dennis is the easiest and nicest web designer to work with. He responds quickly, does amazing work and helped see our vision come to life!"  />
                <x-testimonial order="odd" background="coral" state="NEW YORK" scroll="aim" logo="aim" studio="Attitudes In Motion" quote="We had the pleasure of working with Dennis to launch our new site.  He is a true professional who takes the time to understand your business needs and goals to ensure the end result is as expected.  His action is swift, always very fast to respond to questions and share ideas.  Highly recommend his service."  />
                <x-testimonial order="even" background="yellow" state="ALABAMA" scroll="darbys" logo="darbys" studio="Darby's Dancers" quote="Dennis is a super guy to work with!  He is very responsive, dependable and trustworthy. Excellent service!"  />
                <x-testimonial order="odd" background="peach" state="NEW YORK" scroll="pulse" logo="pulse" studio="The Pulse" quote="Dennis was highly recommended from other reputable dance education facilities.  We needed a major upgrade for our site, to coincide with marketing efforts, and in a relatively short amount of time.  Dennis's experience here, and knowledge of this particular space, proved to be incredibly valuable.  We are thrilled with his work, and feel we have a terrific lasting relationship.  Such things are critical, and not often easily attained."  />
                <x-testimonial order="even" background="coral" state="FLORIDA" scroll="edt" logo="edt" studio="Encore Dance Theatre" quote="Dennis at Denlie Design has been amazing to work with! He created a beautiful website for my business and worked alongside me to create something that we could be proud of. Customers find it easy to navigate and Dennis is always there to help update the site as needed! I would highly recommend Denlie Design!"  />
                <x-testimonial order="odd" background="yellow" state="TEXAS" scroll="seventeen" logo="seventeen" studio="Studio 17" quote="Dennis created an awesome design for my website and has been so easy to work with over the last year or so! He has great communication and gets things done efficiently."  />
            </section>
{{--            <span class="open-concept-title-pop">wonderful</span>--}}

            <section>
                <div class="dd-wrap container my-4 my-lg-5" id="contact">
                    <div class="card dd-card dd-cta-bottom dd-accent">
                        <div class="card-body p-4 p-lg-5 text-center">
                            <div class="d-inline-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-light text-dark dd-badge" style="color: black !important;">Ready?</span>
                                <span class="dd-badge">Let’s build something great</span>
                            </div>
                            <h2 class="display-6 fw-bold mb-2">Get started today</h2>
                            <p class="mb-4">Custom websites, simple maintenance, and practical SEO—built for studios that want to grow without the fuss.</p>


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
{{--        <section>--}}
{{--            <div>--}}
{{--                <script async src="https://js.stripe.com/v3/pricing-table.js"></script>--}}
{{--                <stripe-pricing-table pricing-table-id="prctbl_1OmIPAHaney56bwrr52tM7G5"--}}
{{--                                      publishable-key="pk_test_51MF169Haney56bwrh9r9cLkc9pwDtMiI4hkjWcJhBHUxZutbKpoYeEJWs3UcgAkc0W5CM31gR5p39pCQTpDREAD200WQ1s8lIb">--}}
{{--                </stripe-pricing-table>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <div class="container py-5">--}}

{{--        </div>--}}
    </div>
@endsection
