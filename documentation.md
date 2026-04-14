# Estatein WordPress Theme Documentation

## Overview
This is a custom WordPress theme developed based on the Estatein Premium Real Estate Figma design. The theme uses a combination of PHP, Tailwind CSS (via CDN), and Lucide Icons to maintain high fidelity to the original design while providing WordPress functionality.

## Development Process
1. **Architecture**: The theme follows the standard WordPress hierarchy. Core components like the header and footer are separated into `header.php` and `footer.php` for reusability.
2. **Styling**: Tailwind CSS is integrated via CDN for rapid development and ease of maintenance. Custom styles for glassmorphism, gradients, and abstract background lines are included in `style.css` and `header.php`.
3. **Typography**: The 'Urbanist' font is enqueued via Google Fonts in `functions.php`.
4. **Custom Post Types (CPTs)**:
   - `property`: Manages property listings with meta fields for Price, Bedrooms, Bathrooms, and Type.
   - `testimonial`: Manages client testimonials with meta fields for Location and Rating.
   - `faq`: Manages frequently asked questions with meta fields for Button Text and Link.
   - `feature`: Manages the four feature cards on the home page with a custom Lucide icon field.
5. **Hero Section Settings**: The Home page has a custom meta box to manage the Hero title (gray part), stats (values and labels), and the Hero image (via Featured Image).
6. **Sliders**: Integrated Swiper.js for Properties, Testimonials, and FAQ sections.
6. **Responsiveness**: The theme is fully responsive, utilizing Tailwind's mobile-first utility classes. Special attention was given to breakpoints at 390px (Mobile), 1440px (Laptop), and 1600px+ (Desktop).
5. **Dynamic Content**:
   - `front-page.php` handles the Home page.
   - `page-about.php` handles the About page.
   - The theme is ready for Advanced Custom Fields (ACF) integration to allow easy content management for the client.

## Files Included
- `style.css`: Theme metadata and custom CSS.
- `functions.php`: Theme setup, script/style enqueuing, and custom JS logic.
- `header.php`: Reusable header with navigation and top banner.
- `footer.php`: Reusable footer with site info and social links.
- `front-page.php`: Custom template for the home page.
- `page-about.php`: Custom template for the about page.
- `index.php`: Fallback template for other pages/posts.

## Setup Instructions
1. Upload the `estatein-theme` folder to your WordPress installation's `/wp-content/themes/` directory.
2. Log in to your WordPress Dashboard.
3. Navigate to **Appearance > Themes** and activate "Estatein Premium Real Estate".
4. Create a page named "About" and ensure its slug is `about`. The theme will automatically use `page-about.php`.
5. (Optional) Install the **Advanced Custom Fields (ACF)** plugin to make sections like Hero, Features, and Team dynamic.

## SEO & Performance
- **SEO**: Basic SEO best practices are followed, including proper use of semantic HTML tags (h1, h2, nav, footer) and alt attributes for images.
- **Performance**: Minified Tailwind CSS and Lucide icons are loaded via CDN. Images are set to be responsive.

## Browser Compatibility
Tested on:
- Google Chrome
- Mozilla Firefox
- Safari
- Microsoft Edge
