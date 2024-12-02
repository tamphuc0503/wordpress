<?php
/* Template Name: Seo writer Template */
get_header();

$topic = $_GET['topic'] ?? '';
?>

  <div class="relative px-3 py-10">
                <div class="container px-3">
                    <div class="flex flex-wrap items-start gap-8 xl:flex-nowrap">

                        <div class="tab-content flex-grow-1 w-full">
                            <div class="tab-panel active hidden [&.active]:block" id="article-generator">
                                <div
                                    class="flex flex-wrap rounded-lg border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 lg:flex-nowrap xl:max-h-[calc(100vh-theme(space.52))]">
                                    <div
                                        class="w-full border-b border-slate-200 dark:border-slate-800 lg:w-2/5 lg:border-b-0 lg:border-e">
                                        <div
                                            class="h-full overflow-auto p-6 scrollbar-thin scrollbar-track-transparent scrollbar-thumb-slate-400">
                                            <form id="article-generator-form">
                                                <div class="flex items-center pb-2">
                                                    <div class="me-3 h-6">
                                                        <svg viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg" class="h-full">
                                                            <path class="fill-blue-300"
                                                                d="M13.7087 3.30729C12.6049 2.90591 11.395 2.90591 10.2913 3.30729L3.24266 5.87042C1.48732 6.50872 1.4873 8.99128 3.24266 9.62959L10.2913 12.1927C11.395 12.5941 12.6049 12.5941 13.7087 12.1927L20.7573 9.62959C22.5126 8.99128 22.5126 6.50873 20.7573 5.87042L13.7087 3.30729Z" />
                                                            <path class="fill-blue-600" fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M2.05781 12.395C2.24283 11.8746 2.81467 11.6028 3.33504 11.7878L11.33 14.6304C11.7634 14.7845 12.2367 14.7845 12.67 14.6304L20.665 11.7878C21.1854 11.6028 21.7572 11.8746 21.9422 12.395C22.1273 12.9154 21.8554 13.4872 21.335 13.6722L13.3401 16.5149C12.4733 16.8231 11.5268 16.8231 10.66 16.5149L2.66502 13.6722C2.14465 13.4872 1.87279 12.9154 2.05781 12.395Z" />
                                                            <path class="fill-blue-300" fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M2.05781 16.645C2.24283 16.1246 2.81467 15.8528 3.33504 16.0378L11.33 18.8804C11.7634 19.0345 12.2367 19.0345 12.67 18.8804L20.665 16.0378C21.1854 15.8528 21.7572 16.1246 21.9422 16.645C22.1273 17.1654 21.8554 17.7372 21.335 17.9222L13.3401 20.7649C12.4733 21.0731 11.5268 21.0731 10.66 20.7649L2.66502 17.9222C2.14465 17.7372 1.87279 17.1654 2.05781 16.645Z" />
                                                        </svg>
                                                    </div>
                                                    <h5 class="text-lg font-bold text-slate-700 dark:text-white">
                                                        Article Generator </h5>
                                                </div>

                                                <div class="-mx-3 -my-2 flex flex-wrap">
                                                    <div class="w-full px-3 py-2">
                                                        <label for="article-generator-title"
                                                            class="mb-2 inline-flex cursor-pointer text-sm font-bold text-slate-600 dark:text-slate-200">
                                                            Topic </label>

                                                        <input
                                                            value="<?php echo $topic ?>"
                                                            class="z-10 w-full rounded-md border-slate-200 bg-white py-2 text-sm/[1.125rem] text-slate-600 placeholder:text-slate-400 focus:border-slate-200 focus:shadow-none focus:outline-none disabled:bg-slate-100 disabled:text-slate-400 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200 placeholder:dark:text-slate-500"
                                                            placeholder="Quán cà phê đẹp Sài Gòn"
                                                            id="article-generator-title" />

                                                        </textarea>
                                                    </div>
                                                    <div class="w-full px-3 py-2">
                                                        <label for="article-generator-keywords"
                                                            class="mb-2 inline-flex cursor-pointer text-sm font-bold text-slate-600 dark:text-slate-200">
                                                            Keywords <span
                                                                class="ms-2 mt-0.5 self-start text-xs text-slate-500 dark:text-slate-400">
                                                                Comma Seperated </span>
                                                        </label>

                                                        <textarea
                                                            class="mb-0 w-full rounded-md border-slate-200 bg-white py-2 text-sm text-slate-600 focus:border-slate-200 focus:shadow-none focus:outline-none dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200"
                                                            placeholder="Quán cà phê đẹp Sài Gòn hẹn hò, Quán cà phê đẹp Sài Gòn cuối tuần với gia đình"
                                                            id="article-generator-sub-keywords" rows="4"></textarea>

                                                    </div>
                                                    <div class="w-full px-3 py-2 sm:w-1/2 lg:w-full">
                                                        <label for="article-generator-language"
                                                            class="mb-2 inline-flex cursor-pointer text-sm font-bold text-slate-600 dark:text-slate-200">
                                                            Language </label>
                                                        <select
                                                            class="js-select z-10 w-full rounded-md border-slate-200 bg-white py-2 text-sm text-slate-600 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200"
                                                            id="article-generator-language">
                                                            <option>Việt Nam</option>
                                                        </select>
                                                    </div>
                                                    <div class="w-full px-3 py-2 sm:w-1/2 lg:w-full">
                                                        <label for="article-generator-tone"
                                                            class="mb-2 inline-flex cursor-pointer text-sm font-bold text-slate-600 dark:text-slate-200">
                                                            Writing Style </label>
                                                        <select
                                                            class="js-select z-10 w-full rounded-md border-slate-200 bg-white py-2 text-sm text-slate-600 dark:border-slate-800 dark:bg-slate-950 dark:text-slate-200"
                                                            id="article-generator-tone">
                                                            <option>Blog</option>
                                                        </select>
                                                    </div>

                                                    <div class="px-3 py-2">
                                                        <button type="submit"
                                                            class="inline-flex rounded-full bg-blue-600 px-5 py-2 text-sm font-medium text-white transition-all hover:bg-blue-800">
                                                            Generate </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="w-full lg:w-3/5">
                                        <div
                                            class="h-full overflow-x-auto p-6 scrollbar-thin scrollbar-track-slate-200 scrollbar-thumb-slate-600 dark:scrollbar-track-slate-800">

                                            <div id="article-generator-result">
                                                <div class="mb-3 h-16">
                                                    <svg viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" class="h-full">
                                                        <path class="fill-blue-300"
                                                            d="M13.7087 3.30729C12.6049 2.90591 11.395 2.90591 10.2913 3.30729L3.24266 5.87042C1.48732 6.50872 1.4873 8.99128 3.24266 9.62959L10.2913 12.1927C11.395 12.5941 12.6049 12.5941 13.7087 12.1927L20.7573 9.62959C22.5126 8.99128 22.5126 6.50873 20.7573 5.87042L13.7087 3.30729Z" />
                                                        <path class="fill-blue-600" fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M2.05781 12.395C2.24283 11.8746 2.81467 11.6028 3.33504 11.7878L11.33 14.6304C11.7634 14.7845 12.2367 14.7845 12.67 14.6304L20.665 11.7878C21.1854 11.6028 21.7572 11.8746 21.9422 12.395C22.1273 12.9154 21.8554 13.4872 21.335 13.6722L13.3401 16.5149C12.4733 16.8231 11.5268 16.8231 10.66 16.5149L2.66502 13.6722C2.14465 13.4872 1.87279 12.9154 2.05781 12.395Z" />
                                                        <path class="fill-blue-300" fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M2.05781 16.645C2.24283 16.1246 2.81467 15.8528 3.33504 16.0378L11.33 18.8804C11.7634 19.0345 12.2367 19.0345 12.67 18.8804L20.665 16.0378C21.1854 15.8528 21.7572 16.1246 21.9422 16.645C22.1273 17.1654 21.8554 17.7372 21.335 17.9222L13.3401 20.7649C12.4733 21.0731 11.5268 21.0731 10.66 20.7649L2.66502 17.9222C2.14465 17.7372 1.87279 17.1654 2.05781 16.645Z" />
                                                    </svg>
                                                </div>

                                                <div class="font-medium text-slate-500 dark:text-slate-400"> Filling the
                                                    form and hit Generate. </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

<?php
get_footer();
?>