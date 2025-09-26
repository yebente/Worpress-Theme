document.addEventListener('DOMContentLoaded', function() {
    // Initialize the package configuration
    initPackageCustomization();
    
    // Set up event listeners
    setupEventListeners();
    
    // Check for preselected package from URL
    checkForPreselectedPackage();
    
    // Load saved selections from localStorage
    loadSavedSelections();
    
    // Calculate initial total
    updateTotals();
});

// Package configuration object
const packageConfig = {
    diy: {
        selected: null,
        options: {
            'essentials-kit': { price: 197, name: 'Essentials Kit' },
            'authority-builder': { price: 497, name: 'Authority Builder' },
            'vip-library': { price: 997, name: 'VIP Library' }
        }
    },
    diwy: {
        selected: null,
        options: {
            'the-accelerator': { price: 497, name: 'The Accelerator', recurring: true },
            'the-partner': { price: 997, name: 'The Partner', recurring: true },
            'the-authority': { price: 1497, name: 'The Authority', recurring: true }
        }
    },
    dify: {
        platform: null,
        platformOptions: {
            'tiktok-only': { price: 497, name: 'TikTok Only', recurring: true },
            'linkedin-only': { price: 597, name: 'LinkedIn Only', recurring: true },
            'both-platforms': { price: 997, name: 'Both Platforms', recurring: true }
        },
        videos: 0,
        videoOptions: {
            0: { price: 0, name: '+0 Videos' },
            2: { price: 200, name: '+2 Videos', recurring: true },
            4: { price: 380, name: '+4 Videos', recurring: true },
            8: { price: 720, name: '+8 Videos', recurring: true }
        },
        reporting: null,
        reportingOptions: {
            'basic-report': { price: 0, name: 'Basic Report' },
            'advanced-analytics': { price: 50, name: 'Advanced Analytics', recurring: true }
        }
    },
    automation: {
        selected: null,
        options: {
            'the-class-automator': { price: 697, name: 'The Class Automator' },
            'the-full-client-journey': { price: 1297, name: 'The Full Client Journey' }
        },
        addons: {
            'auto-email': { enabled: false, price: 50, name: 'Email Sequence Setup' },
            'auto-sms': { enabled: false, price: 75, name: 'SMS Notification System' }
        }
    },
    webdev: {
        selected: null,
        options: {
            'starter-brand-web': { price: 1497, name: 'Starter Brand & Web' },
            'professional-package': { price: 2497, name: 'Professional Package' },
            'enterprise-solution': { price: 4497, name: 'Enterprise Solution' }
        },
        addons: {
            'web-blog': { enabled: false, price: 200, name: 'Blog Setup' },
            'web-seo': { enabled: false, price: 300, name: 'Advanced SEO Setup' },
            'web-maintenance': { enabled: false, price: 50, name: 'Monthly Maintenance', recurring: true }
        }
    },
    coupon: {
        code: '',
        discount: 0,
        discountType: 'percentage',
        valid: false
    }
};

// Available coupon codes
const couponCodes = {
    'WELCOME10': { discount: 10, type: 'percentage' },
    'SAVE250': { discount: 250, type: 'fixed' },
    'SUMMER2023': { discount: 15, type: 'percentage' }
};

function initPackageCustomization() {
    // No default selections - all will be null
}

function loadSavedSelections() {
    // Try to load saved selections from localStorage
    try {
        const savedSelections = localStorage.getItem('packageSelections');
        if (savedSelections) {
            const parsed = JSON.parse(savedSelections);
            
            // Update packageConfig with saved values
            if (parsed.diy) packageConfig.diy.selected = parsed.diy.selected;
            if (parsed.diwy) packageConfig.diwy.selected = parsed.diwy.selected;
            if (parsed.dify) {
                packageConfig.dify.platform = parsed.dify.platform;
                packageConfig.dify.videos = parsed.dify.videos;
                packageConfig.dify.reporting = parsed.dify.reporting;
            }
            if (parsed.automation) {
                packageConfig.automation.selected = parsed.automation.selected;
                packageConfig.automation.addons = parsed.automation.addons;
            }
            if (parsed.webdev) {
                packageConfig.webdev.selected = parsed.webdev.selected;
                packageConfig.webdev.addons = parsed.webdev.addons;
            }
            if (parsed.coupon) packageConfig.coupon = parsed.coupon;
            
            // Update UI based on saved selections
            updateUIBasedOnSavedSelections();
        }
    } catch (e) {
        console.error('Error loading saved selections:', e);
    }
}

