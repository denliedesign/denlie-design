@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">
            <section class="mb-5">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                    <div class="col d-flex align-items-center" style="border-right: 1px solid grey;">
                        <div>
                            <h1 class="open-concept-title">Ultimate Enrollment Bundle<br><span class="open-concept-title-pop"></span></h1>
                            <div class="d-flex justify-content-center">
                                <div style="font-size: 14px;">Learn How to Boost Enrollment</div>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="/denlie-bundle" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Denlie Bundle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center" style="border-left: 1px solid grey;">
                        <div>
                            <h1 class="open-concept-title">Custom Designs & Solutions<br><span class="open-concept-title-pop"></span></h1>
                            <div class="d-flex justify-content-center">
                                <div style="font-size: 14px;">On-Demand & Full-Service, Meet the "Custom Guy"</div>
{{--                                <div style="font-size: 14px; font-weight: 700; color: #B12729;">Hurry, Only 4 Spots Available - Secure Yours Today!</div>--}}
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="/custom-denlie" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Custom Denlie</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center" style="border-left: 1px solid grey;">
                        <div>
                            <h1 class="open-concept-title">Build Your Own Bundle<br><span class="open-concept-title-pop"></span></h1>
                            <div class="d-flex justify-content-center">
                                <div style="font-size: 14px;">See Our Extensive Offerings</div>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="/start-your-journey" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Pick & Choose</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <table class="table" id="comparison-chart">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center"></th>
                        <th scope="col" class="text-center">Denlie Bundle</th>
                        <th scope="col" class="text-center">Custom Denlie</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Custom Design</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Licensed Design</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td>Custom Refresh</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Online Sales</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Email Marketing Suite</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Custom Solutions</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Family Flex Scheduler</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Ascension Level Placement</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>SiteMaster CMS</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td>Animation</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Password Pages</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Additional Pages</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Additional Forms</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>EngagePlus</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Hosting And Maintenance</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>SEO</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Email Marketing Optimization</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    <tr>
                        <td>Chat</td>
                        <td class="text-center">&check;</td>
                        <td class="text-center">&check;</td>
                    </tr>
                    </tbody>
                </table>
            </section>

            <section class="mt-5 pt-5">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                        <div class="col-sm"><img style="filter: grayscale(100%); height: 500px; width: 100%; object-fit: cover; overflow: hidden;" src="/images/contact-dennis-new.jpg" alt="" class="img-fluid rounded"><p class="text-center fonts-robo">Dennis Williams <span class="open-concept-title-pop">Developer</span></p></div>
                        <div class="col-sm"><img style="filter: grayscale(100%); height: 500px; width: 100%; object-fit: cover; object-position: top; overflow: hidden;" src="/images/contact-rachel.jpg" alt="" class="img-fluid rounded"><p class="text-center fonts-robo">Rachel Wunsch <span class="open-concept-title-pop">Designer</span></p></div>
                        <div class="col-sm"><img style="filter: grayscale(100%); height: 500px; width: 100%; object-fit: cover; overflow: hidden;" src="/images/contact-emily.jpg" alt="" class="img-fluid rounded"><p class="text-center fonts-robo">Emily Roy <span class="open-concept-title-pop">Photographer</span></p></div>
                    </div>
                </div>
            </section>

            <section class="mt-5" id="about">
                <div class="container">
                    <div>
                        <h2 class="open-concept-title mt-5">Meet the Founder</h2>
                        <p>
                            From a young age, Dennis Williams was destined for a digital and creative career, thanks to his computer engineer parents who gifted him his first laptop as a child. By age 9, Dennis had built his first website using HTML, CSS, and JavaScript, and was honing his graphic design skills under the guidance of online art community tutors. His journey into the world of dance began at 15, culminating in a BFA in Dance. Since 2014, Dennis has been a valued instructor at Misty's Dance Unlimited. Inspired by collaborating with Misty Lown—owner of the studio and founder of More Than Just Great Dancing®—on her studio website, Dennis launched Denlie Design in 2019. His company now enhances the online presence of dance studios nationwide.
                        </p>
                    </div>
                </div>
            </section>

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
