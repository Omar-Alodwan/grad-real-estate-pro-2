
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARES | <?= $subTitle; ?></title>
    <script src="<?= base_url("public/js/vue.global.js"); ?>"></script>
    <script src="<?= base_url("public/js/tw.js"); ?>"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<html lang="en">
<body>
<div id="app" class="min-h-full flex-col h-screen">
    <!-- nav start -->
    <nav x-data="{ open: false }"
         class="relative nav-top z-fixed w-full flex-nowrap lg:flex-start items-center z-20  bg-gradient-to-r from-blue-200 to-cyan-700 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
        <div class="container mx-auto px-4 xl:max-w-6xl ">
            <!-- mobile navigation -->
            <div class="flex flex-row justify-between py-3 lg:hidden">
                <!-- logo -->
                <a class="flex items-center py-2 ltr:mr-4 rtl:ml-4" href="index.html">
                    <img class="max-w-full h-auto" src="/Applications/MAMP/htdocs/public/image/logo.png"
                         alt="Logo dark">
                </a>
                <!-- navbar toggler -->
                <div class="ltr:right-0 rtl:left-0 flex items-center">
                    <!-- Mobile menu button-->
                    <button id="navbartoggle" type="button"
                            class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-200 dark:hover:text-gray-300 focus:outline-none focus:ring-0"
                            aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                            x-bind:aria-expanded="open.toString()">
                        <span class="sr-only">Mobile menu</span>
                        <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed"
                             class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed"
                             class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div class="lg:hidden fixed w-full h-full inset-0 z-40" id="mobile-menu" x-description="Mobile menu"
                 x-show="open" style="display: none;">
                <!-- bg open -->
                <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>
                <!-- Mobile navbar -->
                <nav id="mobile-nav"
                     class="flex flex-col ltr:right-0 rtl:left-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-800 h-full overflow-auto z-40"
                     x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu"
                     aria-orientation="vertical" aria-labelledby="navbartoggle"
                     x-transition:enter="transform transition-transform duration-300"
                     x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transform transition-transform duration-300"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full" style="display: none;">
                    <div class="mb-auto">
                        <!--logo-->
                        <div class="mh-18 text-center px-12 mb-8">
                            <a href="#" class="flex relative">
                                <span class="text-4xl font-semibold px-4 dark:text-gray-200">Tail<span
                                            class="text-blue-700">Pro.</span></span>
                                <!-- <img src="src/img/logo.png" class="max-w-full h-auto" alt="logo"> -->
                                <span class="absolute -bottom-4 transform ltr:translate-x-1/2 rtl:-translate-x-1/2 w-20 h-0 border-t-2 border-opacity-50 border-blue-700 mx-auto"></span>
                            </a>
                        </div>
                        <!--navigation-->
                        <div class="mb-4">
                            <nav class="relative flex flex-wrap items-center justify-between">
                                <ul id="side-menu" class="w-full float-none flex flex-col">
                                    <li class="relative">
                                        <a href="index.html"
                                           class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Home</a>
                                    </li>
                                    <li class="relative">
                                        <a href="snippets/index.html"
                                           class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Snippets</a>
                                    </li>
                                    <!-- dropdown with submenu-->
                                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                        @click.away="open = false">
                                        <a id="mobiledrop-04"
                                           class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="javascript:;" @click="open = !open" aria-haspopup="true"
                                           x-bind:aria-expanded="open"
                                           :class="{ 'text-blue-700 dark:text-gray-100': open }" aria-expanded="false">
                                            Pages
                                            <!-- caret -->
                                            <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                       <svg xmlns="http://www.w3.org/2000/svg"
                                            class="transform transition duration-300 ltr:-rotate-90 rtl:rotate-90"
                                            :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                            width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                          <polyline points="112 184 256 328 400 184"
                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                       </svg>
                                    </span>
                                        </a>
                                        <!-- dropdown menu -->
                                        <ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 mb-4"
                                            style="min-width: 12rem; display: none;" x-description="Dropdown menu"
                                            x-show="open" role="menu" aria-orientation="vertical"
                                            aria-labelledby="mobiledrop-04">
                                            <!--submenu-->
                                            <li class="relative" x-data="{ open: false }"
                                                @keydown.escape.stop="open = false" @click.away="open = false">
                                                <a id="sidemenu-01"
                                                   class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                   href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                   x-bind:aria-expanded="open"
                                                   :class="{ 'text-blue-700 dark:text-gray-100': open }"
                                                   aria-expanded="false">
                                                    Pages
                                                    <!-- caret -->
                                                    <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                  class="transform transition duration-300 ltr:-rotate-90 rtl:rotate-90"
                                                  :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                                  width=".8rem" height=".8rem" fill="currentColor"
                                                  viewBox="0 0 512 512">
                                                <polyline points="112 184 256 328 400 184"
                                                          style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                             </svg>
                                          </span>
                                                </a>
                                                <!--dropdown submenu-->
                                                <ul class="block rounded rounded-t-none top-full z-50 ltr:ml-3 rtl:mr-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                    style="min-width: 12rem; display: none;"
                                                    x-description="Dropdown menu" x-show="open" role="menu"
                                                    aria-orientation="vertical" aria-labelledby="sidemenu-01">
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="about.html">About</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="career.html">Career</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="contact.html">Contact</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="fax.html">Fax</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="portfolio.html">Portfolio</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="pricing.html">Pricing</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="services.html">Services</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="coming-soon.html">Coming soon</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="404.html">404</a></li>
                                                </ul>
                                            </li>
                                            <!--end submenu-->
                                            <!--submenu-->
                                            <li class="relative" x-data="{ open: false }"
                                                @keydown.escape.stop="open = false" @click.away="open = false">
                                                <a id="sidemenu-02"
                                                   class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                   href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                   x-bind:aria-expanded="open"
                                                   :class="{ 'text-blue-700 dark:text-gray-100': open }"
                                                   aria-expanded="false">
                                                    Blogs
                                                    <!-- caret -->
                                                    <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                  class="transform transition duration-300 ltr:-rotate-90 rtl:rotate-90"
                                                  :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                                  width=".8rem" height=".8rem" fill="currentColor"
                                                  viewBox="0 0 512 512">
                                                <polyline points="112 184 256 328 400 184"
                                                          style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                             </svg>
                                          </span>
                                                </a>
                                                <!--dropdown submenu-->
                                                <ul class="block rounded rounded-t-none top-full z-50 ltr:ml-3 rtl:mr-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                    style="min-width: 12rem; display: none;"
                                                    x-description="Dropdown menu" x-show="open" role="menu"
                                                    aria-orientation="vertical" aria-labelledby="sidemenu-02">
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="category.html">Category</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="category-list.html">Category list</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="search.html">Search</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="author.html">Author</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="single-post.html">Single post</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="full-width-post.html">Full width</a></li>
                                                </ul>
                                            </li>
                                            <!--end submenu-->
                                            <!--submenu-->
                                            <li class="relative" x-data="{ open: false }"
                                                @keydown.escape.stop="open = false" @click.away="open = false">
                                                <a id="sidemenu-03"
                                                   class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                   href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                   x-bind:aria-expanded="open"
                                                   :class="{ 'text-blue-700 dark:text-gray-100': open }"
                                                   aria-expanded="false">
                                                    Users
                                                    <!-- caret -->
                                                    <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                  class="transform transition duration-300 ltr:-rotate-90 rtl:rotate-90"
                                                  :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                                  width=".8rem" height=".8rem" fill="currentColor"
                                                  viewBox="0 0 512 512">
                                                <polyline points="112 184 256 328 400 184"
                                                          style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                             </svg>
                                          </span>
                                                </a>
                                                <!--dropdown submenu-->
                                                <ul class="block rounded rounded-t-none top-full z-50 ltr:ml-3 rtl:mr-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                    style="min-width: 12rem; display: none;"
                                                    x-description="Dropdown menu" x-show="open" role="menu"
                                                    aria-orientation="vertical" aria-labelledby="sidemenu-03">
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="user-login.html">Login</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="user-register.html">Register</a></li>
                                                    <li>
                                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                           href="user-forgot.html">Forgot password</a></li>
                                                </ul>
                                            </li>
                                            <!--end submenu-->
                                        </ul>
                                    </li>
                                    <!-- dropdown -->
                                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                        @click.away="open = false">
                                        <a id="mobiledrop-03"
                                           class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="javascript:;" @click="open = !open" aria-haspopup="true"
                                           x-bind:aria-expanded="open"
                                           :class="{ 'text-blue-700 dark:text-gray-100': open }" aria-expanded="false">
                                            Docs
                                            <!-- caret -->
                                            <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                       <svg xmlns="http://www.w3.org/2000/svg"
                                            class="transform transition duration-300 ltr:-rotate-90 rtl:rotate-90"
                                            :class="{ 'rotate-0' : open , 'ltr:-rotate-90 rtl:rotate-90' : !open }"
                                            width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                          <polyline points="112 184 256 328 400 184"
                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                       </svg>
                                    </span>
                                        </a>
                                        <!-- dropdown menu -->
                                        <ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 mb-4"
                                            style="min-width: 12rem; display: none;" x-description="Dropdown menu"
                                            x-show="open" role="menu" aria-orientation="vertical"
                                            aria-labelledby="mobiledrop-03">
                                            <li class="relative">
                                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                   href="docs/index.html">Documentation</a>
                                            </li>
                                            <li class="relative">
                                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                   href="docs/components/alerts.html">Components</a>
                                            </li>
                                            <li class="relative">
                                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                   href="docs/started/changelog.html">Changelog</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="relative">
                                        <a href="docs/support.html"
                                           class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Support</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- copyright -->
                    <div class="mt-5 text-center">
                        <p>Copyright <a href="#">TailPro</a> - All right reserved</p>
                    </div>
                </nav>
            </div>
            <!-- End Mobile menu -->
            <!-- desktop menu -->
            <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0"
                 id="desktp-menu">
                <!-- logo -->
                <a class="hidden lg:flex items-center py-2 ltr:mr-4 rtl:ml-4 text-xl" href="index.html">
                    <img class="max-w-full h-20 mb-2 " src="public/image/logo.png" alt="Logo dark">
                </a>
                <!-- menu -->
                <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0">
                    <!-- dropdown -->
                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                        @mouseleave="open = false">
                        <a id="dropdown-mega"
                           class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                           href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                           x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }"
                           aria-expanded="false">
                            <span class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                  :class="{ 'opacity-100': open }"></span>
                            Home
                            <!-- caret -->
                            <span class="inline-block ltr:ml-2 rtl:mr-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor"
                                viewBox="0 0 512 512">
                              <polyline points="112 184 256 328 400 184"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                           </svg>
                        </span>
                        </a>
                        <!-- dropdown menu -->
                        <div class="block absolute left-1/2 right-auto transform -translate-x-1/2 border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                             style="min-width: 38rem; display: none;" x-description="Dropdown menu" x-show="open"
                             role="menu" aria-orientation="vertical" aria-labelledby="dropdown-mega"
                             x-transition:enter="transition duration-200"
                             x-transition:enter-start="transform opacity-0 translate-y-4"
                             x-transition:enter-end="transform opacity-100 translate-y-0"
                             x-transition:leave="transition translate-y-4"
                             x-transition:leave-start="transform opacity-100 translate-y-0"
                             x-transition:leave-end="transform opacity-0 translate-y-4">
                            <div class="flex flex-wrap flex-row text-center">
                                <div class="flex-shrink w-full max-w-full md:w-1/2 px-4">
                                    <div class="py-5">
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-advertising.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem"
                                                     fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975l1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Advertising</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-branding.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Branding</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-creative.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                                    <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Creative</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-digital.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"></path>
                                                    <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Digital</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-graphic.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-palette" viewBox="0 0 16 16">
                                                    <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                    <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Graphic</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex-shrink w-full max-w-full md:w-1/2 px-4 bg-gray-50 dark:bg-gray-900">
                                    <div class="py-5">
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-marketing.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                                                    <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Marketing</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-mobile-app.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-app-indicator"
                                                     viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"></path>
                                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Mobile App</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-seo.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">SEO</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-social-media.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Social Media</p>
                                            </div>
                                        </a>
                                        <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="index-web-design.html">
                                            <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"></path>
                                                </svg>
                                            </div>
                                            <div class="drop-text">
                                                <p class="fw-medium">Web Design</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex-shrink w-full px-4 text-center border-t border-gray-200 dark:border-gray-900 dark:bg-opacity-40">
                                    <div class="p-4 text-sm">Pre-build landing pages for your professional Agency.</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="relative">
                        <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                           href="snippets/index.html">
                            <span class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                            Snippets
                        </a>
                    </li>
                    <!-- dropdown with submenu-->
                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                        @mouseleave="open = false">
                        <a id="dropdown-02"
                           class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                           href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                           x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }"
                           aria-expanded="false">
                            <span class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                  :class="{ 'opacity-100': open }"></span>
                            Pages
                            <!-- caret -->
                            <span class="inline-block ltr:ml-2 rtl:mr-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor"
                                viewBox="0 0 512 512">
                              <polyline points="112 184 256 328 400 184"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                           </svg>
                        </span>
                        </a>
                        <!-- dropdown menu -->
                        <ul class="block absolute left-1/2 right-auto transform -translate-x-1/2 border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                            style="min-width: 12rem; display: none;" x-description="Dropdown menu" x-show="open"
                            role="menu" aria-orientation="vertical" aria-labelledby="dropdown-02"
                            x-transition:enter="transition duration-200"
                            x-transition:enter-start="transform opacity-0 translate-y-4"
                            x-transition:enter-end="transform opacity-100 translate-y-0"
                            x-transition:leave="transition translate-y-4"
                            x-transition:leave-start="transform opacity-100 translate-y-0"
                            x-transition:leave-end="transform opacity-0 translate-y-4">
                            <!--submenu-->
                            <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                @mouseleave="open = false">
                                <a id="submenu-01"
                                   class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                   href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                   x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }"
                                   aria-expanded="false">
                                    Pages
                                    <!-- caret -->
                                    <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="transform ltr:-rotate-90 rtl:rotate-90"
                                      width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                    <polyline points="112 184 256 328 400 184"
                                              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                 </svg>
                              </span>
                                </a>
                                <!--dropdown submenu-->
                                <ul class="block absolute ltr:left-full ltr:right-auto rtl:right-full rtl:left-auto transform border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                    style="min-width: 12rem; display: none;" x-description="Dropdown menu" x-show="open"
                                    role="menu" aria-orientation="vertical" aria-labelledby="submenu-01"
                                    x-transition:enter="transition duration-200"
                                    x-transition:enter-start="transform opacity-0 translate-y-4"
                                    x-transition:enter-end="transform opacity-100 translate-y-0"
                                    x-transition:leave="transition translate-y-4"
                                    x-transition:leave-start="transform opacity-100 translate-y-0"
                                    x-transition:leave-end="transform opacity-0 translate-y-4">
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="about.html">About</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="career.html">Career</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="contact.html">Contact</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="fax.html">Fax</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="portfolio.html">Portfolio</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="pricing.html">Pricing</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="services.html">Services</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="coming-soon.html">Coming soon</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="404.html">404</a></li>
                                </ul>
                            </li>
                            <!--end submenu-->
                            <!--submenu-->
                            <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                @mouseleave="open = false">
                                <a id="submenu-02"
                                   class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                   href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                   x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }"
                                   aria-expanded="false">
                                    Blogs
                                    <!-- caret -->
                                    <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="transform ltr:-rotate-90 rtl:rotate-90"
                                      width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                    <polyline points="112 184 256 328 400 184"
                                              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                 </svg>
                              </span>
                                </a>
                                <!--dropdown submenu-->
                                <ul class="block absolute ltr:left-full ltr:right-auto rtl:right-full rtl:left-auto transform border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                    style="min-width: 12rem; display: none;" x-description="Dropdown menu" x-show="open"
                                    role="menu" aria-orientation="vertical" aria-labelledby="submenu-02"
                                    x-transition:enter="transition duration-200"
                                    x-transition:enter-start="transform opacity-0 translate-y-4"
                                    x-transition:enter-end="transform opacity-100 translate-y-0"
                                    x-transition:leave="transition translate-y-4"
                                    x-transition:leave-start="transform opacity-100 translate-y-0"
                                    x-transition:leave-end="transform opacity-0 translate-y-4">
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="category.html">Category</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="category-list.html">Category list</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="search.html">Search</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="author.html">Author</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="single-post.html">Single post</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="full-width-post.html">Full width</a></li>
                                </ul>
                            </li>
                            <!--end submenu-->
                            <!--submenu-->
                            <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                @mouseleave="open = false">
                                <a id="submenu-03"
                                   class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                   href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                   x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }"
                                   aria-expanded="false">
                                    Users
                                    <!-- caret -->
                                    <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="transform ltr:-rotate-90 rtl:rotate-90"
                                      width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                    <polyline points="112 184 256 328 400 184"
                                              style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                                 </svg>
                              </span>
                                </a>
                                <!--dropdown submenu-->
                                <ul class="block absolute ltr:left-full ltr:right-auto rtl:right-full rtl:left-auto transform border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                    style="min-width: 12rem; display: none;" x-description="Dropdown menu" x-show="open"
                                    role="menu" aria-orientation="vertical" aria-labelledby="submenu-03"
                                    x-transition:enter="transition duration-200"
                                    x-transition:enter-start="transform opacity-0 translate-y-4"
                                    x-transition:enter-end="transform opacity-100 translate-y-0"
                                    x-transition:leave="transition translate-y-4"
                                    x-transition:leave-start="transform opacity-100 translate-y-0"
                                    x-transition:leave-end="transform opacity-0 translate-y-4">
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="user-login.html">Login</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="user-register.html">Register</a></li>
                                    <li>
                                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                           href="user-forgot.html">Forgot password</a></li>
                                </ul>
                            </li>
                            <!--end submenu-->
                        </ul>
                    </li>
                    <!-- dropdown -->
                    <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                        @mouseleave="open = false">
                        <a id="dropdown-01"
                           class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                           href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                           x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }"
                           aria-expanded="false">
                            <span class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                  :class="{ 'opacity-100': open }"></span>
                            Docs
                            <!-- caret -->
                            <span class="inline-block ltr:ml-2 rtl:mr-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor"
                                viewBox="0 0 512 512">
                              <polyline points="112 184 256 328 400 184"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"></polyline>
                           </svg>
                        </span>
                        </a>
                        <!-- dropdown menu -->
                        <ul class="block absolute left-1/2 right-auto transform -translate-x-1/2 border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                            style="min-width: 12rem; display: none;" x-description="Dropdown menu" x-show="open"
                            role="menu" aria-orientation="vertical" aria-labelledby="dropdown-01"
                            x-transition:enter="transition duration-200"
                            x-transition:enter-start="transform opacity-0 translate-y-4"
                            x-transition:enter-end="transform opacity-100 translate-y-0"
                            x-transition:leave="transition translate-y-4"
                            x-transition:leave-start="transform opacity-100 translate-y-0"
                            x-transition:leave-end="transform opacity-0 translate-y-4">
                            <li class="relative">
                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                   href="docs/index.html">Documentation</a>
                            </li>
                            <li class="relative">
                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                   href="docs/components/alerts.html">Components</a>
                            </li>
                            <li class="relative">
                                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                   href="docs/started/changelog.html">Changelog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                           href="docs/support.html">
                            <span class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                            Support
                        </a>
                    </li>
                </ul>
                <!-- button -->
                <div class="grid text-center lg:block my-4 lg:my-auto">
                    <a class="py-2 px-4 text-sm inline-block text-center rounded-md leading-normal text-gray-100 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0"
                       target="_blank" rel="noopener" href="#">
                        Add Your Listing
                    </a>
                    <a class="py-2 px-4 text-sm inline-block text-center rounded-md leading-normal text-gray-100 bg-blue-700 border border-blue-700 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0"
                       target="_blank" rel="noopener" href="#">
                        LOG IN
                    </a>
                </div>
            </div>
            <!-- end desktop menu -->
        </div>
    </nav>
    <!-- nav ends -->


    <!-- search bar starts-->
    <!-- bacground pic starts -->
    <div class="relative mx-auto bg-[url('bg.webp')] h-96 bg-cover bg-center bg-no-repeat"
         style="background-image: url(https://live.staticflickr.com/65535/51203074263_60f31b4b47_k.jpg)"></div>
    <!-- background pic ends -->

    <div id="exampleWrapper" class="relative w-1/2 -mt-64 mx-auto rounded-lg bg-gray-50 dark:border-gray-100 ">

        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">Profile
                    </button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Dashboard
                    </button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Settings
                    </button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent text-white-600 hover:text-blue-600 dark:text-white-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="true">Contacts
                    </button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800 hidden" id="profile" role="tabpanel"
                 aria-labelledby="profile-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800 hidden" id="dashboard" role="tabpanel"
                 aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                        content</strong>. Clicking another tab will toggle the visibility of this one for the next. The
                    tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800 hidden" id="settings" role="tabpanel"
                 aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="p-4 bg-gray-100 rounded-lg bg-gradient-to-r from-blue-300 to-cyan-700 id=" contacts
            " role="tabpanel" aria-labelledby="contacts-tab">
            <form>
                <div class="flex">
                    <label for="search-dropdown"
                           class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                            type="button">
                        All categories
                        <svg aria-hidden="true" class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="dropdown"
                         class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                         data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 623px, 0px);">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:b-white-600 dark:hover:text-white">
                                    Mockups
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Templates
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Design
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Logos
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                               class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                               placeholder="Search Mockups, Logos, Design Templates..." required="">
                        <button type="submit"
                                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- search bar ends -->


