<?php
get_header();
?>
<section
    class="overflow-hidden bg-gradient-to-br from-white to-blue-100 py-16 dark:from-slate-950 dark:to-blue-950 md:py-20 lg:py-24">
    <div class="container px-3">
        <div class="flex flex-wrap justify-center gap-y-6">
            <div class="w-full sm:w-5/6 md:w-4/5 lg:w-3/5">
                <div class="text-center md:pb-5">
                    <h1
                        class="text-2xl/snug font-bold text-slate-700 dark:text-white xs:text-3xl/snug sm:text-4xl/snug md:text-5xl/snug lg:text-5xl/snug xl:text-6xl/tight">
                        Transform <span
                            class="bg-gradient-to-r from-indigo-500 to-blue-500 bg-clip-text text-transparent">your
                            ideas</span> into effective SEO content writing in seconds </h1>
                </div>
            </div>
            <div class="w-full md:w-4/5 lg:w-3/5">
                <form action="/ai-content-writing-seo" method="get">
                    <div
                        class="flex flex-wrap items-center rounded-md border border-slate-200 bg-white p-1 dark:border-slate-800 dark:bg-slate-950 sm:flex-nowrap">
                        <div class="relative w-full flex-grow sm:w-auto">
                            <input
                                type="text"
                                name="topic"
                                class="mb-0 w-full resize-none rounded-md border-0 bg-white px-3 py-3 text-center text-sm text-slate-600 placeholder:text-slate-400 focus:border-0 focus:shadow-none focus:outline-none focus:ring-0 disabled:bg-slate-100 disabled:text-slate-400 dark:bg-slate-950 dark:text-slate-200 sm:text-start"
                                rows="1" placeholder="Cafe Hồ Chí Minh"
                                id="prompt" />
                        </div>
                        <button type="submit"
                            class="inline-flex w-full justify-center rounded-md bg-blue-600 px-6 py-3 text-sm font-medium text-white transition-all hover:bg-blue-800 sm:w-auto">
                            Generate SEO Blog </button>
                    </div>
                </form>
                <p class="pt-3 text-center text-xs text-slate-600 dark:text-slate-200"> Boost your blog with
                    our AI blog writer, offering custom style tweaks, easy keyword fitting, plagiarism free
                    content, and support in many languages.. </p>
            </div>
            <div class="w-full md:w-4/5 lg:w-3/5">
                <div
                    class="-m-2 flex overflow-x-auto pt-3 scrollbar-thin scrollbar-track-transparent scrollbar-thumb-slate-600">
                    <div class="w-1/3 flex-shrink-0 p-2 xs:w-1/4 sm:w-1/5">
                        <label
                            class="relative flex h-full cursor-pointer flex-col has-[:checked]:cursor-default"
                            for="image-style-photo">
                            <input class="peer absolute h-0 w-0 opacity-0" type="radio" name="imageStyle"
                                id="image-style-photo" value="Photo" checked />
                            <img class="flex-shrink-0 rounded-t-md"
                                src="<?php echo get_template_directory_uri() ?>/images/a-childrens-school-made-of-classrooms-made-of-geodesic-domes-situated-on-an-old-golf-course-in-hawaii.jpg"
                                alt="" />
                            <span
                                class="flex flex-grow items-center justify-center rounded-b-md border border-t-0 border-slate-200 bg-white p-2 text-center text-xs font-bold text-slate-600 transition-all duration-500 peer-checked:border-blue-200 peer-checked:bg-blue-100 peer-checked:text-slate-700 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200 peer-checked:dark:border-blue-900 peer-checked:dark:bg-blue-950 peer-checked:dark:text-white">
                                Photo </span>
                        </label>
                    </div>
                    <div class="w-1/3 flex-shrink-0 p-2 xs:w-1/4 sm:w-1/5">
                        <label
                            class="relative flex h-full cursor-pointer flex-col has-[:checked]:cursor-default"
                            for="image-style-concept-art">
                            <input class="peer absolute h-0 w-0 opacity-0" type="radio" name="imageStyle"
                                id="image-style-concept-art" value="Concept Art" />
                            <img class="flex-shrink-0 rounded-t-md"
                                src="<?php echo get_template_directory_uri() ?>/images/baby-bandsaurus-drinking-coffee-with-baby-bottle.jpg" alt="" />
                            <span
                                class="flex flex-grow items-center justify-center rounded-b-md border border-t-0 border-slate-200 bg-white p-2 text-center text-xs font-bold text-slate-600 transition-all duration-500 peer-checked:border-blue-200 peer-checked:bg-blue-100 peer-checked:text-slate-700 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200 peer-checked:dark:border-blue-900 peer-checked:dark:bg-blue-950 peer-checked:dark:text-white">
                                Concept Art </span>
                        </label>
                    </div>
                    <div class="w-1/3 flex-shrink-0 p-2 xs:w-1/4 sm:w-1/5">
                        <label
                            class="relative flex h-full cursor-pointer flex-col has-[:checked]:cursor-default"
                            for="image-style-illustration">
                            <input class="peer absolute h-0 w-0 opacity-0" type="radio" name="imageStyle"
                                id="image-style-illustration" value="Illustration" />
                            <img class="flex-shrink-0 rounded-t-md" src="<?php echo get_template_directory_uri() ?>/images/happy-ice-cream-sining.jpg"
                                alt="" />
                            <span
                                class="flex flex-grow items-center justify-center rounded-b-md border border-t-0 border-slate-200 bg-white p-2 text-center text-xs font-bold text-slate-600 transition-all duration-500 peer-checked:border-blue-200 peer-checked:bg-blue-100 peer-checked:text-slate-700 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200 peer-checked:dark:border-blue-900 peer-checked:dark:bg-blue-950 peer-checked:dark:text-white">
                                Illustration </span>
                        </label>
                    </div>
                    <div class="w-1/3 flex-shrink-0 p-2 xs:w-1/4 sm:w-1/5">
                        <label
                            class="relative flex h-full cursor-pointer flex-col has-[:checked]:cursor-default"
                            for="image-style-fantasy">
                            <input class="peer absolute h-0 w-0 opacity-0" type="radio" name="imageStyle"
                                id="image-style-fantasy" value="Fantasy" />
                            <img class="flex-shrink-0 rounded-t-md"
                                src="<?php echo get_template_directory_uri() ?>/images/melted-candle-looks-like-a-fried-chicken-burger-in-pastel-colours.jpg"
                                alt="" />
                            <span
                                class="flex flex-grow items-center justify-center rounded-b-md border border-t-0 border-slate-200 bg-white p-2 text-center text-xs font-bold text-slate-600 transition-all duration-500 peer-checked:border-blue-200 peer-checked:bg-blue-100 peer-checked:text-slate-700 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200 peer-checked:dark:border-blue-900 peer-checked:dark:bg-blue-950 peer-checked:dark:text-white">
                                Fantasy </span>
                        </label>
                    </div>
                    <div class="w-1/3 flex-shrink-0 p-2 xs:w-1/4 sm:w-1/5">
                        <label
                            class="relative flex h-full cursor-pointer flex-col has-[:checked]:cursor-default"
                            for="image-style-isometric">
                            <input class="peer absolute h-0 w-0 opacity-0" type="radio" name="imageStyle"
                                id="image-style-isometric" value="Isometric" />
                            <img class="flex-shrink-0 rounded-t-md"
                                src="<?php echo get_template_directory_uri() ?>/images/hype-realistic-modern-bed-with-sandy-colors-white-background-and-cinematic-lights.jpg"
                                alt="" />
                            <span
                                class="flex flex-grow items-center justify-center rounded-b-md border border-t-0 border-slate-200 bg-white p-2 text-center text-xs font-bold text-slate-600 transition-all duration-500 peer-checked:border-blue-200 peer-checked:bg-blue-100 peer-checked:text-slate-700 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200 peer-checked:dark:border-blue-900 peer-checked:dark:bg-blue-950 peer-checked:dark:text-white">
                                Isometric </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</section><!-- section -->