function updateUIBasedOnSavedSelections() {
    // DIY options
    document.querySelectorAll('.diy .option-card').forEach(card => {
        const packageId = card.getAttribute('data-id');
        if (packageId === packageConfig.diy.selected) {
            card.classList.add('selected');
            addSelectedBadge(card);
        } else {
            card.classList.remove('selected');
            removeSelectedBadge(card);
        }
    });
    
    // DIWY options
    document.querySelectorAll('.diwy .option-card').forEach(card => {
        const packageId = card.getAttribute('data-id');
        if (packageId === packageConfig.diwy.selected) {
            card.classList.add('selected');
            addSelectedBadge(card);
        } else {
            card.classList.remove('selected');
            removeSelectedBadge(card);
        }
    });
    
    // DIFY platform options
    document.querySelectorAll('.dify .option-card').forEach(card => {
        const packageId = card.getAttribute('data-id');
        if (packageId === packageConfig.dify.platform) {
            card.classList.add('selected');
            addSelectedBadge(card);
        } else {
            card.classList.remove('selected');
            removeSelectedBadge(card);
        }
    });
    
    // DIFY videos select
    const videoSelect = document.querySelector('.dify .addon-select');
    if (videoSelect) {
        videoSelect.value = packageConfig.dify.videos;
    }
    
    // DIFY reporting options
    document.querySelectorAll('.dify .option-card').forEach(card => {
        const packageId = card.getAttribute('data-id');
        if (packageId === packageConfig.dify.reporting) {
            card.classList.add('selected');
            addSelectedBadge(card);
        } else {
            card.classList.remove('selected');
            removeSelectedBadge(card);
        }
    });
    
    // Automation options
    document.querySelectorAll('.automation .option-card').forEach(card => {
        const packageId = card.getAttribute('data-id');
        if (packageId === packageConfig.automation.selected) {
            card.classList.add('selected');
            addSelectedBadge(card);
        } else {
            card.classList.remove('selected');
            removeSelectedBadge(card);
        }
    });
    
    // Automation addons
    for (const [addonId, addon] of Object.entries(packageConfig.automation.addons)) {
        const checkbox = document.getElementById(addonId);
        if (checkbox) {
            checkbox.checked = addon.enabled;
        }
    }
    
    // Webdev options
    document.querySelectorAll('.webdev .option-card').forEach(card => {
        const packageId = card.getAttribute('data-id');
        if (packageId === packageConfig.webdev.selected) {
            card.classList.add('selected');
            addSelectedBadge(card);
        } else {
            card.classList.remove('selected');
            removeSelectedBadge(card);
        }
    });
    
    // Webdev addons
    for (const [addonId, addon] of Object.entries(packageConfig.webdev.addons)) {
        const checkbox = document.getElementById(addonId);
        if (checkbox) {
            checkbox.checked = addon.enabled;
        }
    }
    
    // Coupon code
    const couponInput = document.querySelector('.coupon-input');
    if (couponInput && packageConfig.coupon.code) {
        couponInput.value = packageConfig.coupon.code;
        
        const couponMessage = document.querySelector('.coupon-message');
        if (packageConfig.coupon.valid) {
            couponMessage.textContent = `Coupon applied: ${packageConfig.coupon.discount}${packageConfig.coupon.discountType === 'percentage' ? '%' : '$'} discount`;
            couponMessage.className = 'coupon-message success';
        }
    }
}

function saveSelections() {
    // Save current selections to localStorage
    try {
        localStorage.setItem('packageSelections', JSON.stringify(packageConfig));
    } catch (e) {
        console.error('Error saving selections:', e);
    }
}

