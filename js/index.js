/* Header functionality moved to header.js */
/*
// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const navbar = document.getElementById('navbar');
const navLinks = document.querySelectorAll('#navbar ul li a');

mobileMenuBtn.addEventListener('click', () => {
    navbar.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
    mobileMenuBtn.innerHTML = navbar.classList.contains('active') ?
        '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
});

// Close menu when clicking on a link
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navbar.classList.remove('active');
        document.body.classList.remove('no-scroll');
        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
    });
});

// Sticky Header
window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
*/

// Initialize Testimonial Slider
$(document).ready(function () {
    console.log('Document ready fired');
    if (typeof $.fn.slick === 'undefined') {
        console.error('Slick is not loaded!');
        return;
    }
    console.log('Initializing testimonials slider');
    $('.testimonials-slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });
    console.log('Slick initialization complete');

    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= window.innerHeight * 3 / 4
            // rect.left >= 0 &&
            // rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            // rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll animations
    function animateOnScroll() {
        document.querySelectorAll('.hero-content, .about-img, .about-content, .service-card, .portfolio-item, .testimonial-card, .value-card, .service-highlight').forEach(element => {
            if (isInViewport(element)) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }

    // Set initial styles for animation
    document.querySelectorAll('.hero-content, .about-img, .about-content, .service-card, .portfolio-item, .testimonial-card, .value-card, .service-highlight').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'all 0.6s linear';
    });

    // Trigger animations when page loads
    setTimeout(() => {
        animateOnScroll();
    }, 300);

    // Trigger animations on scroll
    window.addEventListener('scroll', animateOnScroll);
});

// Portfolio Filter
const filterBtns = document.querySelectorAll('.filter-btn');
const portfolioItems = document.querySelectorAll('.portfolio-item');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all buttons
        filterBtns.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');

        portfolioItems.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

// Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            if (navbar.classList.contains('active')) {
                navbar.classList.remove('active');
                document.body.classList.remove('no-scroll');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            }
        }
    });
});

// Form Validation
$('#consultationForm').on('submit', function (e) {
    e.preventDefault();
    let valid = true;

    // Validate required fields
    $(this).find('[required]').each(function () {
        if (!$(this).val().trim()) {
            $(this).addClass('error');
            $(this).next('.error-message').remove();
            $(this).after('<span class="error-message">This field is required</span>');
            valid = false;
        } else {
            $(this).removeClass('error');
            $(this).next('.error-message').remove();
        }
    });

    // Validate email format
    const email = $('#email').val().trim();
    if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        $('#email').addClass('error');
        $('#email').next('.error-message').remove();
        $('#email').after('<span class="error-message">Please enter a valid email</span>');
        valid = false;
    }

    if (valid) {
        // Simulate form submission
        $('.hero-form').html(`
                    <div class="form-success">
                        <i class="fas fa-check-circle"></i>
                        <h3>Thank You!</h3>
                        <p>Your request has been submitted successfully. Our team will contact you shortly.</p>
                    </div>
                `);
    }
});

// Phone Number Validation
$('input[name="phone"]').on('input', function () {
    $(this).val($(this).val().replace(/[^0-9]/g, ''));
});






// < !--JavaScript Section   model section-- >

