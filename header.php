<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        /* Abstract background lines */
        body {
            background-image: url("data:image/svg+xml,%3Csvg width='1440' height='900' viewBox='0 0 1440 900' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M-100 200C100 150 300 250 500 200C700 150 900 250 1100 200C1300 150 1500 250 1700 200' stroke='%23262626' stroke-width='0.5'/%3E%3Cpath d='M-100 300C100 250 300 350 500 300C700 250 900 350 1100 300C1300 250 1500 350 1700 300' stroke='%23262626' stroke-width='0.5'/%3E%3Cpath d='M-100 400C100 350 300 450 500 400C700 350 900 450 1100 400C1300 350 1500 450 1700 400' stroke='%23262626' stroke-width='0.5'/%3E%3Cpath d='M-100 100C100 50 300 150 500 100C700 50 900 150 1100 100C1300 50 1500 150 1700 100' stroke='%23262626' stroke-width='0.5'/%3E%3Cpath d='M-100 500C100 450 300 550 500 500C700 450 900 550 1100 500C1300 450 1500 550 1700 500' stroke='%23262626' stroke-width='0.5'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: top center;
        }
    </style>
</head>
<body <?php body_class('antialiased'); ?>>
    <?php wp_body_open(); ?>

    <!-- Top Banner -->
    <header class="fixed top-0 left-0 right-0 z-50">
        <div class="bg-[#1E1E1E] py-3 text-center text-sm border-b border-[#262626] relative">
            <p class="text-[#B3B3B3]">
                ✨ Discover Your Dream Property with Estatein 
                <a href="#" class="text-white underline underline-offset-4 ml-2 font-semibold">Learn More</a>
            </p>
            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-[#B3B3B3] hover:text-white">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>

        <!-- Navbar -->
        <nav class="bg-[#0F0F0F]/80 backdrop-blur-md border-b border-[#262626]">
            <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-24">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                        <div class="w-10 h-10 purple-gradient rounded-lg flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="white"/>
                                <path d="M2 17L12 22L22 17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold tracking-tight"><?php bloginfo('name'); ?></span>
                    </a>
                    
                    <div class="hidden md:flex items-center gap-2 nav-container">
                        <?php
                        $about_page = get_page_by_path('about');
                        $about_url = $about_page ? get_permalink($about_page->ID) : home_url('/about');
                        $is_about = is_page('about') || (is_page() && $post->post_name === 'about');
                        ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="px-5 py-3 text-sm font-medium <?php echo is_front_page() ? 'text-white bg-[#1A1A1A] border border-[#262626] rounded-lg' : 'text-[#B3B3B3] hover:text-white transition-colors'; ?>">Home</a>
                        <a href="<?php echo esc_url($about_url); ?>" class="px-5 py-3 text-sm font-medium <?php echo $is_about ? 'text-white bg-[#1A1A1A] border border-[#262626] rounded-lg' : 'text-[#B3B3B3] hover:text-white transition-colors'; ?>">About Us</a>
                        <a href="#" class="px-5 py-3 text-sm font-medium text-[#B3B3B3] hover:text-white transition-colors">Properties</a>
                        <a href="#" class="px-5 py-3 text-sm font-medium text-[#B3B3B3] hover:text-white transition-colors">Services</a>
                    </div>
                    
                    <div class="hidden md:block">
                        <button class="px-6 py-3 rounded-xl border border-[#262626] bg-[#0F0F0F] text-sm font-medium hover:bg-[#1A1A1A] transition-all">
                            Contact Us
                        </button>
                    </div>

                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="p-2 text-white">
                            <i data-lucide="menu" class="w-6 h-6"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-[#262626] bg-[#0F0F0F] px-4 py-6 space-y-4">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block text-base font-medium <?php echo is_front_page() ? 'text-[#703BF7]' : 'hover:text-[#703BF7]'; ?>">Home</a>
                <a href="<?php echo esc_url($about_url); ?>" class="block text-base font-medium <?php echo $is_about ? 'text-[#703BF7]' : 'hover:text-[#703BF7]'; ?>">About Us</a>
                <a href="#" class="block text-base font-medium hover:text-[#703BF7]">Properties</a>
                <a href="#" class="block text-base font-medium hover:text-[#703BF7]">Services</a>
                <button class="w-full px-6 py-3 rounded-lg bg-[#703BF7] text-white font-medium">Contact Us</button>
            </div>
        </nav>
    </header>