function checkForPreselectedPackage() {
    // Check if we have a preselected package from the URL
    if (typeof packageData !== 'undefined' && packageData.preselected_package) {
        const packageId = packageData.preselected_package.toLowerCase();
        
        // Map URL parameters to actual package IDs
        const packageMap = {
            'essentials': 'essentials-kit',
            'authority': 'authority-builder',
            'vip': 'vip-library'
        };
        
        const actualPackageId = packageMap[packageId] || packageId;
        
        // Find and select the corresponding package
        const packageCard = document.querySelector(`.diy .option-card[data-id="${actualPackageId}"]`);
        if (packageCard) {
            // Clear any existing selection
            document.querySelectorAll('.diy .option-card').forEach(card => {
                card.classList.remove('selected');
                removeSelectedBadge(card);
            });
            
            // Select the new package
            packageCard.classList.add('selected');
            addSelectedBadge(packageCard);
            
            // Update config
            packageConfig.diy.selected = actualPackageId;
            
            // Save selections
            saveSelections();
            
            // Update totals
            updateTotals();
            
            // Scroll to DIY section
            setTimeout(() => {
                document.querySelector('.diy').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 500);
        }
    }
}

function setInitialSelections() {
    // No default selections - all will be null
}

function addSelectedBadge(card) {
    if (!card.querySelector('.selected-badge')) {
        const badge = document.createElement('div');
        badge.className = 'selected-badge';
        badge.innerHTML = '<i class="fas fa-check"></i>';
        card.appendChild(badge);
    }
}

function removeSelectedBadge(card) {
    const badge = card.querySelector('.selected-badge');
    if (badge) {
        badge.remove();
    }
}

function setupEventListeners() {
    // Option card selections
    document.querySelectorAll('.option-card').forEach(card => {
        card.addEventListener('click', function() {
            const category = findParentCategory(this);
            if (!category) return;
            
            // Check if this card is already selected
            const isAlreadySelected = this.classList.contains('selected');
            
            // Remove selected class from all cards in this category group
            const optionGroup = this.closest('.options-grid');
            if (optionGroup) {
                const allCards = optionGroup.querySelectorAll('.option-card');
                allCards.forEach(c => {
                    c.classList.remove('selected');
                    removeSelectedBadge(c);
                });
            }
            
            // Toggle selection
            if (!isAlreadySelected) {
                this.classList.add('selected');
                addSelectedBadge(this);
                
                // Update package config
                updateConfigFromSelection(category, this);
            } else {
                // Clear selection for this category group
                clearCategorySelection(category, optionGroup);
            }
            
            // Save selections
            saveSelections();
            
            // Update totals
            updateTotals();
            
            // Show notification
            showNotification();
        });
    });
    
    // Select change handlers
    document.querySelectorAll('.addon-select').forEach(select => {
        select.addEventListener('change', function() {
            const category = this.getAttribute('data-category');
            const addonType = this.getAttribute('data-addon');
            const value = parseInt(this.value);
            
            if (category === 'dify' && addonType === 'videos') {
                packageConfig.dify.videos = value;
            }
            
            // Save selections
            saveSelections();
            
            updateTotals();
            showNotification();
        });
    });
    
    // Checkbox change handlers
    document.querySelectorAll('.addon-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const id = this.id;
            
            // Check which category this checkbox belongs to
            if (id.startsWith('auto-')) {
                packageConfig.automation.addons[id].enabled = this.checked;
            } else if (id.startsWith('web-')) {
                packageConfig.webdev.addons[id].enabled = this.checked;
            }
            
            // Save selections
            saveSelections();
            
            updateTotals();
            showNotification();
        });
    });
    
    // Email input for quote
    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            if (this.value) {
                // Here you would typically send the quote to the email
                console.log('Sending quote to:', this.value);
                
                // Save email to localStorage
                try {
                    localStorage.setItem('packageEmail', this.value);
                } catch (e) {
                    console.error('Error saving email:', e);
                }
            }
        });
        
        // Load saved email if exists
        try {
            const savedEmail = localStorage.getItem('packageEmail');
            if (savedEmail) {
                emailInput.value = savedEmail;
            }
        } catch (e) {
            console.error('Error loading saved email:', e);
        }
    }
    
    // Form submission
    const packageForm = document.getElementById('package-form');
    if (packageForm) {
        packageForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Prepare package data for submission
            const packageData = {
                diy: packageConfig.diy.selected ? {
                    selected: packageConfig.diy.selected,
                    price: packageConfig.diy.options[packageConfig.diy.selected].price,
                    name: packageConfig.diy.options[packageConfig.diy.selected].name
                } : null,
                
                diwy: packageConfig.diwy.selected ? {
                    selected: packageConfig.diwy.selected,
                    price: packageConfig.diwy.options[packageConfig.diwy.selected].price,
                    name: packageConfig.diwy.options[packageConfig.diwy.selected].name,
                    recurring: packageConfig.diwy.options[packageConfig.diwy.selected].recurring
                } : null,
                
                dify: {
                    platform: packageConfig.dify.platform ? {
                        selected: packageConfig.dify.platform,
                        price: packageConfig.dify.platformOptions[packageConfig.dify.platform].price,
                        name: packageConfig.dify.platformOptions[packageConfig.dify.platform].name,
                        recurring: packageConfig.dify.platformOptions[packageConfig.dify.platform].recurring
                    } : null,
                    
                    videos: packageConfig.dify.videos > 0 ? {
                        count: packageConfig.dify.videos,
                        price: packageConfig.dify.videoOptions[packageConfig.dify.videos].price,
                        name: packageConfig.dify.videoOptions[packageConfig.dify.videos].name,
                        recurring: packageConfig.dify.videoOptions[packageConfig.dify.videos].recurring
                    } : null,
                    
                    reporting: packageConfig.dify.reporting ? {
                        selected: packageConfig.dify.reporting,
                        price: packageConfig.dify.reportingOptions[packageConfig.dify.reporting].price,
                        name: packageConfig.dify.reportingOptions[packageConfig.dify.reporting].name,
                        recurring: packageConfig.dify.reportingOptions[packageConfig.dify.reporting].recurring
                    } : null
                },
                
                automation: {
                    selected: packageConfig.automation.selected ? {
                        selected: packageConfig.automation.selected,
                        price: packageConfig.automation.options[packageConfig.automation.selected].price,
                        name: packageConfig.automation.options[packageConfig.automation.selected].name
                    } : null,
                    
                    addons: Object.entries(packageConfig.automation.addons)
                        .filter(([id, addon]) => addon.enabled)
                        .map(([id, addon]) => ({
                            id: id,
                            price: addon.price,
                            name: addon.name
                        }))
                },
                
                webdev: {
                    selected: packageConfig.webdev.selected ? {
                        selected: packageConfig.webdev.selected,
                        price: packageConfig.webdev.options[packageConfig.webdev.selected].price,
                        name: packageConfig.webdev.options[packageConfig.webdev.selected].name
                    } : null,
                    
                    addons: Object.entries(packageConfig.webdev.addons)
                        .filter(([id, addon]) => addon.enabled)
                        .map(([id, addon]) => ({
                            id: id,
                            price: addon.price,
                            name: addon.name,
                            recurring: addon.recurring
                        }))
                },
                
                coupon: packageConfig.coupon.valid ? packageConfig.coupon : null,
                
                totals: calculateTotals()
            };
            
            // Set the hidden field value
            document.getElementById('package-data').value = JSON.stringify(packageData);
            
            // Submit the form
            this.submit();
        });
    }
    
    // Coupon code application
    const applyCouponBtn = document.querySelector('.apply-coupon-btn');
    if (applyCouponBtn) {
        applyCouponBtn.addEventListener('click', applyCoupon);
    }
    
    // Allow pressing Enter to apply coupon
    const couponInput = document.querySelector('.coupon-input');
    if (couponInput) {
        couponInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                applyCoupon();
            }
        });
    }
}

