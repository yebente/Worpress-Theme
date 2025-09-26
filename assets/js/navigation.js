// navigation.js - Handles responsive navigation, header scroll, and anchor scrolling
// Loads only on pages with navigation

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.getElementById('primary-menu');
    const siteHeader = document.querySelector('.site-header');
    
    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            primaryMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });
    }
    
    // Header scroll effect
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            siteHeader.classList.add('scrolled');
            
            if (currentScroll > lastScroll && currentScroll > 200) {
                siteHeader.style.transform = 'translateY(-100%)';
            } else {
                siteHeader.style.transform = 'translateY(0)';
            }
        } else {
            siteHeader.classList.remove('scrolled');
            siteHeader.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll;
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (primaryMenu && primaryMenu.classList.contains('active') && 
            !e.target.closest('#site-navigation') && 
            !e.target.closest('.menu-toggle')) {
            menuToggle.classList.remove('active');
            primaryMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    });
    
    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && primaryMenu && primaryMenu.classList.contains('active')) {
            menuToggle.classList.remove('active');
            primaryMenu.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                if (primaryMenu && primaryMenu.classList.contains('active')) {
                    menuToggle.classList.remove('active');
                    primaryMenu.classList.remove('active');
                    document.body.classList.remove('menu-open');
                }
            }
        });
    });
});