const serviceImages = {
    'kids-bedroom': [
        'assests/Modals/Kids&MasterBedroom/1.webp',
        'assests/Modals/Kids&MasterBedroom/2.webp',
        'assests/Modals/Kids&MasterBedroom/3.webp',
        'assests/Modals/Kids&MasterBedroom/4.webp',
        'assests/Modals/Kids&MasterBedroom/5.webp',
        'assests/Modals/Kids&MasterBedroom/6.webp'
    ],
    'modular-kitchens': [
        'assests/Modals/Modular_Kitchen_Designs/1.webp',
        'assests/Modals/Modular_Kitchen_Designs/2.webp',
        'assests/Modals/Modular_Kitchen_Designs/3.webp',
        'assests/Modals/Modular_Kitchen_Designs/4.webp',
        'assests/Modals/Modular_Kitchen_Designs/5.webp',
        'assests/Modals/Modular_Kitchen_Designs/6.webp'
    ],
    'sofa-decor': [
        'assests/Modals/Sofa_&_Decor_Collections/1.webp',
        'assests/Modals/Sofa_&_Decor_Collections/2.webp',
        'assests/Modals/Sofa_&_Decor_Collections/3.webp',
        'assests/Modals/Sofa_&_Decor_Collections/4.webp',
        'assests/Modals/Sofa_&_Decor_Collections/5.webp',
        'assests/Modals/Sofa_&_Decor_Collections/6.webp'
    ],
    'tv-units': [
        'assests/Modals/Study_Table_Designs/1.webp',
        'assests/Modals/Study_Table_Designs/2.webp',
        'assests/Modals/Study_Table_Designs/3.webp',
        'assests/Modals/Study_Table_Designs/4.webp',
        'assests/Modals/Study_Table_Designs/5.webp',
        'assests/Modals/Study_Table_Designs/6.webp'
    ],
    'study-tables': [
        'assests/Modals/TV/1.webp',
        'assests/Modals/TV/2.webp',
        'assests/Modals/TV/3.webp',
        'assests/Modals/TV/4.webp',
        'assests/Modals/TV/5.webp',
        'assests/Modals/TV/6.webp'
    ],
    'wallpaper': [
        'assests/Modals/WallpaperCollections/1.webp',
        'assests/Modals/WallpaperCollections/2.webp',
        'assests/Modals/WallpaperCollections/3.webp',
        'assests/Modals/WallpaperCollections/4.jpg',
        'assests/Modals/WallpaperCollections/5.webp',
        'assests/Modals/WallpaperCollections/6.webp'
    ],
    'wall-paint': [
        'assests/Modals/Wall_Paint/1.webp',
        'assests/Modals/Wall_Paint/2.webp',
        'assests/Modals/Wall_Paint/3.webp',
        'assests/Modals/Wall_Paint/4.webp',
        'assests/Modals/Wall_Paint/5.webp',
        'assests/Modals/Wall_Paint/6.webp'
    ],
    'wardrobes': [
        'assests/Modals/Wardrobe/1.webp',
        'assests/Modals/Wardrobe/2.webp',
        'assests/Modals/Wardrobe/3.webp',
        'assests/Modals/Wardrobe/4.webp',
        'assests/Modals/Wardrobe/5.webp',
        'assests/Modals/Wardrobe/6.webp'
    ]
};

const serviceTitles = {
    'kids-bedroom': 'Kids & Master Bedroom Designs',
    'modular-kitchens': 'Modular Kitchen Designs',
    'sofa-decor': 'Sofa & Decor Collections',
    'tv-units': 'TV Unit Designs',
    'study-tables': 'Study Table Designs',
    'wallpaper': 'Wallpaper Collections',
    'wall-paint': 'Wall Paint Solutions',
    'wardrobes': 'Wardrobe Designs'
};

const modal = document.getElementById('servicesModal');
const modalTitle = document.getElementById('modalServiceTitle');
const modalImages = document.getElementById('modalServiceImages');
const closeBtn = document.querySelector('.services-modal-close');

document.querySelectorAll('.service-highlight').forEach(service => {
    service.addEventListener('click', function () {
        const serviceType = this.getAttribute('data-service');
        openModal(serviceType);
    });
});

closeBtn.addEventListener('click', closeModal);

window.addEventListener('click', function (event) {
    if (event.target === modal) {
        closeModal();
    }
});

function openModal(serviceType) {
    modalTitle.textContent = serviceTitles[serviceType] || serviceType.replace('-', ' ');
    modalImages.innerHTML = '';

    if (serviceImages[serviceType]) {
        serviceImages[serviceType].forEach(imgSrc => {
            const img = document.createElement('img');
            img.src = imgSrc;
            img.alt = serviceType.replace('-', ' ');
            img.className = 'services-modal-image';
            modalImages.appendChild(img);
        });
    }

    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    modal.classList.remove('show');
    document.body.style.overflow = 'auto';
}


