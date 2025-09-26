# Altradits Theme - CSS Generation & Design Prompt

This README is designed to act as a prompt for generating and optimizing CSS for the entire Altradits WordPress website. Use this structure to guide CSS creation, ensure consistency, and optimize for maintainability and performance.

## 1. Website Structure

### Main Sections/Elements (and where their CSS should be stored):
- **Header**: Site logo, navigation menu, call-to-action button  
  → `assets/css/main.css`
  - /* ================= HEADER STYLES ================= */
- **Footer**: Company info, services links, company links, social icons, copyright  
  → `assets/css/main.css`
  - /* ================= FOOTER STYLES ================= */
- **Homepage**: Hero section, services overview, CTA, testimonials, final CTA  
  → `assets/css/main.css` (global homepage styles)
  - /* ================= HOMEPAGE STYLES ================= */
- **About Page**: Hero, mission, values, approach, contact section, CTA  
  → `assets/css/main.css` (unless unique, then use a new about.css)
  - /* ================= ABOUT PAGE STYLES ================= */
- **Contact Page**: Contact info cards, contact form, social links  
  → `assets/css/main.css` (unless unique, then use a new contact.css)
  - /* ================= CONTACT PAGE STYLES ================= */
- **Services Page**: Service cards (DIY, DIWY, DIFY), additional services, CTA, benefits  
  → `assets/css/main.css` (unless unique, then use a new services.css)
  - /* ================= SERVICES PAGE STYLES ================= */
- **Customize Package Page**: Multi-step package builder, options grid, summary sidebar, checkout button  
  → `assets/css/customize-package.css`
  - /* ================= CUSTOMIZE PACKAGE PAGE STYLES ================= */
- **Checkout Page**: Order summary, customer info form, payment form  
  → `assets/css/main.css` (unless unique, then use a new checkout.css)
  - /* ================= CHECKOUT PAGE STYLES ================= */
- **Thank You Page**: Confirmation message, next steps, support info  
  → `assets/css/main.css` (unless unique, then use a new thank-you.css)
  - /* ================= THANK YOU PAGE STYLES ================= */
- **Testimonials Page**: Testimonial cards, results grid, CTA  
  → `assets/css/main.css` (unless unique, then use a new testimonials.css)
  - /* ================= TESTIMONIALS PAGE STYLES ================= */

## 2. Files That Need CSS
- **assets/css/main.css**: Global styles (header, footer, navigation, buttons, forms, layout, typography, and all shared sections)
- **assets/css/customize-package.css**: Only for the Customize Package page (unique UI, options grid, summary sidebar)
- (Optionally, create additional CSS files for other unique pages if needed: about.css, contact.css, services.css, checkout.css, thank-you.css, testimonials.css)

## 3. Design Preferences & Visual Guidelines

### Summary
- Design a modern, elegant, and authoritative UI for investment coaches' social media management website.
- Convey harmony, dominance, and courage to establish a rich, trustworthy brand presence.

### Layout Structure
- Clean, spacious, and modular grid-based layout.
- Clear visual hierarchy with generous white space.
- Prominent hero section for immediate impact and key messaging.
- Responsive design is paramount, adapting seamlessly from desktop to mobile.
- Utilize a flexible grid system for content arrangement.
- Main navigation should be persistent on desktop, collapsible on mobile.
- Content areas should dynamically resize, maintaining readability and visual hierarchy.

### Visual Style
- Sophisticated and professional aesthetic.
- Minimalist approach with strong, deliberate visual anchors.
- Subtle use of depth through shadows or gradients.
- Images must be handled gracefully, fitting within defined frames without distortion.
- Implement object-fit: cover or contain for image elements as appropriate.
- Maintain consistent padding and margins across all screen sizes.
- Use a modern color palette with clear typography for readability.

