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
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
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

<!-- Hero Start -->
<section class="relative table w-full py-36 lg:py-44 overflow-hidden zoom-image">
    <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/bg/04.jpg')] bg-no-repeat bg-center"></div>
    <div class="absolute inset-0 bg-black/70 z-2"></div>
    <div class="container z-3">
        <div class="grid grid-cols-1 mt-10">
            <div class="text-center">
                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Easy way to
                    find your <br> dream property</h1>
                <p class="text-white/70 text-xl max-w-xl mx-auto">A great plateform to buy, sell and rent your
                    properties without any agent or commisions.</p>
            </div>

            <ul class="inline-block mx-auto sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white/80 dark:bg-slate-900/80 backdrop-blur-sm rounded-t-xl border-b dark:border-gray-800 mt-10"
                id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                <li role="presentation" class="inline-block">
                    <button class="sm:px-8 px-6 py-2 text-base font-medium rounded-xl w-full hover:text-green-600 transition-all duration-500 ease-in-out"
                            id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab"
                            aria-controls="buy-home" aria-selected="true">Buy
                    </button>
                </li>
                <li role="presentation" class="inline-block">
                    <button class="sm:px-8 px-6 py-2 text-base font-medium rounded-xl w-full transition-all duration-500 ease-in-out"
                            id="sell-home-tab" data-tabs-target="#sell-home" type="button" role="tab"
                            aria-controls="sell-home" aria-selected="false">Sell
                    </button>
                </li>
                <li role="presentation" class="inline-block">
                    <button class="sm:px-8 px-6 py-2 text-base font-medium rounded-xl w-full transition-all duration-500 ease-in-out"
                            id="rent-home-tab" data-tabs-target="#rent-home" type="button" role="tab"
                            aria-controls="rent-home" aria-selected="false">Rent
                    </button>
                </li>
            </ul>

            <div id="StarterContent"
                 class="p-6 bg-white dark:bg-slate-900 rounded-tl-none rounded-tr-none md:rounded-tr-xl rounded-xl shadow-md dark:shadow-gray-700">
                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                    <form action="#">
                        <div class="registration-form text-dark text-start">
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                <div>
                                    <label class="form-label font-medium">Search : <span
                                            class="text-red-600">*</span></label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-search icons"></i>
                                        <input name="name" type="text" id="job-keyword"
                                               class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                               placeholder="Search your keaywords">
                                    </div>
                                </div>


                                <div>
                                    <label for="buy-properties" class="form-label font-medium">Select
                                        Categories:</label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-estate icons"></i>
                                        <select class="form-select z-2" data-trigger name="choices-catagory"
                                                id="choices-catagory-buy" aria-label="Default select example">
                                            <option>Houses</option>
                                            <option>Apartment</option>
                                            <option>Offices</option>
                                            <option>Townhome</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-min-price" class="form-label font-medium">Min Price :</label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-usd-circle icons"></i>
                                        <select class="form-select" data-trigger name="choices-min-price"
                                                id="choices-min-price-buy" aria-label="Default select example">
                                            <option>Min Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-max-price" class="form-label font-medium">Max Price :</label>
                                    <div class="filter-search-form relative mt-2">
                                        <i class="uil uil-usd-circle icons"></i>
                                        <select class="form-select" data-trigger name="choices-max-price"
                                                id="choices-max-price-buy" aria-label="Default select example">
                                            <option>Max Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="lg:mt-6">
                                    <input type="submit" id="search-buy" name="search"
                                           class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                           value="Search">
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </form>
                </div>

                <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                    <form action="#">
                        <div class="registration-form text-dark text-start">
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                <div>
                                    <label class="form-label font-medium">Search : <span
                                            class="text-red-600">*</span></label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-search icons"></i>
                                        <input name="name" type="text" id="job-keyword"
                                               class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                               placeholder="Search your keaywords">
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-properties" class="form-label font-medium">Select
                                        Categories:</label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-estate icons"></i>
                                        <select class="form-select z-2" data-trigger name="choices-catagory"
                                                id="choices-catagory-sell" aria-label="Default select example">
                                            <option>Houses</option>
                                            <option>Apartment</option>
                                            <option>Offices</option>
                                            <option>Townhome</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-min-price" class="form-label font-medium">Min Price :</label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-usd-circle icons"></i>
                                        <select class="form-select" data-trigger name="choices-min-price"
                                                id="choices-min-price-sell" aria-label="Default select example">
                                            <option>Min Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-max-price" class="form-label font-medium">Max Price :</label>
                                    <div class="filter-search-form relative mt-2">
                                        <i class="uil uil-usd-circle icons"></i>
                                        <select class="form-select" data-trigger name="choices-max-price"
                                                id="choices-max-price-sell" aria-label="Default select example">
                                            <option>Max Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="lg:mt-6">
                                    <input type="submit" id="search-sell" name="search"
                                           class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                           value="Search">
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </form>
                </div>

                <div class="hidden" id="rent-home" role="tabpanel" aria-labelledby="rent-home-tab">
                    <form action="#">
                        <div class="registration-form text-dark text-start">
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                <div>
                                    <label class="form-label font-medium">Search : <span
                                            class="text-red-600">*</span></label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-search icons"></i>
                                        <input name="name" type="text" id="job-keyword"
                                               class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                               placeholder="Search your keaywords">
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-properties" class="form-label font-medium">Select
                                        Categories:</label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-estate icons"></i>
                                        <select class="form-select z-2" data-trigger name="choices-catagory"
                                                id="choices-catagory-rent" aria-label="Default select example">
                                            <option>Houses</option>
                                            <option>Apartment</option>
                                            <option>Offices</option>
                                            <option>Townhome</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-min-price" class="form-label font-medium">Min Price :</label>
                                    <div class="filter-search-form relative filter-border mt-2">
                                        <i class="uil uil-usd-circle icons"></i>
                                        <select class="form-select" data-trigger name="choices-min-price"
                                                id="choices-min-price-rent" aria-label="Default select example">
                                            <option>Min Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="buy-max-price" class="form-label font-medium">Max Price :</label>
                                    <div class="filter-search-form relative mt-2">
                                        <i class="uil uil-usd-circle icons"></i>
                                        <select class="form-select" data-trigger name="choices-max-price"
                                                id="choices-max-price-rent" aria-label="Default select example">
                                            <option>Max Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="lg:mt-6">
                                    <input type="submit" id="search-rent" name="search"
                                           class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                           value="Search">
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </form>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="relative lg:py-24 py-16">
    <div class="container">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-5">
                <div class="relative">
                    <img src="assets/images/about.jpg" class="rounded-xl shadow-md" alt="">
                    <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                           class="lightbox h-20 w-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600">
                            <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="md:col-span-7">
                <div class="lg:ml-4">
                    <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold">Efficiency.
                        Transparency. <br> Control.</h4>
                    <p class="text-slate-400 max-w-xl">Hously developed a platform for the Real Estate marketplace that
                        allows buyers and sellers to easily execute a transaction on their own. The platform drives
                        efficiency, cost transparency and control into the hands of the consumers. Hously is Real Estate
                        Redefined.</p>

                    <div class="mt-4">
                        <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3">Learn
                            More </a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>

            <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
                any agent or commisions.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <!-- Content -->
            <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="uil uil-estate"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <h5 class="text-xl font-medium">Evaluate Property</h5>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="uil uil-bag"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <h5 class="text-xl font-medium">Meeting with Agent</h5>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="uil uil-key-skeleton"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <h5 class="text-xl font-medium">Close the Deal</h5>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured
                Properties</h3>

            <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
                any agent or commisions.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8 relative">
            <div class="tiny-home-slide-three">
                <div class="tiny-slide">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                        <div class="relative">
                            <img src="assets/images/property/1.jpg" alt="">

                            <div class="absolute top-6 right-6">
                                <a href=""
                                   class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                        class="mdi mdi-heart"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="property-detail.html"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765
                                    Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                            </div>

                            <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center mr-4">
                                    <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                </div>

                <div class="tiny-slide">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                        <div class="relative">
                            <img src="assets/images/property/2.jpg" alt="">

                            <div class="absolute top-6 right-6">
                                <a href=""
                                   class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                        class="mdi mdi-heart"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="property-detail.html"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">59345
                                    STONEWALL DR, Plaquemine, LA 70764, USA</a>
                            </div>

                            <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center mr-4">
                                    <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                </div>

                <div class="tiny-slide">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                        <div class="relative">
                            <img src="assets/images/property/3.jpg" alt="">

                            <div class="absolute top-6 right-6">
                                <a href=""
                                   class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                        class="mdi mdi-heart"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="property-detail.html"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">3723
                                    SANDBAR DR, Addis, LA 70710, USA</a>
                            </div>

                            <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center mr-4">
                                    <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                </div>

                <div class="tiny-slide">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                        <div class="relative">
                            <img src="assets/images/property/4.jpg" alt="">

                            <div class="absolute top-6 right-6">
                                <a href=""
                                   class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                        class="mdi mdi-heart"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="property-detail.html"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">Lot 21
                                    ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                            </div>

                            <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center mr-4">
                                    <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                </div>

                <div class="tiny-slide">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                        <div class="relative">
                            <img src="assets/images/property/5.jpg" alt="">

                            <div class="absolute top-6 right-6">
                                <a href=""
                                   class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                        class="mdi mdi-heart"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="property-detail.html"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">710 BOYD
                                    DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
                            </div>

                            <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center mr-4">
                                    <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                </div>

                <div class="tiny-slide">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                        <div class="relative">
                            <img src="assets/images/property/6.jpg" alt="">

                            <div class="absolute top-6 right-6">
                                <a href=""
                                   class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                        class="mdi mdi-heart"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="property-detail.html"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">5133 MCLAIN
                                    WAY, Baton Rouge, LA 70809, USA</a>
                            </div>

                            <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center mr-4">
                                    <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                </div>
            </div>
        </div><!--en grid-->
    </div><!--end container-->
