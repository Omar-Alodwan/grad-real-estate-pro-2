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
        <!-- Start Logo container-->
        <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
            <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
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
            <ul class="navigation-menu justify-end nav-light">
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

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Frequently Asked
                Questions</h3>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative lg:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">
                    <ul class="list-unstyled sidebar-nav mb-0 py-0" id="navmenu-nav">
                        <li class="navbar-item p-0"><a href="#tech" class="text-base font-medium navbar-link">Buying
                            Questions</a></li>
                        <li class="navbar-item mt-3 p-0"><a href="#general" class="text-base font-medium navbar-link">General
                            Questions</a></li>
                        <li class="navbar-item mt-3 p-0"><a href="#payment" class="text-base font-medium navbar-link">Payments
                            Questions</a></li>
                        <li class="navbar-item mt-3 p-0"><a href="#support" class="text-base font-medium navbar-link">Support
                            Questions</a></li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <div id="tech">
                    <h5 class="text-2xl font-semibold">Buying Product</h5>

                    <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-1">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                    <span>How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-2">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-2">
                                    <span>Do I need a designer to use Hously ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-2">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-3">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-3">
                                    <span>What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-4">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-4">
                                    <span>What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-4">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="general" class="mt-8">
                    <h5 class="text-2xl font-semibold">General Questions</h5>

                    <div id="accordion-collapsetwo" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-5">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-5">
                                    <span>How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-5">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-6">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-6">
                                    <span>Do I need a designer to use Hously ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-6" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-6">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-7">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-7">
                                    <span>What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-7" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-7">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-8">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-8">
                                    <span>What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-8" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-8">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="payment" class="mt-8">
                    <h5 class="text-2xl font-semibold">Payments Questions</h5>

                    <div id="accordion-collapsethree" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-9">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-9" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-9">
                                    <span>How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-9" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-9">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-10">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-10" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-10">
                                    <span>Do I need a designer to use Hously ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-10" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-10">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-11">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-11" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-11">
                                    <span>What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-11" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-11">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-12">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-12" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-12">
                                    <span>What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-12" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-12">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="support" class="mt-8">
                    <h5 class="text-2xl font-semibold">Support Questions</h5>

                    <div id="accordion-collapsefour" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-13">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-13" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-13">
                                    <span>How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-13" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-13">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-14">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-14" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-14">
                                    <span>Do I need a designer to use Hously ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-14" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-14">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-15">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-15" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-15">
                                    <span>What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-15" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-15">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-lg font-medium" id="accordion-collapse-heading-16">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-16" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-16">
                                    <span>What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-16" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-16">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                Have Question ? Get in touch!</h3>

            <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
                any agent or commisions.</p>

            <div class="mt-6">
                <a href="contact.html" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md"><i
                        class="uil uil-phone align-middle mr-2"></i> Contact us</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

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
<script src="assets/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
<script src="assets/libs/tobii/js/tobii.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>