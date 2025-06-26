$(document).ready(function () {

    // Enhanced Service Category Filter with smoother transitions
    $('.category-tab').on('click', function () {
        const $cards = $('.service-card');
        $('.category-tab').removeClass('active');
        $(this).addClass('active');

        const selectedCategory = $(this).data('category');

        if (selectedCategory === 'all') {
            $cards.removeClass('hidden');
            $cards.css({
                'opacity': '1',
                'transform': 'translateY(0)'
            });
        } else {
            $cards.each(function () {
                const $card = $(this);
                if ($card.data('category') === selectedCategory) {
                    $card.removeClass('hidden');
                    setTimeout(() => {
                        $card.css({
                            'opacity': '1',
                            'transform': 'translateY(0)'
                        });
                    }, 50);
                } else {
                    $card.css({
                        'opacity': '0',
                        'transform': 'translateY(20px)'
                    });
                    setTimeout(() => {
                        $card.addClass('hidden');
                    }, 500);
                }
            });
        }
    });

    // Trigger initial animation for service cards
    setTimeout(() => {
        $('.service-card').css({
            'opacity': '1',
            'transform': 'translateY(0)'
        });
    }, 300);

    // Enhanced FAQ Accordion
    $('.faq-question').on('click', function () {
        const $item = $(this).parent();
        const $answer = $item.find('.faq-answer');
        const $icon = $(this).find('i');

        if ($item.hasClass('active')) {
            $answer.css('max-height', '0');
            $icon.css('transform', 'rotate(0deg)');
            $item.removeClass('active');
        } else {
            $('.faq-item.active .faq-answer').css('max-height', '0');
            $('.faq-item.active').removeClass('active');
            $('.faq-question i').css('transform', 'rotate(0deg)');

            $answer.css('max-height', $answer[0].scrollHeight + 'px');
            $icon.css('transform', 'rotate(180deg)');
            $item.addClass('active');
        }
    });

    // Improved Animation on Scroll with Intersection Observer
    const animateOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                // Only unobserve if animation should happen once
                animateOnScroll.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    });

    // Observe elements for animation
    document.querySelectorAll('.service-card, .process-step, .package-card').forEach(element => {
        animateOnScroll.observe(element);
    });

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        const target = $(this.hash);

        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });

    // Sticky Header with throttle
    let lastScrollTop = 0;
    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const currentScroll = window.pageYOffset;
                const header = document.getElementById('header');

                if (header) {
                    if (currentScroll > 100) {
                        header.classList.add('scrolled');
                        if (currentScroll > lastScrollTop) {
                            header.style.transform = 'translateY(-100%)';
                        } else {
                            header.style.transform = 'translateY(0)';
                        }
                    } else {
                        header.classList.remove('scrolled');
                        header.style.transform = 'translateY(0)';
                    }
                }

                lastScrollTop = currentScroll;
                ticking = false;
            });
            ticking = true;
        }
    });
});
