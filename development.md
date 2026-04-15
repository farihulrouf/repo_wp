# Estatein WordPress Theme - Development Documentation

## Project Overview
This project is a custom WordPress theme developed based on the Estatein Figma design. The goal was to create a high-fidelity, responsive, and dynamic real estate platform.

## Technical Stack
- **Core:** PHP, WordPress CMS
- **Styling:** Tailwind CSS (Utility-first CSS)
- **Icons:** Lucide Icons
- **Interactivity:** Swiper.js (for carousels), Native JavaScript
- **Content Management:** Custom Post Types (CPT) & Native Meta Boxes

## Key Features Implemented

### 1. Custom Post Types (CPT)
To ensure easy content management without relying on heavy plugins, I registered several CPTs:
- **Properties:** Managed with custom fields for price, bedrooms, bathrooms, and area.
- **Testimonials:** Includes fields for client name, location, and star rating.
- **FAQs:** Simple Q&A management.
- **Team Members:** Managed with position and social link fields.

### 2. Dynamic Content & Meta Boxes
Instead of using ACF (Advanced Custom Fields), I implemented **Native WordPress Meta Boxes**. This demonstrates a deeper understanding of the WordPress core API and ensures better performance by reducing plugin dependency.
- Custom sanitization and escaping for all meta fields.
- Nonce verification for security.

### 3. Responsive Design
- **Standardized Container:** All sections use a consistent `max-w-[1440px]` container.
- **Mobile-First:** Layouts are fully responsive, transitioning from single-column on mobile to multi-column on desktop using Tailwind's grid system.
- **Interactive Elements:** Custom-styled Swiper.js sliders with dynamic pagination counters (e.g., "01 of 10").

### 4. SEO & Performance
- **Meta Tags:** Dynamic Open Graph and Twitter card meta tags implemented in `header.php`.
- **Performance:** Minimized external dependencies, used optimized Google Fonts, and implemented lazy loading for icons.
- **Accessibility:** Semantic HTML5 tags and proper ARIA labels where applicable.

### 5. Custom Form Handling
- Implemented a custom Contact Page with a styled form and JavaScript-based submission simulation (ready for AJAX integration).

## Development Process
1. **Setup:** Initialized a clean WordPress theme structure (`style.css`, `index.php`, `functions.php`).
2. **Architecture:** Defined the data structure for Properties and Testimonials.
3. **Frontend:** Built the UI components using Tailwind CSS, focusing on the dark-themed aesthetic of the Figma design.
4. **Integration:** Connected the frontend templates (`front-page.php`, `page-about.php`) to the WordPress database using `WP_Query` and the WordPress Loop.
5. **Polishing:** Added animations, hover effects, and standardized the layout across all pages.

## How to Run Locally
1. Move the `estatein-theme` folder to your `/wp-content/themes/` directory.
2. Activate the theme via the WordPress Dashboard.
3. Create pages (Home, About, Contact) and assign the respective templates.
4. Add content via the new "Properties", "Testimonials", and "FAQ" menus in the sidebar.