<section class="overflow-hidden bg-white pt-16 dark:bg-slate-900 md:pt-20 lg:pt-24 xl:pt-28">
    <div class="container px-3">


        <div class="flex flex-col rounded-2xl bg-white shadow dark:bg-slate-900">
            <div
                class="flex flex-wrap items-center justify-center border-b border-slate-100 p-4 last:border-b-0 dark:border-slate-800 sm:p-8 lg:p-12">
                <div class="p-4 lg:w-6/12">
                    <div class="md:px-7">
                        <img class="hidden dark:block" src="<?php echo get_template_directory_uri() ?>/images/code-enhance-gfx-dark.png"
                            alt="" />
                        <img class="dark:hidden" src="<?php echo get_template_directory_uri() ?>/images/code-enhance-gfx.png" alt="" />
                    </div>
                </div>
                <div class="p-4 lg:w-6/12">
                    <h2 class="mb-2 text-[2.5rem] font-bold leading-tight text-slate-800 dark:text-white">
                        Boost Your Blogging with AI: Tool for <br />
                        <span
                            class="bg-gradient-to-r from-fuchsia-600 to-purple-600 bg-clip-text text-transparent">Writers
                            & Marketers</span>
                    </h2>

                    <p class="text-base/7 text-slate-500 dark:text-slate-300"> Open up new possibilities for
                        your writing with the AI Blog Writer, a great choice for freelance writers,
                        startups, agencies, social media influencers, and digital marketers. Write top-notch
                        blog posts fast using an easy-to-use platform made just for you. Whether you're
                        making fun content for your followers or pushing forward with your digital
                        marketing, this blog writing AI makes your writing process smoother and helps you
                        reach out to your audience. Explore AI blog writing and see your online presence
                        grow! </p>
                    <div class="flex flex-col gap-y-4 pt-7">
                        <div class="flex gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="my-1 h-6 w-6 flex-shrink-0 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                            </svg><!-- code-bracket - outline - heroicons  -->
                            <div class="">
                                <h4
                                    class="mb-1 text-base/snug font-bold text-slate-600 dark:text-slate-200 sm:text-lg/snug">
                                    Fast API </h4>
                                <p class="text-base/7 text-slate-500 dark:text-slate-400"> A high-performance toolkit for writer / affliater
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="my-1 h-6 w-6 flex-shrink-0 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg><!-- sparkles - outline - heroicons  -->
                            <div class="">
                                <h4
                                    class="mb-1 text-base/snug font-bold text-slate-600 dark:text-slate-200 sm:text-lg/snug">
                                    Quick Suggestions </h4>
                                <p class="text-base/7 text-slate-500 dark:text-slate-400"> Speed up your writing blog process! </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="my-1 h-6 w-6 flex-shrink-0 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                            </svg><!-- hashtag - outline - heroicons  -->
                            <div class="">
                                <h4
                                    class="mb-1 text-base/snug font-bold text-slate-600 dark:text-slate-200 sm:text-lg/snug">
                                    Intuitive User Experience </h4>
                                <p class="text-base/7 text-slate-500 dark:text-slate-400"> Navigate easily with
                                    an Intuitive User Experience designed for writer / affliater. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-wrap items-center justify-center border-b border-slate-100 p-4 last:border-b-0 dark:border-slate-800 sm:p-8 lg:flex-row-reverse lg:p-12">
                <div class="p-4 lg:w-6/12">
                    <div class="md:px-7">
                        <img class="hidden dark:block" src="<?php echo get_template_directory_uri() ?>/images/code-secure-gfx-dark.png"
                            alt="" />
                        <img class="dark:hidden" src="<?php echo get_template_directory_uri() ?>/images/code-secure-gfx.png" alt="" />
                    </div>
                </div>
                <div class="p-4 lg:w-6/12">
                    <h2 class="mb-3 text-2xl font-bold text-slate-800 dark:text-slate-200 sm:text-3xl/snug"> How to Use AI Blog Writer
                    </h2>
                    <p class="text-base/6 text-slate-500 dark:text-slate-400 sm:text-lg/7"> Get your blog ready in a few clicks with an AI blog writer. Here's how to use it:</p>
                    <div class="flex flex-col gap-y-6 pt-9">
                        <div class="flex gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="my-1 h-6 w-6 flex-shrink-0 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                            <div class="">
                                <p class="text-base/7 text-slate-500 dark:text-slate-400"> On the AI Writer App, click on 'Blog Writer' then add a topic & hit generate. </p>
                            </div>
                        </div>

                        <div class="flex gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="my-1 h-6 w-6 flex-shrink-0 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                            <div class="">
                                <p class="text-base/7 text-slate-500 dark:text-slate-400">Choose the topic, then blog outlines, after that add blog keywords. </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="my-1 h-6 w-6 flex-shrink-0 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                            <div class="">
                                <p class="text-base/7 text-slate-500 dark:text-slate-400">Click on the 'Generate' button to let AI analyze your prompt and generate a blog for you. </p>
                            </div>
                        </div>

                        <p class="text-base/6 text-slate-500 dark:text-slate-400 sm:text-lg/7"> Boost your blog reach with the AI blog writing tool on Instaink.</p>
                        <div class="pt-5">
                            <a href="/ai-content-writing-seo" class="inline-flex justify-center rounded-md bg-blue-600 px-6 py-3 text-sm font-medium text-white transition-all hover:bg-blue-800"> Write SEO Blog Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->




