document.addEventListener('DOMContentLoaded', function () {

    // Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Mobile Menu Toggle
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Close banner
    const closeBanner = document.querySelector('header button');
    const banner = document.querySelector('header > div:first-child');

    if (closeBanner && banner) {
        closeBanner.addEventListener('click', () => {
            banner.style.display = 'none';
            const header = document.querySelector('header');
            if (header) header.style.top = '0';
        });
    }

    // Swiper: Properties
    new Swiper('.properties-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: '.prop-next',
            prevEl: '.prop-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1280: { slidesPerView: 3 }
        }
    });

    // Swiper: Testimonials
    new Swiper('.testimonials-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: '.test-next',
            prevEl: '.test-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1280: { slidesPerView: 3 }
        }
    });

    // Swiper: FAQ
    new Swiper('.faq-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: '.faq-next',
            prevEl: '.faq-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1280: { slidesPerView: 3 }
        }
    });

    // Swiper: Clients
    const clientsSwiper = new Swiper('.clients-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: '.clients-next',
            prevEl: '.clients-prev',
        },
        breakpoints: {
            768: { slidesPerView: 2 }
        },
        on: {
            init: updateClientsCounter,
            slideChange: updateClientsCounter
        }
    });

    function updateClientsCounter(swiper) {
        const current = document.querySelector('.clients-current');
        const total = document.querySelector('.clients-total');

        if (current && total) {
            current.textContent = String(swiper.realIndex + 1).padStart(2, '0');
            total.textContent = String(swiper.slides.length).padStart(2, '0');
        }
    }

});