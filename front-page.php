<?php
/**
 * The front page template file
 */

get_header(); ?>

<main>
    <!-- Hero Section -->
    <?php
    $hero_title_gray = get_post_meta(get_the_ID(), '_hero_title_gray', true) ?: 'Property with Estatein';
    $stat1_val = get_post_meta(get_the_ID(), '_hero_stat1_val', true) ?: '200+';
    $stat1_lbl = get_post_meta(get_the_ID(), '_hero_stat1_lbl', true) ?: 'Happy Customers';
    $stat2_val = get_post_meta(get_the_ID(), '_hero_stat2_val', true) ?: '10k+';
    $stat2_lbl = get_post_meta(get_the_ID(), '_hero_stat2_lbl', true) ?: 'Properties For Clients';
    $stat3_val = get_post_meta(get_the_ID(), '_hero_stat3_val', true) ?: '16+';
    $stat3_lbl = get_post_meta(get_the_ID(), '_hero_stat3_lbl', true) ?: 'Years of Experience';
    $hero_btn1_text = get_post_meta(get_the_ID(), '_hero_btn1_text', true) ?: 'Learn More';
    $hero_btn1_link = get_post_meta(get_the_ID(), '_hero_btn1_link', true) ?: home_url('/about');
    $hero_btn2_text = get_post_meta(get_the_ID(), '_hero_btn2_text', true) ?: 'Browse Properties';
    $hero_btn2_link = get_post_meta(get_the_ID(), '_hero_btn2_link', true) ?: '#';
    $hero_hide_title = get_post_meta(get_the_ID(), '_hero_hide_title', true);
    $hero_img = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://picsum.photos/seed/estate/800/800';
    ?>
    <section class="relative pt-48 pb-20 overflow-hidden">
        <div class="hero-glow"></div>
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-[36px] sm:text-[48px] lg:text-[60px] 2xl:text-[80px] font-semibold leading-[1.1] tracking-[-0.02em] mb-6">
                        <?php if ($hero_hide_title !== '1') : ?>
                            <?php echo get_the_title() ?: 'Discover Your Dream'; ?> <br />
                        <?php endif; ?>
                        <span class="text-[#B3B3B3]"><?php echo esc_html($hero_title_gray); ?></span>
                    </h1>
                    <div class="text-[#B3B3B3] text-[16px] sm:text-[18px] 2xl:text-[20px] leading-[1.6] mb-10 max-w-lg mx-auto lg:mx-0">
                        <?php 
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                        else :
                            echo "Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.";
                        endif;
                        ?>
                    </div>
                    
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-16">
                        <a href="<?php echo esc_url($hero_btn1_link); ?>" class="h-14 px-8 rounded-xl border border-[#262626] font-medium hover:bg-[#1E1E1E] transition-colors flex items-center justify-center">
                            <?php echo esc_html($hero_btn1_text); ?>
                        </a>
                        <a href="<?php echo esc_url($hero_btn2_link); ?>" class="h-14 px-8 rounded-xl bg-[#703BF7] font-medium hover:bg-[#5d2ee0] transition-colors flex items-center justify-center">
                            <?php echo esc_html($hero_btn2_text); ?>
                        </a>
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

                <div class="relative mt-12 lg:mt-0">
                    <div class="relative rounded-3xl overflow-hidden aspect-square max-w-2xl mx-auto border border-[#262626]">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', [
                                'class' => 'w-full h-full object-cover',
                                'loading' => 'eager' // Important: Hero image should load eagerly for LCP
                            ]); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url($hero_img); ?>" alt="Modern Building" class="w-full h-full object-cover" loading="eager">
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0F0F0F]/80 to-transparent"></div>
                    </div>
                    
                    <div class="absolute -top-10 -left-10 w-40 h-40 hidden lg:block animate-rotate">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <svg class="w-full h-full" viewBox="0 0 100 100">
                                <path id="circlePath" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none" />
                                <text class="text-[8px] uppercase tracking-[0.2em] fill-white font-medium">
                                    <textPath xlink:href="#circlePath">
                                        Discover Your Dream Property • Discover Your Dream Property • 
                                    </textPath>
                                </text>
                            </svg>
                            <div class="absolute w-12 h-12 bg-[#0F0F0F] border border-[#262626] rounded-full flex items-center justify-center">
                                <i data-lucide="arrow-up-right" class="w-6 h-6 text-[#703BF7]"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-10">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4">
                <?php
                $features_query = new WP_Query(array(
                    'post_type' => 'feature',
                    'posts_per_page' => 4,
                ));

                if ($features_query->have_posts()) :
                    while ($features_query->have_posts()) : $features_query->the_post();
                        $icon = get_post_meta(get_the_ID(), '_feature_icon', true) ?: 'home';
                        ?>
                        <div class="glass-card p-8 group cursor-pointer hover:border-[#703BF7]/50 transition-all relative overflow-hidden">
                            <div class="flex justify-between items-start mb-8">
                                <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                                    <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-6 h-6"></i>
                                </div>
                                <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#999999] group-hover:text-[#703BF7] transition-colors"></i>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-[#703BF7] transition-colors"><?php the_title(); ?></h3>
                            <div class="text-sm text-[#999999] leading-relaxed"><?php the_content(); ?></div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-[#B3B3B3] p-6">No features found. Please add some in the dashboard.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="py-20">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-4">Featured Properties</h2>
                    <p class="text-[#B3B3B3] max-w-2xl">
                        Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein.
                    </p>
                </div>
                <div class="hidden md:flex gap-4">
                    <button class="prop-prev w-12 h-12 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-all">
                        <i data-lucide="chevron-left" class="w-6 h-6"></i>
                    </button>
                    <button class="prop-next w-12 h-12 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-all">
                        <i data-lucide="chevron-right" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
            
            <div class="swiper properties-swiper mb-12">
                <div class="swiper-wrapper">
                    <?php
                    $properties_query = new WP_Query(array(
                        'post_type' => 'property',
                        'posts_per_page' => 6,
                    ));

                    if ($properties_query->have_posts()) :
                        while ($properties_query->have_posts()) : $properties_query->the_post();
                            get_template_part('template-parts/content', 'property', array('class' => 'swiper-slide'));
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p class="text-[#B3B3B3] p-6">No properties found. Please add some in the dashboard.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="py-20">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-4">What Our Clients Say</h2>
                    <p class="text-[#B3B3B3] max-w-2xl">
                        Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.
                    </p>
                </div>
                <a href="#" class="hidden md:flex px-6 py-2.5 rounded-lg border border-[#262626] text-sm font-medium hover:bg-[#1E1E1E] transition-all">
                    View All Testimonials
                </a>
            </div>
            
            <div class="swiper testimonials-swiper mb-12">
                <div class="swiper-wrapper">
                    <?php
                    $testimonials_query = new WP_Query(array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 10,
                    ));

                    if ($testimonials_query->have_posts()) :
                        while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
                            $client_name = get_post_meta(get_the_ID(), '_testimonial_name', true);
                            $location = get_post_meta(get_the_ID(), '_testimonial_location', true);
                            $rating = get_post_meta(get_the_ID(), '_testimonial_rating', true) ?: 5;
                            $avatar = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?: 'https://i.pravatar.cc/150?u=' . get_the_ID();
                            ?>
                            <div class="swiper-slide glass-card p-10">
                                <div class="flex gap-1 mb-6 text-yellow-500">
                                    <?php for ($i = 0; $i < $rating; $i++) : ?>
                                        <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <?php endfor; ?>
                                </div>
                                <h3 class="text-xl font-bold mb-4"><?php the_title(); ?></h3>
                                <p class="text-[#999999] mb-10 leading-relaxed"><?php echo get_the_content(); ?></p>
                                <div class="flex items-center gap-4">
                                    <img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($client_name ?: get_the_title()); ?>" class="w-12 h-12 rounded-full">
                                    <div>
                                        <div class="font-bold"><?php echo esc_html($client_name ?: 'Client'); ?></div>
                                        <div class="text-xs text-[#999999]"><?php echo esc_html($location ?: 'Location'); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p class="text-[#B3B3B3] p-6">No testimonials found. Please add some in the dashboard.</p>';
                    endif;
                    ?>
                </div>
            </div>

            <div class="flex items-center justify-between border-t border-[#262626] pt-8">
                <div class="text-sm text-[#999999]">
                    <span class="text-white font-medium testimonials-current">01</span> of <span class="testimonials-total">01</span>
                </div>
                <div class="flex gap-2">
                    <button class="test-prev w-10 h-10 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-colors">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <button class="test-next w-10 h-10 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-colors">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-4">Frequently Asked Questions</h2>
                    <p class="text-[#B3B3B3] max-w-2xl">
                        Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to help you every step of the way.
                    </p>
                </div>
                <div class="hidden md:flex gap-4">
                    <button class="faq-prev w-12 h-12 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-all">
                        <i data-lucide="chevron-left" class="w-6 h-6"></i>
                    </button>
                    <button class="faq-next w-12 h-12 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-all">
                        <i data-lucide="chevron-right" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
            
            <div class="swiper faq-swiper mb-12">
                <div class="swiper-wrapper">
                    <?php
                    $faq_query = new WP_Query(array(
                        'post_type' => 'faq',
                        'posts_per_page' => 6,
                    ));

                    if ($faq_query->have_posts()) :
                        while ($faq_query->have_posts()) : $faq_query->the_post();
                            $btn_text = get_post_meta(get_the_ID(), '_faq_btn_text', true) ?: 'Read More';
                            $btn_link = get_post_meta(get_the_ID(), '_faq_btn_link', true) ?: '#';
                            ?>
                            <div class="swiper-slide glass-card p-10 flex flex-col justify-between h-auto">
                                <div>
                                    <h3 class="text-xl font-bold mb-6 leading-tight"><?php the_title(); ?></h3>
                                    <p class="text-[#999999] mb-8 leading-relaxed"><?php echo get_the_content(); ?></p>
                                </div>
                                <a href="<?php echo esc_url($btn_link); ?>" class="px-5 py-2.5 rounded-lg border border-[#262626] text-sm font-medium hover:bg-[#1E1E1E] transition-all w-fit"><?php echo esc_html($btn_text); ?></a>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p class="text-[#B3B3B3] p-6">No FAQs found. Please add some in the dashboard.</p>';
                    endif;
                    ?>
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
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-3xl overflow-hidden p-12 lg:p-20 border border-[#262626] bg-gradient-to-br from-[#1A1A1A] to-[#0F0F0F]">
                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-12">
                    <div class="max-w-4xl text-center lg:text-left">
                        <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6"><?php echo esc_html($cta_title); ?></h2>
                        <p class="text-[#999999] text-lg"><?php echo esc_html($cta_desc); ?></p>
                    </div>
                    <a href="<?php echo esc_url($cta_btn_link); ?>" class="h-16 px-10 rounded-xl bg-[#703BF7] font-bold text-lg hover:bg-[#5d2ee0] transition-all flex items-center justify-center"><?php echo esc_html($cta_btn_text); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
