<?php
/**
 * Template Name: DIY Template
 * Template Post Type: page
 */

get_header(); // Load the header
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="diy-hero">
        <div class="diy-hero-content">
            <h1>The Tools & Strategy to Grow Yourself</h1>
            <p class="hero-subtitle">You're ready to build your own authority. We give you the proven playbooks, templates, and resources used by top investment coaches to save you time and guarantee results.</p>
            <a href="#packages" class="button button-primary">Explore Resource Packages</a>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <h2>Your DIY Content System</h2>
        <div class="process-steps">
            <div class="step">
                <span class="step-number">1</span>
                <h3>Purchase & Download</h3>
                <p>Choose your resource package. Get instant, lifetime access to your downloads.</p>
            </div>
            <div class="step">
                <span class="step-number">2</span>
                <h3>Customize & Execute</h3>
                <p>Use our "fill-in-the-blank" templates and follow the step-by-step guides.</p>
            </div>
            <div class="step">
                <span class="step-number">3</span>
                <h3>Launch & Grow</h3>
                <p>Implement your content calendar and start attracting your ideal clients.</p>
            </div>
        </div>
    </section>

    <!-- Features / What's Included Section -->
    <section class="features">
        <h2>What You'll Get</h2>
        <div class="features-grid">
            <div class="feature">
                <h4>📊 Content Strategy Playbook</h4>
                <p>The exact framework for creating content that converts for investment coaches.</p>
            </div>
            <div class="feature">
                <h4>🎬 Video Script Templates</h4>
                <p>Pre-written scripts for hooks, stories, and calls-to-action that work.</p>
            </div>
            <div class="feature">
                <h4>📅 Content Calendar</h4>
                <p>A pre-planned calendar (Google Sheet/Notion) with daily post ideas.</p>
            </div>
            <div class="feature">
                <h4>✏️ Caption & Graphic Templates</h4>
                <p>Canva templates for carousels, quote posts, and story graphics.</p>
            </div>
            <div class="feature">
                <h4>#️⃣ Hashtag Strategy Kit</h4>
                <p>Curated lists of high-performing hashtags for TikTok and LinkedIn finance niches.</p>
            </div>
            <div class="feature">
                <h4>📈 Analytics Guide</h4>
                <p>Learn what metrics to track and how to interpret them to refine your strategy.</p>
            </div>
        </div>
    </section>

    <!-- Pricing Packages Section -->
    <section id="packages" class="pricing-packages">
        <h2>Choose Your Resource Package</h2>
        <p>One-time purchase, lifetime access, and immediate results.</p>

        <div class="package-cards">
            <!-- Basic Package -->
            <article class="package-card">
                <h3>The Essentials Kit</h3>
                <div class="package-price">$197</div>
                <p>Everything you need to get started.</p>
                <ul>
                    <li>Content Strategy Playbook</li>
                    <li>10 Video Script Templates</li>
                    <li>1 Month Content Calendar</li>
                    <li>Hashtag Strategy Kit</li>
                </ul>
                <a href="/checkout?package=essentials" class="button">Purchase Essentials</a>
            </article>

            <!-- Popular Package -->
            <article class="package-card popular">
                <div class="popular-badge">MOST POPULAR</div>
                <h3>The Authority Builder</h3>
                <div class="package-price">$497</div>
                <p>The complete DIY solution.</p>
                <ul>
                    <li><strong>Everything in Essentials</strong></li>
                    <li>30+ Video Script Templates</li>
                    <li>3 Month Content Calendar</li>
                    <li>Caption & Canva Template Library</li>
                    <li>Analytics Interpretation Guide</li>
                    <li>Bonus: Email Newsletter Templates</li>
                </ul>
                <a href="/checkout?package=authority" class="button button-primary">Purchase Authority Builder</a>
            </article>

            <!-- Premium Package -->
            <article class="package-card">
                <h3>The VIP Library</h3>
                <div class="package-price">$997</div>
                <p>Everything we have, plus future updates.</p>
                <ul>
                    <li><strong>Everything in Authority Builder</strong></li>
                    <li>Lifetime Access to All Future Templates</li>
                    <li>Private Resource Portal Access</li>
                    <li>2-Hour Strategy Consultation Call</li>
                </ul>
                <a href="/checkout?package=VIP" class="button">Purchase VIP</a>
            </article>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Empowering Coaches Like You</h2>
        <div class="testimonial-cards">
            <blockquote class="testimonial">
                <p>"The script templates saved me 10 hours a week. I finally know what to post and my engagement has tripled."</p>
                <cite>- David L., Stock Market Coach</cite>
            </blockquote>
            <blockquote class="testimonial">
                <p>"Worth it for the content calendar alone. It removed all the guesswork and gave me a clear plan."</p>
                <cite>- Priya K., Forex Coach</cite>
            </blockquote>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta">
        <h2>Stop Overthinking Your Content</h2>
        <p>Get the tools you need and start posting with confidence today.</p>
        <a href="#packages" class="button button-large">Get Instant Access</a>
    </section>

</main><!-- #main -->

<?php
get_footer(); // Load the footer
?>