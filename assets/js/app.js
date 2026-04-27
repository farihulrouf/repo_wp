document.addEventListener('DOMContentLoaded', () => {
    initLucide();
    initMobileMenu();
    initBanner();
    initSwipers();
});

/**
 * Lucide Icons
 */
function initLucide() {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
}

/**
 * Mobile Menu Toggle
 */
function initMobileMenu() {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (!menuButton || !mobileMenu) return;

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

/**
 * Banner Close Handler
 */
function initBanner() {
    const closeBtn = document.querySelector('header button');
    const banner = document.querySelector('header > div:first-child');
    const header = document.querySelector('header');

    if (!closeBtn || !banner || !header) return;

    closeBtn.addEventListener('click', () => {
        banner.style.display = 'none';
        header.style.top = '0';
    });
}

/**
 * Swiper Init
 */
function initSwipers() {
    initPropertiesSwiper();
    initTestimonialsSwiper();
    initFaqSwiper();
    initClientsSwiper();
}

/**
 * Properties Swiper
 */
function initPropertiesSwiper() {
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
}

/**
 * Testimonials Swiper
 */
function initTestimonialsSwiper() {
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
}

/**
 * FAQ Swiper
 */
function initFaqSwiper() {
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
}

/**
 * Clients Swiper + Counter
 */
function initClientsSwiper() {
    const swiper = new Swiper('.clients-swiper', {
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
            init: () => updateClientsCounter(swiper),
            slideChange: () => updateClientsCounter(swiper),
        }
    });
}

/**
 * Update Counter Clients
 */
function updateClientsCounter(swiper) {
    const current = document.querySelector('.clients-current');
    const total = document.querySelector('.clients-total');

    if (!current || !total) return;

    current.textContent = String(swiper.realIndex + 1).padStart(2, '0');
    total.textContent = String(swiper.slides.length).padStart(2, '0');
}