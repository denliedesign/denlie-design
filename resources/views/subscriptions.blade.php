@extends('layouts.app')
@section('content')
    <div class="row bg-warm">
        <div class="col-7 col-sm-7 col-md-9 col-lg-9">
            <div class="container py-5">
                <section>
                    <div class="d-md-flex justify-content-center align-items-center">
                        <h2 class="fonts-play ms-md-3" style="line-height: 1;"></h2>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                        <x-package icon="BW_8" item="Denlie Bundle" cost="449/mo" description="All-inclusive dance studio web service designed to elevate your online presence, streamline your operations, and enhance the enrollment journey for your dance families." />
                        <x-package icon="BW_4" item="Custom Denlie" cost="2499/mo" description="All-inclusive dance studio web service designed to elevate your online presence, streamline your operations, and enhance the enrollment journey for your dance families." />
                    </div>
                </section>
                <hr class="my-5">
                <section id="byob">
                    <div class="d-md-flex justify-content-center align-items-center">
                        <h2 class="fonts-play ms-md-3" style="line-height: 1;">Build Your Own Bundle Subscriptions</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
{{--                        <x-package icon="BW_1" item="hosting and maintenance" cost="129/mo" description="Includes fast, secure hosting, regular maintenance, proactive security, professional email, and 1 hour of content updates monthly, ensuring your site stays fresh and functional." />--}}
{{--                        <x-package icon="BW_2" item="SEO" cost="299/mo" description="Be seen with with targeted keyword optimization, strategic content enhancement, Google integration, and competitor analysis, ensuring top search engine rankings and increased online visibility." />--}}
                        <x-package icon="BW_3" item="blog writing" cost="49/mo" description="Leverage my personal dance experience and SEO expertise, combined with powerful AI technology, to craft engaging blog content for your site. Includes one post per month, with the option to add more for increased frequency." />
{{--                        <x-package icon="BW_4" item="email marketing optimization" cost="199/mo" description="Enhance your email campaigns with our service, offering regular performance analysis, content updates, list segmentation adjustments, and technical support, making minor optimizations to maximize engagement. *Requires Email Marketing Suite" />--}}
{{--                        <x-package icon="BW_5" item="chat" cost="119/mo" description="Live chat and chatbot services setup, integration, team training, and ongoing management, ensuring seamless communication with your visitors." />--}}
                        <x-package icon="BW_6" item="additional professional email" cost="8/mo" description="Set up of an extra Google Workspace user email account that utilizes your own domain name and ensures a professional touch to your online communication." />
{{--                        <div class="col my-2">--}}
{{--                            <div class="card bg-warm" style="border: none;">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="">--}}
{{--                                        <img src="/images/icons/BW_7.png" class="img-fluid" style="height: 259px; width: auto;" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="fonts-robo" style="height: auto; line-height: 1 !important;">--}}
{{--                                        <p class="pb-0 text-capitalize"><a class="brand-link" href="/ppc">PPC</a></p>--}}
{{--                                        <p style="font-size: 16px !important;" class="pb-0">Drive targeted traffic to your dance studio's website with our Pay-Per-Click advertising service. We handle strategy, setup, management, and optimization of ads, maximizing your return on investment.</p>--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <a href="mailto:customdenlie@gmail.com">--}}
{{--                                                <button class="btn btn-teal color-warm shadow rounded">Contact Me</button>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col my-2">--}}
{{--                            <div class="card bg-warm" style="border: none;">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="">--}}
{{--                                        <img src="/images/icons/BW_8.png" class="img-fluid" style="height: 259px; width: auto;" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="fonts-robo" style="height: auto; line-height: 1 !important;">--}}
{{--                                        <p class="pb-0 text-capitalize"><a class="brand-link" href="/social-media">Social Media</a></p>--}}
{{--                                        <p style="font-size: 16px !important;" class="pb-0">Boost your dance studio's online presence with custom graphics and strategic social media marketing. We craft compelling visuals and campaigns that engage your audience, increase followers, and enhance your brand's visibility across platforms.</p>--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <a href="mailto:customdenlie@gmail.com">--}}
{{--                                                <button class="btn btn-teal color-warm shadow rounded">Contact Me</button>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <x-package icon="icon-7" item="social media" cost="299/mo" description="Social media marketing and graphics. Price TBD." />--}}
{{--                        <x-package icon="icon-4" item="PPC" cost="499/mo" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, provident?" />--}}
                    </div>
                </section>
            </div>
        </div>
        <div id="sideCart" class="col-5 col-sm-5 col-md-3 col-lg-3 bg-teal rounded pb-5" style="position: fixed; height: 70vh; right: 0; overflow-y: scroll;">
{{--            <div style="height: 100%;">--}}
                <div  class="px-2 color-warm">
                    <h2>Cart</h2>
                    <ul id="cart-items" style="width: auto;">
                        {{--                    <li>hosting & maintenance <small class="color-yellow">$129.00/mo</small></li>--}}
                    </ul>
                    <form id="checkoutForm" action="/create-plan-session" method="POST">
                        <!-- Dynamically added hidden inputs for cart items will go here -->
                        @csrf
                        <button type="submit" class="btn btn-coral btn-lg color-warm shadow rounded">Checkout</button>
                    </form>
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
                const formattedPrice = `$${itemPrice.toFixed(2)}`;

                // Create the list item
                const listItem = document.createElement('li');
                listItem.id = `cart-item-${uniqueId}`; // Use the unique ID
                listItem.innerHTML = `<hr>${displayName} <small class="color-yellow">${formattedPrice}/mo</small>`;

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