</section><!--end section-->

<!-- Start CTA -->
<section class="relative py-24 bg-[url('../../assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-fixed">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="container">
        <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
            <div class="lg:col-start-2 lg:col-span-10">
                <div class="grid md:grid-cols-3 grid-cols-1 items-center">

                    <div class="counter-box text-center">
                        <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                                                                             data-target="1548">1010</span>+
                        </h1>
                        <h5 class="counter-head text-white text-lg font-medium">Properties Sell</h5>
                    </div><!--end counter box-->


                    <div class="counter-box text-center">
                        <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                                                                             data-target="25">2</span>+
                        </h1>
                        <h5 class="counter-head text-white text-lg font-medium">Award Gained</h5>
                    </div><!--end counter box-->


                    <div class="counter-box text-center">
                        <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                                                                             data-target="9">0</span>+
                        </h1>
                        <h5 class="counter-head text-white text-lg font-medium">Years Experience</h5>
                    </div><!--end counter box-->
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End CTA -->

<!-- Business Partner -->
<section class="pt-10">
    <div class="container">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            <div class="mx-auto py-4">
                <img src="assets/images/client/amazon.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="assets/images/client/google.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="assets/images/client/lenovo.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="assets/images/client/paypal.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="assets/images/client/shopify.svg" class="h-6" alt="">
            </div>

            <div class="mx-auto py-4">
                <img src="assets/images/client/spotify.svg" class="h-6" alt="">
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

