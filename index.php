<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assests/favicon.png">
    <title>Castlewood Interiors - Premium Interior Design Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <?php include('partials/header.php'); ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <h1>Transform Your Space With Elegance</h1>
                <p>We create beautiful, functional spaces that reflect your personality and lifestyle. Our team of
                    expert designers will bring your vision to life.</p>
                <div class="hero-btns">
                    <a href="services.php" class="btn btn-outline">View Portfolio</a>
                    <a href="contact-us.php" class="btn">Get Free Consultation</a>
                </div>
            </div>

            <div class="hero-form">
                <h3>Talk With Our Experts</h3>
                <form action="send_request.php" method="POST" id="consultationForm">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Your Phone</label>
                        <div class="phone-input">
                            <select name="country_code" required>
                                <option value="+91">+91 (IN)</option>
                                <option value="+1">+1 (US)</option>
                                <option value="+44">+44 (UK)</option>
                                <option value="+971">+971 (UAE)</option>
                            </select>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Your Location</label>
                        <input type="text" id="location" name="location" required>
                    </div>
                    <button type="submit" class="form-submit">SEND REQUEST</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Perfect Interior Section -->
    <section class="perfect-interior">
        <div class="container">
            <div class="section-title">
                <h2>Perfect Interior Designers in Bangalore</h2>
                <p>Discover how we can create stunning, personalized spaces for your home</p>
            </div>

            <div class="services-highlight">
                <div class="services-row">
                    <div class="service-highlight">
                        <i class="fas fa-child"></i>
                        <h4>Kids + Master Bedroom</h4>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-utensils"></i>
                        <h4>Modular Kitchens</h4>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-couch"></i>
                        <h4>Sofa & Decor</h4>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-tv"></i>
                        <h4>TV Units</h4>
                    </div>
                </div>

                <div class="services-row">
                    <div class="service-highlight">
                        <i class="fas fa-book"></i>
                        <h4>Study Tables</h4>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-image"></i>
                        <h4>Wallpaper</h4>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-paint-roller"></i>
                        <h4>Wall Paint</h4>
                    </div>
                    <div class="service-highlight">
                        <i class="fas fa-tshirt"></i>
                        <h4>Wardrobes</h4>
                    </div>
                </div>
            </div>

            <div class="cta-box">
                <p>Looking for a top interior designer in Bangalore?</p>
                <a href="tel:+916361661047" class="btn">Call Today +91 63616 61047</a>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="our-values">
        <div class="container">
            <div class="section-title">
                <h2>Our Core Values</h2>
                <p>What makes us different from other interior designers</p>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>Whether you're looking to renovate your home or office, we have the expertise and creativity to
                        bring your vision to life.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3>Experience</h3>
                    <p>With a team of experienced designers, we are committed to delivering high-quality design
                        solutions.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Professional</h3>
                    <p>Our professional designers dedicated to creating unique and functional spaces that reflect our
                        clients' personal style and taste.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h3>Affordable</h3>
                    <p>Trusted interior design company that provides high-quality design solutions at affordable prices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-container">
                <div class="about-img">
                    <img src="assests/index/h1.webp" alt=" About Castlewood Interiors" loading="lazy">
                </div>
                <div class="about-content">
                    <h2>About Castlewood Interiors</h2>
                    <p>Founded in 2010, Castlewood Interiors has been transforming spaces across the country with our
                        unique blend of contemporary and classic design elements.</p>
                    <p>Our philosophy is simple: great design should be accessible to everyone. We work closely with our
                        clients to understand their needs, preferences, and lifestyle to create spaces that are both
                        beautiful and functional.</p>

                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Award Winning</h4>
                                <p>Recognized by International Design Awards for excellence in residential design.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-text">
                                <h4>500+ Happy Clients</h4>
                                <p>We've transformed homes and businesses for over 500 satisfied clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer comprehensive interior design services tailored to your specific needs and budget.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="assests/index/s1.webp" alt="Residential Design" loading="lazy">
                    </div>
                    <div class="service-content">
                        <h3>Residential Design</h3>
                        <p>From cozy apartments to luxurious estates, we create homes that reflect your personality and
                            lifestyle.</p>
                        <a href="services.php" class="btn">Learn More</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-img">
                        <img src="assests/index/p4.webp" alt="Commercial Design" loading="lazy">
                    </div>
                    <div class="service-content">
                        <h3>Commercial Design</h3>
                        <p>We design functional and inspiring workspaces that enhance productivity and brand identity.
                        </p>
                        <a href="services.php" class="btn">Learn More</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-img">
                        <img src="assests/index/s3.webp" alt="Space Planning" loading="lazy">
                    </div>
                    <div class="service-content">
                        <h3>Space Planning</h3>
                        <p>Optimize your space with our expert layout solutions that maximize functionality and flow.
                        </p>
                        <a href="services.php" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose CASTLEWOOD Interiors</h2>
                <p>What makes Castlewood Interiors the preferred choice for your design needs</p>
            </div>

            <div class="features-container">
                <div class="features-img">
                    <!-- <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" -->
                    <img src="assests/about/whychoose.jpg" alt="Why Choose Castlewood Interiors" loading="lazy">
                </div>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-palette"></i> <!-- Paint palette -->
                        </div>
                        <div class="feature-text">
                            <h4>Design That Reflects You</h4>
                            <p>We don’t believe in one-size-fits-all. Every space we design is a reflection of your
                                personality, lifestyle, and aspirations—crafted with precision and soul.
                            </p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-comments-dollar"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Free Home Consultation</h4>
                            <p>Our experts visit your space to understand your needs, offer creative insights, and plan
                                solutions—absolutely free.
                            </p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="feature-text">
                            <h4>End-to-End Project Execution</h4>
                            <p>From layout planning and sourcing materials to supervision and final touches—we manage
                                everything so you can relax and enjoy the transformation.</p>
                        </div>
                    </div>


                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Customized Furniture & Decor</h4>
                            <p>We design and deliver bespoke furniture, modular units, and curated decor to perfectly
                                match your interiors.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="feature-text">
                            <h4>On-Time Delivery Promise</h4>
                            <p>We value your time. Our team follows strict timelines with regular updates and
                                transparent communication.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-broom"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Deep Cleaning After Work Completion</h4>
                            <p>We ensure a spotless finish with deep cleaning after project completion, along with up to
                                10 years of warranty on our bespoke furniture, modular units, and curated decor.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Aftercare & Support </h4>
                            <p>Our commitment continues beyond project handover with up to 10 years of support for any
                                updates or adjustments you need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Our Portfolio</h2>
                <p>Explore our recent projects and get inspired for your own space transformation.</p>
            </div>

            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="residential">Residential</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="hospitality">Hospitality</button>
            </div>

            <div class="portfolio-grid">
                <div class="portfolio-item" data-category="residential">
                    <img src="assests/index/p1.webp" alt="Modern Apartment" class="portfolio-img" loading="lazy">
                    <div class="portfolio-overlay">
                        <h3>Modern Apartment</h3>
                        <p>New York, USA</p>
                    </div>
                </div>

                <div class="portfolio-item" data-category="commercial">
                    <img src="assests/index/p2.webp" alt="Corporate Office" class="portfolio-img" loading="lazy">
                    <div class="portfolio-overlay">
                        <h3>Corporate Office</h3>
                        <p>London, UK</p>
                    </div>
                </div>

                <div class="portfolio-item" data-category="residential">
                    <img src="assests/index/h1.webp" alt="Luxury Villa" class="portfolio-img" loading="lazy">
                    <div class="portfolio-overlay">
                        <h3>Luxury Villa</h3>
                        <p>Miami, USA</p>
                    </div>
                </div>

                <div class="portfolio-item" data-category="hospitality">
                    <img src="assests/index/p4.webp" alt="Boutique Hotel" class="portfolio-img" loading="lazy">
                    <div class="portfolio-overlay">
                        <h3>Boutique Hotel</h3>
                        <p>Paris, France</p>
                    </div>
                </div>

                <div class="portfolio-item" data-category="commercial">
                    <img src="assests/index/p5.webp" alt="Co-working Space" class="portfolio-img" loading="lazy">
                    <div class="portfolio-overlay">
                        <h3>Co-working Space</h3>
                        <p>Berlin, Germany</p>
                    </div>
                </div>

                <div class="portfolio-item" data-category="residential">
                    <img src="assests/index/p6.webp" alt="Penthouse" class="portfolio-img" loading="lazy">
                    <div class="portfolio-overlay">
                        <h3>Penthouse</h3>
                        <p>Dubai, UAE</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
                <p>Hear from our satisfied clients about their experience working with Castlewood Interiors.</p>
            </div>

            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <img src="assests/index/t1.jpg" alt="Client" class="client-img">
                    <p>"Working with Castlewood was an absolute pleasure. They transformed our outdated living room into
                        a modern, functional space that we love spending time in. Their attention to detail is
                        unmatched."
                    </p>
                    <h4 class="client-name">Priya Menon</h4>
                    <p class="client-designation">Homeowner</p>
                </div>

                <div class="testimonial-card">
                    <img src="assests/index/t2.jpg" alt="Client" class="client-img">
                    <p>"The team at Castlewood understood our brand perfectly and created an office space that reflects
                        our company culture while maximizing productivity. The project was completed on time and within
                        budget."
                    </p>
                    <h4 class="client-name">Rohan Shetty</h4>
                    <p class="client-designation">CEO</p>
                </div>

                <div class="testimonial-card">
                    <img src="assests/index/t3.jpg" alt="Client" class="client-img">
                    <p>"I was hesitant about hiring an interior designer, but Castlewood made the process so easy. They
                        listened to my needs and delivered a kitchen design that's both beautiful and practical for my
                        family."</p>
                    <h4 class="client-name">Ananya Rao</h4>
                    <p class="client-designation">Homeowner</p>
                </div>

                <div class="testimonial-card">
                    <img src="assests/index/t4.jpg" alt="Client" class="client-img">
                    <p>"Our boutique hotel needed a complete redesign, and Castlewood delivered beyond our expectations.
                        The rooms are now frequently featured on Instagram by our guests!"</p>
                    <h4 class="client-name">Karthik Nair</h4>
                    <p class="client-designation">Hotel Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Transform Your Space?</h2>
            <p>Schedule a free consultation with one of our design experts today and take the first step toward your
                dream space.</p>
            <a href="tel:+916361661047" class="btn">Get Started</a>
        </div>
    </section>
    <?php include('partials/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/index.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.getElementById('header');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const navbar = document.getElementById('navbar');
            const navLinks = navbar.getElementsByTagName('a');
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            // Handle scroll effect
            let lastScroll = 0;
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                if (currentScroll > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                lastScroll = currentScroll;
            });

            // Mobile menu toggle
            mobileMenuBtn.addEventListener('click', () => {
                navbar.classList.toggle('active');
                document.body.classList.toggle('no-scroll');
                mobileMenuBtn.innerHTML = navbar.classList.contains('active')
                    ? '<i class="fas fa-times"></i>'
                    : '<i class="fas fa-bars"></i>';
            });

            // Handle dropdown menus on mobile
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', (e) => {
                    if (window.innerWidth <= 900) {
                        e.preventDefault();
                        const parent = toggle.parentElement;

                        // Close other open dropdowns
                        document.querySelectorAll('.has-dropdown').forEach(item => {
                            if (item !== parent && item.classList.contains('active')) {
                                item.classList.remove('active');
                            }
                        });

                        // Toggle current dropdown
                        parent.classList.toggle('active');
                    }
                });
            });

            // // Close mobile menu when clicking outside
            // document.addEventListener('click', (e) => {
            //     if (navbar.classList.contains('active') &&
            //         !navbar.contains(e.target) &&
            //         !mobileMenuBtn.contains(e.target)) {
            //         navbar.classList.remove('active');
            //         document.body.classList.remove('no-scroll');
            //         mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';

            //         // Close all dropdowns
            //         document.querySelectorAll('.has-dropdown').forEach(item => {
            //             item.classList.remove('active');
            //         });
            //     }
            // });

            // Close mobile menu when clicking on a link (except dropdown toggles)
            Array.from(navLinks).forEach(link => {
                if (!link.classList.contains('dropdown-toggle')) {
                    link.addEventListener('click', () => {
                        if (navbar.classList.contains('active')) {
                            navbar.classList.remove('active');
                            document.body.classList.remove('no-scroll');
                            mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';

                            // Close all dropdowns
                            document.querySelectorAll('.has-dropdown').forEach(item => {
                                item.classList.remove('active');
                            });
                        }
                    });
                }
            });

            // Handle window resize
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    if (window.innerWidth > 900) {
                        // Reset mobile menu state
                        navbar.classList.remove('active');
                        document.body.classList.remove('no-scroll');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';

                        // Reset all dropdowns
                        document.querySelectorAll('.has-dropdown').forEach(item => {
                            item.classList.remove('active');
                        });
                    }
                }, 250);
            });
        });
    </script>
</body>

</html>