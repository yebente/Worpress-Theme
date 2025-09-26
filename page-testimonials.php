<?php
/**
 * Template Name: Testimonials
 * Template Post Type: page
 */

get_header();
?>

<div class="testimonials-page">
    <div class="container">
        <h1>Success Stories</h1>
        <p class="page-subtitle">See what our clients say about working with us</p>
        
        <div class="testimonials-grid">
            <?php
            // Sample testimonials data - in a real scenario, you'd use a custom post type
            $testimonials = array(
                array(
                    'name' => 'Sarah Johnson',
                    'company' => 'Real Estate Investing Coach',
                    'content' => 'Since handing over my LinkedIn to Altradits, I\'ve booked 5 high-ticket clients directly from the platform. Their team understands exactly how to position investment coaches for success.',
                    'image' => 'client1.jpg',
                    'rating' => 5
                ),
                array(
                    'name' => 'Michael Chen',
                    'company' => 'Wealth Building Advisor',
                    'content' => 'The content templates alone were worth the investment. I went from struggling to post consistently to having a queue of quality content that actually converts.',
                    'image' => 'client2.jpg',
                    'rating' => 5
                ),
                array(
                    'name' => 'Priya Patel',
                    'company' => 'Forex Trading Coach',
                    'content' => 'The DIWY package was perfect for me. I wanted to stay involved in my content but needed expert guidance. My engagement tripled in just two months!',
                    'image' => 'client3.jpg',
                    'rating' => 5
                ),
                array(
                    'name' => 'David Wilson',
                    'company' => 'Stock Market Educator',
                    'content' => 'I was skeptical about TikTok for my business, but Altradits proved me wrong. They\'ve generated over 200 leads in the first quarter alone.',
                    'image' => 'client4.jpg',
                    'rating' => 5
                ),
                array(
                    'name' => 'Emily Rodriguez',
                    'company' => 'Retirement Planning Coach',
                    'content' => 'The automation setup saved me 10+ hours per week on client onboarding. Now I can focus on delivering value instead of administrative tasks.',
                    'image' => 'client5.jpg',
                    'rating' => 5
                ),
                array(
                    'name' => 'James Thompson',
                    'company' => 'Crypto Investment Coach',
                    'content' => 'Professional website and branding made all the difference. I went from looking like a hobbyist to a premium coach with premium clients.',
                    'image' => 'client6.jpg',
                    'rating' => 5
                )
            );
            
            foreach ($testimonials as $testimonial) {
                echo '
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">';
                
                // Display stars based on rating
                for ($i = 0; $i < $testimonial['rating']; $i++) {
                    echo '<i class="fas fa-star"></i>';
                }
                
                echo '</div>
                        <p>"' . $testimonial['content'] . '"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="' . get_template_directory_uri() . '/assets/images/' . $testimonial['image'] . '" alt="' . $testimonial['name'] . '" onerror="this.style.display=\'none\'">
                            <div class="fallback-avatar">' . substr($testimonial['name'], 0, 1) . '</div>
                        </div>
                        <div class="author-info">
                            <h4>' . $testimonial['name'] . '</h4>
                            <p>' . $testimonial['company'] . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
        
        <div class="results-section">
            <h2>Proven Results</h2>
            <div class="results-grid">
                <div class="result-card">
                    <div class="result-number">87%</div>
                    <p>Client Retention Rate</p>
                </div>
                <div class="result-card">
                    <div class="result-number">200+</div>
                    <p>Leads Generated</p>
                </div>
                <div class="result-card">
                    <div class="result-number">15-20</div>
                    <p>Hours Saved Weekly</p>
                </div>
                <div class="result-card">
                    <div class="result-number">4.9/5</div>
                    <p>Client Satisfaction</p>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <h2>Ready to Create Your Success Story?</h2>
            <p>Join our growing community of successful investment coaches.</p>
            <a href="<?php echo home_url('/customize-your-package'); ?>" class="button button-large">Start Your Journey</a>
        </div>
    </div>
</div>

<?php
get_footer();
?>