</section><!-- section -->

<section class="overflow-hidden bg-white pb-2 pt-16 dark:bg-slate-900 md:pt-20 lg:pt-24 xl:pt-28">
    <div class="container px-3">
        <div class="-m-4 flex flex-wrap items-center justify-center">
            <div class="p-4 md:w-4/5 lg:w-1/3">
                <div
                    class="rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="flex items-center pb-4">
                        <div class="flex gap-x-1 text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                        </div>
                        <span class="ms-5 text-sm text-slate-500 dark:text-slate-300">5 Stars</span>
                    </div>
                    <p class="text-lg/relaxed font-light italic text-slate-500 dark:text-slate-300"> Writing various types of content with the AI Writer allows me to expand the breadth and depth of my articles</p>
                    <div class="flex items-center pt-5">
                        <div
                            class="inline-flex h-12 w-12 flex-shrink-0 overflow-hidden rounded-full outline outline-1 outline-offset-2 outline-slate-300 dark:outline-slate-700">
                            <img src="<?php echo get_template_directory_uri() ?>/images/avatar/thumb/1.jpg" alt="" />
                        </div>
                        <div class="ms-5">
                            <h6 class="text-sm/snug font-bold text-slate-600 dark:text-slate-100"> Mia
                                Thompson </h6>
                            <span class="text-sm text-slate-400">Fusion Systems</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-4/5 lg:w-1/3">
                <div
                    class="rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="flex items-center pb-4">
                        <div class="flex gap-x-1 text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                        </div>
                        <span class="ms-5 text-sm text-slate-500 dark:text-slate-300">5 Stars</span>
                    </div>
                    <p class="text-lg/relaxed font-light italic text-slate-500 dark:text-slate-300"> The only thing I haven't figured out yet is how to set a tone for every article I write- such as through the lens of gardening or as a Law enforcement Officer. But I am learning!! </p>
                    <div class="flex items-center pt-5">
                        <div
                            class="inline-flex h-12 w-12 flex-shrink-0 overflow-hidden rounded-full outline outline-1 outline-offset-2 outline-slate-300 dark:outline-slate-700">
                            <img src="<?php echo get_template_directory_uri() ?>/images/avatar/thumb/5.jpg" alt="" />
                        </div>
                        <div class="ms-5">
                            <h6 class="text-sm/snug font-bold text-slate-600 dark:text-slate-100"> Dianne
                                Russell </h6>
                            <span class="text-sm text-slate-400">Horizon Tech</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-4/5 lg:w-1/3">
                <div
                    class="rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="flex items-center pb-4">
                        <div class="flex gap-x-1 text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg><!-- star - solid - heroicons  -->
                        </div>
                        <span class="ms-5 text-sm text-slate-500 dark:text-slate-300">5 Stars</span>
                    </div>
                    <p class="text-lg/relaxed font-light italic text-slate-500 dark:text-slate-300"> It is benefitting me in many ways. It helps with ideas and blog titles. The titles are always spot on and very easy to read. People are often captivated by titles first. This helps a great deal.</p>
                    <div class="flex items-center pt-5">
                        <div
                            class="inline-flex h-12 w-12 flex-shrink-0 overflow-hidden rounded-full outline outline-1 outline-offset-2 outline-slate-300 dark:outline-slate-700">
                            <img src="<?php echo get_template_directory_uri() ?>/images/avatar/thumb/10.jpg" alt="" />
                        </div>
                        <div class="ms-5">
                            <h6 class="text-sm/snug font-bold text-slate-600 dark:text-slate-100"> Liam
                                Anderson </h6>
                            <span class="text-sm text-slate-400">Nexus Dynamics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</section><!-- section -->
