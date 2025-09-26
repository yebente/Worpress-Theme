<?php
/**
 * Template Name: Customize Your Package
 * Template Post Type: page
 */

// Get package parameter from URL
$preselected_package = isset($_GET['package']) ? sanitize_text_field($_GET['package']) : '';

// Get DIFY parameters from URL
$dify_params = array(
    'dify' => isset($_GET['dify']) ? sanitize_text_field($_GET['dify']) : '',
    'platform' => isset($_GET['platform']) ? sanitize_text_field($_GET['platform']) : '',
    'videos' => isset($_GET['videos']) ? sanitize_text_field($_GET['videos']) : '',
    'reporting' => isset($_GET['reporting']) ? sanitize_text_field($_GET['reporting']) : ''
);

// Enqueue styles and scripts
function enqueue_customize_package_assets() {
    // Access the global variables
    global $preselected_package, $dify_params;
    
    wp_enqueue_style('customize-package-css', get_template_directory_uri() . '/assets/css/customize-package.css');
    wp_enqueue_script('customize-package-js', get_template_directory_uri() . '/assets/js/customize-package.js', array(), false, true);
    
    // Add Font Awesome for icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Localize script for AJAX and data passing
    wp_localize_script('customize-package-js', 'packageData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'preselected_package' => $preselected_package,
        'dify_params' => $dify_params
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_customize_package_assets');

get_header();
?>

<div class="customize-package-page">
    <header class="package-header">
        <div class="container">
            <h1>Customize Your Package</h1>
            <p class="header-subtitle">Select the services you need to build your perfect marketing solution</p>
            
            <div class="progress-bar">
                <div class="progress-step active">1</div>
                <div class="progress-step">2</div>
                <div class="progress-step">3</div>
                <div class="progress-step">4</div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="main-content">
            <div class="services-selection">
                <!-- DIY Section -->
                <div class="service-category diy">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="category-info">
                            <h2>DIY Social Media</h2>
                            <p>Tools and resources to manage your own social media</p>
                        </div>
                    </div>
                    
                    <h3 class="section-title">Choose Your Resource Package</h3>
                    
                    <div class="options-grid">
                        <div class="option-card" data-price="197" data-id="essentials-kit">
                            <div class="option-header">
                                <h4 class="option-title">Essentials Kit</h4>
                                <div class="option-price">$197</div>
                            </div>
                            <p class="option-description">Everything you need to get started with DIY social media</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Content Strategy Playbook</li>
                                <li><i class="fas fa-check-circle"></i> 10 Video Script Templates</li>
                                <li><i class="fas fa-check-circle"></i> 1 Month Content Calendar</li>
                            </ul>
                        </div>
                        
                        <div class="option-card selected" data-price="497" data-id="authority-builder">
                            <div class="option-header">
                                <h4 class="option-title">Authority Builder</h4>
                                <div class="option-price">$497</div>
                            </div>
                            <p class="option-description">The complete DIY solution for serious coaches</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Everything in Essentials</li>
                                <li><i class="fas fa-check-circle"></i> 30+ Video Script Templates</li>
                                <li><i class="fas fa-check-circle"></i> 3 Month Content Calendar</li>
                                <li><i class="fas fa-check-circle"></i> Canva Template Library</li>
                            </ul>
                        </div>
                        
                        <div class="option-card" data-price="997" data-id="vip-library">
                            <div class="option-header">
                                <h4 class="option-title">VIP Library</h4>
                                <div class="option-price">$997</div>
                            </div>
                            <p class="option-description">Everything we have plus future updates and consultation</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Everything in Authority Builder</li>
                                <li><i class="fas fa-check-circle"></i> Lifetime Access to Future Templates</li>
                                <li><i class="fas fa-check-circle"></i> 2-Hour Strategy Consultation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- DIWY Section -->
                <div class="service-category diwy">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div class="category-info">
                            <h2>DIWY Social Media</h2>
                            <p>Collaborative approach with our experts</p>
                        </div>
                    </div>
                    
                    <h3 class="section-title">Choose Your Collaborative Plan</h3>
                    
                    <div class="options-grid">
                        <div class="option-card" data-price="497" data-id="the-accelerator">
                            <div class="option-header">
                                <h4 class="option-title">The Accelerator</h4>
                                <div class="option-price">$497/mo</div>
                            </div>
                            <p class="option-description">Perfect for getting started with consistent guidance</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> 1x 60-min Strategy Call/Month</li>
                                <li><i class="fas fa-check-circle"></i> Feedback on 8 Content Pieces</li>
                                <li><i class="fas fa-check-circle"></i> Email Support</li>
                            </ul>
                        </div>
                        
                        <div class="option-card selected" data-price="997" data-id="the-partner">
                            <div class="option-header">
                                <h4 class="option-title">The Partner</h4>
                                <div class="option-price">$997/mo</div>
                            </div>
                            <p class="option-description">Our most popular package for serious growth</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> 2x 60-min Strategy Calls/Month</li>
                                <li><i class="fas fa-check-circle"></i> Unlimited Content Feedback</li>
                                <li><i class="fas fa-check-circle"></i> Voxer Support (M-F)</li>
                                <li><i class="fas fa-check-circle"></i> Performance Analysis Report</li>
                            </ul>
                        </div>
                        
                        <div class="option-card" data-price="1497" data-id="the-authority">
                            <div class="option-header">
                                <h4 class="option-title">The Authority</h4>
                                <div class="option-price">$1,497/mo</div>
                            </div>
                            <p class="option-description">For established coaches needing high-touch support</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Weekly Strategy Calls</li>
                                <li><i class="fas fa-check-circle"></i> Unlimited Content Feedback</li>
                                <li><i class="fas fa-check-circle"></i> Priority Voxer Support</li>
                                <li><i class="fas fa-check-circle"></i> Advanced Analytics & Tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- DIFY Section -->
                <div class="service-category dify">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                        <div class="category-info">
                            <h2>DIFY Social Media</h2>
                            <p>Full-service social media management</p>
                        </div>
                    </div>
                    
                    <h3 class="section-title">Build Your Custom Package</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Platforms:</label>
                        <div class="options-grid">
                            <div class="option-card" data-price="497" data-id="tiktok-only">
                                <div class="option-header">
                                    <h4 class="option-title">TikTok Only</h4>
                                    <div class="option-price">$497/mo</div>
                                </div>
                                <p class="option-description">We manage your TikTok account exclusively</p>
                            </div>
                            
                            <div class="option-card" data-price="597" data-id="linkedin-only">
                                <div class="option-header">
                                    <h4 class="option-title">LinkedIn Only</h4>
                                    <div class="option-price">$597/mo</div>
                                </div>
                                <p class="option-description">We manage your LinkedIn account exclusively</p>
                            </div>
                            
                            <div class="option-card selected" data-price="997" data-id="both-platforms">
                                <div class="option-header">
                                    <h4 class="option-title">Both Platforms</h4>
                                    <div class="option-price">$997/mo</div>
                                </div>
                                <p class="option-description">We manage both your TikTok and LinkedIn accounts</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Additional Videos (per month):</label>
                        <select class="addon-select form-control" data-category="dify" data-addon="videos">
                            <option value="0" data-price="0">+0 Videos ($0)</option>
                            <option value="2" data-price="200">+2 Videos ($200)</option>
                            <option value="4" data-price="380" selected>+4 Videos ($380)</option>
                            <option value="8" data-price="720">+8 Videos ($720)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Reporting Detail:</label>
                        <div class="options-grid">
                            <div class="option-card selected" data-price="0" data-id="basic-report">
                                <div class="option-header">
                                    <h4 class="option-title">Basic Report</h4>
                                    <div class="option-price">Included</div>
                                </div>
                                <p class="option-description">Monthly performance summary</p>
                            </div>
                            
                            <div class="option-card" data-price="50" data-id="advanced-analytics">
                                <div class="option-header">
                                    <h4 class="option-title">Advanced Analytics</h4>
                                    <div class="option-price">$50/mo</div>
                                </div>
                                <p class="option-description">Detailed analytics with insights and recommendations</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Automations Section -->
                <div class="service-category automation">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="category-info">
                            <h2>Automations</h2>
                            <p>Streamline your client onboarding and class management</p>
                        </div>
                    </div>
                    
                    <h3 class="section-title">Choose Your Automation Package</h3>
                    
                    <div class="options-grid">
                        <div class="option-card" data-price="697" data-id="the-class-automator">
                            <div class="option-header">
                                <h4 class="option-title">The Class Automator</h4>
                                <div class="option-price">$697</div>
                            </div>
                            <p class="option-description">Automate your class registration and communication</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Class Registration Setup</li>
                                <li><i class="fas fa-check-circle"></i> Payment Processing</li>
                                <li><i class="fas fa-check-circle"></i> Auto-responder Sequences</li>
                            </ul>
                        </div>
                        
                        <div class="option-card selected" data-price="1297" data-id="the-full-client-journey">
                            <div class="option-header">
                                <h4 class="option-title">The Full Client Journey</h4>
                                <div class="option-price">$1,297</div>
                            </div>
                            <p class="option-description">Complete automation of your client onboarding process</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Everything in Class Automator</li>
                                <li><i class="fas fa-check-circle"></i> Client Onboarding Workflows</li>
                                <li><i class="fas fa-check-circle"></i> CRM Integration</li>
                                <li><i class="fas fa-check-circle"></i> Document Delivery System</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Additional Automation Services:</label>
                        <div class="addon-option">
                            <input type="checkbox" id="auto-email" data-price="50" class="addon-checkbox" data-id="auto-email">
                            <label for="auto-email" class="addon-label">Email Sequence Setup (+$50)</label>
                        </div>
                        <div class="addon-option">
                            <input type="checkbox" id="auto-sms" data-price="75" checked class="addon-checkbox" data-id="auto-sms">
                            <label for="auto-sms" class="addon-label">SMS Notification System (+$75)</label>
                        </div>
                    </div>
                </div>
                
                <!-- Web Development Section -->
                <div class="service-category webdev">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="category-info">
                            <h2>Web Development & Branding</h2>
                            <p>Professional website and brand identity</p>
                        </div>
                    </div>
                    
                    <h3 class="section-title">Choose Your Package</h3>
                    
                    <div class="options-grid">
                        <div class="option-card" data-price="1497" data-id="starter-brand-web">
                            <div class="option-header">
                                <h4 class="option-title">Starter Brand & Web</h4>
                                <div class="option-price">$1,497</div>
                            </div>
                            <p class="option-description">Essential website and branding for new coaches</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Custom Logo Design</li>
                                <li><i class="fas fa-check-circle"></i> 5-Page WordPress Website</li>
                                <li><i class="fas fa-check-circle"></i> Basic Brand Guide</li>
                            </ul>
                        </div>
                        
                        <div class="option-card selected" data-price="2497" data-id="professional-package">
                            <div class="option-header">
                                <h4 class="option-title">Professional Package</h4>
                                <div class="option-price">$2,497</div>
                            </div>
                            <p class="option-description">Complete web presence for established coaches</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Everything in Starter</li>
                                <li><i class="fas fa-check-circle"></i> Advanced Website Functionality</li>
                                <li><i class="fas fa-check-circle"></i> Comprehensive Brand Identity</li>
                                <li><i class="fas fa-check-circle"></i> SEO Optimization</li>
                            </ul>
                        </div>
                        
                        <div class="option-card" data-price="4497" data-id="enterprise-solution">
                            <div class="option-header">
                                <h4 class="option-title">Enterprise Solution</h4>
                                <div class="option-price">$4,497</div>
                            </div>
                            <p class="option-description">Premium web and branding for high-end coaches</p>
                            <ul class="option-features">
                                <li><i class="fas fa-check-circle"></i> Everything in Professional</li>
                                <li><i class="fas fa-check-circle"></i> E-commerce Integration</li>
                                <li><i class="fas fa-check-circle"></i> Membership Portal</li>
                                <li><i class="fas fa-check-circle"></i> Ongoing Support & Maintenance</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Additional Web Services:</label>
                        <div class="addon-option">
                            <input type="checkbox" id="web-blog" data-price="200" checked class="addon-checkbox" data-id="web-blog">
                            <label for="web-blog" class="addon-label">Blog Setup (+$200)</label>
                        </div>
                        <div class="addon-option">
                            <input type="checkbox" id="web-seo" data-price="300" class="addon-checkbox" data-id="web-seo">
                            <label for="web-seo" class="addon-label">Advanced SEO Setup (+$300)</label>
                        </div>
                        <div class="addon-option">
                            <input type="checkbox" id="web-maintenance" data-price="50" class="addon-checkbox" data-id="web-maintenance">
                            <label for="web-maintenance" class="addon-label">Monthly Maintenance (+$50/mo)</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="summary-sidebar">
                <div class="summary-header">
                    <h2>Your Package Summary</h2>
                    <p>Review your selections and total investment</p>
                </div>
                
                <div class="summary-items">
                    <!-- Items will be populated by JavaScript -->
                </div>
                
                <div class="summary-totals">
                    <!-- Totals will be populated by JavaScript -->
                </div>
                
                <form id="package-form" method="post" action="<?php echo esc_url(home_url('/checkout')); ?>">
                    <?php wp_nonce_field('save_package_selection', 'package_nonce'); ?>
                    <input type="hidden" name="package_data" id="package-data">
                    <button type="submit" class="checkout-btn">Proceed to Checkout</button>
                </form>
                
                <div class="coupon-section">
                    <label class="form-label">Have a coupon code?</label>
                    <div class="coupon-input-group">
                        <input type="text" class="coupon-input" placeholder="Enter coupon code">
                        <button type="button" class="apply-coupon-btn">Apply</button>
                    </div>
                    <div class="coupon-message"></div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email for Quote</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email to receive this quote">
                </div>
                
                <p class="text-muted">
                    <i class="fas fa-lock"></i> Your information is secure. We'll never share your details.
                </p>
            </div>
        </div>
    </div>
    
    <div class="storage-info">
    <p>Your selections are automatically saved</p>
    <button type="button" class="clear-storage" onclick="clearStorage()">Clear All Selections</button>
    </div>
    <!-- Add this inside your summary-sidebar div, after the form -->
</div>
<script>
function clearStorage() {
    if (confirm('Are you sure you want to clear all selections? This cannot be undone.')) {
        localStorage.removeItem('packageSelections');
        localStorage.removeItem('packageEmail');
        location.reload();
    }
}
</script>
<?php
get_footer();