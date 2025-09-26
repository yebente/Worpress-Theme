<?php
/**
 * Template Name: Checkout
 * Template Post Type: page
 */

get_header();
?>
<div class="checkout-page">
    <div class="container">
        <h1>Complete Your Purchase</h1>
        <div class="checkout-content">
            <div class="order-summary">
                <h2>Order Summary</h2>
                <div id="order-details">
                    <!-- Order details will be populated by JavaScript -->
                </div>
            </div>
            <div class="checkout-form">
                <h2>Customer Information</h2>
                <form id="customer-info-form" method="post">
                    <?php wp_nonce_field('process_checkout', 'checkout_nonce'); ?>
                    <div class="form-group">
                        <label for="fullname">Full Name *</label>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company">
                    </div>
                    <h2>Payment Information</h2>
                    <div class="form-group">
                        <label for="card-number">Credit Card Number *</label>
                        <input type="text" id="card-number" name="card_number" placeholder="1234 5678 9012 3456" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="expiry">Expiry Date *</label>
                            <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV *</label>
                            <input type="text" id="cvv" name="cvv" placeholder="123" required>
                        </div>
                    </div>
                    <button type="submit" class="submit-payment-btn">Complete Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>