function findParentCategory(element) {
    // Traverse up the DOM to find the service category
    let parent = element.parentElement;
    while (parent && !parent.classList.contains('service-category')) {
        parent = parent.parentElement;
    }
    
    if (parent) {
        if (parent.classList.contains('diy')) return 'diy';
        if (parent.classList.contains('diwy')) return 'diwy';
        if (parent.classList.contains('dify')) return 'dify';
        if (parent.classList.contains('automation')) return 'automation';
        if (parent.classList.contains('webdev')) return 'webdev';
    }
    
    return null;
}

function updateConfigFromSelection(category, card) {
    const packageId = card.getAttribute('data-id');
    
    switch (category) {
        case 'diy':
            packageConfig.diy.selected = packageId;
            break;
        case 'diwy':
            packageConfig.diwy.selected = packageId;
            break;
        case 'dify':
            // Check if it's a platform or reporting option
            const label = card.closest('.form-group').querySelector('.form-label').textContent;
            if (label === 'Platforms:') {
                packageConfig.dify.platform = packageId;
            } else if (label === 'Reporting Detail:') {
                packageConfig.dify.reporting = packageId;
            }
            break;
        case 'automation':
            packageConfig.automation.selected = packageId;
            break;
        case 'webdev':
            packageConfig.webdev.selected = packageId;
            break;
    }
}

