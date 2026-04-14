    <!-- Footer -->
    <footer class="bg-[#0F0F0F] border-t border-[#262626] pt-20 pb-10">
        <div class="max-w-[1440px] 2xl:max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 mb-20">
                <div class="lg:col-span-4">
                    <div class="flex items-center gap-2 mb-8">
                        <div class="w-10 h-10 purple-gradient rounded-lg flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="white"/>
                                <path d="M2 17L12 22L22 17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold tracking-tight"><?php bloginfo('name'); ?></span>
                    </div>
                    <div class="relative max-w-sm">
                        <input type="email" placeholder="Enter Your Email" class="w-full h-14 pl-6 pr-14 bg-transparent border border-[#262626] rounded-xl focus:outline-none focus:border-[#703BF7]">
                        <button class="absolute right-2 top-2 h-10 w-10 flex items-center justify-center text-[#B3B3B3] hover:text-white">
                            <i data-lucide="send" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
                
                <div class="lg:col-span-8 grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <h4 class="text-[#B3B3B3] font-medium mb-6">Home</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a href="#" class="hover:text-[#703BF7]">Hero Section</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Features</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Properties</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Testimonials</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-[#B3B3B3] font-medium mb-6">About Us</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a href="#" class="hover:text-[#703BF7]">Our Story</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Our Works</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Our Team</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-[#B3B3B3] font-medium mb-6">Properties</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a href="#" class="hover:text-[#703BF7]">Portfolio</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Categories</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-[#B3B3B3] font-medium mb-6">Services</h4>
                        <ul class="space-y-4 text-sm">
                            <li><a href="#" class="hover:text-[#703BF7]">Valuation</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Marketing</a></li>
                            <li><a href="#" class="hover:text-[#703BF7]">Negotiation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-10 border-t border-[#262626]">
                <div class="flex gap-8 text-sm text-[#B3B3B3]">
                    <span>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</span>
                    <a href="#" class="hover:text-white">Terms & Conditions</a>
                </div>
                <div class="flex gap-4">
                    <button class="w-10 h-10 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#703BF7] hover:text-white transition-all">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#703BF7] hover:text-white transition-all">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full border border-[#262626] flex items-center justify-center hover:bg-[#703BF7] hover:text-white transition-all">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
