<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
	<div class="mb-12 text-center">
	<h1 class="text-dark mb-3.5 text-2xl font-bold sm:text-4xl xl:text-heading-3">
	<?php single_cat_title(); ?>
	</h1>
	<p><?php echo category_description(); ?></p>
	</div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-11 gap-x-8">
                  
                 <?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				 <div class="group">
                     <?php if (has_post_thumbnail()) : ?>
					<div class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105">
                      <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full">
                      </a>
                    </div>
					<?php endif; ?>
                    <h3>
                      <a href="<?php the_permalink(); ?>" class="block text-dark font-bold text-xl mb-3.5">
                        <span class="bg-gradient-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]">
                          <?php the_title(); ?>
                        </span>
                      </a>
                    </h3>
                    <p>
                      <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>

<!--
                    <div class="flex flex-wrap gap-3 items-center justify-between mt-4.5">
                      <div class="flex items-center gap-2.5">
                       

                        <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>

                        <p class="text-sm">Sep 10, 2025</p>
                      </div>
                      <a href="category.html" class="inline-flex text-blue bg-blue/[0.08] font-medium text-sm py-1 px-3 rounded-full">Technology</a>
                    </div>
					-->
                  </div>
				   <?php endwhile; ?>
				  <div class="pagination mt-8">
				  <?php
				  the_posts_pagination(array(
					'mid_size' => 2,
					'prev_text' => __('&larr; Previous', 'textdomain'),
					'next_text' => __('Next &rarr;', 'textdomain'),
				  ));
				  ?>
				</div>
	
				  
				   <?php else : ?>
    <p class="text-center text-gray-600">No posts found in this category.</p>

  <?php endif; ?>
 </div>
<?php get_footer(); ?>