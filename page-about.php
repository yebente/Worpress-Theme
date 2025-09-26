<?php
/**
 * Template Name: About
 * Template Post Type: page
 */

get_header();
?>

<div class="about-page">
    <div class="container">
        <div class="about-hero">
            <h1>About Attradits</h1>
            <p class="hero-subtitle">Helping investment coaches build their online presence and scale their businesses through strategic digital marketing solutions.</p>
        </div>
        
        <div class="about-content">
            <section class="mission-section">
                <h2>Our Mission</h2>
                <p>At Attradits, we empower investment coaches to amplify their digital presence and grow their businesses. We understand the unique challenges faced by financial professionals in the digital space and provide tailored solutions that drive results.</p>
            </section>
            
            <section class="values-section">
                <h2>Our Values</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Growth Focused</h3>
                        <p>We're committed to driving measurable growth for our clients through data-driven strategies and continuous optimization.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Partnership Approach</h3>
                        <p>We view ourselves as an extension of your team, working closely with you to achieve your business objectives.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>We stay ahead of digital marketing trends to ensure our clients benefit from the latest strategies and technologies.</p>
                    </div>
                </div>
            </section>
            
            <section class="approach-section">
                <h2>Our Approach</h2>
                <div class="approach-steps">
                    <div class="approach-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Strategy Development</h3>
                            <p>We begin by understanding your unique value proposition, target audience, and business goals to create a customized digital strategy.</p>
                        </div>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Content Creation</h3>
                            <p>We develop compelling content that establishes your authority, engages your audience, and drives conversions.</p>
                        </div>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Implementation & Management</h3>
                            <p>We execute your digital strategy across platforms while continuously monitoring and optimizing performance.</p>
                        </div>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Results Analysis</h3>
                            <p>We provide transparent reporting and insights to track progress toward your business objectives.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <section class="contact-section">
            <h2>Get in Touch</h2>
            <div class="contact-methods">
                <div class="contact-method">
                    <i class="fas fa-phone"></i>
                    <h3>Call Us</h3>
                    <p>+254 707 172 370</p>
                </div>
                <div class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@attradits.com</p>
                </div>
                <div class="contact-method">
                    <i class="fas fa-globe"></i>
                    <h3>Visit Us</h3>
                    <p>www.attradits.com</p>
                </div>
            </div>
        </section>
        
        <section class="cta-section">
            <h2>Ready to Scale Your Investment Coaching Business?</h2>
            <p>Let's discuss how we can help you build a powerful online presence and attract more clients.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-button">Get Started Today</a>
        </section>
    </div>
</div>

<style>
.about-page {
    padding: 3rem 0;
}

.about-hero {
    text-align: center;
    margin-bottom: 4rem;
    padding: 4rem 0;
    background: linear-gradient(135deg, rgba(26, 42, 108, 0.05), rgba(178, 31, 31, 0.05));
    border-radius: 12px;
}

.about-hero h1 {
    font-size: 2.8rem;
    color: #1a2a6c;
    margin-bottom: 1rem;
}

.hero-subtitle {
    font-size: 1.3rem;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
}

.about-content {
    display: flex;
    flex-direction: column;
    gap: 5rem;
}

.mission-section {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.mission-section h2 {
    color: #1a2a6c;
    margin-bottom: 1.5rem;
    font-size: 2rem;
}

.mission-section p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #555;
}

.values-section h2 {
    text-align: center;
    color: #1a2a6c;
    margin-bottom: 2rem;
    font-size: 2rem;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.value-card {
    text-align: center;
    padding: 2.5rem 2rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
}

.value-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.value-icon {
    font-size: 2.5rem;
    color: #1a2a6c;
    margin-bottom: 1.5rem;
}

.value-card h3 {
    color: #1a2a6c;
    margin-bottom: 1rem;
    font-size: 1.4rem;
}

.value-card p {
    color: #666;
    line-height: 1.6;
}

.approach-section h2 {
    text-align: center;
    color: #1a2a6c;
    margin-bottom: 2rem;
    font-size: 2rem;
}

.approach-steps {
    display: grid;
    gap: 2.5rem;
    margin-top: 2rem;
}

.approach-step {
    display: flex;
    align-items: flex-start;
    gap: 2rem;
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.step-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #1a2a6c, #b21f1f);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.4rem;
    flex-shrink: 0;
}

.step-content h3 {
    color: #1a2a6c;
    margin-bottom: 0.8rem;
    font-size: 1.3rem;
}

.step-content p {
    color: #555;
    line-height: 1.6;
}

.contact-section {
    background: linear-gradient(135deg, rgba(26, 42, 108, 0.05), rgba(178, 31, 31, 0.05));
    padding: 4rem 0;
    border-radius: 12px;
    margin-top: 4rem;
}

.contact-section h2 {
    text-align: center;
    color: #1a2a6c;
    margin-bottom: 3rem;
    font-size: 2rem;
}

.contact-methods {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 900px;
    margin: 0 auto;
}

.contact-method {
    text-align: center;
    padding: 2rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s;
}

.contact-method:hover {
    transform: translateY(-5px);
}

.contact-method i {
    font-size: 2.5rem;
    color: #1a2a6c;
    margin-bottom: 1rem;
}

.contact-method h3 {
    color: #1a2a6c;
    margin-bottom: 0.8rem;
}

.contact-method p {
    color: #555;
}

.cta-section {
    text-align: center;
    padding: 4rem 2rem;
    background: linear-gradient(135deg, #1a2a6c, #b21f1f);
    color: white;
    border-radius: 12px;
    margin-top: 4rem;
}

.cta-section h2 {
    margin-top: 0;
    color: white;
    font-size: 2.2rem;
    margin-bottom: 1.5rem;
}

.cta-section p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.cta-button {
    display: inline-block;
    background: white;
    color: #1a2a6c;
    padding: 15px 35px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.3);
}

@media (max-width: 768px) {
    .about-hero h1 {
        font-size: 2.2rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .approach-step {
        flex-direction: column;
        text-align: center;
        gap: 1.5rem;
    }
    
    .step-number {
        align-self: center;
    }
    
    .mission-section h2,
    .values-section h2,
    .approach-section h2,
    .contact-section h2 {
        font-size: 1.8rem;
    }
}

@media (max-width: 480px) {
    .about-hero {
        padding: 3rem 1rem;
    }
    
    .value-card,
    .contact-method,
    .approach-step {
        padding: 1.5rem;
    }
    
    .cta-section {
        padding: 3rem 1.5rem;
    }
    
    .cta-button {
        padding: 12px 25px;
    }
}
</style>

<?php
get_footer();