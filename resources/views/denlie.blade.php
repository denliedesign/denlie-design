@extends('layouts.denlie')
@section('content')
    <div class="container py-5 mt-hero denlie-hero">
        <div class="denlie-hero-image gsap-move"><img src="/images/fluid-frames-landscape-indoors-2.jpg" class="img-fluid" alt="Dancers moving together in the studio"></div>
        <div class="mt-hero-copy">
            <h1 class="font-xl soft-white">Denlie</h1>
            <p class="font-lg soft-white">Your studio website.<br>Personal to every family.</p>
            <a href="#explore" class="denlie-button soft-gold-bg deep-charcoal font-sm">Explore Denlie</a>
        </div>
    </div>

    <section class="container py-5 d-flex justify-content-end section-reveal mt-goal" style="position: relative;" id="explore">
        <div class="blush-pink-bg mt-goal-panel" style="width: 900px; height: 450px;"></div>
        <div class="mt-goal-copy" style="position: absolute; top: 45%; left: 44%; transform: translate(-50%, -50%);">
            <h2 class="font-xl deep-charcoal">Help every family find <u>their next step.</u></h2>
            <p class="font-md">A personalized website platform built for dance studios.</p>
            <p class="font-md mb-0">Your website, class schedule, and student placement—connected in one family experience.</p>
        </div>
    </section>

    <section class="container py-5 section-reveal">
        <div class="row g-4 pillar-row align-items-center">
            <div class="col-12 col-md-3 pillar-image"><img src="/images/dance-studio-web.jpg" class="img-fluid" alt="Young ballet student" loading="lazy"></div>
            <div class="col-12 col-md-9 pillar-copy denlie-feature-copy">
                <h2 class="font-lg deep-charcoal">New families. A clear place to start.</h2>
                <div class="line my-4"></div>
                <p class="font-md">Choose an age. Pick dance styles. Select available days.</p>
                <p class="font-md">Denlie narrows your schedule to classes that fit.</p>
                <h3 class="font-lg deep-charcoal mt-4">Returning families. The right next step.</h3>
                <p class="font-md">Start with the student’s placement. Add the family’s preferences.</p>
                <p class="font-md mb-0">Find eligible classes that work with their week.</p>
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal" id="how-it-works">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-4">
                <h2 class="font-xl">From a full schedule to a short list.</h2>
                <p class="font-md">Filter by season, age, style, and day.</p>
                <p class="font-md">See matching classes with times, teachers, and locations.</p>
                <p class="font-md mb-0">A few choices turn a long schedule into useful options.</p>
            </div>
            <div class="col-12 col-lg-8">
                <x-denlie-screen file="25-class-finder-desktop.webp" alt="Class finder showing season and age filters alongside My Class Plan" caption="The family’s starting point, shown in the Class Match project." />
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-8 order-2 order-lg-1">
                <x-denlie-screen file="27-selected-class-plan.webp" alt="Matching classes for age four on Monday, with two classes added to My Class Plan" caption="Matching results and selected classes stay together." />
            </div>
            <div class="col-12 col-lg-4 order-1 order-lg-2">
                <h2 class="font-lg">Build a plan.<br>Keep the details.</h2>
                <p class="font-md">Add classes to a personal shortlist.</p>
                <p class="font-md">Email the plan to the family, with a copy for the studio.</p>
                <p class="font-md mb-0">Families have something to return to. Your team knows what caught their interest.</p>
            </div>
        </div>
    </section>

    <section class="blush-pink-bg py-5 section-reveal">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-5"><h2 class="font-xl deep-charcoal">Your whole website.<br>Working together.</h2></div>
                <div class="col-12 col-lg-7 denlie-feature-copy">
                    <h3 class="font-lg">Your studio, in one place.</h3>
                    <p class="font-md">Programs. Faculty. Classes. The information families need, alongside the tools that help them choose.</p>
                    <h3 class="font-lg mt-4">Ready for the next season.</h3>
                    <p class="font-md">Organize schedules and offerings around fall classes, summer sessions, and camps.</p>
                    <h3 class="font-lg mt-4">A direct path to registration.</h3>
                    <p class="font-md mb-0">Families find their classes in Denlie, then follow through to your registration system.</p>
                </div>
            </div>
            <div class="mt-5">
                <x-denlie-screen file="23-homepage-desktop.webp" alt="Misty’s Dance Unlimited website with studio branding, navigation, class finder, and registration links" caption="A studio-branded website connects discovery, class planning, and registration." />
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal">
        <div class="row g-4 pillar-row align-items-center">
            <div class="col-12 col-lg-8">
                <h2 class="font-xl">Useful for families.<br>Practical for your team.</h2>
                <div class="row g-4 mt-2">
                    <div class="col-12 col-md-6">
                        <h3 class="font-lg">Bring your schedule.</h3>
                        <p class="font-md">Import class data. Review it. Publish the schedule families will use.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="font-lg">Use your placements.</h3>
                        <p class="font-md">Turn studio-supplied student levels into relevant class options.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="font-lg">Keep your registration.</h3>
                        <p class="font-md">Your existing system still handles enrollment and payments.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="font-lg">Make answers easier to find.</h3>
                        <p class="font-md">Help families answer “Which class?” and “What fits?” before they need to email.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 pillar-image"><img src="/images/dance-studio-website-design.jpg" class="img-fluid" alt="Dance studio photography" loading="lazy"></div>
        </div>
        <div class="row g-5 mt-2">
            <div class="col-12 col-lg-6">
                <h3 class="font-lg">Check it before it goes live.</h3>
                <p class="font-md">See import errors, ready-to-publish uploads, and the current schedule in one place.</p>
                <x-denlie-screen file="17-schedule-imports.webp" alt="Schedule import history showing current, failed, ready, and previous uploads with row validation counts" caption="Import status makes schedule changes easier to review." />
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="font-lg">Keep seasons organized.</h3>
                <p class="font-md">Set season dates, registration windows, and the default season families see.</p>
                <x-denlie-screen file="10-season-management.webp" alt="Season management showing fall and summer dates, registration windows, and publishing status" caption="Fall and summer schedules have their own settings." />
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-4">
                <h2 class="font-xl">See interest before enrollment.</h2>
                <p class="font-md">Track submitted plans, participating families, and class selections.</p>
                <p class="font-md">See which classes families add most often. Use that context to guide follow-up.</p>
                <p class="font-sm mb-0">These are interest signals. Confirmed enrollment stays in your registration system.</p>
            </div>
            <div class="col-12 col-lg-8">
                <x-denlie-screen file="07-interest-analytics.webp" alt="Interest analytics showing class-plan totals and a table of most-selected classes" caption="Example dashboard data illustrates how families’ choices become useful studio insight." />
            </div>
        </div>
    </section>

    <section class="deep-navy-bg soft-white py-5 section-reveal" id="about-denlie">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-4"><img src="/images/contact-dennis-new.jpg" class="img-fluid denlie-founder-image" alt="Dennis Williams, founder of Denlie" loading="lazy"></div>
                <div class="col-12 col-lg-8 denlie-feature-copy">
                    <h2 class="font-xl">Built by someone who knows both sides.</h2>
                    <p class="font-md">I’m Dennis Williams. Web developer. Dance educator. Founder of Denlie.</p>
                    <p class="font-md">Years of building studio websites led to a bigger question: how can a website help each family decide what to take?</p>
                    <p class="font-md">Denlie connects the pieces: studio data, class matching, and a website designed around the people using it.</p>
                    <a href="{{ route('custom-websites') }}#testimonials" class="soft-white font-sm">See the custom website work behind Denlie →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal" id="pricing">
        <h2 class="font-xl mb-4">Bring Denlie to your studio.</h2>
        <div class="row g-4 align-items-stretch">
            <div class="col-12 col-lg-6">
                <div class="card dd-card h-100">
                    <div class="card-body p-4 p-lg-5 d-flex flex-column">
                        <h3 class="font-lg">Denlie</h3>
                        <p class="font-md">A studio website with a personalized path to the right classes.</p>
                        <ul class="font-md denlie-inclusions">
                            <li>Studio website and program information</li>
                            <li>Class matching and family preferences</li>
                            <li>Student placement and seasonal schedules</li>
                        </ul>
                        <p class="font-lg mt-auto pt-3">Contact for pricing.</p>
                        <p class="font-sm">Let’s discuss your schedule, current systems, and launch needs.</p>
                        <a href="#studio-interest" class="denlie-button soft-gold-bg deep-charcoal font-sm text-center">Talk about Denlie</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card dd-card h-100 blush-pink-bg border-0">
                    <div class="card-body p-4 p-lg-5 d-flex flex-column">
                        <h3 class="font-lg">Founding studios</h3>
                        <p class="font-md">Interested in helping shape what comes next?</p>
                        <ul class="font-md denlie-inclusions">
                            <li>Explore early adoption with Dennis</li>
                            <li>Share feedback from your team and families</li>
                            <li>Help identify the improvements that matter most</li>
                        </ul>
                        <p class="font-lg mt-auto pt-3">Let’s explore the fit.</p>
                        <p class="font-sm">Ask about participation, availability, and founding studio pricing.</p>
                        <a href="#studio-interest" class="denlie-button deep-navy-bg soft-white font-sm text-center">Ask about founding studios</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 section-reveal" id="studio-interest">
        <div class="row g-4 align-items-start">
            <div class="col-12 col-lg-5">
                <h2 class="font-xl deep-charcoal">Let’s talk about your studio.</h2>
                <p class="font-md">Tell me what you offer, what you use today, and where families get stuck.</p>
                <p class="font-md">We’ll talk through the fit, pricing, and next steps.</p>
                <p class="font-sm">Interested in the founding studio group? Mention it below.</p>
            </div>
            <div class="col-12 col-lg-7">
                <div id="mt-interest-form" data-action="{{ route('mt.interest') }}"></div>
                <noscript><p class="font-md">Email <a href="mailto:customdenlie@gmail.com">customdenlie@gmail.com</a> to learn more about Denlie.</p></noscript>
            </div>
        </div>
    </section>
@endsection
