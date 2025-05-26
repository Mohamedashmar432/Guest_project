// Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        
        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('show');
            
            // Toggle hamburger icon between bars and X
            const icon = hamburger.querySelector('i');
            if (icon.classList.contains('fa-bars')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Simulate live price updates
        function updatePrices() {
            const stockPrices = document.querySelectorAll('.stock-price');
            
            stockPrices.forEach(price => {
                // Get current price as number
                let currentPrice = parseFloat(price.textContent.replace('$', ''));
                
                // Add random small variation (+/- 0.5%)
                const variation = currentPrice * (Math.random() * 0.01 - 0.005);
                const newPrice = (currentPrice + variation).toFixed(2);
                
                // Update the displayed price
                price.textContent = '$' + newPrice;
                
                // Add animation to show change
                price.style.transition = 'color 0.5s ease';
                if (variation > 0) {
                    price.style.color = '#4dff4d';
                } else {
                    price.style.color = '#ff4d4d';
                }
                
                // Reset color after animation
                setTimeout(() => {
                    price.style.color = '';
                }, 500);
            });
        }
        
        // Update prices periodically
        setInterval(updatePrices, 5000);
        
        // Portfolio value animation
        function animateValue(element, start, end, duration) {
            let startTime = null;
            const step = (timestamp) => {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = '€ ' + value.toLocaleString() + ' ';
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
        
        // Run value animation on page load
        window.addEventListener('load', () => {
            const valueElement = document.querySelector('.value-amount');
            const valueText = valueElement.textContent.trim().replace(/[^\d]/g, '');
            const targetValue = parseInt(valueText, 10);
            animateValue(valueElement, targetValue - 10000, targetValue, 1500);
        });
        
        // Refresh button functionality
        const refreshButton = document.querySelector('.refresh-button');
        refreshButton.addEventListener('click', () => {
            // Add spinning animation to refresh icon
            const refreshIcon = refreshButton.querySelector('i');
            refreshIcon.classList.add('fa-spin');
            
            // Simulate data refreshing
            setTimeout(() => {
                refreshIcon.classList.remove('fa-spin');
                
                // Update trending stocks with slight variations
                const trendingPrices = document.querySelectorAll('.item-price');
                trendingPrices.forEach(price => {
                    const currentPrice = parseFloat(price.textContent);
                    const variation = currentPrice * (Math.random() * 0.02 - 0.01);
                    const newPrice = (currentPrice + variation).toFixed(2);
                    price.textContent = newPrice + ' $';
                    
                    // Briefly highlight the change
                    price.style.transition = 'background-color 1s ease';
                    price.style.backgroundColor = '#f0f8ff';
                    setTimeout(() => {
                        price.style.backgroundColor = 'transparent';
                    }, 1000);
                });
            }, 1000);
        });

 // Theme toggle functionality
        const themeToggle = document.getElementById('themeToggle');
        
        // Check for user preference from system
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.body.classList.add('dark-theme');
        }
        
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme');
        });