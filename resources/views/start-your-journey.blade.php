@extends('layouts.app')
@section('content')
    <div class="row bg-warm">
        <div class="col-7 col-sm-7 col-md-9 col-lg-9">
            <div class="container py-5">
                <section>
{{--                    <div class="d-flex justify-content-center mb-3">--}}
{{--                        <span class="rounded fonts-robo" style="background: #B12729; color: white; padding: 4px 8px; font-weight: 700; font-size: 17px;">50% off everything: Use code NOV50</span>--}}
{{--                    </div>--}}
                    <div class="d-md-flex justify-content-center align-items-center">
{{--                        <div class="numero fonts-robo d-flex align-items-center color-warm" style="width: max-content;"><span>step</span>&nbsp;<span style="font-size: 2em;">2</span></div>--}}
                        <h2 class="fonts-play ms-md-3" style="line-height: 1;">Pick & Choose</h2>
                    </div>
                    <h2 class="fonts-play ms-3 mt-5">Choose Your Foundation</h2>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
{{--                        <x-package icon="icon-1" group="/group/_design" item="design" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." cost="1999" />--}}
{{--                        <x-package icon="icon-2" group="/group/_development" item="development" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." cost="1999" />--}}
{{--                        <x-package icon="icon-3" group="/group/_sales" item="online sales" description="E-Commerce or LMS for selling anything from merch to video course subscriptions." cost="1999" />--}}
{{--                        <x-package icon="Color_2" item="custom design" cost="5999" description="Our Custom Design is ideal for studios seeking unique designs while embracing user-driven principles. Enjoy the flexibility of tailored aesthetics, ensuring your website stands out in the dance community. This option is also mobile-friendly and includes 10 Pages plus access to dynamic dance photography and illustrations." />--}}
                        <x-package icon="Color_1" item="custom design" cost="5999" description="The ultimate solution for studios seeking a unique website design with a cohesive branding experience. Enhance your studio's identity and embrace user-driven principles to ensure your website not only stands out but also perfectly aligns with the ethos of your dance community. Enjoy the flexibility of customized aesthetics with mobile-friendly designs, including 10 pages enriched by dynamic dance photography and illustrations, all while establishing a strong, recognizable brand presence." />
                        <x-package icon="Color_2" item="licensed design" cost="2999" description="Our Licensed Design is perfect for studios who desire a proven design crafted with the parents of dancers in mind. We focus on delivering a seamless user experience, tailored to grow the size of your dance family effortlessly.
                                            Misty's official design for MTJGD is mobile-friendly and includes 10 Pages plus access to dynamic dance photography and illustrations." />
                        <x-package icon="Color_3" item="custom refresh" cost="2099" description="Exclusive deal for existing clients. Enjoy a stunning new look at 65% savings, updating your digital presence with modern designs and features for a fraction of the original cost." />
                        <x-package icon="Color_4" item="licensed refresh" cost="1049" description="Exclusive deal for existing clients. Enjoy a stunning new look at 65% savings, updating your digital presence with modern designs and features for a fraction of the original cost." />
                    </div>
                    <h2 class="fonts-play ms-3 mt-5">Add-Ons</h2>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                        <x-package icon="Color_5" item="online sales" cost="3499" description="Directly integrate e-commerce into your dance studio's website, enabling the sale of dancewear or the offering of online dance classes. Designed to fit seamlessly with your digital presence, it opens new revenue streams and expands your service offerings." />
                        <x-package icon="Color_6" item="email marketing suite" cost="2799" description="Our Email Marketing Suite offers a complete toolkit, including custom email template design, website integration, lead capture forms, segmentation strategies, and initial campaign implementation. Plus, we provide client training on the platform." />
{{--                        <x-package icon="Color_7" item="branding" cost="1999" description="Elevate your dance studio's identity with a cohesive branding strategy. From logo design to a consistent visual theme across all digital platforms, we help create a memorable brand that resonates with your audience and stands out in the competitive dance industry." />--}}
{{--                        <x-package icon="Color_7" item="custom solutions" cost="1799" description="Get bespoke solutions tailored to your unique needs, like the Family Flex Scheduler for class selection or the Level Placement system for tracking student progress and audition results." />--}}
                        <x-package icon="Color_7" item="custom solutions" cost="1799" description="Fulfill your studio's unique technological needs with our Custom Solutions. From schedule management to integrating complex data systems, we craft tailored tools to streamline operations, enhance efficiency, and support your studio's growth." />
                        <x-package icon="Color_8" item="family flex scheduler" cost="1799" description="Simplify your class selection with the Family Flex Scheduler. Filter classes by age, availability, and dance style to find the perfect fit for your children, enhancing class enrollment and family satisfaction." />
                        <x-package icon="Color_9" item="ascension level placement" cost="1799" description="Track student progress, manage audition results, and assign levels effortlessly. This tool ensures accurate data recording and secure, personalized communication with families, simplifying the level placement process for your studio." />
                        <x-package icon="Color_10" item="SiteMaster CMS" cost="1299" description="SiteMaster CMS offers comprehensive control over your website's content and structure, providing an intuitive platform for managing pages, media, and design elements across your entire site with ease." />
                        <x-package icon="Color_1" item="animation" cost="399" description="Enhance your site's appeal with animated content, including dynamic text and interactive elements, for a more engaging user experience." />
                        <x-package icon="Color_2" item="password page" cost="249" description="Secure sensitive content with a password-protected page. Ideal for sharing exclusive information like recital schedules with dance families, ensuring privacy and access control." />
                        <x-package icon="Color_3" item="additional page" cost="199" description="Add another page to your website. 'Add to Cart' for each extra page you require." />
                        <x-package icon="Color_4" item="additional form" cost="199" description="Add another form to your website. 'Add to Cart' for each extra form you require." />
                        <x-package icon="Color_5" item="additional hour" cost="60" description="Add another hour of maintenance. 'Add to Cart' for each extra hour you require." />
                    </div>
                    <h2 class="fonts-play ms-3 mt-5">Increase Engagement With Content Modules</h2>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                        <x-package icon="Color_6" item="promo feed" cost="399" description="Keep your audience updated with the latest offerings such as dance camps, intensives, mini-sessions, and holiday discounts. This dynamic tool is perfect for highlighting seasonal promotions and masterclasses, ensuring your audience never misses out." />
                        <x-package icon="Color_7" item="blog" cost="399" description="Share your expertise and dance insights through a dedicated blog. It's an effective way to establish authority, connect with your community, and drive more website traffic." />
                        <x-package icon="Color_8" item="newsletter" cost="399" description="Engage directly with dance families by sending out beautifully crafted newsletters. Keep them informed and involved with updates, news, and special offers, enhancing the sense of community around your studio." />
                        <x-package icon="Color_9" item="recital hub" cost="399" description="Simplify recital season for your dance families with a centralized online hub. This dedicated space on your website organizes all things recital-related, from schedules to costumes, making information access straightforward and stress-free." />
                        <x-package icon="Color_10" item="EngagePlus" cost="1279" description="Save 20%. A dynamic content delivery bundle designed to seamlessly integrate the newsletter, blog, promo feed, and recital hub into your website, fostering enhanced audience engagement." />
                    </div>
                </section>
            </div>
        </div>
        <div id="sideCart" class="col-5 col-sm-5 col-md-3 col-lg-3 bg-teal rounded pb-5" style="position: fixed; height: 70vh; right: 0; overflow-y: scroll;">
{{--            <div style="width: 100%;">--}}
                <div class="px-2 color-warm" style="width: auto;">
                    <h2>Cart</h2>
                    <ul id="cart-items">
                        {{--                            <li>base website <small class="color-yellow">$1999.00</small></li>--}}
                    </ul>
                    <form id="checkoutForm" action="/create-checkout-session" method="POST">
                        <!-- Dynamically added hidden inputs for cart items will go here -->
                        @csrf
                        <button type="submit" class="btn btn-coral btn-lg color-warm shadow rounded">Checkout</button>
                    </form>
                    <p class="color-warm pt-2" style="line-height: 1;">
                        <small style="font-size: 16px;">
                            A monthly Hosting & Maintenance fee of <strong>$129/mo</strong> is included with every "Pick & Choose" website and takes effect once the site goes live.
{{--                            <br><br>--}}
{{--                            Apply your <span style="color: #B12729;">promotion code</span> at checkout to see the adjusted price in the next step.--}}
                            {{--                            A <strong>$129/mo Hosting & Maintenance</strong> fee comes with every website and will be set up in the next step.--}}
                        </small>
                    </p>
                </div>
{{--            </div>--}}
        </div>
    </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const addToCartButtons = document.querySelectorAll('.add-to-cart');
                const offcanvasElement = document.getElementById('sideCart');
                // const bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement);
                const checkoutForm = document.getElementById('checkoutForm');
                let subtotal = 0; // Initialize subtotal

                addToCartButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const itemName = this.getAttribute('data-value');
                        const itemPrice = parseFloat(this.getAttribute('data-cost')); // Ensure this is a number
                        subtotal += itemPrice; // Update subtotal
                        updateSubtotalDisplay(); // Update subtotal display in the cart
                        addCartItem(itemName, itemPrice); // Adjusted to pass itemName and itemPrice separately
                        // bsOffcanvas.show();
                    });
                });

                // Function to add cart item with a remove button
                function addCartItem(itemName, itemPrice) {
                    const uniqueId = itemName.replace(/\s+/g, '-') + '-' + Date.now(); // Create a unique ID for this item
                    const displayName = itemName.replace(/_/g, ' '); // Replace underscores with spaces
                    const discountedPrice = itemPrice;
                    // const discountedPrice = itemPrice * 0.5;
                    const roundedPrice = Math.ceil(discountedPrice);
                    const formattedPrice = `$${roundedPrice.toFixed(2)}`;
                    // const formattedPrice = `$${itemPrice.toFixed(2)}`;

                    // Create the list item
                    const listItem = document.createElement('li');
                    listItem.id = `cart-item-${uniqueId}`; // Use the unique ID
                    listItem.innerHTML = `<hr>${displayName} <small class="color-yellow">${formattedPrice}</small>`;

                    // Create the remove button
                    const removeBtn = document.createElement('ion-icon');
                    removeBtn.textContent = 'Remove';
                    removeBtn.setAttribute('class', 'btn btn-remove text-white');
                    removeBtn.setAttribute('name', 'trash-outline');
                    removeBtn.setAttribute('data-item-id', uniqueId);
                    listItem.appendChild(removeBtn);

                    document.getElementById('cart-items').appendChild(listItem);

                    // Create hidden input for form submission
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'addons[]';
                    hiddenInput.value = itemName;
                    hiddenInput.setAttribute('id', `input-${uniqueId}`); // Match the unique ID
                    checkoutForm.appendChild(hiddenInput);
                }

                // Update the subtotal display
                function updateSubtotalDisplay() {
                    let subtotalDisplay = document.getElementById('cart-subtotal');
                    if (!subtotalDisplay) {
                        subtotalDisplay = document.createElement('div');
                        subtotalDisplay.id = 'cart-subtotal';
                        checkoutForm.before(subtotalDisplay);
                    }
                    // subtotalDisplay.textContent = `Subtotal: $${subtotal.toFixed(2)}`;
                }

                // Listen for clicks on remove buttons
                document.addEventListener('click', function(e) {
                    if (e.target && e.target.classList.contains('btn-remove')) {
                        const itemId = e.target.getAttribute('data-item-id');
                        // Remove the cart item
                        document.getElementById(`cart-item-${itemId}`).remove();
                        // Remove the corresponding hidden input
                        document.getElementById(`input-${itemId}`).remove();
                        // Update subtotal after removing item price. You'll need to adjust how you handle this.
                        // For example, you might need to store each item's price with its ID and recalculate the subtotal.
                    }
                });
            });

        </script>
@endsection


<!-- old sidebar car -->
{{--<div class="cart-sidebar offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">--}}
{{--    <div class="offcanvas-header">--}}
{{--        <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>--}}
{{--    </div>--}}
{{--    <div class="offcanvas-body">--}}
{{--        <ul id="cart-items"></ul>--}}
{{--        <form id="checkoutForm" action="/create-checkout-session" method="POST">--}}
{{--            <!-- Dynamically added hidden inputs for cart items will go here -->--}}
{{--            @csrf--}}
{{--            <button type="submit" class="btn btn-coral btn-lg color-warm shadow rounded">Checkout</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
