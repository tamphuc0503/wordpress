<!DOCTYPE html>
<html <?php language_attributes(); ?> id="pageroot" class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="Themeyn">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title><?php wp_title('|', true, 'right'); ?></title>
     <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/website.css?v=<?php echo rand(1, 100) ?>">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/custom.css?v=<?php echo rand(1, 100) ?>">
	
	 <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-w-[320px] bg-slate-100 dark:bg-slate-900">
    <div id="root">
        <div class="flex min-h-screen max-w-full flex-col overflow-x-hidden pt-[calc(theme(space.16)+theme(space.1))]"
            id="#pagecontent">
            <div
                class="fixed start-0 top-0 isolate z-[1020] w-full border-b border-slate-200 bg-white px-3 py-4 dark:border-slate-800 dark:bg-slate-950 xl:py-3">
                <div class="container px-3">
                    <div class="w-100 flex items-center justify-between">
                        <div class="flex items-center gap-x-2">
                            <div class="-ms-1.5 xl:hidden">
                                <button
                                    class="header-toggle inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full text-slate-400 transition-all hover:bg-slate-200 hover:text-slate-600 hover:dark:bg-slate-800 hover:dark:text-slate-200 [&.active]:bg-slate-200 [&.active]:text-slate-600 [&.active]:dark:bg-slate-800 [&.active]:dark:text-slate-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg><!-- bars-3 - outline - heroicons -->
                                </button>
                            </div>
                            <a href="/" class="flex-shrink-0">
                                <div class="flex items-center">
                                    <img class="h-6 dark:hidden" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="logo" />
                                    <img class="hidden h-6 dark:block" src="<?php echo get_template_directory_uri() ?>/images/logo-white.png" alt="logo" />
                                </div>
                            </a>
                        </div>
                        <div
                            class="main-header peer fixed start-0 top-0 z-[1020] flex h-screen w-64 flex-shrink-0 -translate-x-full flex-col border-e border-slate-200 bg-white py-4 dark:border-slate-800 dark:bg-slate-950 max-xl:overflow-auto max-xl:transition-all xl:static xl:h-auto xl:w-auto xl:!translate-x-0 xl:border-e-0 xl:py-0 xl:transition-none rtl:translate-x-full [&.header-visible]:translate-x-0">
                            <ul class="menu-head flex flex-col gap-x-6 px-4 xl:flex-row xl:items-center">
                              
								<li
                                    class="menu-item group relative xl:[&:hover>*.sub-menu]:visible xl:[&:hover>*.sub-menu]:translate-y-0 xl:[&:hover>*.sub-menu]:opacity-100">
                                    <a href="/#pricing-section"
                                        class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                                        <span>Pricing</span>
                                    </a>
                                </li>
								<li
                                    class="menu-item group relative xl:[&:hover>*.sub-menu]:visible xl:[&:hover>*.sub-menu]:translate-y-0 xl:[&:hover>*.sub-menu]:opacity-100">
                                    <a href="/ai-content-writing-seo/"
                                        class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                                        <span>AI content</span>
                                    </a>
                                </li>
								 <li
                                    class="menu-item group relative xl:[&:hover>*.sub-menu]:visible xl:[&:hover>*.sub-menu]:translate-y-0 xl:[&:hover>*.sub-menu]:opacity-100">
                                    <a href="/services/"
                                        class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                                        <span>Services</span>
                                    </a>
                                </li>
								
                                <li
                                    class="menu-item group relative xl:[&:hover>*.sub-menu]:visible xl:[&:hover>*.sub-menu]:translate-y-0 xl:[&:hover>*.sub-menu]:opacity-100">
                                    <a href="/about-us/"
                                        class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                                        <span>About us</span>
                                    </a>
                                </li>
								
								<li
                                    class="menu-item group relative xl:[&:hover>*.sub-menu]:visible xl:[&:hover>*.sub-menu]:translate-y-0 xl:[&:hover>*.sub-menu]:opacity-100">
                                    <a href="/blog"
                                        class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                                        <span>Blog</span>
                                    </a>
                                </li>
								
								 <li
                                    class="menu-item group relative xl:[&:hover>*.sub-menu]:visible xl:[&:hover>*.sub-menu]:translate-y-0 xl:[&:hover>*.sub-menu]:opacity-100">
                                    <a href="/contact/"
                                        class="menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                                        <span>Contact</span>
                                    </a>
                                </li>
                                
                                <!--
                                <li
                                    class="menu-item has-sub group relative xl:[&:hover>*.sub-menu]:visible xl:[&:hover>*.sub-menu]:translate-y-0 xl:[&:hover>*.sub-menu]:opacity-100">
                                    <a href="#"
                                        class="has-toggle menu-link flex items-center py-2 text-sm font-medium text-slate-700 group-hover:text-blue-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-100 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600 xl:py-3">
                                        <span>Pages</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="ms-2 h-2 fill-current">
                                            <path
                                                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                        </svg>
                                    </a>

                                    <div
                                        class="sub-menu hidden rounded-lg border border-slate-200 bg-white transition-all dark:border-slate-800 dark:bg-slate-950 xl:invisible xl:absolute xl:!block xl:w-40 xl:-translate-y-2 xl:transition-all">
                                        <ul class="relative py-2">
                                            <li class="menu-item group relative">
                                                <a href="./contact.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Contact Us</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./terms.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Terms and Condition</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./about.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>About Us</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./pricing.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Pricing</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./404.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>404 Error</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./create-account.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Create Account</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./login.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Login</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./two-step.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Two Step Verify</span>
                                                </a>
                                            </li>
                                            <li class="my-2 border-t border-slate-200 dark:border-slate-800"></li>
                                            <li class="menu-item group relative">
                                                <a href="./ui-components.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Components</span>
                                                    <span
                                                        class="ms-1 text-[10px] leading-3 px-2 py-1 text-slate-600 dark:text-slate-200 bg-slate-200 dark:bg-slate-800 rounded-sm">New</span>
                                                </a>
                                            </li>
                                            <li class="my-2 border-t border-slate-200 dark:border-slate-800"></li>
                                            <li class="menu-item group relative">
                                                <a href="./app/overview.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>App (User)</span>
                                                </a>
                                            </li>
                                            <li class="menu-item group relative">
                                                <a href="./admin/dashboard.html"
                                                    class="menu-link flex items-center px-4 py-2 text-xs font-medium text-slate-600 group-[.active>]:text-blue-600 hover:text-blue-600 dark:text-slate-200 group-[.active>]:dark:text-blue-600 hover:dark:text-blue-600">
                                                    <span>Dashboard</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
								-->
                            </ul>
                        </div>
                        <div
                            class="header-toggle pointer-events-none fixed inset-0 z-[1019] bg-slate-950 bg-opacity-50 opacity-0 peer-[.header-visible]:pointer-events-auto peer-[.header-visible]:opacity-100 xl:!opacity-0">
                        </div>
                        <!-- overlay -->
                        <ul class="flex items-center gap-x-3 lg:gap-x-5">
                            <li class="relative inline-flex">
                                <button
                                    class="theme-toggle inline-flex h-8 w-8 items-center justify-center overflow-hidden rounded-full text-slate-400 transition-all *:pointer-events-none hover:bg-slate-200 hover:text-slate-600 dark:bg-slate-800 dark:text-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="hidden h-4 dark:block">
                                        <path fill-rule="evenodd"
                                            d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z"
                                            clip-rule="evenodd" />
                                    </svg><!-- moon - solid - heroicons  -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 dark:hidden">
                                        <path
                                            d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
                                    </svg><!-- sun - solid - heroicons  -->
                                </button>
                            </li>
                            <li class="relative inline-flex">
                                <a href="/ai-content-writing-seo"
                                    class="inline-flex rounded-full bg-blue-600 px-5 py-2 text-sm font-medium text-white transition-all hover:bg-blue-800">
                                   Start Writing With AI
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- header -->