function clearCategorySelection(category, optionGroup) {
    switch (category) {
        case 'diy':
            packageConfig.diy.selected = null;
            break;
        case 'diwy':
            packageConfig.diwy.selected = null;
            break;
        case 'dify':
            // Determine which type of option was cleared
            const label = optionGroup.closest('.form-group').querySelector('.form-label').textContent;
            if (label === 'Platforms:') {
                packageConfig.dify.platform = null;
            } else if (label === 'Reporting Detail:') {
                packageConfig.dify.reporting = null;
            }
            break;
        case 'automation':
            packageConfig.automation.selected = null;
            break;
        case 'webdev':
            packageConfig.webdev.selected = null;
            break;
    }
}

function calculateTotals() {
    let oneTimeTotal = 0;
    let monthlyTotal = 0;
    
    // DIY (one-time)
    if (packageConfig.diy.selected) {
        oneTimeTotal += packageConfig.diy.options[packageConfig.diy.selected].price || 0;
    }
    
    // DIWY (monthly)
    if (packageConfig.diwy.selected) {
        monthlyTotal += packageConfig.diwy.options[packageConfig.diwy.selected].price || 0;
    }
    
    // DIFY (monthly + addons)
    if (packageConfig.dify.platform) {
        monthlyTotal += packageConfig.dify.platformOptions[packageConfig.dify.platform].price || 0;
    }
    
    monthlyTotal += packageConfig.dify.videoOptions[packageConfig.dify.videos].price || 0;
    
    if (packageConfig.dify.reporting) {
        monthlyTotal += packageConfig.dify.reportingOptions[packageConfig.dify.reporting].price || 0;
    }
    
    // Automation (one-time + addons)
    if (packageConfig.automation.selected) {
        oneTimeTotal += packageConfig.automation.options[packageConfig.automation.selected].price || 0;
    }
    
    for (const [addonId, addon] of Object.entries(packageConfig.automation.addons)) {
        if (addon.enabled) {
            oneTimeTotal += addon.price || 0;
        }
    }
    
    // Webdev (one-time + addons)
    if (packageConfig.webdev.selected) {
        oneTimeTotal += packageConfig.webdev.options[packageConfig.webdev.selected].price || 0;
    }
    
    for (const [addonId, addon] of Object.entries(packageConfig.webdev.addons)) {
        if (addon.enabled) {
            if (addonId === 'web-maintenance') {
                monthlyTotal += addon.price || 0;
            } else {
                oneTimeTotal += addon.price || 0;
            }
        }
    }
    
    // Apply coupon discount if valid
    let discountAmount = 0;
    if (packageConfig.coupon.valid) {
        if (packageConfig.coupon.discountType === 'percentage') {
            discountAmount = (oneTimeTotal + monthlyTotal) * (packageConfig.coupon.discount / 100);
        } else {
            discountAmount = packageConfig.coupon.discount;
        }
        
        // Don't allow discount to exceed total
        discountAmount = Math.min(discountAmount, oneTimeTotal + monthlyTotal);
    }
    
    // Calculate final totals after discount
    const finalOneTime = Math.max(0, oneTimeTotal - (packageConfig.coupon.discountType === 'fixed' ? 
        Math.min(discountAmount, oneTimeTotal) : 
        oneTimeTotal * (packageConfig.coupon.discount / 100)));
    
    const finalMonthly = Math.max(0, monthlyTotal - (packageConfig.coupon.discountType === 'fixed' ? 
        Math.max(0, discountAmount - oneTimeTotal) : 
        monthlyTotal * (packageConfig.coupon.discount / 100)));
    
    return {
        oneTime: finalOneTime,
        monthly: finalMonthly,
        discount: discountAmount
    };
}

function updateTotals() {
    const totals = calculateTotals();
    
    // Update the summary sidebar
    updateSummarySidebar(totals.oneTime, totals.monthly, totals.discount);
}

