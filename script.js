 // Theme toggle functionality
        const themeToggle = document.getElementById('themeToggle');
        
        // Check for user preference from system
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.body.classList.add('dark-mode');
        }
        
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });

        // Password visibility toggle
        const passwordToggle = document.querySelector('.password-toggle');
        const confirmToggle = document.getElementById('confirmToggle');
        const confirmInput = document.querySelectorAll('input[type="password"]')[1];
        const passwordInput = document.querySelector('input[type="password"]');
        
        passwordToggle.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.innerHTML = '&#128064;'; // Eye closed
            } else {
                passwordInput.type = 'password';
                passwordToggle.innerHTML = '&#128065;'; // Eye open
            }
        });
        
        // Add responsive behavior for window resizing
        function adjustForScreenSize() {
            const width = window.innerWidth;
            const socialButtons = document.querySelector('.social-buttons');
            
            if (width < 768) {
                if (socialButtons.classList.contains('horizontal')) {
                    socialButtons.classList.remove('horizontal');
                    socialButtons.classList.add('vertical');
                }
            } else {
                if (socialButtons.classList.contains('vertical')) {
                    socialButtons.classList.remove('vertical');
                    socialButtons.classList.add('horizontal');
                }
            }
        }
        
        // Initial check and event listener for window resize
        window.addEventListener('load', adjustForScreenSize);
        window.addEventListener('resize', adjustForScreenSize);
        
        confirmToggle.addEventListener('click', () => {
            togglePasswordVisibility(confirmInput, confirmToggle);
        });
        
        function togglePasswordVisibility(inputField, toggleButton) {
            if (inputField.type === 'password') {
                inputField.type = 'text';
                toggleButton.innerHTML = '&#128064;'; // Eye closed
            } else {
                inputField.type = 'password';
                toggleButton.innerHTML = '&#128065;'; // Eye open
            }
        }
        
        // Form validation
        const registerButton = document.querySelector('.register-button');
        const termsCheck = document.getElementById('termsCheck');
        const privacyCheck = document.getElementById('privacyCheck');
        
        registerButton.addEventListener('click', function() {
            let inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');
            let isValid = true;
            
            // Basic validation
            inputs.forEach(input => {
                if (!input.placeholder.includes('Optional') && input.value.trim() === '') {
                    input.style.borderColor = 'var(--error-color)';
                    isValid = false;
                } else {
                    input.style.borderColor = 'var(--divider-color)';
                }
            });
            
            // Check if passwords match
            if (passwordInput.value !== confirmInput.value) {
                confirmInput.style.borderColor = 'var(--error-color)';
                isValid = false;
                alert('Passwords do not match!');
            }
            
            // Check if terms are agreed
            if (!termsCheck.checked || !privacyCheck.checked) {
                isValid = false;
                alert('Please agree to the Terms and Privacy Statement');
            }
            
            // if (isValid) {
            //     alert('Registration form submitted successfully!');
            //     // Here you would typically submit the form or call an API
            // }
        });
        
// Menu-bar

let menu = document.querySelector("#menu-icon");
let nav = document.querySelector(".nav-bar");
menu.onclick = () => {
    menu.classList.toggle("bx-x");
    nav.classList.toggle("open");
}