<!--
            <section class="overflow-hidden bg-white pt-16 dark:bg-slate-900 md:pt-20 lg:pt-24 xl:pt-28">
                <div class="container px-3">
                    <div class="flex flex-wrap items-center justify-center pb-8 lg:pb-12">
                        <div class="mx-auto w-full text-center sm:w-4/5 md:w-3/5 lg:w-2/5">
                            <h3
                                class="mb-3 text-3xl font-bold leading-tight text-slate-700 dark:text-white sm:text-[2.5rem]">
                                Lets take a look at our awesome results </h3>
                        </div>
                    </div>
                    <div class="-m-3 flex flex-wrap justify-center md:-m-4">
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/a-modern-and-innovative-commercial-booth-in-the-middle-of-the-desert.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> A modern and innovative
                                        commercial booth in the middle of the desert </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/a-teeny-tiny-cute-redheaded-gremlin-girl-reaching-her-hands-into-the-air-saying-because-I-love-you.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> a teeny tiny cute redheaded
                                        gremlin girl reaching her hands into the air saying &#39;because I love
                                        you!&#39;.jpg </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl" src="<?php echo get_template_directory_uri() ?>/images/angry-doughnut-walking-down-the-street.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> Angry doughnut walking down
                                        the street </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/design-the-world-through-the-eyes-of-a-neurodivergent-child-vivid-and-vibrant-colours-fun-white-background-hyper-realistic.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> design the world through
                                        the eyes of a neurodivergent child vivid and vibrant colours fun white
                                        background hyper-realistic </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl" src="<?php echo get_template_directory_uri() ?>/images/happy-ice-cream-sining.jpg" alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> Happy ice cream sining
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/cute-cat-as-calculator-macaroon-as-the-buttons-of-the-calculator-ribbon-happy-colors.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> cute cat as calculator
                                        macaroon as the buttons of the calculator ribbon happy colors </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl" src="<?php echo get_template_directory_uri() ?>/images/supplement-and-nutrition-company.jpg" alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> supplement and nutrition
                                        company </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/hyper-realistic-modern-sofa-with-pastel-colors-and-white-background-cinematic-light.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> Hyper realistic modern sofa
                                        with pastel colors and white background cinematic light </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/hyper-realistic-modern-furniture-with-white-background-and-pastel-colors-cinematic-lights.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> Hyper realistic modern
                                        furniture with white background and pastel colors cinematic lights </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/cute-cat-as-calculator-macaroon-as-the-buttons-of-the-calculator-ribbon-happy-colors2.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> cute cat as calculator
                                        macaroon as the buttons of the calculator ribbon happy colors </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/hype-realistic-modern-bed-with-sandy-colors-white-background-and-cinematic-lights.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> hype realistic modern bed
                                        with sandy colors white background and cinematic lights </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-3 md:w-1/3 md:p-4 xl:w-1/4">
                            <div class="group relative overflow-hidden rounded-xl lg:rounded-2xl">
                                <img class="rounded-2xl"
                                    src="<?php echo get_template_directory_uri() ?>/images/display-of-various-technological-products-colourful-pastel-abstract.jpg"
                                    alt="" />
                                <div
                                    class="pt-13 absolute bottom-0 w-full rounded-b-md bg-gradient-to-b from-transparent to-slate-900 p-5 opacity-0 transition-all group-hover:opacity-100">
                                    <span
                                        class="mb-1 inline-flex rounded bg-blue-500 px-2 pb-1 text-xs font-bold text-white">
                                        prompt </span>
                                    <span class="line-clamp-2 text-xs font-bold text-white"> display of various
                                        technological products colourful pastel abstract </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			-->
