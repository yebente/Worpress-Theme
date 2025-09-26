// pricing-calculator.js - Handles dynamic pricing calculations for DIFY and pricing pages
// Loads only on relevant pages

document.addEventListener('DOMContentLoaded', function() {
    // Get all the input elements that affect the price
    const platformRadios = document.querySelectorAll('input[name="platform"]');
    const videoSelect = document.getElementById('extra_videos');
    const reportingRadios = document.querySelectorAll('input[name="reporting"]');
    const totalCostElement = document.getElementById('total-cost');

    // Function to get the price from a selected element
    function getSelectedPrice(elements) {
        for (const element of elements) {
            if (element.checked) {
                return parseInt(element.getAttribute('data-price'));
            }
        }
        return 0; // Fallback
    }

    // Function to calculate the total cost
    function calculateTotal() {
        let total = 0;

        // Get the price from the selected platform
        total += getSelectedPrice(platformRadios);

        // Get the price from the selected video add-on
        const selectedVideoOption = videoSelect.options[videoSelect.selectedIndex];
        total += parseInt(selectedVideoOption.getAttribute('data-price'));

        // Get the price from the selected reporting tier
        total += getSelectedPrice(reportingRadios);

        // Update the total cost display
        totalCostElement.textContent = total;

        return total;
    }

    // Add event listeners to all inputs that can change the price
    platformRadios.forEach(radio => radio.addEventListener('change', calculateTotal));
    videoSelect.addEventListener('change', calculateTotal);
    reportingRadios.forEach(radio => radio.addEventListener('change', calculateTotal));

    // Calculate the initial total on page load
    calculateTotal();
});
document.addEventListener('DOMContentLoaded', function() {
    // Initialize the package configuration
    initPackageCustomization();
    
    // Set up event listeners
    setupEventListeners();
    
    // Check for preselected package from URL
    checkForPreselectedPackage();
    
    // Check for DIFY parameters from URL
    checkForDIFYParameters();
    
    // Load saved selections from localStorage
    loadSavedSelections();
    
    // Calculate initial total
    updateTotals();
});