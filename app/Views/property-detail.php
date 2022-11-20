<!DOCTYPE html>
<html lang="en" class="light" dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <title>Hously - Tailwind CSS Real Estate Website Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="Real Estate Website Landing Page" name="description"/>
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords"/>
    <meta name="author" content="Shreethemes"/>
    <meta name="website" content="https://shreethemes.in"/>
    <meta name="email" content="support@shreethemes.in"/>
    <meta name="version" content="1.1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico"/>

    <!-- Css -->
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/icons.css"/>
    <link rel="stylesheet" href="assets/css/tailwind.css"/>

</head>

<body class="dark:bg-slate-900">
<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline mb-0">
                <a href="auth-login.html"
                   class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i
                        data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
            </li>
            <li class="sm:inline pl-1 mb-0 hidden">
                <a href="auth-signup.html"
                   class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="index.html" class="sub-menu-item">Hero One</a></li>
                        <li><a href="index-two.html" class="sub-menu-item">Hero Two</a></li>
                        <li><a href="index-three.html" class="sub-menu-item">Hero Three</a></li>
                        <li><a href="index-four.html" class="sub-menu-item">Hero Four <span
                                class="bg-amber-500 text-white text-[12px] px-2.5 py-1 font-semibold rounded h-5 ml-1">New</span></a>
                        </li>
                    </ul>
                </li>

                <li><a href="buy.html" class="sub-menu-item">Buy</a></li>

                <li><a href="sell.html" class="sub-menu-item">Sell</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Listing</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Grid View </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="grid.html" class="sub-menu-item">Grid Listing</a></li>
                                <li><a href="grid-map.html" class="sub-menu-item">Grid With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> List View </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="list.html" class="sub-menu-item">List Listing</a></li>
                                <li><a href="list-map.html" class="sub-menu-item">List With Map</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Property Detail </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                        <li><a href="features.html" class="sub-menu-item">Featues</a></li>
                        <li><a href="pricing.html" class="sub-menu-item">Pricing</a></li>
                        <li><a href="faqs.html" class="sub-menu-item">Faqs</a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special <span
                                class="bg-amber-500 text-white text-[12px] px-2.5 py-1 font-semibold rounded h-5 ml-1">New</span></a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="comingsoon.html" class="sub-menu-item">Comingsoon</a></li>
                                <li><a href="maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="404.html" class="sub-menu-item">404! Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->

<!-- Hero Start -->
<section class="relative md:pb-24 pb-16 mt-20">
    <div class="container-fluid">
        <div class="md:flex mt-4">
            <div class="lg:w-1/2 md:w-1/2 p-1">
                <div class="group relative overflow-hidden">
                    <img src="assets/images/property/single/1.jpg" alt="">
                    <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                    <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                        <a href="assets/images/property/single/1.jpg"
                           class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i
                                class="uil uil-camera"></i></a>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 md:w-1/2">
                <div class="flex">
                    <div class="w-1/2 p-1">
                        <div class="group relative overflow-hidden">
                            <img src="assets/images/property/single/2.jpg" alt="">
                            <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                <a href="assets/images/property/single/2.jpg"
                                   class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i
                                        class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 p-1">
                        <div class="group relative overflow-hidden">
                            <img src="assets/images/property/single/3.jpg" alt="">
                            <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                <a href="assets/images/property/single/3.jpg"
                                   class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i
                                        class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex">
                    <div class="w-1/2 p-1">
                        <div class="group relative overflow-hidden">
                            <img src="assets/images/property/single/4.jpg" alt="">
                            <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                <a href="assets/images/property/single/4.jpg"
                                   class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i
                                        class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/2 p-1">
                        <div class="group relative overflow-hidden">
                            <img src="assets/images/property/single/5.jpg" alt="">
                            <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                            <div class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                <a href="assets/images/property/single/5.jpg"
                                   class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i
                                        class="uil uil-camera"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container fluid-->

    <div class="container md:mt-24 mt-16">
        <div class="md:flex">
            <div class="lg:w-2/3 md:w-1/2 md:p-4 px-3">
                <h4 class="text-2xl font-medium">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</h4>

                <ul class="py-6 flex items-center list-none">
                    <li class="flex items-center lg:mr-6 mr-4">
                        <i class="uil uil-compress-arrows lg:text-3xl text-2xl mr-2 text-green-600"></i>
                        <span class="lg:text-xl">8000sqf</span>
                    </li>

                    <li class="flex items-center lg:mr-6 mr-4">
                        <i class="uil uil-bed-double lg:text-3xl text-2xl mr-2 text-green-600"></i>
                        <span class="lg:text-xl">4 Beds</span>
                    </li>

                    <li class="flex items-center">
                        <i class="uil uil-bath lg:text-3xl text-2xl mr-2 text-green-600"></i>
                        <span class="lg:text-xl">4 Baths</span>
                    </li>
                </ul>

                <p class="text-slate-400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                    nesciunt.</p>
                <p class="text-slate-400 mt-4">But I must explain to you how all this mistaken idea of denouncing
                    pleasure and praising pain was born and I will give you a complete account of the system, and
                    expound the actual teachings of the great explorer of the truth, the master-builder of human
                    happiness.</p>
                <p class="text-slate-400 mt-4">Nor again is there anyone who loves or pursues or desires to obtain pain
                    of itself, because it is pain, but because occasionally circumstances occur in which toil and pain
                    can procure him some great pleasure.</p>

                <div class="w-full leading-[0] border-0 mt-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                            style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-1/2 md:p-4 px-3 mt-8 md:mt-0">
                <div class="sticky top-20">
                    <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700">
                        <div class="p-6">
                            <h5 class="text-2xl font-medium">Price:</h5>

                            <div class="flex justify-between items-center mt-4">
                                <span class="text-xl font-medium">$ 45,231</span>

                                <span class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6">For Sale</span>
                            </div>

                            <ul class="list-none mt-4">
                                <li class="flex justify-between items-center">
                                    <span class="text-slate-400 text-sm">Days on Hously</span>
                                    <span class="font-medium text-sm">124 Days</span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Price per sq ft</span>
                                    <span class="font-medium text-sm">$ 186</span>
                                </li>

                                <li class="flex justify-between items-center mt-2">
                                    <span class="text-slate-400 text-sm">Monthly Payment (estimate)</span>
                                    <span class="font-medium text-sm">$ 1497/Monthly</span>
                                </li>
                            </ul>
                        </div>

                        <div class="flex">
                            <div class="p-1 w-1/2">
                                <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Book
                                    Now</a>
                            </div>
                            <div class="p-1 w-1/2">
                                <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Offer
                                    Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">Have Question ?
                            Get in touch!</h3>

                        <div class="mt-6">
                            <a href="contact.html"
                               class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md"><i
                                    class="uil uil-phone align-middle mr-2"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End Hero -->

