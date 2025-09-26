<?php
/**
 * The main homepage template
 *
 */

get_header(); // Load the header
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Your TikTok & LinkedIn, Managed.<br>Your Coaching Business, Scalded.</h1>
            <p>We are the all-in-one launchpad for investment coaches. Get your social media, automations, and website done for you—so you can focus on your clients.</p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'dify' ) ) ); ?>" class="button button-primary">Get Started</a>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'diwy' ) ) ); ?>" class="button button-secondary">Learn How</a>
        </div>
        <div class="hero-visual">
            <!-- Placeholder for a hero image, graphic, or video -->
            <div style="background-color: #ddd; height: 300px; display: flex; align-items: center; justify-content: center;">Hero Graphic/Video</div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="services-overview">
        <h2>How It Works</h2>
        <p>Choose the level of support that's right for your business.</p>

        <div class="service-cards">
            <!-- DIY Card -->
            <article class="service-card">
                <h3>Do It Yourself (DIY)</h3>
                <p>You're hands-on. We provide the strategy, templates, and tools you need to execute like a pro.</p>
                <ul>
                    <li>Content Templates & Calendars</li>
                    <li>Strategy Guides</li>
                    <li>Resource Library</li>
                </ul>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'diy' ) ) ); ?>" class="button">Explore DIY</a>
            </article>

            <!-- DIWY Card -->
            <article class="service-card">
                <h3>Do It With You (DIWY)</h3>
                <p>Collaborate with our experts. We build the strategy and content together, side-by-side.</p>
                <ul>
                    <li>Bi-Weekly Strategy Calls</li>
                    <li>Collaborative Content Creation</li>
                    <li>Performance Review & Coaching</li>
                </ul>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'diwy' ) ) ); ?>" class="button">Explore DIWY</a>
            </article>

            <!-- DIFY Card -->
            <article class="service-card">
                <h3>Do It For You (DIFY)</h3>
                <p>Go completely hands-off. We manage your entire TikTok & LinkedIn presence from A to Z.</p>
                <ul>
                    <li>Full Content Strategy & Creation</li>
                    <li>Daily Posting & Engagement</li>
                    <li>Detailed Performance Analytics</li>
                </ul>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'dify' ) ) ); ?>" class="button button-primary">Explore DIFY</a>
            </article>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>Ready to Build Your Authority Online?</h2>
        <p>Schedule a free, no-obligation consultation to see how we can help you grow.</p>
        <a href="/contact" class="button button-large">Book Your Free Call</a>
    </section>

</main><!-- #main -->

<?php
get_footer(); // Load the footer