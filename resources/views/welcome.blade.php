@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">
            <section class="mb-5">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col d-flex align-items-center">
                        <div>
                            <h1 class="open-concept-title">The Best<br><span class="open-concept-title-pop">All-Inclusive</span><br>Dance Studio Web Service</h1>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="/subscriptions" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get Denlie</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <img src="/images/seo-1.png" alt="dancer" class="img-fluid">
                    </div>
                </div>
                <h2 class="open-concept-title mt-5" id="features">What is Denlie?</h2>
                <p class="fonts-robo text-center">
                    Denlie is a comprehensive suite of tools designed to elevate your online presence, streamline your operations, and enhance the enrollment journey for your dance families.
                </p>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col-sm d-flex justify-content-center">
                        <img src="/images/seo-4.png" alt="dancer" class="img-fluid">
                    </div>
                    <div class="col-sm d-flex justify-content-center align-items-center">
                        <ul>
                            <li>Responsive Web Design</li>
                            <li>On-The-Go Editing Capabilities</li>
                            <li>Active Search Engine Optimization (SEO) Campaigns</li>
                            <li>Engagement & Conversion Funnel</li>
                            <li>Live Chat or AI Chat Bots</li>
                            <li>Class Management & Filtering for Families</li>
                            <li>Direct Online Purchasing</li>
                            <li>Trial Class Booking System</li>
                            <li>Automated Email Communications</li>
                            <li>Data Insights</li>
                            <li>Engagement Hub</li>
                            <li>Student Database & Level Placement System</li>
                            <li>Domain, Professional Email, Hosting & Maintenance</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="py-5 my-5">
                <div>
                    <h1 class="open-concept-title" id="pricing">How To Get More Students</h1>
                    <p class="fonts-robo text-center">
                        With An Enhanced User Journey
                    </p>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 1: Start with a Beautiful New Site<br><span style="font-size: 16px;">A responsive design, coded from scratch. No more fussing around with Wordpress, Squarespace, or Wix. Editing capabilities built directly into the website make updates as easy as posting on your social media.</span></div>
                        <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="On average, a custom website with responsive design, coded from scratch with built-in editing capabilities, can cost anywhere from $5,000 to $15,000 or more, depending on the complexity and specific requirements of the site.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 2: Be First in Every Search<br><span style="font-size: 16px;">Our active Search Engine Optimization (SEO) campaigns aim to position your new website as the top result for every dance style, every age group, and in your city—as well as in neighboring areas.</span></div>
                    <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 2, involving active SEO campaigns designed to rank your website at the top for various searches, typically costs between $500 to $2,000 per month. This range can increase significantly depending on the competitiveness of the keywords, the geographic focus, and the scope of ongoing SEO activities.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 3: Say Hello to Every Visitor<br><span style="font-size: 16px;">Receive notifications whenever a new user browses your site, enabling you to offer immediate live chat assistance. Alternatively, you can utilize a personalized studio-trained AI chatbot to promptly answer any questions they may have.</span></div>
                    <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 3, which includes notifications for new site visitors and live chat or AI chatbot capabilities, typically costs between $200 to $1,000 per month. This cost varies based on the complexity of the chatbot, the level of customization required, and the service provider chosen for live chat implementation and maintenance.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 4: Present Them Their Perfect Fit<br><span style="font-size: 16px;">Our website's advanced filtering tools streamline the search for dance classes by age, style, and schedule, increasing the likelihood that families will enroll in multiple classes that conveniently meet their needs.</span></div>
                    <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 4, involving advanced filtering tools on a website to help users find dance classes by age, style, and schedule, can typically cost between $1,000 and $3,000 as a one-time development fee. This cost may vary depending on the complexity of the filters and the integration required with the website's existing systems.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 5: Give Them Shopping Cart Convenience<br><span style="font-size: 16px;">Users easily add their chosen classes to their cart and proceed to checkout directly on your website. For those unsure about committing, a trial class form provides a no-stress way to experience your studio firsthand, boosting confidence in the decision.</span></div>
                    <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 5, which includes integrating a shopping cart system for class enrollment and a trial class form on your website, typically costs between $1,500 and $5,000 as a one-time development fee. The range depends on the e-commerce platform used, the level of customization required, and the complexity of the checkout and trial registration processes.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 6: Follow-Up With Automation<br><span style="font-size: 16px;">After registration, automated emails confirm enrollment and provide all necessary details for the first class. Reminder emails nudge incomplete enrollments to completion. Promotional emails advertise new offerings, keeping all visitors engaged throughout the season.</span></div>
                    <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 6, involving the setup of automated email follow-ups for class registration confirmations, reminders, and promotions, typically costs between $500 and $2,000 for initial setup. This fee includes integrating the email automation system with your website and database, as well as crafting the initial templates and automation rules. Ongoing costs may apply for email service provider fees and maintenance.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 7: Keep Your Family Connected<br><span style="font-size: 16px;">Newsletters, blog posts, and a promotional feed keep your families informed. Our unique and popular Recital Hub feature serves as the go-to source for all recital-related information. Our Level Placement System streamlines and personalizes student progress results.</span></div>
                    <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 7, which includes the integration of newsletters, blog posts, a promotional feed, a Recital Hub, and a Level Placement System to keep families connected and informed, typically costs between $2,000 and $5,000 for initial development. This fee covers the setup of content management systems, recital hub features, and student progress tracking tools. There may also be ongoing costs for content creation, system maintenance, and updates.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 8: Data for Continual Refinement<br><span style="font-size: 16px;">Google Analytics, SEO reports, and data insights from your site converge to provide a comprehensive overview. This helps track user behavior and performance metrics, enabling us to refine strategies and optimize your website's effectiveness continuously. </span></div>
                    <div class="d-flex justify-content-center align-items-center">
                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 8, involving the integration of Google Analytics, SEO reporting tools, and other data insight systems to track user behavior and performance metrics, typically costs between $500 and $2,000 for initial setup. This includes configuring the analytics and reporting tools on your website and training on how to interpret the data. Ongoing costs may also be incurred for detailed reports, additional data analysis services, and periodic optimizations based on insights gained.">
                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>
                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>
                        </div>
                    </div>
                </div>
                <div class="text-center fonts-robo" style="height: 150px; line-height: 1 !important;">Get more students for just $449/mo with <strong>no setup fee!</strong><br><span style="font-size: 16px;"><a href="/subscriptions" class="mt-3 fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get Denlie</a></span></div>
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


        <section class="mt-5 pt-5" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-5"><img style="filter: grayscale(100%); height: auto; width: 100%; object-fit: cover; overflow: hidden;" src="/images/contact-dennis-new.jpg" alt="" class="img-fluid rounded"><p class="text-center fonts-robo">Dennis Williams <span class="open-concept-title-pop">Dancer & Developer</span></p></div>
{{--                    <div class="col-sm"><img style="filter: grayscale(100%); height: 500px; width: 100%; object-fit: cover; object-position: top; overflow: hidden;" src="/images/contact-rachel.jpg" alt="" class="img-fluid rounded"><p class="text-center fonts-robo">Rachel Wunsch <span class="open-concept-title-pop">Designer</span></p></div>--}}
{{--                    <div class="col-sm"><img style="filter: grayscale(100%); height: 500px; width: 100%; object-fit: cover; overflow: hidden;" src="/images/contact-emily.jpg" alt="" class="img-fluid rounded"><p class="text-center fonts-robo">Emily Roy <span class="open-concept-title-pop">Photographer</span></p></div>--}}
                    <div class="col-7 d-flex align-items-center">
                        <div>
                            <p>
                                From a young age, Dennis Williams was destined for a digital and creative career, thanks to his computer engineer parents who gifted him his first laptop as a child. By age 9, Dennis had built his first website using HTML, CSS, and JavaScript, and was honing his graphic design skills under the guidance of online art community tutors. His journey into the world of dance began at 15, culminating in a BFA in Dance. Since 2014, Dennis has been a valued instructor at Misty's Dance Unlimited. Inspired by collaborating with Misty Lown—owner of the studio and founder of More Than Just Great Dancing®—on her studio website, Dennis launched Denlie Design in 2019. His company now enhances the online presence of dance studios nationwide.
                            </p>
                            <a href="/subscriptions" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get Denlie</a>
                            <strong>&nbsp;, where dance expertise leads to innovative web solutions.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