<!-- Start Footer -->
<footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="relative py-16">
                <!-- Subscribe -->
                <div class="relative w-full">
                    <div class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
                        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                            <div class="md:text-left text-center z-1">
                                <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                                    Subscribe to Newsletter!</h3>
                                <p class="text-slate-400 max-w-xl mx-auto">Subscribe to get latest updates and
                                    information.</p>
                            </div>

                            <div class="subcribe-form z-1">
                                <form class="relative max-w-lg md:ml-auto">
                                    <input type="email" id="subcribe" name="email"
                                           class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700"
                                           placeholder="Enter your email :">
                                    <button type="submit"
                                            class="btn bg-green-600 hover:bg-green-700 text-white rounded-full">
                                        Subscribe
                                    </button>
                                </form><!--end form-->
                            </div>
                        </div>

                        <div class="absolute -top-5 -left-5">
                            <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 -rotate-45"></div>
                        </div>

                        <div class="absolute -bottom-5 -right-5">
                            <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5"></div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="assets/images/logo-light.png" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">A great plateform to buy, sell and rent your properties
                                without any agent or commisions.</p>

                        </div><!--end col-->

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="aboutus.html"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                <li class="mt-[10px]"><a href="features.html"
                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                <li class="mt-[10px]"><a href="pricing.html"
                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                <li class="mt-[10px]"><a href="blog.html"
                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                <li class="mt-[10px]"><a href="auth-login.html"
                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Login</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="terms.html"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                <li class="mt-[10px]"><a href="privacy.html"
                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                <li class="mt-[10px]"><a href="listing-one.html"
                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Listing</a></li>
                                <li class="mt-[10px]"><a href="contact.html"
                                                         class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                        class="uil uil-angle-right-b me-1"></i> Contact</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>


                            <div class="flex mt-6">
                                <i data-feather="map-pin" class="w-5 h-5 text-green-600 mr-3"></i>
                                <div class="">
                                    <h6 class="text-gray-300 mb-2">C/54 Northwest Freeway, <br> Suite 558, <br> Houston,
                                        USA 485</h6>
                                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                       data-type="iframe"
                                       class="text-green-600 hover:text-green-700 duration-500 ease-in-out lightbox">View
                                        on Google map</a>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="mail" class="w-5 h-5 text-green-600 mr-3"></i>
                                <div class="">
                                    <a href="mailto:contact@example.com"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">contact@example.com</a>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="phone" class="w-5 h-5 text-green-600 mr-3"></i>
                                <div class="">
                                    <a href="tel:+152534-468-854"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">+152
                                        534-468-854</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
                <!-- Subscribe -->
            </div>
        </div>
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center gap-6">
                <div class="md:text-left text-center">
                    <p class="mb-0 text-gray-300">©
                        <script>document.write(new Date().getFullYear())</script>
                        Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a
                                href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                    </p>
                </div>

                <ul class="list-none md:text-right text-center">
                    <li class="inline"><a href=""
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                            data-feather="facebook" class="h-4 w-4"></i></a></li>
                    <li class="inline"><a href=""
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                            data-feather="instagram" class="h-4 w-4"></i></a></li>
                    <li class="inline"><a href=""
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                            data-feather="twitter" class="h-4 w-4"></i></a></li>
                    <li class="inline"><a href=""
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                            data-feather="linkedin" class="h-4 w-4"></i></a></li>
                </ul><!--end icon-->
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- End Footer -->
<!-- Switcher -->
<div class="fixed top-1/4 -left-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk"/>
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                       for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500 mt-1"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500 mt-1"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
</div>
<!-- Switcher -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
   class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-green-600 text-white justify-center items-center"><i
        class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="assets/libs/tobii/js/tobii.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>