function updateSummarySidebar(oneTimeTotal, monthlyTotal, discountAmount) {
    const summaryItems = document.querySelector('.summary-items');
    if (!summaryItems) return;
    
    // Clear existing items
    summaryItems.innerHTML = '';
    
    // Add DIY item
    if (packageConfig.diy.selected) {
        const option = packageConfig.diy.options[packageConfig.diy.selected];
        if (option.price > 0) {
            addSummaryItem(option.name, `$${option.price}`);
        }
    }
    
    // Add DIWY item
    if (packageConfig.diwy.selected) {
        const option = packageConfig.diwy.options[packageConfig.diwy.selected];
        if (option.price > 0) {
            addSummaryItem(option.name, `$${option.price}/mo`);
        }
    }
    
    // Add DIFY items
    if (packageConfig.dify.platform) {
        const option = packageConfig.dify.platformOptions[packageConfig.dify.platform];
        if (option.price > 0) {
            addSummaryItem(option.name, `$${option.price}/mo`);
        }
    }
    
    // DIFY videos
    if (packageConfig.dify.videos > 0) {
        const option = packageConfig.dify.videoOptions[packageConfig.dify.videos];
        if (option.price > 0) {
            addSummaryItem(option.name, `$${option.price}/mo`);
        }
    }
    
    // DIFY reporting
    if (packageConfig.dify.reporting && packageConfig.dify.reporting !== 'basic-report') {
        const option = packageConfig.dify.reportingOptions[packageConfig.dify.reporting];
        if (option.price > 0) {
            addSummaryItem(option.name, `$${option.price}/mo`);
        }
    }
    
    // Automation
    if (packageConfig.automation.selected) {
        const option = packageConfig.automation.options[packageConfig.automation.selected];
        if (option.price > 0) {
            addSummaryItem(option.name, `$${option.price}`);
        }
    }
    
    // Automation addons
    for (const [addonId, addon] of Object.entries(packageConfig.automation.addons)) {
        if (addon.enabled) {
            if (addon.price > 0) {
                addSummaryItem(addon.name, `$${addon.price}`);
            }
        }
    }
    
    // Webdev
    if (packageConfig.webdev.selected) {
        const option = packageConfig.webdev.options[packageConfig.webdev.selected];
        if (option.price > 0) {
            addSummaryItem(option.name, `$${option.price}`);
        }
    }
    
    // Webdev addons
    for (const [addonId, addon] of Object.entries(packageConfig.webdev.addons)) {
        if (addon.enabled) {
            if (addon.price > 0) {
                addSummaryItem(addon.name, `$${addon.price}${addonId === 'web-maintenance' ? '/mo' : ''}`);
            }
        }
    }
    
    // Add discount line if applicable
    if (discountAmount > 0) {
        const discountItem = document.createElement('div');
        discountItem.className = 'summary-item';
        discountItem.innerHTML = `
            <span class="item-name">Discount (${packageConfig.coupon.code})</span>
            <span class="item-price">-$${discountAmount.toLocaleString()}</span>
        `;
        summaryItems.appendChild(discountItem);
    }
    
    // Update totals
    const totalsContainer = document.querySelector('.summary-totals');
    if (totalsContainer) {
        totalsContainer.innerHTML = '';
        
        if (oneTimeTotal > 0) {
            const oneTimeEl = document.createElement('div');
            oneTimeEl.className = 'summary-total';
            oneTimeEl.innerHTML = `<span>One-Time Total:</span><span>$${oneTimeTotal.toLocaleString()}</span>`;
            totalsContainer.appendChild(oneTimeEl);
        }
        
        if (monthlyTotal > 0) {
            const monthlyEl = document.createElement('div');
            monthlyEl.className = 'summary-total';
            monthlyEl.innerHTML = `<span>Monthly Total:</span><span>$${monthlyTotal.toLocaleString()}/mo</span>`;
            totalsContainer.appendChild(monthlyEl);
        }
        
        // Add grand total if both types exist
        if (oneTimeTotal > 0 && monthlyTotal > 0) {
            const grandTotalEl = document.createElement('div');
            grandTotalEl.className = 'summary-total grand-total';
            grandTotalEl.innerHTML = `<span>Combined Total:</span><span>$${(oneTimeTotal + monthlyTotal).toLocaleString()}</span>`;
            totalsContainer.appendChild(grandTotalEl);
        }
        
        // Show message if no items selected
        if (oneTimeTotal === 0 && monthlyTotal === 0) {
            const noItemsEl = document.createElement('div');
            noItemsEl.className = 'summary-total';
            noItemsEl.innerHTML = `<span>No items selected</span>`;
            totalsContainer.appendChild(noItemsEl);
        }
    }
}

