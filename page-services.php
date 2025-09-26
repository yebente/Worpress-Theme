<?php
/**
 * Template Name: About
 * Template Post Type: page
 */

get_header(); ?>
<div class="services-page">
    <div class="container">
        <div class="services-hero">
            <h1>Our Services</h1>
            <p class="hero-subtitle">Comprehensive solutions designed specifically for investment coaches</p>
        </div>
        <div class="services-intro">
            <p>At Altradits, we understand that investment coaches need more than just generic social media management. We provide specialized services that speak the language of finance and investment, helping you attract high-value clients and build your authority in the industry.</p>
        </div>
        <div class="services-grid">
            <!-- DIY Service -->
            <div class="service-card diy">
                <div class="service-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h2>DIY Social Media</h2>
                <p class="service-price">From $197</p>
                <p class="service-description">For coaches who want to maintain control with expert guidance and templates</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Content Strategy Playbooks</li>
                    <li><i class="fas fa-check"></i> Video Script Templates</li>
                    <li><i class="fas fa-check"></i> Content Calendars</li>
                    <li><i class="fas fa-check"></i> Canva Template Library</li>
                </ul>
                <a href="<?php echo home_url('/checkout?package=DIY'); ?>" class="button button-primary">Buy Now</a>
            </div>
            <!-- DIWY Service -->
            <div class="service-card diwy">
                <div class="service-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h2>DIWY Social Media</h2>
                <p class="service-price">From $497/mo</p>
                <p class="service-description">Collaborative approach where we work together on your social strategy</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Bi-Weekly Strategy Calls</li>
                    <li><i class="fas fa-check"></i> Content Review & Feedback</li>
                    <li><i class="fas fa-check"></i> Performance Analysis</li>
                    <li><i class="fas fa-check"></i> Voxer Support</li>
                </ul>
                <a href="<?php echo home_url('/checkout?package=DIWY'); ?>" class="button button-primary">Buy Now</a>
            </div>
            <!-- DIFY Service -->
            <div class="service-card dify">
                <div class="service-icon">
                    <i class="fas fa-concierge-bell"></i>
                </div>
                <h2>DIFY Social Media</h2>
                <p class="service-price">From $997/mo</p>
                <p class="service-description">Full-service management so you can focus entirely on coaching</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Complete Content Creation</li>
                    <li><i class="fas fa-check"></i> Daily Posting & Engagement</li>
                    <li><i class="fas fa-check"></i> Platform Management</li>
                    <li><i class="fas fa-check"></i> Performance Reporting</li>
                </ul>
                <a href="<?php echo home_url('/checkout?package=DIFY'); ?>" class="button button-primary">Buy Now</a>
            </div>
        </div>
        <div class="additional-services">
            <h2>Additional Services</h2>
            <div class="addon-services-grid">
                <div class="addon-service">
                    <div class="addon-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Automations</h3>
                    <p>Streamline client onboarding and class management with automated systems</p>
                    <p class="price">From $697</p>
                    <a href="<?php echo home_url('/checkout?package=Automations'); ?>" class="button button-secondary">Buy Now</a>
                </div>
                <div class="addon-service">
                    <div class="addon-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Professional websites and branding that convert visitors into clients</p>
                    <p class="price">From $1,497</p>
                    <a href="<?php echo home_url('/checkout?package=WebDev'); ?>" class="button button-secondary">Buy Now</a>
                </div>
                <div class="addon-service">
                    <div class="addon-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Analytics & Reporting</h3>
                    <p>Advanced tracking and performance insights for your marketing efforts</p>
                    <p class="price">From $50/mo</p>
                    <a href="<?php echo home_url('/checkout?package=Analytics'); ?>" class="button button-secondary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="cta-section">
            <h2>Ready to Transform Your Online Presence?</h2>
            <p>Choose the service that fits your needs or create a custom package</p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/customize-your-package'); ?>" class="button button-primary">Build Custom Package</a>
                <a href="<?php echo home_url('/contact'); ?>" class="button button-secondary">Schedule Consultation</a>
            </div>
        </div>
        <div class="why-choose-us">
            <h2>Why Choose Altradits?</h2>
            <div class="benefits-grid">
                <div class="benefit">
                    <div class="benefit-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Industry Specialization</h3>
                    <p>We understand the unique needs of investment coaches and financial educators</p>
                </div>
                <div class="benefit">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Compliance Aware</h3>
                    <p>All content is created with financial industry regulations in mind</p>
                </div>
                <div class="benefit">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Proven Results</h3>
                    <p>Track record of helping coaches increase leads and client acquisition</p>
                </div>
                <div class="benefit">
                    <div class="benefit-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Dedicated Support</h3>
                    <p>Personal account management and responsive customer service</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>