</section><!-- section -->
<section class="overflow-hidden bg-white pb-2 pt-16 dark:bg-slate-900 md:pt-20 lg:pt-24 xl:pt-28">
    <div class="container px-3">
        <div class="flex flex-wrap items-center justify-center pb-8 lg:pb-12">
            <div class="mx-auto w-full text-center sm:w-4/5 md:w-3/5 lg:w-2/5">
                <h3
                    class="mb-3 text-3xl font-bold leading-tight text-slate-700 dark:text-white sm:text-[2.5rem]">
                    Check out what else we can do for you. </h3>
            </div>
        </div>
        <div class="-m-3 flex flex-wrap justify-center md:-m-4">
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3">
                <div
                    class="h-full rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="inline-block rounded-lg bg-blue-100 p-3 text-blue-500 dark:bg-blue-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                        </svg><!-- square-3-stack-3d - outline - heroicons  -->
                    </div>
                    <h6 class="pb-3 pt-3 text-lg font-bold text-slate-600 dark:text-slate-200"> Various art
                        styles </h6>
                    <p class="text-sm/6 text-slate-500 dark:text-slate-400"> Render your AI-generated images
                        in stunning art styles like Photo, Concept Art, Illustration, Fantasy, Isometric,
                        and more. </p>
                </div>
            </div>
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3">
                <div
                    class="h-full rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="inline-block rounded-lg bg-blue-100 p-3 text-blue-500 dark:bg-blue-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg><!-- sparkles - outline - heroicons  -->
                    </div>
                    <h6 class="pb-3 pt-3 text-lg font-bold text-slate-600 dark:text-slate-200"> Enhance your
                        images </h6>
                    <p class="text-sm/6 text-slate-500 dark:text-slate-400"> Using our awesome and dynamic
                        Photo Editor to fix your photo’s focus, lighting, and coloring with easy-to-use
                        sliders. </p>
                </div>
            </div>
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3">
                <div
                    class="h-full rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="inline-block rounded-lg bg-blue-100 p-3 text-blue-500 dark:bg-blue-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg><!-- pencil-square - outline - heroicons  -->
                    </div>
                    <h6 class="pb-3 pt-3 text-lg font-bold text-slate-600 dark:text-slate-200"> Magic Edit
                    </h6>
                    <p class="text-sm/6 text-slate-500 dark:text-slate-400"> Want to enhance the color or
                        texture of an object Magic Edit lets you add to, replace, or edit your image with
                        short prompt. </p>
                </div>
            </div>
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3">
                <div
                    class="h-full rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="inline-block rounded-lg bg-blue-100 p-3 text-blue-500 dark:bg-blue-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                        </svg><!-- arrow-path-rounded-square - outline - heroicons  -->
                    </div>
                    <h6 class="pb-3 pt-3 text-lg font-bold text-slate-600 dark:text-slate-200"> One Click
                        Re-Generate </h6>
                    <p class="text-sm/6 text-slate-500 dark:text-slate-400"> Didn't like what you see, just
                        hit that big fat Re-Generate button as many time you want, until you get something
                        awesome. </p>
                </div>
            </div>
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3">
                <div
                    class="h-full rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="inline-block rounded-lg bg-blue-100 p-3 text-blue-500 dark:bg-blue-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9.75v6.75m0 0-3-3m3 3 3-3m-8.25 6a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg><!-- cloud-arrow-down - outline - heroicons  -->
                    </div>
                    <h6 class="pb-3 pt-3 text-lg font-bold text-slate-600 dark:text-slate-200"> Access
                        anywhere </h6>
                    <p class="text-sm/6 text-slate-500 dark:text-slate-400"> Jump from device to
                        desktop—design how you work best! Scribbler autosaves your progress along the way.
                    </p>
                </div>
            </div>
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3">
                <div
                    class="h-full rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <div class="inline-block rounded-lg bg-blue-100 p-3 text-blue-500 dark:bg-blue-950">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                        </svg><!-- share - outline - heroicons  -->
                    </div>
                    <h6 class="pb-3 pt-3 text-lg font-bold text-slate-600 dark:text-slate-200"> Easy sharing
                        and exporting </h6>
                    <p class="text-sm/6 text-slate-500 dark:text-slate-400"> Spread the word with easy sharing with pc, mobile tablet. exporting options including as a JPG, PNG, or PDF.
                    </p>
                </div>
            </div>
        </div>
    </div><!-- container -->