<!-- footer starts-->
<footer class=" bg-white sm:p-10 bg-gradient-to-l from-blue-800 to-cyan-700 max-h-screen">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://ARES.com/" class="flex items-center">
                <img src="public/image/logo.png" class="mr-3 h-20 " alt="ARES Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ARES    </span>
                <span class="self-center text-l ml-2 dark:text-white"> | New generation estate.</span>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://ARES.com/" class="hover:underline">ARES</a>
                    </li>
                    <li>
                        <a href="https://css.com/" class="hover:underline"> CSS</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://github.com/themesberg/ARES" class="hover:underline ">Github</a>
                    </li>
                    <li>
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://ARES.com/"
                                                                                            class="hover:underline">ARES™</a>. All Rights Reserved.
            </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                     data-darkreader-inline-fill="" style="--darkreader-inline-fill:currentColor;">
                    <path fill-rule="evenodd"
                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                     data-darkreader-inline-fill="" style="--darkreader-inline-fill:currentColor;">
                    <path fill-rule="evenodd"
                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                     data-darkreader-inline-fill="" style="--darkreader-inline-fill:currentColor;">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                     data-darkreader-inline-fill="" style="--darkreader-inline-fill:currentColor;">
                    <path fill-rule="evenodd"
                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                     data-darkreader-inline-fill="" style="--darkreader-inline-fill:currentColor;">
                    <path fill-rule="evenodd"
                          d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Dribbbel account</span>
            </a>
        </div>
    </div>
</footer>
<!--Footer Ends-->


<script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                msg: "hello"
            }
        },
        methods: {}
    }).mount('#app')
</script>
</body>
</html>