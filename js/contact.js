// Animation on Scroll for Contact Page
$(document).ready(function () {
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    }

    // Function to handle scroll animations
    function handleScrollAnimations() {
        const elements = [
            document.getElementById('contact-info'),
            document.getElementById('contact-form'),
            document.getElementById('contact-map')
        ];

        elements.forEach((element) => {
            if (element && isInViewport(element)) {
                element.classList.add('animated');
            }
        });
    }

    // Initial check when page loads
    handleScrollAnimations();

    // Check on scroll
    window.addEventListener('scroll', handleScrollAnimations);

    // Enhanced form validation
    $('#contact-form form').on('submit', function (e) {
        e.preventDefault();
        let valid = true;
        let firstError = null;
        const errors = [];

        // Clear previous errors
        $('.error-message').remove();
        $(this).find('.error').removeClass('error');

        // Validate required fields
        $(this).find('[required]').each(function () {
            const $field = $(this);
            const fieldName = $field.attr('name');

            if (!$field.val().trim()) {
                $field.addClass('error');
                errors.push(`${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} is required`);
                if (!firstError) firstError = this;
                valid = false;
            }
        });

        // Validate email format
        const emailField = $(this).find('input[type="email"]');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailField.val() && !emailRegex.test(emailField.val())) {
            emailField.addClass('error');
            errors.push('Please enter a valid email address');
            if (!firstError) firstError = emailField[0];
            valid = false;
        }

        // Validate phone number
        const phoneField = $(this).find('input[name="phone"]');
        const phoneRegex = /^\d{10}$/;
        if (phoneField.val() && !phoneRegex.test(phoneField.val())) {
            phoneField.addClass('error');
            errors.push('Please enter a valid 10-digit phone number');
            if (!firstError) firstError = phoneField[0];
            valid = false;
        }

        if (!valid) {
            // Display errors
            const errorHtml = '<div class="error-message"><ul>' +
                errors.map(err => `<li>${err}</li>`).join('') +
                '</ul></div>';
            $(firstError).before(errorHtml);

            // Scroll to first error
            $('html, body').animate({
                scrollTop: $(firstError).offset().top - 100
            }, 500);
            return false;
        }

        // If valid, submit form via AJAX
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                // Show success message
                const successMessage = '<div class="success-message">Thank you for your message. We will get back to you soon!</div>';
                $('#contact-form form').before(successMessage);

                // Clear form
                $('#contact-form form')[0].reset();

                // Scroll to success message
                $('html, body').animate({
                    scrollTop: $('.success-message').offset().top - 100
                }, 500);

                // Remove success message after 5 seconds
                setTimeout(() => {
                    $('.success-message').fadeOut(function () {
                        $(this).remove();
                    });
                }, 5000);
            },
            error: function () {
                const errorMessage = '<div class="error-message">Sorry, there was an error sending your message. Please try again later.</div>';
                $('#contact-form form').before(errorMessage);
            }
        });
    });

    // Phone number live validation
    $('input[name="phone"]').on('input', function () {
        let value = $(this).val().replace(/\D/g, '');
        if (value.length > 10) {
            value = value.substr(0, 10);
        }
        $(this).val(value);
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 100,
                behavior: 'smooth'
            });
        }
    });
});
