<?php
/**
 * Template Name: DIFY Template
 * Template Post Type: page
 */

get_header(); // Load the header
?>

<body>
    <main id="primary" class="site-main">

        <!-- Hero Section -->
        <section class="dify-hero">
            <div class="container">
                <div class="dify-hero-content">
                    <h1>Done-For-You Social Media Management</h1>
                    <p class="hero-subtitle">Stop worrying about content. We'll build your authority on TikTok and LinkedIn for you, delivering consistent growth while you focus on your coaching clients.</p>
                    <a href="#pricing" class="button button-primary">See Pricing & Packages</a>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="how-it-works">
            <div class="container">
                <h2>Your Hands-Free Content Engine</h2>
                <div class="process-steps">
                    <div class="step">
                        <span class="step-number">1</span>
                        <h3>Onboarding & Strategy</h3>
                        <p>We dive deep into your brand, audience, and goals to build a custom content strategy.</p>
                    </div>
                    <div class="step">
                        <span class="step-number">2</span>
                        <h3>Content Creation</h3>
                        <p>Our team scripts, shoots, and edits engaging video and static content that resonates with investors.</p>
                    </div>
                    <div class="step">
                        <span class="step-number">3</span>
                        <h3>Publishing & Engagement</h3>
                        <p>We handle all posting, scheduling, and community engagement to build your audience.</p>
                    </div>
                    <div class="step">
                        <span class="step-number">4</span>
                        <h3>Analysis & Reporting</h3>
                        <p>Receive monthly performance reports with insights on growth, engagement, and leads.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features / What's Included Section -->
        <section class="features">
            <div class="container">
                <h2>What's Included In Your Package</h2>
                <div class="features-grid">
                    <div class="feature">
                        <h4>✅ Platform Management</h4>
                        <p>Full management of your TikTok, LinkedIn, or both.</p>
                    </div>
                    <div class="feature">
                        <h4>✅ Video Content</h4>
                        <p>X high-quality, edited videos per month.</p>
                    </div>
                    <div class="feature">
                        <h4>✅ Static Content</h4>
                        <p>X carousels, quote graphics, or text-based posts per month.</p>
                    </div>
                    <div class="feature">
                        <h4>✅ Content Strategy</h4>
                        <p>Monthly content calendar and hashtag strategy.</p>
                    </div>
                    <div class="feature">
                        <h4>✅ Engagement</h4>
                        <p>Daily monitoring and response to comments/DMs.</p>
                    </div>
                    <div class="feature">
                        <h4>✅ Performance Reports</h4>
                        <p>Monthly analytics report showing growth and insights.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Calculator Section -->
        <section id="pricing" class="pricing">
            <div class="container">
                <h2>Build Your Custom Package</h2>
                <p>Select the options that fit your needs. Your monthly investment updates in real-time.</p>

                <div class="pricing-calculator">
                    <form id="dify-calculator" method="post" action="/checkout">
                        <input type="hidden" name="dify_data" id="dify-data">

                        <!-- Platform Selection -->
                        <div class="calc-group">
                            <label>Platforms:</label>
                            <div class="options">
                                <label class="option-button">
                                    <input type="radio" name="platform" value="tiktok" data-price="497"> TikTok Only ($497)
                                </label>
                                <label class="option-button">
                                    <input type="radio" name="platform" value="linkedin" data-price="597"> LinkedIn Only ($597)
                                </label>
                                <label class="option-button">
                                    <input type="radio" name="platform" value="both" data-price="997"> Both Platforms ($997)
                                </label>
                            </div>
                            <p class="selection-required" id="platform-required">Please select a platform</p>
                        </div>

                        <!-- Video Add-on -->
                        <div class="calc-group">
                            <label>Additional Videos (per month):</label>
                            <div class="options">
                                <select name="extra_videos" id="extra_videos">
                                    <option value="0" data-price="0" selected>+0 Videos ($0)</option>
                                    <option value="2" data-price="200">+2 Videos ($200)</option>
                                    <option value="4" data-price="380">+4 Videos ($380)</option>
                                    <option value="8" data-price="720">+8 Videos ($720)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Reporting Tier -->
                        <div class="calc-group">
                            <label>Reporting Detail:</label>
                            <div class="options">
                                <label class="option-button">
                                    <input type="radio" name="reporting" value="basic" data-price="0"> Basic Report ($0)
                                </label>
                                <label class="option-button">
                                    <input type="radio" name="reporting" value="advanced" data-price="50"> Advanced Analytics ($50)
                                </label>
                            </div>
                            <p class="selection-required" id="reporting-required">Please select a reporting option</p>
                        </div>

                        <!-- Price Display -->
                        <div class="price-display">
                            <h3>Your Estimated Monthly Investment:</h3>
                            <div class="total-price">$<span id="total-cost">0</span>/mo</div>
                            <p class="selection-notice" id="selection-notice">Please select options above to see your total</p>
                            <button type="submit" class="button button-primary" id="checkout-btn">Proceed to Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="container">
                <h2>What Other Investment Coaches Say</h2>
                <div class="testimonial-cards">
                    <blockquote class="testimonial">
                        <p>"Since handing over my LinkedIn to this team, I've booked 5 high-ticket clients directly from the platform. Worth every penny."</p>
                        <cite>- Sarah J., Real Estate Investing Coach</cite>
                    </blockquote>
                    <blockquote class="testimonial">
                        <p>"I never understood TikTok. Now it's my top lead source. They handle everything and send me the leads."</p>
                        <cite>- Mark T., Crypto Investment Coach</cite>
                    </blockquote>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="final-cta">
            <div class="container">
                <h2>Stop Scrolling, Start Scaling</h2>
                <p>Book a free consultation to see if our Done-For-You service is the right fit for you.</p>
                <a href="/contact" class="button button-large">Book Your Free Strategy Call</a>
            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get form elements
            const platformRadios = document.querySelectorAll('input[name="platform"]');
            const videoSelect = document.getElementById('extra_videos');
            const reportingRadios = document.querySelectorAll('input[name="reporting"]');
            const totalCostElement = document.getElementById('total-cost');
            const checkoutBtn = document.getElementById('checkout-btn');
            const selectionNotice = document.getElementById('selection-notice');
            const platformRequired = document.getElementById('platform-required');
            const reportingRequired = document.getElementById('reporting-required');
            const difyForm = document.getElementById('dify-calculator');
            const difyDataInput = document.getElementById('dify-data');
            
            // Initially hide checkout button and required messages
            checkoutBtn.style.display = 'none';
            platformRequired.style.display = 'none';
            reportingRequired.style.display = 'none';
            
            // Track if required fields are filled
            let platformSelected = false;
            let reportingSelected = false;
            
            // Function to validate form
            function validateForm() {
                const isValid = platformSelected && reportingSelected;
                
                if (isValid) {
                    checkoutBtn.style.display = 'block';
                    selectionNotice.style.display = 'none';
                    platformRequired.style.display = 'none';
                    reportingRequired.style.display = 'none';
                } else {
                    checkoutBtn.style.display = 'none';
                    selectionNotice.style.display = 'block';
                    
                    if (!platformSelected) {
                        platformRequired.style.display = 'block';
                    } else {
                        platformRequired.style.display = 'none';
                    }
                    
                    if (!reportingSelected) {
                        reportingRequired.style.display = 'block';
                    } else {
                        reportingRequired.style.display = 'none';
                    }
                }
                
                return isValid;
            }
            
            // Function to calculate total cost
            function calculateTotal() {
                let total = 0;
                
                // Get selected platform cost
                const selectedPlatform = document.querySelector('input[name="platform"]:checked');
                if (selectedPlatform) {
                    total += parseInt(selectedPlatform.getAttribute('data-price'));
                    platformSelected = true;
                } else {
                    platformSelected = false;
                }
                
                // Get extra videos cost
                const selectedVideoOption = videoSelect.options[videoSelect.selectedIndex];
                if (selectedVideoOption) {
                    total += parseInt(selectedVideoOption.getAttribute('data-price'));
                }
                
                // Get reporting cost
                const selectedReporting = document.querySelector('input[name="reporting"]:checked');
                if (selectedReporting) {
                    total += parseInt(selectedReporting.getAttribute('data-price'));
                    reportingSelected = true;
                } else {
                    reportingSelected = false;
                }
                
                // Update total cost display
                totalCostElement.textContent = total;
                
                // Validate form
                validateForm();
                
                return total;
            }
            
            // Function to prepare DIFY data for checkout
            function prepareDIFYData() {
                const selectedPlatform = document.querySelector('input[name="platform"]:checked');
                const selectedVideoOption = videoSelect.options[videoSelect.selectedIndex];
                const selectedReporting = document.querySelector('input[name="reporting"]:checked');
                
                if (selectedPlatform && selectedReporting) {
                    const platformValue = selectedPlatform.value;
                    const videosValue = videoSelect.value;
                    const reportingValue = selectedReporting.value;
                    
                    const difyData = {
                        platform: platformValue,
                        videos: parseInt(videosValue),
                        reporting: reportingValue,
                        total: calculateTotal()
                    };
                    
                    difyDataInput.value = JSON.stringify(difyData);
                    return true;
                }
                
                return false;
            }
            
            // Add event listeners to all form elements
            platformRadios.forEach(radio => {
                radio.addEventListener('change', calculateTotal);
            });
            
            videoSelect.addEventListener('change', calculateTotal);
            
            reportingRadios.forEach(radio => {
                radio.addEventListener('change', calculateTotal);
            });
            
            // Form submission handler
            difyForm.addEventListener('submit', function(e) {
                if (!prepareDIFYData()) {
                    e.preventDefault();
                    alert('Please complete all required fields before proceeding to checkout.');
                }
            });
            
            // Initial validation
            validateForm();
        });
    </script>
</body>
<?php
get_footer(); // Load the footer
?>