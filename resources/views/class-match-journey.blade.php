@extends('layouts.denlie')
@section('title', 'The road to Denlie Platform | Denlie Design Portfolio')
@section('description', 'From private level placements in 2020 to Family Flex Scheduler, Ascension, MDU Levels, and Denlie Platform. A software portfolio by Dennis Williams II.')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/class-match-journey.css') }}">
@endpush
@section('content')
<article class="journey">
    <header class="journey-hero container">
        <p class="journey-eyebrow">Denlie Design / A product in the making / 2020–2026</p>
        <h1>Two questions.<br>One <em>Denlie.</em></h1>
        <div class="journey-intro">
            <p>“What level is my child?”<br>“Which classes work for our family?”</p>
            <div><p>I built tools to answer each question for real dance studios. Over years of feedback, those projects grew together—from a simple private placement page into a connected class-finding experience.</p><a href="#origins" class="journey-text-link">Follow the story <span aria-hidden="true">↓</span></a></div>
        </div>
        <dl class="journey-meta"><div><dt>Created by</dt><dd>Dennis Williams II</dd></div><div><dt>My role</dt><dd>Development, interface design & ongoing iteration</dd></div><div><dt>Built with</dt><dd>PHP / Laravel · Vue in Denlie Platform</dd></div></dl>
    </header>

    <section class="journey-map container" aria-label="How the projects connect">
        <div class="journey-map-lanes">
            <a href="#level-placement" class="journey-map-lane placement"><span>THE PLACEMENT PATH</span><strong>Level Placement</strong><span class="journey-map-arrow" aria-hidden="true">↓</span><strong>Ascension</strong><small>Private results → personal guidance</small></a>
            <a href="#family-flex" class="journey-map-lane scheduling"><span>THE SCHEDULING PATH</span><strong>Family Flex Scheduler</strong><span class="journey-map-arrow" aria-hidden="true">↓</span><strong>Real-world refinements</strong><small>Family preferences → a useful shortlist</small></a>
        </div>
        <div class="journey-join" aria-hidden="true"></div>
        <a href="#mdu-levels" class="journey-map-merge"><small>THE IDEAS MEET</small><strong>MDU Levels</strong><span>Placement + the actual class schedule</span></a>
        <div class="journey-stem" aria-hidden="true"></div>
        <a href="#denlie-platform" class="journey-map-final"><strong>Denlie Platform</strong><span>A personalized studio website, built around the family</span><span aria-hidden="true">↗</span></a>
    </section>

    <section class="container journey-section" id="origins">
        <div class="journey-section-heading"><p class="journey-eyebrow">01 / Two starting points</p><h2>Different studios.<br>The same need for clarity.</h2><p>The placement work began at Misty’s Dance Unlimited. The scheduling work grew from a separate request at Breaking Ground Dance Center.</p></div>
        <div class="journey-lanes">
            <div class="journey-lane placement">
                <p class="journey-lane-label">Misty’s Dance Unlimited · Onalaska, WI</p>
                <section class="journey-entry" id="level-placement">
                    <p class="journey-date">May 2020 · The foundation</p>
                    <h3>Level Placement</h3>
                    <p>The first version had one job: let families privately see their children’s assigned levels. A parent registered using the same email held in Studio Director, allowing the site to match that family to its placement records.</p>
                    <p>It began as a straightforward database and results page. The original implementation dates to May 26, 2020; follow-up emails document the same family login workflow in later seasons.</p>
                    <div class="journey-workflow" aria-label="Original placement workflow"><span>Register with studio email</span><span aria-hidden="true">↓</span><span>Match the family’s records</span><span aria-hidden="true">↓</span><span>View private level placements</span></div>
                    <p class="journey-small">Workflow illustration of the original version.</p>
                    <p class="journey-takeaway"><strong>The idea that carried forward</strong>Start with the student. Show only the information that belongs to their family.</p>
                </section>
                <section class="journey-entry" id="ascension">
                    <p class="journey-date">May–June 2024 · More than a result</p>
                    <h3>Ascension</h3>
                    <p>On May 1, MDU asked for a more organized, personal presentation: individual placements, specialty classes, summer recommendations, and teacher comments.</p>
                    <p>I developed the simple results view into a celebratory placement certificate, with class recommendations and an easier-to-read family experience. By June, I was offering it as Ascension Level Placement.</p>
                    <figure class="journey-screen"><a href="/images/level-placement-2-ascension-show.png" target="_blank" rel="noopener"><img src="/images/level-placement-2-ascension-show.png" width="1853" height="915" alt="Ascension’s 2024 sample certificate for John Doe, showing levels, recommended summer classes, and teacher comments" loading="lazy"></a><figcaption>Archived Ascension sample, 2024. <a href="/images/level-placement-2-ascension-show.png" target="_blank" rel="noopener">View full size ↗</a></figcaption></figure>
                    <p class="journey-takeaway"><strong>The idea that carried forward</strong>A placement should explain the student’s next step.</p>
                    <a class="journey-text-link" href="/ascension-level-placement">Explore Ascension ↗</a>
                </section>
            </div>
            <div class="journey-lane scheduling">
                <p class="journey-lane-label">Breaking Ground Dance Center · Pleasantville, NY</p>
                <section class="journey-entry" id="family-flex">
                    <p class="journey-date">December 2023–March 2024 · A second path</p>
                    <h3>Family Flex Scheduler</h3>
                    <p>In December 2023, the studio asked me to rethink its schedule pages. That conversation became a tool for narrowing classes by children’s ages, dance styles, and available days.</p>
                    <ol class="journey-milestones">
                        <li><time datetime="2024-01-17">January 17</time><span>After a demo, the studio requested “select all” options for families still exploring days and styles.</span></li>
                        <li><time datetime="2024-02-02">February 2</time><span>Version 2.0 was ready for review, with multiple-child selection confirmed and spreadsheet imports explained in the follow-up.</span></li>
                        <li><time datetime="2024-03-08">March 8–14</time><span>Team testing, favorites, and class notations led into the website rollout. The scheduler was online March 13 ahead of the planned March 14 release.</span></li>
                    </ol>
                    <p>Families could narrow the options, choose favorites, and keep a useful shortlist. Staff could supply the schedule through a spreadsheet.</p>
                    <x-project-media image="/images/journey/family-flex-preview.jpg" video="/videos/family-flex-scroll.mp4" alt="Family Flex Scheduler scrolling through age, style, and day choices" label="Family Flex Scheduler" caption="From ages to available days: the live Family Flex experience, October 2026." />
                    <a class="journey-text-link" href="https://www.breakinggrounddance.com/scheduler" target="_blank" rel="noopener">Try Family Flex ↗</a>
                </section>
                <section class="journey-entry">
                    <p class="journey-date">2024–2026 · Learning after launch</p>
                    <h3>Better with every season.</h3>
                    <p>The first round of family and staff feedback arrived March 18, 2024. I completed the requested page naming, full-schedule access, and display edits the next day.</p>
                    <ol class="journey-milestones">
                        <li><time datetime="2025-03">March 2025</time><span>Updated age brackets and adjusted the importer for the studio’s spreadsheet layout.</span></li>
                        <li><time datetime="2025-06">June 2025</time><span>Resolved further import issues involving column positions and workbooks containing multiple sheets.</span></li>
                        <li><time datetime="2026-02-23">February 2026</time><span>Changed uploads to replace the previous schedule, preventing removed classes from lingering in search results.</span></li>
                    </ol>
                    <p class="journey-takeaway"><strong>The idea that carried forward</strong>Useful results depend on a schedule that stays accurate as the studio changes.</p>
                    <a class="journey-text-link" href="/family-flex-scheduler">More about Family Flex ↗</a>
                </section>
            </div>
        </div>
    </section>

    <section class="journey-convergence" id="mdu-levels">
        <div class="container journey-section">
            <p class="journey-eyebrow">02 / The ideas come together</p>
            <div class="journey-split"><div><h2>MDU Levels.<br><em>From placement to plan.</em></h2><p class="journey-date">Standalone site · June 2025<br>Schedule integration · May 2026</p></div><div><p>Ascension evolved into the standalone MDU Levels site. The next major step connected students’ placements to the fall schedule, bringing the two ideas together.</p><p>“Ballet 3” could now lead to actual eligible classes, with days and times. In the scheduler, matching options were highlighted for each child, and families could filter the schedule and collect favorites.</p><p>The May 29, 2026 development history records this placement upgrade and scheduler integration. MDU Levels became the bridge between knowing a level and choosing a workable week.</p><a class="journey-text-link" href="https://mdulevels.com" target="_blank" rel="noopener">Visit MDU Levels ↗</a></div></div>
            <div class="journey-product-pair">
                <x-project-media device="phone" image="/images/journey/mdu-placement-mobile.jpg" video="/videos/mdu-placement-scroll.mp4" alt="Avery Preview’s MDU placement on a phone, scrolling from assigned levels to eligible classes" caption="1. Know the placement. A personal result, right on your phone." />
                <x-project-media device="laptop" image="/images/journey/mdu-filter-demo.jpg" video="/videos/mdu-filter-demo.mp4" alt="Live MDU scheduler demo: search Ballet, choose Level 3, select a favorite, and clear filters" label="MDU Levels" caption="2. Find the fit. Watch 70 classes narrow to three matches, add a favorite, then clear the filters." />
            </div>
            <p class="journey-small">Current product screenshots, October 2026. MDU Levels is shown with preview students.</p>
        </div>
    </section>

    <section class="container journey-section" id="denlie-platform">
        <span id="class-match" aria-hidden="true"></span>
        <p class="journey-eyebrow">03 / The next step · 2026</p>
        <div class="journey-split"><h2>Denlie Platform.<br>The whole experience,<br><em>connected.</em></h2><div><p>Denlie Platform takes those lessons beyond a standalone tool. The studio website, seasonal schedule, student placements, and family preferences become parts of the same experience.</p><p>New families explore classes by age, interest, and availability. Returning families bring their placement context. Both can build a class plan and follow through to the studio’s existing registration system.</p><p>Developed under the working name Class Match, the project became the foundation for Denlie Platform. By August 2026, I was sharing working walkthroughs with MDU: a studio-branded site with schedule-driven recommendations and content that could adapt to new and returning families.</p></div></div>
        <x-project-media device="laptop" image="/images/denlie/25-class-finder-desktop.webp" alt="Denlie Platform’s class finder alongside My Class Plan" caption="Denlie Platform development preview: discovery and planning together." />
        <div class="journey-principles"><div><span>01</span><h3>Personal to the family.</h3><p>Carry forward the privacy and placement context of the original MDU tool.</p></div><div><span>02</span><h3>Practical for their week.</h3><p>Bring Family Flex’s filtering and favorites into a class plan families can keep.</p></div><div><span>03</span><h3>Manageable for the studio.</h3><p>Review schedule imports, organize seasons, and see which classes families are considering.</p></div></div>
        <details class="journey-details"><summary>See the studio side of Denlie Platform <span aria-hidden="true">+</span></summary><div class="journey-admin"><figure class="journey-screen"><img src="/images/denlie/17-schedule-imports.webp" width="1425" height="990" alt="Denlie Platform schedule import history with validation and publishing status" loading="lazy"><figcaption>Review imports before publishing a new schedule.</figcaption></figure><figure class="journey-screen"><img src="/images/denlie/07-interest-analytics.webp" width="1425" height="990" alt="Denlie Platform example interest analytics for submitted class plans" loading="lazy"><figcaption>Understand class-plan interest. These signals are separate from confirmed registrations.</figcaption></figure></div></details>
        <a href="{{ route('denlie.platform') }}" class="denlie-button soft-gold-bg deep-charcoal">Explore the Denlie Platform preview →</a>
    </section>

    <section class="journey-ending" id="studio-interest"><div class="container journey-split"><div><p class="journey-eyebrow">The thread through it all</p><h2>Built around real questions.<br>Refined through real use.</h2></div><div><p>I’m a developer and dance educator. These projects grew from working with studio teams, listening to families, and improving the tools each season. That experience is the foundation of Denlie Platform—and the direction I’m taking Denlie.</p><a href="mailto:customdenlie@gmail.com" class="denlie-button soft-gold-bg deep-charcoal">Let’s talk about your project ↗</a></div></div></section>
    <div class="container journey-provenance"><p>Timeline reconstructed from project correspondence and development history. Dates distinguish early requests, review versions, and subsequent releases. Product screenshots show the versions noted in their captions.</p></div>
</article>
@endsection
