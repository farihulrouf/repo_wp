<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<main class="pt-40">
    <!-- Our Journey -->
    <?php
    $stat1_val = get_post_meta(get_the_ID(), '_hero_stat1_val', true) ?: '200+';
    $stat1_lbl = get_post_meta(get_the_ID(), '_hero_stat1_lbl', true) ?: 'Happy Customers';
    $stat2_val = get_post_meta(get_the_ID(), '_hero_stat2_val', true) ?: '10k+';
    $stat2_lbl = get_post_meta(get_the_ID(), '_hero_stat2_lbl', true) ?: 'Properties For Clients';
    $stat3_val = get_post_meta(get_the_ID(), '_hero_stat3_val', true) ?: '16+';
    $stat3_lbl = get_post_meta(get_the_ID(), '_hero_stat3_lbl', true) ?: 'Years of Experience';
    $hero_img = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://picsum.photos/seed/journey/800/600';
    ?>
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="flex items-center justify-center lg:justify-start gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h1 class="text-[36px] sm:text-[48px] lg:text-[60px] 2xl:text-[80px] font-semibold leading-[1.1] tracking-[-0.02em] mb-6"><?php the_title(); ?></h1>
                    <div class="text-[#B3B3B3] text-[16px] sm:text-[18px] 2xl:text-[20px] leading-[1.6] mb-10 max-w-2xl mx-auto lg:mx-0">
                        <?php 
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    </div>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="glass-card p-4 sm:p-6">
                            <div class="text-[32px] sm:text-[40px] font-bold leading-[1.2] mb-1"><?php echo esc_html($stat1_val); ?></div>
                            <div class="text-[10px] sm:text-xs text-[#B3B3B3] uppercase tracking-wider"><?php echo esc_html($stat1_lbl); ?></div>
                        </div>
                        <div class="glass-card p-4 sm:p-6">
                            <div class="text-[32px] sm:text-[40px] font-bold leading-[1.2] mb-1"><?php echo esc_html($stat2_val); ?></div>
                            <div class="text-[10px] sm:text-xs text-[#B3B3B3] uppercase tracking-wider"><?php echo esc_html($stat2_lbl); ?></div>
                        </div>
                        <div class="glass-card p-4 sm:p-6 col-span-2 sm:col-span-1">
                            <div class="text-[32px] sm:text-[40px] font-bold leading-[1.2] mb-1"><?php echo esc_html($stat3_val); ?></div>
                            <div class="text-[10px] sm:text-xs text-[#B3B3B3] uppercase tracking-wider"><?php echo esc_html($stat3_lbl); ?></div>
                        </div>
                    </div>
                </div>
                
                <div class="relative rounded-3xl overflow-hidden border border-[#262626]">
                    <img src="<?php echo esc_url($hero_img); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <?php
    $value_title = get_post_meta(get_the_ID(), '_value_title', true) ?: 'Our Values';
    $value_desc = get_post_meta(get_the_ID(), '_value_desc', true) ?: 'Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.';
    ?>
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6"><?php echo esc_html($value_title); ?></h2>
                    <p class="text-[#B3B3B3] leading-relaxed">
                        <?php echo nl2br(esc_html($value_desc)); ?>
                    </p>
                </div>
                <div class="lg:col-span-2">
                    <div class="glass-card p-8 sm:p-12 grid sm:grid-cols-2 gap-8">
                        <?php
                        $values_query = new WP_Query(array(
                            'post_type' => 'value',
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        ));

                        if ($values_query->have_posts()) :
                            while ($values_query->have_posts()) : $values_query->the_post();
                                $icon = get_post_meta(get_the_ID(), '_value_icon', true) ?: 'star';
                                ?>
                                <div>
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 rounded-full border border-[#703BF7] flex items-center justify-center text-[#703BF7]">
                                            <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-6 h-6"></i>
                                        </div>
                                        <h3 class="text-xl font-bold"><?php the_title(); ?></h3>
                                    </div>
                                    <div class="text-[#999999] text-sm">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Achievements -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
            </div>
            <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6">Our Achievements</h2>
            <p class="text-[#B3B3B3] max-w-3xl mb-12">
                Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.
            </p>
            
            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">
                <?php
                $achievements_query = new WP_Query(array(
                    'post_type' => 'achievement',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if ($achievements_query->have_posts()) :
                    while ($achievements_query->have_posts()) : $achievements_query->the_post();
                        ?>
                        <div class="glass-card p-10">
                            <h3 class="text-2xl font-bold mb-4"><?php the_title(); ?></h3>
                            <p class="text-[#999999] text-sm leading-relaxed"><?php echo get_the_content(); ?></p>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Navigating the Estatein Experience -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
            </div>
            <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6">Navigating the Estatein Experience</h2>
            <p class="text-[#B3B3B3] max-w-3xl mb-12">
                At Estatein, we've designed a straightforward process to help you find and purchase your dream property with ease. Here's a step-by-step guide to how it all works.
            </p>
            
            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">
                <?php
                $experience_query = new WP_Query(array(
                    'post_type' => 'experience_step',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if ($experience_query->have_posts()) :
                    while ($experience_query->have_posts()) : $experience_query->the_post();
                        $step_label = get_post_meta(get_the_ID(), '_step_label', true);
                        ?>
                        <div class="glass-card p-10 relative">
                            <?php if ($step_label) : ?>
                                <div class="absolute top-0 right-0 p-6 text-sm font-medium text-[#999999] border-l border-b border-[#262626] rounded-bl-xl"><?php echo esc_html($step_label); ?></div>
                            <?php endif; ?>
                            <h3 class="text-xl font-bold mb-4 mt-4"><?php the_title(); ?></h3>
                            <p class="text-[#999999] text-sm leading-relaxed"><?php echo get_the_content(); ?></p>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Meet the Estatein Team -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
            </div>
            <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6">Meet the Estatein Team</h2>
            <p class="text-[#B3B3B3] max-w-3xl mb-12">
                At Estatein, our success is driven by the dedication and expertise of our team. Get to know the people behind our mission to make your real estate dreams a reality.
            </p>
            
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-6">
                <?php
                $team_query = new WP_Query(array(
                    'post_type' => 'team_member',
                    'posts_per_page' => -1,
                ));

                if ($team_query->have_posts()) :
                    while ($team_query->have_posts()) : $team_query->the_post();
                        $position = get_post_meta(get_the_ID(), '_team_position', true);
                        $twitter = get_post_meta(get_the_ID(), '_team_twitter', true);
                        ?>
                        <div class="glass-card p-6 text-center group">
                            <div class="relative mb-6 rounded-2xl overflow-hidden aspect-[4/5]">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
                                <?php else : ?>
                                    <img src="https://i.pravatar.cc/400?u=<?php the_ID(); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                                <?php endif; ?>
                                <?php if ($twitter) : ?>
                                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                                        <a href="<?php echo esc_url($twitter); ?>" class="w-10 h-10 rounded-full bg-[#703BF7] flex items-center justify-center text-white hover:bg-[#5d2ee0] transition-all">
                                            <i data-lucide="twitter" class="w-5 h-5"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <h3 class="text-xl font-bold mb-1"><?php the_title(); ?></h3>
                            <p class="text-sm text-[#999999] mb-4"><?php echo esc_html($position); ?></p>
                            <div class="flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-[#1E1E1E] border border-[#262626] w-fit mx-auto">
                                <span class="text-sm font-medium">Say Hello 👋</span>
                                <button class="w-8 h-8 rounded-full bg-[#703BF7] flex items-center justify-center">
                                    <i data-lucide="send" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Our Valued Clients -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
            </div>
            <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6">Our Valued Clients</h2>
            <p class="text-[#B3B3B3] max-w-3xl mb-12">
                At Estatein, we have had the privilege of working with a diverse range of clients across various industries. Here are some of the clients we've had the pleasure of serving.
            </p>
            
            <div class="swiper clients-swiper overflow-visible">
                <div class="swiper-wrapper">
                    <?php
                    $clients_query = new WP_Query(array(
                        'post_type' => 'client',
                        'posts_per_page' => -1,
                    ));

                    if ($clients_query->have_posts()) :
                        while ($clients_query->have_posts()) : $clients_query->the_post();
                            $since = get_post_meta(get_the_ID(), '_client_since', true);
                            $website = get_post_meta(get_the_ID(), '_client_website', true);
                            $domain = get_post_meta(get_the_ID(), '_client_domain', true);
                            $category = get_post_meta(get_the_ID(), '_client_category', true);
                            $testimonial = get_post_meta(get_the_ID(), '_client_testimonial', true);
                            ?>
                            <div class="swiper-slide glass-card p-10 h-auto">
                                <div class="flex justify-between items-start mb-10">
                                    <div>
                                        <div class="text-xs text-[#999999] mb-2">Since <?php echo esc_html($since); ?></div>
                                        <h3 class="text-2xl font-bold"><?php the_title(); ?></h3>
                                    </div>
                                    <?php if ($website) : ?>
                                        <a href="<?php echo esc_url($website); ?>" class="px-5 py-2.5 rounded-lg border border-[#262626] text-sm font-medium hover:bg-[#1E1E1E]">Visit Website</a>
                                    <?php endif; ?>
                                </div>
                                <div class="grid grid-cols-2 gap-8 mb-10">
                                    <div>
                                        <div class="text-xs text-[#999999] mb-2 flex items-center gap-2"><i data-lucide="layout-grid" class="w-3.5 h-3.5"></i> Domain</div>
                                        <div class="font-medium"><?php echo esc_html($domain); ?></div>
                                    </div>
                                    <div>
                                        <div class="text-xs text-[#999999] mb-2 flex items-center gap-2"><i data-lucide="zap" class="w-3.5 h-3.5"></i> Category</div>
                                        <div class="font-medium"><?php echo esc_html($category); ?></div>
                                    </div>
                                </div>
                                <div class="p-6 rounded-xl border border-[#262626] bg-[#0F0F0F]">
                                    <div class="text-xs text-[#999999] mb-4">What They Said 🏠</div>
                                    <p class="text-sm leading-relaxed"><?php echo esc_html($testimonial); ?></p>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <!-- Navigation -->
                <div class="flex items-center justify-between mt-12 border-t border-[#262626] pt-8">
                    <div class="text-[#B3B3B3]"><span class="clients-current text-white">01</span> of <span class="clients-total">05</span></div>
                    <div class="flex gap-4">
                        <button class="clients-prev w-14 h-14 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1A1A1A] transition-all">
                            <i data-lucide="arrow-left" class="w-6 h-6"></i>
                        </button>
                        <button class="clients-next w-14 h-14 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1A1A1A] transition-all">
                            <i data-lucide="arrow-right" class="w-6 h-6"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php
    $cta_title = get_post_meta(get_the_ID(), '_cta_title', true) ?: 'Start Your Real Estate Journey Today';
    $cta_desc = get_post_meta(get_the_ID(), '_cta_desc', true) ?: "Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you.";
    $cta_btn_text = get_post_meta(get_the_ID(), '_cta_btn_text', true) ?: 'Explore Properties';
    $cta_btn_link = get_post_meta(get_the_ID(), '_cta_btn_link', true) ?: '#';
    ?>
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-3xl overflow-hidden p-12 lg:p-20 border border-[#262626] bg-gradient-to-br from-[#1A1A1A] to-[#0F0F0F]">
                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-12">
                    <div class="max-w-4xl text-center lg:text-left">
                        <h2 class="text-4xl lg:text-5xl font-bold mb-6"><?php echo esc_html($cta_title); ?></h2>
                        <p class="text-[#999999] text-lg"><?php echo esc_html($cta_desc); ?></p>
                    </div>
                    <a href="<?php echo esc_url($cta_btn_link); ?>" class="h-16 px-10 rounded-xl bg-[#703BF7] font-bold text-lg hover:bg-[#5d2ee0] transition-all flex items-center justify-center">
                        <?php echo esc_html($cta_btn_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
