<?php
get_header();
?>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
				
				<section id="post-<?php the_ID(); ?>" class="relative bg-slate-100 py-16 dark:bg-slate-950 md:py-20">
					<div class="container px-3">
						<div class="flex flex-col items-center justify-center">
							<div class="w-full md:w-5/12">
								<div class="text-center">
									<h2 class="mb-2 text-3xl font-bold text-slate-700 dark:text-white"> <?php the_title(); ?> </h2>
									<ul class="inline-flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-300">
										<li>
											<a href="/" class="text-blue-500 hover:text-blue-700"> Home </a>
										</li>
										<li class="mt-0.5 inline-flex items-center">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-2 w-2">
												<path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
											</svg>
										</li>
										<li><?php the_title(); ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div><!-- container -->
					<div class="absolute bottom-0 start-0 h-[1px] w-full animate-[animateGradient_5s_ease-in-out_2] bg-gradient-to-r from-transparent from-10% via-blue-100 to-transparent to-90% dark:via-blue-950"></div>
				</section>
				<section class="overflow-hidden bg-white pb-2 pt-16 dark:bg-slate-900 md:pt-20 lg:pt-24 xl:pt-28">
                <div class="container px-3 mb-9">
                    <div class="mx-auto max-w-3xl">
						<div class="prose dark:prose-invert prose-headings:font-bold prose-p:mt-2 prose-ul:mt-2 max-w-max">
                         <?php the_content(); ?>
                        </div>
						</div>
                    </div>
                </div><!-- container -->
            </section>
                <?php
            endwhile;
        else :
            echo '<p>' . __('No content found', 'my-custom-theme') . '</p>';
        endif;
        ?>

<?php
get_footer();
?>