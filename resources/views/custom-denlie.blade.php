@extends('layouts.app')
@section('content')

    <div class="bg-warm">
        <div class="container py-5">
            <section class="mb-5">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col d-flex align-items-center">
                        <div>
                            <h1 class="open-concept-title"><span class="open-concept-title-pop">Exceeding</span> Your Web Expectations, Meeting Every Need</h1>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="/subscriptions" class="fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get Custom Denlie</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <img src="/images/seo-2.png" alt="dancer" class="img-fluid">
                    </div>
                </div>
                <h2 class="open-concept-title mt-5" id="features">Welcome to Custom Denlie</h2>
                <p class="fonts-robo text-center">
                    Designed for dance studios that demand excellence and flexibility, our service offers unmatched customization and ongoing web management. Experience the ease of having a personal web expert dedicated to adapting your site as your studio evolves.
                </p>
                <div class="row">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <img src="/images/seo-3.png" alt="dancer" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-8">
                        <div>
                            <span class="open-concept-title-pop" style="font-weight: bold;">Your Custom Crew</span>
                            <ul>
                                <li><strong>Custom Branding:</strong> Elevate your studio with professional branding that not only meets but exceeds your specifications. Seamlessly integrated across every element of your site, our branding sets the foundation for your unique web presence.</li>
                                <li><strong>Custom Web Design:</strong> Experience a responsive design tailored to synchronize beautifully with your branding. Each site is crafted to reflect the distinct character of your studio, ensuring that your online presence is as dynamic as your classes.</li>
                                <li><strong>Custom Solutions:</strong> Bring every idea to life with bespoke solutions tailored for your studio. From unique integrated systems to standout features, we ensure your site is a cut above the rest.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="open-concept-title-pop" style="font-weight: bold;">Your Yes Man</span>
                            <ul>
                                <li><strong>Zero-Restriction Updates:</strong> Embrace the freedom to redefine your site’s aesthetics and functionality at will. Our custom coding approach, free from the limitations of standard web templates, offers unparalleled flexibility for any updates, big or small.</li>
                                <li><strong>Unlimited Features & Additions:</strong> Expand your site's capabilities as needed, without concern for additional costs. Whether it’s adding new features, pages, or custom forms, our toolbox is at your full disposal.</li>
                                <li><strong>Seasonal Changes:</strong> Keep your site in perfect harmony with the dance seasons—from fall enrollment and winter productions to spring recitals and summer camps. Our seasonal updates are designed to optimize sales and enhance communication within your dance family.</li>
                            </ul>
                        </div>
                        <div>
                            <span class="open-concept-title-pop" style="font-weight: bold;">Your Personal Web Guy</span>
                            <ul>
                                <li><strong>Dedicated Web Specialist:</strong> Benefit from having your personal web expert, dedicated to addressing all your web needs with speed and precision.</li>
                                <li><strong>Proactive Maintenance and Security:</strong> Rely on us for continual website maintenance and rigorous security measures, ensuring your site stays secure and performs flawlessly.</li>
                                <li><strong>Performance Optimization:</strong> We continuously monitor and fine-tune your site for optimal speed and search engine visibility, ensuring the best possible user experience.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-5 my-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <img src="/images/icons/BW_4.png" class="img-fluid" alt="">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <div style="font-size: 24px; font-weight: 400;">Custom Denlie</div>
                            <div><span style="background: #B12729; color: white; padding: 4px 8px; font-weight: 700; font-size: 12px;" class="rounded">$200 off monthly</span>
                                {{--                                &nbsp;<span style="color: #B12729; font-size: 12px; font-weight: 700;">Limited time deal</span>--}}
                            </div>
                            <div style="font-size: 28px;">$2499/mo</div>
                            <div class="text-muted" style="font-size: 12px;">Typical Price: <s>$2699/mo</s></div>
                            <div style="font-size: 14px; font-weight: 700; color: #B12729;" class="mt-2">Hurry, Only 4 Spots Available - Secure Yours Today!</div>
                            <hr>
                            <div style="font-size: 16px; font-weight: 700;">Details</div>
                            <div style="font-size: 14px;">Lock in Your Savings! Sign up now and enjoy our special rate of just $2499/month, down from $2699/month. This exclusive offer runs from November 15th to November 30th. Building your site begins immediately upon the start of your subscription, and you can expect it to be complete within 2 months. We will reach out to you shortly after payment to kickstart the process. Secure this discounted rate for 12 months.</div>
                            <div class="fonts-robo" style="height: 150px; line-height: 1 !important;">
                                {{--                                Get more students for just $499/mo with <strong>no setup fee!</strong><br>--}}
                                <span style="font-size: 16px;"><a href="/subscriptions" class="mt-3 fonts-robo btn btn-lg btn-coral color-warm rounded shadow">Get Custom Denlie</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
