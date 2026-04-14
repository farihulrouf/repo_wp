<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<main class="pt-40">
    <!-- Our Journey -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="flex items-center justify-center lg:justify-start gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h1 class="text-[36px] sm:text-[48px] lg:text-[60px] 2xl:text-[80px] font-semibold leading-[1.1] tracking-[-0.02em] mb-6">Our Journey</h1>
                    <p class="text-[#B3B3B3] text-[16px] sm:text-[18px] 2xl:text-[20px] leading-[1.6] mb-10 max-w-2xl mx-auto lg:mx-0">
                        Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary. Over the years, we've expanded our reach, forged valued partnerships, and gained the trust of countless clients.
                    </p>
                    
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
                
                <div class="relative rounded-3xl overflow-hidden border border-[#262626]">
                    <img src="https://picsum.photos/seed/journey/800/600" alt="Our Journey" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-20">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h2 class="text-[32px] sm:text-[48px] font-semibold leading-[1.2] mb-6">Our Values</h2>
                    <p class="text-[#B3B3B3] leading-relaxed">
                        Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary.
                    </p>
                </div>
                <div class="lg:col-span-2">
                    <div class="glass-card p-8 sm:p-12 grid sm:grid-cols-2 gap-8">
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 rounded-full border border-[#703BF7] flex items-center justify-center text-[#703BF7]">
                                    <i data-lucide="star" class="w-6 h-6"></i>
                                </div>
                                <h3 class="text-xl font-bold">Trust</h3>
                            </div>
                            <p class="text-[#B3B3B3] text-sm">Trust is the cornerstone of every successful real estate transaction.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 rounded-full border border-[#703BF7] flex items-center justify-center text-[#703BF7]">
                                    <i data-lucide="award" class="w-6 h-6"></i>
                                </div>
                                <h3 class="text-xl font-bold">Excellence</h3>
                            </div>
                            <p class="text-[#B3B3B3] text-sm">We set the bar high for ourselves. From the properties we list to the services we provide.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 rounded-full border border-[#703BF7] flex items-center justify-center text-[#703BF7]">
                                    <i data-lucide="users" class="w-6 h-6"></i>
                                </div>
                                <h3 class="text-xl font-bold">Client-Centric</h3>
                            </div>
                            <p class="text-[#B3B3B3] text-sm">Your dreams and needs are at the center of our universe. We listen, understand.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 rounded-full border border-[#703BF7] flex items-center justify-center text-[#703BF7]">
                                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                                </div>
                                <h3 class="text-xl font-bold">Our Commitment</h3>
                            </div>
                            <p class="text-[#B3B3B3] text-sm">We are dedicated to providing you with the highest level of service, professionalism, and support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