<section class="relative lg:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Client Say
                ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
                any agent or commisions.</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-8">
            <div class="relative w-full">
                <div class="tiny-three-item">
                    <div class="tiny-slide">
                        <div class="text-center mx-3">
                            <p class="text-lg text-slate-400 italic"> " Hously made the processes so easy. Hously
                                instantly increased the amount of interest and ultimately saved us over $10,000. " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/01.jpg"
                                     class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="text-center mx-3">
                            <p class="text-lg text-slate-400 italic"> " I highly recommend Hously as the new way to sell
                                your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could
                                spend to sell your home. " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/02.jpg"
                                     class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="text-center mx-3">
                            <p class="text-lg text-slate-400 italic"> " My favorite part about selling my home myself
                                was that we got to meet and get to know the people personally. This made it so much more
                                enjoyable! " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/03.jpg"
                                     class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="text-center mx-3">
                            <p class="text-lg text-slate-400 italic"> " Great experience all around! Easy to use and
                                efficient. " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/04.jpg"
                                     class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="text-center mx-3">
                            <p class="text-lg text-slate-400 italic"> " Hously made selling my home easy and stress
                                free. They went above and beyond what is expected. " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/05.jpg"
                                     class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="text-center mx-3">
                            <p class="text-lg text-slate-400 italic"> " Hously is fair priced, quick to respond, and
                                easy to use. I highly recommend their services! " </p>

                            <div class="text-center mt-5">
                                <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>

                                <img src="assets/images/client/06.jpg"
                                     class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
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
<script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="assets/libs/tobii/js/tobii.min.js"></script>
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>
</html>