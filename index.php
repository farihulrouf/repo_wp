<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="pt-48 pb-20">
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-12">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4"><?php single_post_title(); ?></h1>
            <p class="text-[#B3B3B3] text-lg">Stay updated with the latest news and insights from Estatein.</p>
        </header>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('glass-card overflow-hidden flex flex-col'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-video overflow-hidden">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-110')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-8 flex-grow flex flex-col">
                            <div class="flex items-center gap-4 mb-4 text-sm text-[#999999]">
                                <span><?php echo get_the_date(); ?></span>
                                <span class="w-1 h-1 bg-[#262626] rounded-full"></span>
                                <span>By <?php the_author(); ?></span>
                            </div>
                            
                            <h2 class="text-xl font-bold mb-4 hover:text-[#703BF7] transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="text-[#B3B3B3] text-sm leading-relaxed mb-6 line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div class="mt-auto">
                                <a href="<?php the_permalink(); ?>" class="text-sm font-semibold text-white hover:text-[#703BF7] transition-colors flex items-center gap-2">
                                    Read More
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
                
                // Pagination
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<i data-lucide="chevron-left" class="w-5 h-5"></i>',
                    'next_text' => '<i data-lucide="chevron-right" class="w-5 h-5"></i>',
                    'class'     => 'mt-12 flex justify-center gap-2',
                ));
            else :
                echo '<p class="text-[#B3B3B3]">No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