function addSummaryItem(name, price) {
    const summaryItems = document.querySelector('.summary-items');
    if (!summaryItems) return;
    
    const item = document.createElement('div');
    item.className = 'summary-item';
    item.innerHTML = `<span class="item-name">${name}</span><span class="item-price">${price}</span>`;
    
    summaryItems.appendChild(item);
}

function applyCoupon() {
    const couponInput = document.querySelector('.coupon-input');
    const couponMessage = document.querySelector('.coupon-message');
    
    if (!couponInput || !couponMessage) return;
    
    const code = couponInput.value.trim().toUpperCase();
    
    if (!code) {
        couponMessage.textContent = 'Please enter a coupon code';
        couponMessage.className = 'coupon-message error';
        packageConfig.coupon.valid = false;
        return;
    }
    
    if (couponCodes[code]) {
        packageConfig.coupon.code = code;
        packageConfig.coupon.discount = couponCodes[code].discount;
        packageConfig.coupon.discountType = couponCodes[code].type;
        packageConfig.coupon.valid = true;
        
        couponMessage.textContent = `Coupon applied: ${packageConfig.coupon.discount}${packageConfig.coupon.discountType === 'percentage' ? '%' : '$'} discount`;
        couponMessage.className = 'coupon-message success';
    } else {
        packageConfig.coupon.valid = false;
        couponMessage.textContent = 'Invalid coupon code';
        couponMessage.className = 'coupon-message error';
    }
    
    // Save selections
    saveSelections();
    
    // Update totals with discount
    updateTotals();
}

function showNotification() {
    const notification = document.getElementById('notification');
    if (!notification) return;
    
    notification.classList.add('show');
    
    setTimeout(() => {
        notification.classList.remove('show');
    }, 3000);
}
function checkForDIFYParameters() {
    // Check if we have DIFY parameters from PHP
    if (typeof packageData !== 'undefined' && packageData.dify_params && packageData.dify_params.dify === '1') {
        const difyParams = packageData.dify_params;
        
        // Process platform selection
        if (difyParams.platform) {
            let platformId = difyParams.platform + '-only';
            if (difyParams.platform === 'both') {
                platformId = 'both-platforms';
            }
            
            const platformCard = document.querySelector(`.dify .option-card[data-id="${platformId}"]`);
            if (platformCard) {
                // Clear any existing selection
                document.querySelectorAll('.dify .options-grid:first-child .option-card').forEach(card => {
                    card.classList.remove('selected');
                    removeSelectedBadge(card);
                });
                
                // Select the platform
                platformCard.classList.add('selected');
                addSelectedBadge(platformCard);
                
                // Update config
                packageConfig.dify.platform = platformId;
            }
        }
        
        // Process videos selection
        if (difyParams.videos) {
            const videoSelect = document.querySelector('.dify .addon-select');
            if (videoSelect) {
                videoSelect.value = difyParams.videos;
                packageConfig.dify.videos = parseInt(difyParams.videos);
            }
        }
        
        // Process reporting selection
        if (difyParams.reporting) {
            let reportingId = 'basic-report';
            if (difyParams.reporting === 'advanced') {
                reportingId = 'advanced-analytics';
            }
            
            const reportingCard = document.querySelector(`.dify .option-card[data-id="${reportingId}"]`);
            if (reportingCard) {
                // Clear any existing selection
                const reportingGrid = reportingCard.closest('.options-grid');
                if (reportingGrid) {
                    reportingGrid.querySelectorAll('.option-card').forEach(card => {
                        card.classList.remove('selected');
                        removeSelectedBadge(card);
                    });
                    
                    // Select the reporting option
                    reportingCard.classList.add('selected');
                    addSelectedBadge(reportingCard);
                    
                    // Update config
                    packageConfig.dify.reporting = reportingId;
                }
            }
        }
        
        // Save selections
        saveSelections();
        
        // Update totals
        updateTotals();
        
        // Scroll to DIFY section
        setTimeout(() => {
            document.querySelector('.dify').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 500);
    }
}