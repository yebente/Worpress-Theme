<?php
/**
 * Template Name: DIWY Template
 * Template Post Type: page
 */

get_header(); // Load the header
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="diwy-hero">
        <div class="diwy-hero-content">
            <h1>Strategic Partnership for Growth</h1>
            <p class="hero-subtitle">You handle the content, we'll be your strategic guide. Get expert coaching, feedback, and a proven strategy to accelerate your growth on TikTok and LinkedIn without going full hands-off.</p>
            <a href="#plans" class="button button-primary">View Collaboration Plans</a>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <h2>Your Monthly Collaboration System</h2>
        <div class="process-steps">
            <div class="step">
                <span class="step-number">1</span>
                <h3>Strategy Session</h3>
                <p>We kick off each month with a deep-dive call to plan your content focus and goals.</p>
            </div>
            <div class="step">
                <span class="step-number">2</span>
                <h3>Create & Submit</h3>
                <p>You create your content using our templates and submit it for expert review.</p>
            </div>
            <div class="step">
                <span class="step-number">3</span>
                <h3>Review & Refine</h3>
                <p>We provide detailed feedback on hooks, captions, and visuals to maximize impact.</p>
            </div>
            <div class="step">
                <span class="step-number">4</span>
                <h3>Launch & Analyze</h3>
                <p>You post the polished content, and we analyze the results together to refine.</p>
            </div>
        </div>
    </section>

    <!-- Features / What's Included Section -->
    <section class="features">
        <h2>Your Monthly Collaboration Includes</h2>
        <div class="features-grid">
            <div class="feature">
                <h4>🔄 Bi-Weekly Strategy Calls</h4>
                <p>Regular Zoom calls to plan, troubleshoot, and strategize.</p>
            </div>
            <div class="feature">
                <h4>✍️ Content Review & Feedback</h4>
                <p>Detailed feedback on every video script and post before you publish.</p>
            </div>
            <div class="feature">
                <h4>📈 Performance Analysis</h4>
                <p>Breakdown of what's working and what's not, with actionable steps.</p>
            </div>
            <div class="feature">
                <h4>📚 Resource Library Access</h4>
                <p>Full access to all our DIY templates and guides.</p>
            </div>
            <div class="feature">
                <h4>📧 Voxer Support</h4>
                <p>Quick voice or text support for urgent questions during business hours.</p>
            </div>
            <div class="feature">
                <h4>🎯 Hashtag & SEO Guidance</h4>
                <p>Personalized recommendations for maximizing your reach.</p>
            </div>
        </div>
    </section>

    <!-- Pricing Packages Section -->
    <section id="plans" class="pricing-packages">
        <h2>Choose Your Collaborative Plan</h2>
        <p>Monthly retainers designed to provide the right level of strategic support.</p>

        <div class="package-cards">
            <!-- Accelerator Plan -->
            <article class="package-card">
                <h3>The Accelerator</h3>
                <div class="package-price">$497<span>/mo</span></div>
                <p>Perfect for getting started with consistent guidance.</p>
                <ul>
                    <li>1x 60-min Strategy Call/Month</li>
                    <li>Feedback on 8 Pieces of Content/Month</li>
                    <li>Email Support</li>
                    <li>DIY Resource Library Access</li>
                </ul>
                <a href="/customize?plan=accelerator" class="button">Start with Accelerator</a>
            </article>

            <!-- Popular Plan -->
            <article class="package-card popular">
                <div class="popular-badge">RECOMMENDED</div>
                <h3>The Partner</h3>
                <div class="package-price">$997<span>/mo</span></div>
                <p>Our most popular package for serious growth.</p>
                <ul>
                    <li><strong>2x 60-min Strategy Calls/Month</strong></li>
                    <li>Unlimited Content Feedback</li>
                    <li>Voxer Support (M-F)</li>
                    <li>Performance Analysis Report</li>
                    <li>DIY Resource Library Access</li>
                </ul>
                <a href="/customize?plan=partner" class="button button-primary">Start with Partner</a>
            </article>

            <!-- Authority Plan -->
            <article class="package-card">
                <h3>The Authority</h3>
                <div class="package-price">$1,497<span>/mo</span></div>
                <p>For established coaches needing high-touch support.</p>
                <ul>
                    <li><strong>Weekly Strategy Calls</strong></li>
                    <li>Unlimited Content Feedback</li>
                    <li>Priority Voxer Support</li>
                    <li>Advanced Analytics & Tracking</li>
                    <li>Competitor Analysis</li>
                    <li>DIY Resource Library Access</li>
                </ul>
                <a href="/customize?plan=authority" class="button">Start with Authority</a>
            </article>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Coaches Thriving With Our Partnership</h2>
        <div class="testimonial-cards">
            <blockquote class="testimonial">
                <p>"The feedback on my videos was a game-changer. My content quality improved overnight, and my follower growth became consistent."</p>
                <cite>- Michael B., Wealth Building Coach</cite>
            </blockquote>
            <blockquote class="testimonial">
                <p>"Having a strategist to brainstorm with took the stress out of content creation. It felt like having a marketing co-founder."</p>
                <cite>- Chloe P., Retirement Coach</cite>
            </blockquote>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta">
        <h2>Ready to Build Your Authority, Together?</h2>
        <p>Schedule a discovery call to see if our collaborative partnership is the right fit.</p>
        <a href="/contact" class="button button-large">Book Your Discovery Call</a>
    </section>

</main><!-- #main -->

<?php
get_footer(); // Load the footer
?>