// Enhanced animation for policy sections with better performance
$(document).ready(function () {
    // Ensure content is visible immediately
    $('.policy-section').css({
        'visibility': 'visible',
        'opacity': '1',
        'transform': 'none'
    });

    // After a brief delay, enable animations
    setTimeout(() => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        // Add animation classes and observe sections
        $('.policy-section').each(function () {
            $(this).addClass('can-animate');
            observer.observe(this);
        });
    }, 500); // Delay to ensure content is visible first

    // Back to top functionality
    const backToTop = $('<button>', {
        class: 'back-to-top',
        html: '<i class="fas fa-arrow-up"></i>'
    }).appendTo('body');

    // Show/hide back-to-top button
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 300) {
            backToTop.addClass('visible');
        } else {
            backToTop.removeClass('visible');
        }
    });

    // Smooth scroll to top
    backToTop.on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    });

    // Add styles for back-to-top button
    $('<style>').html(`
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 40px;
            height: 40px;
            background: var(--secondary);
            color: var(--white);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        .back-to-top:hover {
            background: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    `).appendTo('head');
});
