<?php
/**
 * The front page template file
 */

get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative pt-48 pb-20 overflow-hidden">
        <div class="hero-glow"></div>
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-[36px] sm:text-[48px] lg:text-[60px] 2xl:text-[80px] font-semibold leading-[1.1] tracking-[-0.02em] mb-6">
                        Discover Your Dream <br />
                        <span class="text-[#B3B3B3]">Property with Estatein</span>
                    </h1>
                    <p class="text-[#B3B3B3] text-[16px] sm:text-[18px] 2xl:text-[20px] leading-[1.6] mb-10 max-w-lg mx-auto lg:mx-0">
                        Your journey to finding the perfect property begins here. Explore our listings to find the home that matches your dreams.
                    </p>
                    
                    <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-16">
                        <button class="h-14 px-8 rounded-xl border border-[#262626] font-medium hover:bg-[#1E1E1E] transition-colors">
                            Learn More
                        </button>
                        <button class="h-14 px-8 rounded-xl bg-[#703BF7] font-medium hover:bg-[#5d2ee0] transition-colors">
                            Browse Properties
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <div class="glass-card p-4 sm:p-6">
                            <div class="text-[32px] sm:text-[40px] font-bold leading-[1.2] mb-1">200+</div>
                            <div class="text-[10px] sm:text-xs text-[#B3B3B3] uppercase tracking-wider">Happy Customers</div>
                        </div>
                        <div class="glass-card p-4 sm:p-6">
                            <div class="text-[32px] sm:text-[40px] font-bold leading-[1.2] mb-1">10k+</div>
                            <div class="text-[10px] sm:text-xs text-[#B3B3B3] uppercase tracking-wider">Properties For Clients</div>
                        </div>
                        <div class="glass-card p-4 sm:p-6 col-span-2 sm:col-span-1">
                            <div class="text-[32px] sm:text-[40px] font-bold leading-[1.2] mb-1">16+</div>
                            <div class="text-[10px] sm:text-xs text-[#B3B3B3] uppercase tracking-wider">Years of Experience</div>
                        </div>
                    </div>
                </div>

                <div class="relative mt-12 lg:mt-0">
                    <div class="relative rounded-3xl overflow-hidden aspect-square max-w-2xl mx-auto border border-[#262626]">
                        <img src="https://picsum.photos/seed/estate/800/800" alt="Modern Building" class="w-full h-full object-cover">
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
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4">
                <div class="glass-card p-8 group cursor-pointer hover:border-[#703BF7]/50 transition-all relative overflow-hidden">
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                            <i data-lucide="home" class="w-6 h-6"></i>
                        </div>
                        <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#B3B3B3] group-hover:text-[#703BF7] transition-colors"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 group-hover:text-[#703BF7] transition-colors">Find Your Dream Home</h3>
                    <p class="text-sm text-[#B3B3B3] leading-relaxed">Explore our wide range of properties in the best locations.</p>
                </div>
                <div class="glass-card p-8 group cursor-pointer hover:border-[#703BF7]/50 transition-all relative overflow-hidden">
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                            <i data-lucide="dollar-sign" class="w-6 h-6"></i>
                        </div>
                        <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#B3B3B3] group-hover:text-[#703BF7] transition-colors"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 group-hover:text-[#703BF7] transition-colors">Unlock Property Value</h3>
                    <p class="text-sm text-[#B3B3B3] leading-relaxed">Get the best market value for your property with our experts.</p>
                </div>
                <div class="glass-card p-8 group cursor-pointer hover:border-[#703BF7]/50 transition-all relative overflow-hidden">
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                            <i data-lucide="settings" class="w-6 h-6"></i>
                        </div>
                        <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#B3B3B3] group-hover:text-[#703BF7] transition-colors"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 group-hover:text-[#703BF7] transition-colors">Effortless Management</h3>
                    <p class="text-sm text-[#B3B3B3] leading-relaxed">We handle the details so you can enjoy the rewards.</p>
                </div>
                <div class="glass-card p-8 group cursor-pointer hover:border-[#703BF7]/50 transition-all relative overflow-hidden">
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7] group-hover:bg-[#703BF7] group-hover:text-white transition-all">
                            <i data-lucide="line-chart" class="w-6 h-6"></i>
                        </div>
                        <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#B3B3B3] group-hover:text-[#703BF7] transition-colors"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 group-hover:text-[#703BF7] transition-colors">Smart Investments</h3>
                    <p class="text-sm text-[#B3B3B3] leading-relaxed">Data-driven insights for your real estate portfolio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
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
                            $price = get_post_meta(get_the_ID(), '_property_price', true);
                            $bedrooms = get_post_meta(get_the_ID(), '_property_bedrooms', true);
                            $bathrooms = get_post_meta(get_the_ID(), '_property_bathrooms', true);
                            $type = get_post_meta(get_the_ID(), '_property_type', true);
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: 'https://picsum.photos/seed/' . get_the_ID() . '/600/450';
                            ?>
                            <div class="swiper-slide glass-card p-6 group">
                                <div class="rounded-xl overflow-hidden mb-6 aspect-[4/3]">
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <h3 class="text-xl font-bold mb-2"><?php the_title(); ?></h3>
                                <p class="text-sm text-[#B3B3B3] mb-6 line-clamp-2"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="text-white cursor-pointer">Read More</a></p>
                                <div class="flex flex-wrap gap-3 mb-8">
                                    <?php if ($bedrooms) : ?>
                                        <div class="flex items-center gap-2 px-3 py-1.5 bg-[#1E1E1E] rounded-full text-xs border border-[#262626]">
                                            <i data-lucide="bed" class="w-3.5 h-3.5"></i> <?php echo esc_html($bedrooms); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($bathrooms) : ?>
                                        <div class="flex items-center gap-2 px-3 py-1.5 bg-[#1E1E1E] rounded-full text-xs border border-[#262626]">
                                            <i data-lucide="bath" class="w-3.5 h-3.5"></i> <?php echo esc_html($bathrooms); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($type) : ?>
                                        <div class="flex items-center gap-2 px-3 py-1.5 bg-[#1E1E1E] rounded-full text-xs border border-[#262626]">
                                            <i data-lucide="home" class="w-3.5 h-3.5"></i> <?php echo esc_html($type); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-xs text-[#B3B3B3] mb-1">Price</div>
                                        <div class="text-xl font-bold"><?php echo esc_html($price ?: '$0'); ?></div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="px-5 py-2.5 rounded-lg bg-[#703BF7] text-sm font-medium hover:bg-[#5d2ee0] transition-all">View Details</a>
                                </div>
                            </div>
                        <?php
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
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
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
                <div class="hidden md:flex gap-4">
                    <button class="test-prev w-12 h-12 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-all">
                        <i data-lucide="chevron-left" class="w-6 h-6"></i>
                    </button>
                    <button class="test-next w-12 h-12 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#1E1E1E] transition-all">
                        <i data-lucide="chevron-right" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
            
            <div class="swiper testimonials-swiper mb-12">
                <div class="swiper-wrapper">
                    <?php
                    $testimonials_query = new WP_Query(array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 6,
                    ));

                    if ($testimonials_query->have_posts()) :
                        while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
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
                                    <img src="<?php echo esc_url($avatar); ?>" alt="<?php the_title(); ?>" class="w-12 h-12 rounded-full">
                                    <div>
                                        <div class="font-bold"><?php the_title(); ?></div>
                                        <div class="text-xs text-[#999999]"><?php echo esc_html($location ?: 'Client'); ?></div>
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
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
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
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-3xl overflow-hidden p-12 lg:p-20 border border-[#262626] bg-gradient-to-br from-[#1A1A1A] to-[#0F0F0F]">
                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-12">
                    <div class="max-w-2xl text-center lg:text-left">
                        <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6">Start Your Real Estate Journey Today</h2>
                        <p class="text-[#B3B3B3] text-lg">Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you.</p>
                    </div>
                    <button class="h-16 px-10 rounded-xl bg-[#703BF7] font-bold text-lg hover:bg-[#5d2ee0] transition-all">Explore Properties</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
