@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">
            <section class="mb-5">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col d-flex align-items-center">
                        <div>
                            <h1 class="open-concept-title">Get <span class="open-concept-title-pop">More</span> Students with the Denlie Bundle</h1>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="/subscriptions" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get the Denlie Bundle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <img src="/images/seo-1.png" alt="dancer" class="img-fluid">
                    </div>
                </div>
                <h2 class="open-concept-title mt-5" id="features">What is the Denlie Bundle?</h2>
                <p class="fonts-robo text-center">
                    The Denlie Bundle is a comprehensive suite of tools designed to elevate your online presence, streamline your operations, and enhance the enrollment journey for your dance families.
                </p>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col-sm d-flex justify-content-center">
                        <img src="/images/seo-4.png" alt="dancer" class="img-fluid">
                    </div>
                    <div class="col-sm d-flex justify-content-center align-items-center">
                        <ul>
                            <li>Responsive Web Template</li>
                            <li>On-The-Go Editing Capabilities</li>
                            <li>Active Search Engine Optimization (SEO) Campaigns</li>
                            <li>Engagement & Conversion Funnel</li>
                            <li>Live Chat or AI Chat Bots</li>
                            <li>Class Filtering for Families</li>
                            {{--                            <li>Direct Online Purchasing</li>--}}
                            <li>Trial Class Booking System</li>
                            <li>Automated Email Communications</li>
                            <li>Data Insights</li>
                            <li>Engagement Hub</li>
                            {{--                            <li>Student Database & Level Placement System</li>--}}
                            <li>Domain, Professional Email, Hosting & Maintenance</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="py-5 my-5">
                <div>
                    <h1 class="open-concept-title" id="pricing">How To Get More Students</h1>
                    <p class="fonts-robo text-center">
                       The Enhanced User Journey: Included with the Denlie Bundle
                    </p>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 1: Start with a Beautiful New Site<br><span style="font-size: 16px;">A responsive template, coded from scratch. No more fussing around with Wordpress, Squarespace, or Wix. Editing capabilities built directly into the website make updates as easy as posting on your social media.</span></div>
                        {{--                        <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="On average, a custom website with responsive design, coded from scratch with built-in editing capabilities, can cost anywhere from $5,000 to $15,000 or more, depending on the complexity and specific requirements of the site.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 2: Be First in Every Search<br><span style="font-size: 16px;">Ongoing Search Engine Optimization (SEO) campaigns aim to position your new website as the top result for every dance style, every age group, and in your city—as well as in neighboring areas.</span></div>
                        {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 2, involving active SEO campaigns designed to rank your website at the top for various searches, typically costs between $500 to $2,000 per month. This range can increase significantly depending on the competitiveness of the keywords, the geographic focus, and the scope of ongoing SEO activities.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 3: Say Hello to Every Visitor<br><span style="font-size: 16px;">Receive notifications whenever a new user browses your site, enabling you to offer immediate live chat assistance. Alternatively, you can utilize a personalized studio-trained AI chatbot to promptly answer any questions they may have.</span></div>
                        {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 3, which includes notifications for new site visitors and live chat or AI chatbot capabilities, typically costs between $200 to $1,000 per month. This cost varies based on the complexity of the chatbot, the level of customization required, and the service provider chosen for live chat implementation and maintenance.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 4: Present Them Their Perfect Fit<br><span style="font-size: 16px;">Our website's advanced filtering tools streamline the search for dance classes by age, style, and schedule, increasing the likelihood that families will enroll in multiple classes that conveniently meet their needs.</span></div>
                        {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 4, involving advanced filtering tools on a website to help users find dance classes by age, style, and schedule, can typically cost between $1,000 and $3,000 as a one-time development fee. This cost may vary depending on the complexity of the filters and the integration required with the website's existing systems.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 5: Give Them Trial Class Convenience<br><span style="font-size: 16px;">A trial class form captures their information and provides a no-stress way to experience your studio firsthand, boosting confidence in the decision.</span></div>
                        {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 5, which includes integrating a shopping cart system for class enrollment and a trial class form on your website, typically costs between $1,500 and $5,000 as a one-time development fee. The range depends on the e-commerce platform used, the level of customization required, and the complexity of the checkout and trial registration processes.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                    {{--                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 5: Give Them Shopping Cart Convenience<br><span style="font-size: 16px;">Users easily add their chosen classes to their cart and proceed to checkout directly on your website. For those unsure about committing, a trial class form provides a no-stress way to experience your studio firsthand, boosting confidence in the decision.</span></div>--}}
                    {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                    {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 5, which includes integrating a shopping cart system for class enrollment and a trial class form on your website, typically costs between $1,500 and $5,000 as a one-time development fee. The range depends on the e-commerce platform used, the level of customization required, and the complexity of the checkout and trial registration processes.">--}}
                    {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                    {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 6: Follow-Up With Automation<br><span style="font-size: 16px;">After registration, automated emails confirm enrollment and provide all necessary details for the first class. Reminder emails nudge incomplete enrollments to completion. Promotional emails advertise new offerings, keeping all visitors engaged throughout the season.</span></div>
                        {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 6, involving the setup of automated email follow-ups for class registration confirmations, reminders, and promotions, typically costs between $500 and $2,000 for initial setup. This fee includes integrating the email automation system with your website and database, as well as crafting the initial templates and automation rules. Ongoing costs may apply for email service provider fees and maintenance.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 7: Keep Your Family Connected<br><span style="font-size: 16px;">Newsletters, blog posts, and a promotional feed keep your families informed. Our unique and popular Recital Hub feature serves as the go-to source for all recital-related information.</span></div>
                        {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 7, which includes the integration of newsletters, blog posts, a promotional feed, a Recital Hub, and a Level Placement System to keep families connected and informed, typically costs between $2,000 and $5,000 for initial development. This fee covers the setup of content management systems, recital hub features, and student progress tracking tools. There may also be ongoing costs for content creation, system maintenance, and updates.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="col my-5 px-5"><img src="/images/" class="img-fluid" alt=""><div class="text-center fonts-robo" style="line-height: 1 !important;">Step 8: Data for Continual Refinement<br><span style="font-size: 16px;">Google Analytics, SEO reports, and data insights from your site converge to provide a comprehensive overview. This helps track user behavior and performance metrics, enabling us to refine strategies and optimize your website's effectiveness continuously. </span></div>
                        {{--                    <div class="d-flex justify-content-center align-items-center">--}}
                        {{--                            <a data-bs-toggle="popover" data-bs-custom-class="custom-popover" data-bs-content="Step 8, involving the integration of Google Analytics, SEO reporting tools, and other data insight systems to track user behavior and performance metrics, typically costs between $500 and $2,000 for initial setup. This includes configuring the analytics and reporting tools on your website and training on how to interpret the data. Ongoing costs may also be incurred for detailed reports, additional data analysis services, and periodic optimizations based on insights gained.">--}}
                        {{--                                <img src="/images/chatgpt-icon.png" style="height: 32px; width: auto;"></a>--}}
                        {{--                            <span class="ms-2 text-muted" style="font-size: 16px;"><em>On average, how much does this feature cost?</em></span>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </section>

            <section class="py-5 my-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="col"><img src="/images/icons/BW_8.png" class="img-fluid" alt=""></div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <div style="font-size: 24px; font-weight: 400;">Denlie Bundle</div>
{{--                            <div>--}}
{{--                                <span style="background: #B12729; color: white; padding: 4px 8px; font-weight: 700; font-size: 12px;" class="rounded">$50 off monthly for new clients</span>--}}
{{--                                &nbsp;<span style="color: #B12729; font-size: 12px; font-weight: 700;">Limited time deal</span>--}}
{{--                            </div>--}}
                            <div style="font-size: 28px;">$499/mo</div>
{{--                            <div class="text-muted" style="font-size: 12px;">Typical Price: <s>$499/mo</s></div>--}}
{{--                            <div style="font-size: 14px; font-weight: 700; color: #B12729;" class="mt-2">Hurry, Only 13 Spots Available - Secure Yours Today!</div>--}}
                            <hr>
                            <div style="font-size: 16px; font-weight: 700;">Details</div>
                            <div style="font-size: 14px;">
{{--                                Lock in Your Savings! Sign up now and enjoy our special rate of just $449/month, down from $499/month. This exclusive offer runs from November 15th to December 3rd. --}}
                                Building your site begins immediately upon the start of your subscription, and you can expect it to be complete within 2 months. We will reach out to you shortly after payment to kickstart the process.
{{--                                Secure this discounted rate for 12 months. Discount available for new clients only; full price will be charged for existing clients.--}}
                            </div>
                            <div class="fonts-robo" style="height: 150px; line-height: 1 !important;">
{{--                                Get more students for just $499/mo with <strong>no setup fee!</strong><br>--}}
                                <span style="font-size: 16px;"><a href="/subscriptions" class="mt-3 fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get the Denlie Bundle</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
@endsection
