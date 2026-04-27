document.addEventListener("DOMContentLoaded", function () {
  console.log("App JS jalan 🚀");

  // ======================
  // Swiper (SAFE INIT)
  // ======================
  const swiperEl = document.querySelector(".swiper");

  if (typeof Swiper !== "undefined" && swiperEl) {
    new Swiper(swiperEl, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      autoplay: {
        delay: 3000,
      },
    });

    console.log("Swiper OK ✅");
  } else {
    console.warn("Swiper tidak siap ❌");
  }

  // ======================
  // Lucide (SAFE INIT)
  // ======================
  if (typeof lucide !== "undefined") {
    lucide.createIcons();
  }
});