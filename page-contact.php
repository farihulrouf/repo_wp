<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<main class="pt-40">
    <section class="py-20">
        <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Info -->
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-2 h-2 bg-[#703BF7] rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/40 rounded-full"></div>
                        <div class="w-2 h-2 bg-[#703BF7]/20 rounded-full"></div>
                    </div>
                    <h1 class="text-[36px] sm:text-[48px] lg:text-[60px] font-semibold leading-[1.1] mb-6">Get in Touch</h1>
                    <p class="text-[#B3B3B3] text-lg mb-12 max-w-lg">
                        Have questions or ready to start your real estate journey? Our team is here to help you every step of the way.
                    </p>

                    <div class="grid gap-6">
                        <div class="glass-card p-6 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7]">
                                <i data-lucide="mail" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <div class="text-sm text-[#999999] mb-1">Email Us</div>
                                <div class="font-semibold">support@estatein.com</div>
                            </div>
                        </div>
                        <div class="glass-card p-6 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7]">
                                <i data-lucide="phone" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <div class="text-sm text-[#999999] mb-1">Call Us</div>
                                <div class="font-semibold">+1 (555) 000-0000</div>
                            </div>
                        </div>
                        <div class="glass-card p-6 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#703BF7]/10 flex items-center justify-center text-[#703BF7]">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <div class="text-sm text-[#999999] mb-1">Visit Us</div>
                                <div class="font-semibold">123 Real Estate Ave, California, USA</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="glass-card p-8 sm:p-12">
                    <form id="contact-form" class="grid gap-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">First Name</label>
                                <input type="text" name="first_name" required class="w-full h-14 px-5 rounded-xl bg-[#1A1A1A] border border-[#262626] focus:border-[#703BF7] outline-none transition-colors" placeholder="Enter First Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Last Name</label>
                                <input type="text" name="last_name" required class="w-full h-14 px-5 rounded-xl bg-[#1A1A1A] border border-[#262626] focus:border-[#703BF7] outline-none transition-colors" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email Address</label>
                            <input type="email" name="email" required class="w-full h-14 px-5 rounded-xl bg-[#1A1A1A] border border-[#262626] focus:border-[#703BF7] outline-none transition-colors" placeholder="Enter Email Address">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Phone Number</label>
                            <input type="tel" name="phone" class="w-full h-14 px-5 rounded-xl bg-[#1A1A1A] border border-[#262626] focus:border-[#703BF7] outline-none transition-colors" placeholder="Enter Phone Number">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Message</label>
                            <textarea name="message" required rows="4" class="w-full p-5 rounded-xl bg-[#1A1A1A] border border-[#262626] focus:border-[#703BF7] outline-none transition-colors resize-none" placeholder="Enter your message here..."></textarea>
                        </div>
                        <button type="submit" class="h-14 px-8 rounded-xl bg-[#703BF7] font-semibold hover:bg-[#5d2ee0] transition-colors flex items-center justify-center gap-2">
                            Send Message
                            <i data-lucide="send" class="w-5 h-5"></i>
                        </button>
                    </form>
                    <div id="form-success" class="hidden mt-6 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-green-500 text-center">
                        Thank you! Your message has been sent successfully.
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.getElementById('contact-form')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = this.querySelector('button');
    const success = document.getElementById('form-success');
    
    btn.disabled = true;
    btn.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i> Sending...';
    lucide.createIcons();

    // Simulate API call
    setTimeout(() => {
        this.reset();
        this.classList.add('hidden');
        success.classList.remove('hidden');
    }, 1500);
});
</script>

<?php get_footer(); ?>
