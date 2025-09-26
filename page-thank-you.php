<?php
/**
 * Template Name: Thank You
 * Template Post Type: page
 */

get_header();
?>

<div class="thank-you-page">
    <div class="container">
        <div class="thank-you-content">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            
            <h1>Thank You for Your Purchase!</h1>
            
            <p class="confirmation-message">
                Your order has been successfully processed. We've sent a confirmation email with your order details.
            </p>
            
            <div class="order-details">
                <h2>What Happens Next?</h2>
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Order Confirmation</h3>
                            <p>You'll receive an email confirmation within 5 minutes</p>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Onboarding Process</h3>
                            <p>Our team will contact you within 24 hours to begin your onboarding</p>
                        </div>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Service Delivery</h3>
                            <p>We'll start delivering your selected services according to the agreed timeline</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="action-buttons">
                <a href="<?php echo home_url(); ?>" class="button button-primary">Return to Homepage</a>
                <a href="<?php echo home_url('/contact'); ?>" class="button button-secondary">Contact Support</a>
            </div>
            
            <div class="support-info">
                <h3>Need Immediate Assistance?</h3>
                <p>Email: support@altradits.com</p>
                <p>Phone: +1 (555) 123-4567</p>
                <p>Response time: Typically within 1 business hour</p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();