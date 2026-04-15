# Estatein - Premium Real Estate WordPress Theme

A high-fidelity, custom WordPress theme built for the Estatein Real Estate platform. This theme is developed from scratch based on the provided Figma design, focusing on performance, responsiveness, and clean code.

## 🚀 Live Demo
**URL:** [https://growmodo.wuaze.com/](https://growmodo.wuaze.com/)


**Wp-admin:** [https://growmodo.wuaze.com/wp-admin/](https://growmodo.wuaze.com/wp-admin/)

username : farihul 
pass : peruvianaja


**FIGMA:** [https://www.figma.com/community/file/1314076616839640516](https://www.figma.com/community/file/1314076616839640516)
---

## ✨ Key Features

- **Custom WordPress Theme:** Built without page builders for maximum performance and flexibility.
- **Tailwind CSS Integration:** Modern utility-first styling for pixel-perfect design.
- **Dynamic Content Management:**
  - **Properties CPT:** Manage listings with price, area, and room details.
  - **Testimonials CPT:** Dynamic client feedback with star ratings.
  - **FAQ CPT:** Easy-to-manage accordion-style questions.
  - **Team CPT:** Manage staff profiles and social links.
- **Native Meta Boxes:** No dependency on ACF; uses native WordPress meta API.
- **Fully Responsive:** Optimized for Mobile, Tablet, and Desktop (1440px Max Width).
- **SEO Optimized:** Dynamic meta tags, semantic HTML, and fast loading times.
- **Interactive UI:** Smooth carousels using Swiper.js and Lucide icons.

---

## 🛠️ Installation & Setup

### 1. Theme Installation
1. Download or clone this repository.
2. Copy the `estatein-theme` folder into your WordPress installation's `/wp-content/themes/` directory.
3. Log in to your WordPress Dashboard.
4. Navigate to **Appearance > Themes** and click **Activate** on "Estatein Premium Real Estate".

### 2. Page Configuration
To match the demo layout, create the following pages in **Pages > Add New**:
- **Home:** Assign the default template.
- **About Us:** Select the **About Page** template from the Page Attributes.
- **Contact Us:** Select the **Contact Page** template from the Page Attributes.

Go to **Settings > Reading** and set:
- **Your homepage displays:** A static page.
- **Homepage:** Home.

### 3. Permalinks
For clean URLs (e.g., `/about` instead of `/?p=123`):
1. Go to **Settings > Permalinks**.
2. Select **Post name**.
3. Click **Save Changes**.

---

## 📝 Content Management Guide

### Adding Properties
1. Go to **Properties > Add New**.
2. Set the featured image (Property Image).
3. Fill in the **Property Details** meta box (Price, Bedrooms, Bathrooms, Area).
4. Publish.

### Adding Testimonials
1. Go to **Testimonials > Add New**.
2. Enter the client's feedback in the content area.
3. Set a featured image (Client Avatar).
4. Fill in the **Testimonial Details** (Client Name, Location, Rating 1-5).
5. Publish.

### Adding Team Members
1. Go to **Team Members > Add New**.
2. Set the featured image (Member Photo).
3. Fill in the **Team Member Details** (Position, Twitter URL).
4. Publish.

---

## 💻 Technical Details

- **PHP Version:** 7.4+ recommended.
- **WordPress Version:** 6.0+ recommended.
- **CSS Framework:** Tailwind CSS (via CDN for this demo).
- **JS Libraries:** Swiper.js, Lucide Icons.
- **Security:** Implemented WordPress Nonces and data sanitization/escaping.

---

## 📄 Documentation
For a more detailed technical breakdown of the development process, choices, and architecture, please refer to [DEVELOPMENT.md](./estatein-theme/DEVELOPMENT.md).

---

## 👨‍💻 Author
**Farihul Rouf**
WordPress Developer Candidate
