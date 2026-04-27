<?php
/**
 * The template for displaying all single property posts
 */

get_header(); ?>

<main class="pt-32 pb-20">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            $price = get_post_meta(get_the_ID(), '_property_price', true);
            $bedrooms = get_post_meta(get_the_ID(), '_property_bedrooms', true);
            $bathrooms = get_post_meta(get_the_ID(), '_property_bathrooms', true);
            $type = get_post_meta(get_the_ID(), '_property_type', true);
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://picsum.photos/seed/' . get_the_ID() . '/1200/800';
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Breadcrumbs & Title Area -->
                <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div>
                            <h1 class="text-[32px] sm:text-[48px] font-semibold leading-tight mb-4"><?php the_title(); ?></h1>
                            <div class="flex items-center gap-4 text-[#999999]">
                                <div class="flex items-center gap-2 px-3 py-1.5 bg-[#1E1E1E] rounded-full text-sm border border-[#262626]">
                                    <i data-lucide="map-pin" class="w-4 h-4 text-[#703BF7]"></i>
                                    <span><?php echo esc_html($type ?: 'Property'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="glass-card p-6 min-w-[200px]">
                            <div class="text-sm text-[#999999] mb-1">Price</div>
                            <div class="text-[32px] font-bold text-[#703BF7]"><?php echo esc_html($price ?: '$0'); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Main Showcase Gallery -->
                <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
                    <div class="relative rounded-3xl overflow-hidden border border-[#262626] aspect-[16/9] lg:aspect-[21/9]">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', [
                                'class' => 'w-full h-full object-cover',
                                'loading' => 'lazy'
                            ]); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover" loading="lazy">
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0F0F0F]/60 to-transparent"></div>
                    </div>
                </div>

                <!-- Detail Grid -->
                <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-3 gap-12">
                        <!-- Left: Description & Features -->
                        <div class="lg:col-span-2 space-y-12">
                            <!-- Description Area -->
                            <div class="glass-card p-8 sm:p-12">
                                <h2 class="text-2xl font-bold mb-8 flex items-center gap-3">
                                    Description
                                    <div class="flex-1 h-[1px] bg-[#262626]"></div>
                                </h2>
                                <div class="max-w-none text-[#B3B3B3] leading-relaxed text-lg space-y-4">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                            <!-- Key Features -->
                            <div class="glass-card p-8 sm:p-12">
                                <h2 class="text-2xl font-bold mb-8 flex items-center gap-3">
                                    Key Features & Amenities
                                    <div class="flex-1 h-[1px] bg-[#262626]"></div>
                                </h2>
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                                    <?php if ($bedrooms) : ?>
                                    <div class="p-6 bg-[#1A1A1A] border border-[#262626] rounded-2xl flex flex-col items-center text-center group hover:border-[#703BF7]/50 transition-all">
                                        <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] mb-4 group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                                            <i data-lucide="bed" class="w-6 h-6"></i>
                                        </div>
                                        <div class="text-2xl font-bold mb-1"><?php echo esc_html($bedrooms); ?></div>
                                        <div class="text-sm text-[#999999]">Bedrooms</div>
                                    </div>
                                    <?php endif; ?>

                                    <?php if ($bathrooms) : ?>
                                    <div class="p-6 bg-[#1A1A1A] border border-[#262626] rounded-2xl flex flex-col items-center text-center group hover:border-[#703BF7]/50 transition-all">
                                        <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] mb-4 group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                                            <i data-lucide="bath" class="w-6 h-6"></i>
                                        </div>
                                        <div class="text-2xl font-bold mb-1"><?php echo esc_html($bathrooms); ?></div>
                                        <div class="text-sm text-[#999999]">Bathrooms</div>
                                    </div>
                                    <?php endif; ?>

                                    <div class="p-6 bg-[#1A1A1A] border border-[#262626] rounded-2xl flex flex-col items-center text-center group hover:border-[#703BF7]/50 transition-all">
                                        <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] mb-4 group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                                            <i data-lucide="home" class="w-6 h-6"></i>
                                        </div>
                                        <div class="text-2xl font-bold mb-1"><?php echo esc_html($type ?: 'Villa'); ?></div>
                                        <div class="text-sm text-[#999999]">Property Type</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Sidebar Inquiry -->
                        <div class="space-y-8">
                            <div class="glass-card p-8 sticky top-32">
                                <h3 class="text-xl font-bold mb-6">Inquire About This Property</h3>
                                <p class="text-[#999999] text-sm mb-8">Fill in your details below and our expert agent will get back to you within 24 hours.</p>
                                
                                <form action="#" class="space-y-4">
                                    <div>
                                        <input type="text" placeholder="Your Name" class="w-full bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all">
                                    </div>
                                    <div>
                                        <input type="email" placeholder="Your Email" class="w-full bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all">
                                    </div>
                                    <div>
                                        <input type="tel" placeholder="Phone Number" class="w-full bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all">
                                    </div>
                                    <div>
                                        <textarea rows="4" placeholder="I'm interested in..." class="w-full bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all"></textarea>
                                    </div>
                                    <button type="submit" class="w-full h-14 rounded-xl bg-[#703BF7] font-bold hover:bg-[#5d2ee0] transition-all flex items-center justify-center">
                                        Send Inquiry
                                    </button>
                                </form>

                                <div class="mt-8 pt-8 border-t border-[#262626]">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-full border border-[#262626]">
                                            <img src="https://i.pravatar.cc/150?u=agent" alt="Agent" class="w-full h-full object-cover rounded-full">
                                        </div>
                                        <div>
                                            <div class="font-bold">Max Thompson</div>
                                            <div class="text-xs text-[#999999]">Property Consultant</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Related Properties Section (Optional but good) -->
            <section class="py-20 mt-20 border-t border-[#262626]">
                <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-end mb-12">
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                                <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                                <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                            </div>
                            <h2 class="text-3xl font-bold mb-4">You Might Also Like</h2>
                            <p class="text-[#B3B3B3] max-w-2xl">Discover similar properties in our collection.</p>
                        </div>
                        <a href="<?php echo home_url('/'); ?>" class="hidden md:flex px-6 py-2.5 rounded-lg border border-[#262626] text-sm font-medium hover:bg-[#1E1E1E] transition-all">
                            Browse All
                        </a>
                    </div>
                    
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php
                        $related_query = new WP_Query(array(
                            'post_type' => 'property',
                            'posts_per_page' => 3,
                            'post__not_in' => array(get_the_ID()),
                        ));

                        if ($related_query->have_posts()) :
                            while ($related_query->have_posts()) : $related_query->the_post();
                                get_template_part('template-parts/content', 'property');
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </section>

        <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