</section><!-- section -->
<section id="pricing-section" class="overflow-hidden bg-white pb-2 pt-16 dark:bg-slate-900 md:pt-20 lg:pt-24 xl:pt-28">
    <div class="container px-3">
        <div class="flex flex-wrap items-center justify-center pb-8 lg:pb-12">
            <div class="mx-auto w-full text-center sm:w-4/5 md:w-4/5 lg:w-3/5 xl:w-1/2 2xl:w-2/5">
                <h3
                    class="mb-3 text-3xl font-bold leading-tight text-slate-700 dark:text-white sm:text-[2.5rem]">
                    Start with free, subscribe for more features. </h3>
            </div>
        </div>
        <div class="-m-3 flex flex-wrap justify-center md:-m-4">
            <div class="w-full p-3 md:p-4 lg:w-1/3 xl:w-1/4">
                <div
                    class="rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <h2 class="text-3xl/snug font-bold text-blue-600">Free</h2>
                    <p class="mb-3 text-lg text-slate-600 dark:text-slate-200"> I just need the basics! </p>
                    <p class="text-sm/6 text-slate-500 dark:text-slate-400"> Unleash creativity without
                        costs, transforming ideas into visuals effortlessly. </p>
                    <div class="mt-5">
                        <button
                            class="inline-flex w-full justify-center rounded-lg border border-slate-200 bg-white px-7 py-3 text-base font-bold text-slate-600 transition-all hover:border-blue-600 hover:bg-blue-600 hover:text-white dark:border-slate-800 dark:bg-slate-900 dark:text-slate-300 hover:dark:border-blue-600 hover:dark:bg-blue-600 hover:dark:text-white">
                            Sign up for free </button>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3 xl:w-1/4">
                <div
                    class="rounded-2xl border border-slate-100 bg-white p-7 shadow ring-2 ring-blue-300 dark:border-slate-950 dark:bg-slate-950 dark:ring-blue-900">
                    <h2
                        class="w-max bg-gradient-to-r from-blue-600 to-pink-500 bg-clip-text text-2xl/snug font-bold text-transparent">
                        Premium </h2>
                    <div class="mb-6 mt-2 flex items-baseline gap-x-2">
                        <span class="text-4xl font-bold tracking-tight text-slate-700 dark:text-white"> $XX
                        </span>
                        <span
                            class="text-sm font-semibold leading-6 tracking-wide text-slate-500 dark:text-slate-400">
                            Month</span>
                    </div>
                    <ul
                        class="flex flex-col gap-y-3 text-sm font-medium text-slate-500 dark:text-slate-400">
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>
                                <strong class="text-slate-600 dark:text-slate-200">50</strong>
                                &nbsp; Generations </span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>Unlimited Words</span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>
                                Humanizer Tool
                                Rewrite 100 Articles </span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>WordPress Integration</span>
                        </li>
                    </ul>
                    <div class="mt-7">
                        <button
                            class="inline-flex w-full justify-center rounded-lg bg-blue-600 px-7 py-3 text-base font-bold text-white transition-all hover:bg-blue-800">
                            Start 7 Days Free Trail </button>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 sm:w-1/2 md:p-4 lg:w-1/3 xl:w-1/4">
                <div
                    class="rounded-2xl border border-slate-100 bg-white p-7 shadow dark:border-slate-950 dark:bg-slate-950">
                    <h2 class="w-max text-2xl/snug font-bold text-slate-700 dark:text-blue-500"> Corporate
                    </h2>
                    <div class="mb-6 mt-2 flex items-baseline gap-x-2">
                        <span class="text-4xl font-bold tracking-tight text-slate-700 dark:text-white"> $99999
                        </span>
                        <span
                            class="text-sm font-semibold leading-6 tracking-wide text-slate-500 dark:text-slate-400">
                            Month</span>
                    </div>
                    <ul
                        class="flex flex-col gap-y-3 text-sm font-medium text-slate-500 dark:text-slate-400">
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>
                                <strong class="text-slate-600 dark:text-slate-200">250</strong> Generations</span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>Unlimited Words </span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>Humanizer Tool
                                Unlimited Rewrites </span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            <span>API </span>
                        </li>

                    </ul>
                    <div class="mt-7">
                        <button
                            class="inline-flex w-full justify-center rounded-lg border border-slate-200 bg-white px-7 py-3 text-base font-bold text-slate-600 transition-all hover:border-blue-600 hover:bg-blue-600 hover:text-white dark:border-slate-800 dark:bg-slate-900 dark:text-slate-300 hover:dark:border-blue-600 hover:dark:bg-blue-600 hover:dark:text-white">
                            Get in touch </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</section><!-- section -->
