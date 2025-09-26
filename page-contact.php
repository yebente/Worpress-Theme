<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 */

get_header();
?>
<div class="contact-page">
    <div class="container">
        <h1>Contact Us</h1>
        <p class="page-subtitle">We're here to help you grow your investment coaching business. Reach out to us!</p>
        <div class="contact-content">
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>info@altradits.com</p>
                    <p>Response time: Within 24 hours</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>+254 707 172 370</p>
                    <p>Mon-Fri, 9AM-5PM EAT</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Website</h3>
                    <p>www.altradits.com</p>
                    <a href="https://www.altradits.com" target="_blank" class="button button-small">Visit Site</a>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3>Follow Us</h3>
                    <div class="social-links-mini">
                        <a href="https://www.linkedin.com/company/altradits/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://x.com/altradits" target="_blank"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/altradits/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61579168157529" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form-container">
                <form id="contact-form" class="contact-form" method="post">
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit" class="button button-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();