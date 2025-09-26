# Altradits Theme - Functional & Design Prompt

This README acts as a comprehensive prompt for generating a fully functional, modern WordPress website for investment coaches’ social media management. It covers structure, design, CSS organization, and PHP functionality, so a developer or AI can use it to scaffold a new, working site.

---

## 1. Website Functionality Overview

The Altradits Theme is designed to:
- Present services for investment coaches, including DIY, DIWY, and DIFY packages.
- Allow users to customize packages and purchase with minimal steps.
- Provide a dashboard for scheduled posts, performance metrics, and quick actions.
- Feature a content calendar with drag-and-drop scheduling.
- Enable post creation with rich text, image/video upload, and preview.
- Display analytics with charts/graphs for engagement, reach, and growth.
- Manage clients, their social profiles, and communications.
- Include testimonials, about, contact, and thank you pages.
- Send emails on form submissions and purchases.
- Ensure accessibility, responsiveness, and clear navigation.

---

## 2. Website Structure & CSS Storage

### Main Sections/Elements (and where their CSS should be stored):
- **Header**: Site logo, navigation menu, call-to-action button  
  → `assets/css/main.css`
  - /* ================= HEADER STYLES ================= */
- **Footer**: Company info, links, social icons, copyright  
  → `assets/css/main.css`
  - /* ================= FOOTER STYLES ================= */
- **Homepage**: Hero, services overview, CTA, testimonials  
  → `assets/css/main.css`
  - /* ================= HOMEPAGE STYLES ================= */
- **About Page**: Hero, mission, values, approach, CTA  
  → `assets/css/main.css` or `about.css`
  - /* ================= ABOUT PAGE STYLES ================= */
- **Contact Page**: Info cards, contact form, social links  
  → `assets/css/main.css` or `contact.css`
  - /* ================= CONTACT PAGE STYLES ================= */
- **Services Page**: Service cards, CTA, benefits  
  → `assets/css/main.css` or `services.css`
  - /* ================= SERVICES PAGE STYLES ================= */
- **Customize Package Page**: Multi-step builder, options grid, summary sidebar, checkout button  
  → `assets/css/customize-package.css`
  - /* ================= CUSTOMIZE PACKAGE PAGE STYLES ================= */
- **Checkout Page**: Order summary, customer info form, payment  
  → `assets/css/main.css` or `checkout.css`
  - /* ================= CHECKOUT PAGE STYLES ================= */
- **Thank You Page**: Confirmation, next steps, support info  
  → `assets/css/main.css` or `thank-you.css`
  - /* ================= THANK YOU PAGE STYLES ================= */
- **Testimonials Page**: Testimonial cards, results grid, CTA  
  → `assets/css/main.css` or `testimonials.css`
  - /* ================= TESTIMONIALS PAGE STYLES ================= */
- **Dashboard/Calendar/Analytics/Client Management**:  
  → Add new CSS files as needed for these app-like features.

---

## 3. Design Preferences & Visual Guidelines

### Summary
- Modern, elegant, and authoritative UI for investment coaches.
- Harmony, dominance, and courage for a trustworthy brand.

### Layout Structure
- Responsive design: adapts seamlessly desktop to mobile.
- Flexible grid system for content arrangement.
- Persistent desktop navigation, collapsible mobile nav.
- Content areas resize dynamically for readability and hierarchy.

### Visual Style
- Sophisticated, minimalist, professional aesthetic.
- Strong visual anchors, subtle depth (shadows/gradients).
- Images fit frames (object-fit: cover/contain).
- Consistent padding/margins across all screens.
- Modern color palette, clear typography.

### Color Palette
- Primary: Deep Navy Blue (#1A2C42) or Charcoal Gray (#2C3E50)
- Accent: Muted Gold (#B89B6F) or Bronze (#A67C52)
- Text: Off-white (#F8F8F8) on dark; Dark gray (#333333) on light
- Secondary Accent: Deep Teal (#007B80) or Burgundy (#8B0000)

### Typography
- Headings: Montserrat, Lato (strong, modern sans-serif)
- Body: Open Sans, Source Sans Pro (elegant, readable)
- Hierarchy: Vary weights/sizes for flow

### Elements & Sections
- **Header**: Dark background, light logo, subtle nav links.
- **Hero**: Bold headline, accent CTA, compelling background.
- **Content**: Clean cards/blocks, consistent spacing, clear hierarchy.
- **Buttons**: Accent background, light text, subtle hover.
- **Forms**: Minimal fields, clear labels, accent submit.
- **Icons**: Line/solid, consistent style, accent/primary colors.
- **Dashboard**: Scheduled posts, metrics, quick actions.
- **Content Calendar**: Drag-and-drop, visual indicators.
- **Post Creator**: Rich editor, media upload, preview.
- **Analytics**: Charts/graphs for engagement/growth.
- **Client Management**: List, profiles, communication tools.

### Usability
- Clear CTAs, intuitive navigation.
- Minimal clicks for core tasks (e.g., scheduling).
- Accessibility for all users.

---

## 4. CSS Organization Requirements

- Use clear section comments (with horizontal lines) to indicate where each page/section style begins/ends:
  - /* ================= HEADER STYLES ================= */
  - /* ================= END HEADER STYLES ================= */
- For each major element/component, use a block comment above the selector:
  - /* Navigation Menu */
  - .nav-menu { ... }
  - /* CTA Button */
  - .button-primary { ... }
- Use CSS variables for colors, spacing, fonts.
- Avoid duplication: global styles in main.css, page-specific in their own file.
- Use BEM or clear class naming for maintainability.
- Add comments for each major section/component.
- Optimize for performance (minimize overrides, use efficient selectors).

---

## 5. PHP Functionality (from functions.php)

All major PHP functions are commented and explained below, with referenced pages/features:

- **Enqueue Styles and Scripts**
  - Loads global and page-specific CSS/JS files.
  - References: All pages (global), Customize Package, Checkout, Thank You, DIFY.
  - Example:
    ```php
    // Enqueue Main Stylesheet (style.css)
    // Enqueue Custom CSS (main.css)
    // Enqueue Navigation JS (navigation.js)
    // Enqueue Font Awesome
    // Conditionally enqueue customize-package.css/js for Customize Package page
    // Conditionally enqueue pricing-calculator.js for DIFY page
    // Conditionally enqueue checkout.css/js for Checkout page
    // Conditionally enqueue thank-you.css for Thank You page
    ```

- **Theme Support**
  - Enables WordPress features: post thumbnails, title tag, custom logo, navigation menus.
  - References: All pages.

- **Body Class Filters**
  - Adds custom classes to `<body>` for template identification and styling.
  - References: All pages, especially Customize Package.

- **Checkout Form Handler**
  - Handles POST requests for checkout form, validates nonce, sanitizes input, sends email, redirects to Thank You.
  - References: Checkout, Thank You.

- **Custom Navigation Walker**
  - Customizes WordPress navigation menus, adds dropdown arrows for menu items with children.
  - References: Header navigation, all pages.

- **Register Theme Menus**
  - Registers primary, footer, mobile navigation menus.
  - References: Header, footer, mobile nav.

- **Add Body Classes**
  - Adds page slug and header style class to `<body>` for granular CSS targeting.
  - References: All pages.

---

## 6. How to Use This Prompt

- Share your HTML structure or describe your page sections/elements.
- Specify which files need CSS and any unique design needs.
- Use the design preferences and organization rules above.
- Generate organized, maintainable CSS and PHP that matches your HTML and business branding.
- Scaffold a fully functional WordPress theme with all described features.

---

**Note:**  
This README is for developer/internal use only. Do not display on the website.
