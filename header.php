<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
     <style>
        /*  */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            padding-top: 80px; /* Account for fixed header */
        }
        
        /* Header and Navigation Styles */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
        }
        
        .site-branding {
            display: flex;
            align-items: center;
        }
        
        .site-title-wrapper h1 {
            font-size: 24px;
            color: #1a2a6c;
        }
        
        .site-title a {
            text-decoration: none;
            color: inherit;
        }
        
        .site-description {
            font-size: 14px;
            color: #666;
            display: none;
        }
        
        /* Navigation Menu */
        .main-navigation {
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .nav-menu > li {
            position: relative;
        }
        
        .nav-menu > li > a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-menu > li > a:hover {
            color: #1a2a6c;
        }
        
        /* Dropdown menu */
        .sub-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 200px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 1000;
            list-style: none;
            padding: 10px 0;
        }
        
        .nav-menu > li:hover > .sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .sub-menu li {
            padding: 0;
        }
        
        .sub-menu a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            transition: all 0.3s;
        }
        
        .sub-menu a:hover {
            background: #f8f9fa;
            color: #1a2a6c;
        }
        
        /* Mobile menu toggle */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            flex-direction: column;
            justify-content: center;
        }
        
        .menu-toggle-icon {
            width: 25px;
            height: 3px;
            background-color: #333;
            margin: 2px 0;
            transition: 0.3s;
        }
        
        /* Header CTA Button */
        .header-actions {
            display: flex;
            align-items: center;
        }
        
        .header-cta-button {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            white-space: nowrap;
        }
        
        .header-cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            color: white;
        }
        
        .header-cta-button i {
            margin-right: 8px;
        }
        
        /* Mobile responsiveness */
        @media screen and (max-width: 968px) {
            .header-container {
                padding: 10px 15px;
            }
            
            .menu-toggle {
                display: flex;
                order: 3;
            }
            
            .main-navigation {
                order: 2;
                margin: 0 15px;
            }
            
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                padding: 10px 0;
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .nav-menu > li {
                width: 100%;
            }
            
            .nav-menu > li > a {
                padding: 12px 20px;
                border-bottom: 1px solid #f0f0f0;
            }
            
            /* Mobile dropdown handling */
            .sub-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                display: none;
                width: 100%;
                padding-left: 20px;
            }
            
            .nav-menu > li:hover > .sub-menu {
                display: none; /* Override desktop behavior on mobile */
            }
            
            .nav-menu > li.submenu-active > .sub-menu {
                display: block;
            }
            
            .header-actions {
                display: none;
            }
            
            .site-branding {
                flex: 1;
            }
            
            .site-title-wrapper h1 {
                font-size: 20px;
            }
        }
        
        @media screen and (min-width: 769px) {
            .site-description {
                display: block;
                margin-left: 15px;
                padding-left: 15px;
                border-left: 1px solid #eee;
            }
        }
        
        /* Demo content */
        .content-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }
        
        .content-section h1 {
            color: #1a2a6c;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        
        .content-section h2 {
            color: #1a2a6c;
            margin: 30px 0 15px;
        }
        
        .content-section p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .process-steps {
            display: grid;
            gap: 2rem;
            margin: 2rem 0;
        }
        
        .process-step {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .step-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f);
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 1rem;
            transition: all 0.3s;
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<BOdy>
        <header id="masthead" class="site-header">
        <div class="header-container">
            <div class="site-branding">
                <div class="site-title-wrapper">
                    <h1 class="site-title"><a href="#" rel="home">Attradits</a></h1>
                    <p class="site-description">Helping investment coaches scale their businesses</p>
                </div>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-toggle-icon"></span>
                    <span class="menu-toggle-icon"></span>
                    <span class="menu-toggle-icon"></span>
                    <span class="screen-reader-text">Primary Menu</span>
                </button>
                
                <ul id="primary-menu" class="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Services <i class="fas fa-chevron-down" style="font-size: 12px; margin-left: 5px;"></i></a>
                        <ul class="sub-menu">
                            <li><a href="#">DIY Social Media</a></li>
                            <li><a href="#">DIWY Social Media</a></li>
                            <li><a href="#">DIFY Social Media</a></li>
                            <li><a href="#">All Services</a></li>
                            <li><a href="#">Custom Package</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav><!-- #site-navigation -->

            <div class="header-actions">
                <a href="/contact" class="header-cta-button">
                    <i class="fas fa-calendar"></i>
                    Get Started
                </a>
            </div><!-- .header-actions -->
        </div><!-- .header-container -->
    </header><!-- #masthead -->

    <script>
        // Enhanced JavaScript to handle mobile menu and dropdowns
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const primaryMenu = document.querySelector('#primary-menu');
            
            menuToggle.addEventListener('click', function() {
                primaryMenu.classList.toggle('active');
                const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
                
                // Animate hamburger icon
                const icons = this.querySelectorAll('.menu-toggle-icon');
                if (!expanded) {
                    icons[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                    icons[1].style.opacity = '0';
                    icons[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
                } else {
                    icons[0].style.transform = 'none';
                    icons[1].style.opacity = '1';
                    icons[2].style.transform = 'none';
                }
            });
            
            // Handle dropdown menus on mobile
            const menuItemsWithChildren = document.querySelectorAll('.menu-item-has-children > a');
            
            menuItemsWithChildren.forEach(item => {
                item.addEventListener('click', function(e) {
                    if (window.innerWidth <= 968) {
                        e.preventDefault();
                        const parentLi = this.parentElement;
                        parentLi.classList.toggle('submenu-active');
                    }
                });
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (window.innerWidth <= 968 && primaryMenu.classList.contains('active')) {
                    const isClickInsideMenu = primaryMenu.contains(event.target);
                    const isClickOnToggle = menuToggle.contains(event.target);
                    
                    if (!isClickInsideMenu && !isClickOnToggle) {
                        primaryMenu.classList.remove('active');
                        menuToggle.setAttribute('aria-expanded', 'false');
                        
                        // Reset hamburger icon
                        const icons = menuToggle.querySelectorAll('.menu-toggle-icon');
                        icons[0].style.transform = 'none';
                        icons[1].style.opacity = '1';
                        icons[2].style.transform = 'none';
                        
                        // Close any open submenus
                        document.querySelectorAll('.submenu-active').forEach(item => {
                            item.classList.remove('submenu-active');
                        });
                    }
                }
            });
        });
    </script>

</BOdy>