<section class="overflow-hidden bg-white py-16 dark:bg-slate-900 md:py-20 lg:py-24 xl:py-28">
    <div class="container px-3">
        <div class="flex flex-wrap items-center justify-center pb-8 lg:pb-10">
            <div class="text- mx-auto text-center sm:w-2/3 md:w-3/5 lg:w-2/5">
                <h3 class="mb-3 text-3xl font-bold leading-tight text-slate-700 dark:text-white"> AI Blog Writer FAQs </h3>
            </div>
        </div>
        <div class="-m-3 flex flex-wrap justify-center md:-m-4">
            <div class="w-full p-3 md:p-4 xl:w-3/4">
                <div class="accordion flex flex-col gap-3">
                    <div
                        class="accordion-item active group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                What is an AI Blog Writer and what can it do for me? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7"> AI Blog Writer is a powerful tool within the AI Writer platform that takes the hassle out of crafting high-quality, SEO-optimized blog posts. It guides you through a three-step process: first, generating ideas and titles based on your chosen topic, then building a comprehensive outline, and finally, optimizing your post with relevant keywords. This AI blog writer streamlines your writing process, saving you time and ensuring your blog posts are primed for search engine success. </p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->
                    <div
                        class="accordion-item group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                How does the AI Blog Writer ensure SEO optimization in blog posts? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7"> The AI Blog Writer is equipped with advanced AI blog writing capabilities that include SEO optimization. It intelligently incorporates relevant keywords, optimizes for search engine algorithms, and structures the content to enhance online visibility. This feature makes it an invaluable blog writing tool for creating content that not only engages readers but also ranks well on search engines. </p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->
                    <div
                        class="accordion-item group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                Can the AI Blog Writer create content for different industries and niches? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7"> Yes. The AI blog writer is versatile and capable of generating content for a wide range of industries and niches. It adapts to different tones, styles, and specific content requirements, making it a flexible tool for diverse blog writing needs. Whether you're a startup, an agency, or a freelancer, this tool can tailor its output to suit your unique content requirements.
                                </p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->
                    <div
                        class="accordion-item group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                Does AI Blog Writer guarantee my blog will rank #1 on Google? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7">While AI Blog Writer provides powerful tools to optimize your content for search engines, ranking #1 on Google depends on a variety of factors beyond keyword optimization. However, by using this tool, you'll be giving your blog posts a strong foundation for SEO success, putting you ahead of the curve in the race for search engine visibility. </p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->
                    <div
                        class="accordion-item group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                Can I use AI Blog Writer for free? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7"> No, we do not offer AI Blog Writer for free. However, we provide it at an affordable price, which includes a limited word count allowance per month. This gives you a chance to experience its features and see how it can benefit your blog writing process. Paid plans offer increased word limits and additional features, making them ideal for those who produce a high volume of content. Checkout our pricing.</p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->

                    <div
                        class="accordion-item group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                What types of keywords can I use with an AI Blog Writer? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7">You can include long-tail keywords, short-tail keywords, and related keywords when optimizing your blog post. The tool offers you to integrate keywords into your blog post to further strengthen your SEO strategy. Experiment with different keyword combinations to find the optimal mix for your target audience.</p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->
                    <div
                        class="accordion-item group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                What types of keywords can I use with Instaink AI Blog Writer? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7"> You can include long-tail keywords, short-tail keywords, and related keywords when optimizing your blog post. The tool offers you to integrate keywords into your blog post to further strengthen your SEO strategy. Experiment with different keyword combinations to find the optimal mix for your target audience.</p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->
                    <div
                        class="accordion-item group rounded-2xl border border-slate-100 bg-white shadow dark:border-slate-950 dark:bg-slate-950">
                        <button
                            class="accordion-toggle flex w-full items-center justify-between px-6 py-4 text-start font-bold text-slate-600 dark:text-slate-200">
                            <span
                                class="block text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white">
                                Is AI Blog Writer safe to use? Will it plagiarize my content? </span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="ms-2 h-2.5 transition-all group-[.active]:rotate-180">
                                <path fill="currentColor"
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </button><!-- accordion-toggle -->
                        <div
                            class="accordion-body px-6 pb-5 text-base text-slate-500 group-[.active]:block dark:text-slate-400">
                            <div class="max-w-3xl">
                                <p class="text-base/7">Instaink AI Blog Writer takes plagiarism seriously. It generates original content based on its vast database of text and code, ensuring your work remains unique and authentic with an inbuilt plagiarism checker. You can further customize your content and add your own spin to the suggestions, making it completely your own.</p>
                            </div>
                        </div><!-- accordion-body -->
                    </div><!-- accordion-item -->

                </div><!-- accordion -->
            </div>
        </div>
    </div><!-- container -->
</section><!-- section -->

<?php
get_footer();
?>