### Color Palette
- Primary: Deep Navy Blue (#1A2C42) or Charcoal Gray (#2C3E50) for main backgrounds.
- Accent: Muted Gold (#B89B6F) or Bronze (#A67C52) for highlights, buttons, and key elements.
- Text: Off-white (#F8F8F8) on dark backgrounds; Dark gray (#333333) on light backgrounds.
- Secondary Accent: Deep Teal (#007B80) or rich Burgundy (#8B0000) for calls to action.

### Typography
- Headings: Strong, modern sans-serif font (e.g., Montserrat, Lato) for impact and clarity.
- Body Text: Highly readable, elegant sans-serif (e.g., Open Sans, Source Sans Pro) for professionalism.
- Hierarchy: Use varying weights and sizes to establish clear visual flow.

### Elements and Sections
- Header: Dark background, light logo, subtle navigation links.
- Hero Section: Bold headline, accent-colored call to action button, compelling background image/video.
- Content Sections: Clean cards or blocks, consistent spacing, clear content hierarchy.
- Buttons: Accent color background with light text, subtle hover effects.
- Forms: Minimal input fields with clear labels, accent color for submit button.
- Icons: Line-based or solid, consistent style, in accent or primary colors.
- Dashboard: Overview of scheduled posts, performance metrics, and quick actions.
- Content Calendar: Drag-and-drop interface for scheduling, with clear visual indicators.
- Post Creator: Rich text editor with image/video upload, preview functionality.
- Analytics: Visual charts and graphs for engagement, reach, and growth.
- Client Management: List of clients, linked social profiles, and communication tools.

### Usability
- Clear calls to action and intuitive navigation paths.
- Minimal clicks to achieve core tasks like scheduling a post.
- Accessibility considerations for all users.

## 4. CSS Organization Requirements
- Use clear section comments (with horizontal lines) to indicate where each page or section style begins and ends, e.g.:
  - /* ================= HEADER STYLES ================= */
  - /* ================= END HEADER STYLES ================= */
- For each major element/component, use a block comment above the selector, e.g.:
  - /* Navigation Menu */
  - .nav-menu { ... }
  - /* CTA Button */
  - .button-primary { ... }
- Use CSS variables for colors, spacing, and fonts
- Avoid duplication: put global styles in main.css, page-specific in their own file
- Use BEM or clear class naming for maintainability
- Add comments for each major section/component
- Optimize for performance (minimize overrides, use efficient selectors)

## 5. How to Use This Prompt
- Share your HTML structure or describe your page sections/elements
- Specify which files need CSS and any unique design needs
- Use the design preferences and organization rules above
- Generate organized, maintainable CSS that matches your HTML and business branding

## 6. Theme PHP Structure & Key Functions (from functions.php)

Below are the main elements of `functions.php`, each commented and explained with the pages or features they reference:

- **Enqueue Styles and Scripts**
  - Loads global and page-specific CSS/JS files.
  - References: All pages (global), Customize Package (`page-customize.php`), Checkout (`page-checkout.php`), Thank You (`page-thank-you.php`), DIFY page (`dify`).
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
  - References: All pages (site-wide features).

- **Body Class Filters**
  - Adds custom classes to `<body>` for template identification and styling.
  - References: Customize Package page, all pages (adds page slug, fixed header class).

- **Checkout Form Handler**
  - Handles POST requests for the checkout form, validates nonce, sanitizes input, sends email, and redirects to Thank You page.
  - References: Checkout page (`page-checkout.php`), Thank You page (`page-thank-you.php`).

- **Custom Navigation Walker**
  - Customizes the output of WordPress navigation menus, adds dropdown arrows for menu items with children.
  - References: Header navigation, all pages with menus.

- **Register Theme Menus**
  - Registers primary, footer, and mobile navigation menus for use in theme locations.
  - References: Header, footer, mobile navigation (all pages).

- **Add Body Classes**
  - Adds page slug and header style class to `<body>` for more granular CSS targeting.
  - References: All pages.

---
For more details, see inline comments in `functions.php`. This section ensures developers understand the PHP logic that supports the CSS and UI structure described above.

---
This README is for developer/internal use only. Do not display on the website.
