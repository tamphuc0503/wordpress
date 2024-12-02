<?php
get_header();
?>
<div class="relative my-auto py-10">
                <div class="container px-3">
                    <div class="mt-auto flex flex-wrap items-center justify-center">
                        <div class="w-full px-6 sm:w-4/5 md:w-3/5 lg:w-2/5">
                            <div class="dark:hidden">
                                <img class="h-full" src="<?php echo get_template_directory_uri() ?>/assets/images/robot404.svg" alt="">
                            </div>
                            <div class="hidden dark:block">
                                <img class="h-full" src="<?php echo get_template_directory_uri() ?>/assets/images/dark-robot404.svg" alt="">
                            </div>
                        </div>
                        <div class="w-full px-6 text-center sm:w-4/5 md:w-3/5 lg:w-2/5 lg:text-start">
                            <div class="mb-6 hidden text-7xl font-bold text-blue-600 lg:block"> Oops! </div>
                            <h3 class="mb-4 font-bold leading-snug text-slate-700 dark:text-white lg:text-3xl 2xl:text-4xl"> The page you are looking for doesn't exist. </h3>
                            <p class="mb-5 text-sm text-slate-600 dark:text-slate-200"> It's possible that the page you're looking for has been removed, renamed, or is temporarily unavailable. </p>
                            <a href="/" class="inline-flex rounded-full bg-blue-600 px-5 py-2 text-sm font-medium text-white transition-all hover:bg-blue-800"> Back to Home </a>
                        </div>
                    </div>
                </div><!-- container -->
            </div>

<?php
get_footer();
?>