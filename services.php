<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assests/favicon.png">
    <title>Our Services - Castlewood Interiors | Premium Interior Design Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/service.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body class="service-page">
    <?php include('partials/header.php'); ?>

    <!-- Service Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Our Premium Interior Services</h1>
                <p>Transform your space with our comprehensive interior design solutions tailored to your unique style
                    and needs. From concept to completion, we bring your vision to life.</p>
                <a href="contact-us.php" class="btn">Get Free Consultation</a>
            </div>
        </div>
    </section>

    <!-- Service Categories -->
    <section class="service-categories">
        <div class="container">
            <div class="section-title">
                <h2>Our Interior Design Services</h2>
                <p>Explore our comprehensive range of interior design services tailored for Bedroom and livingrooms
                    spaces</p>
            </div>

            <div class="category-tabs">
                <button class="category-tab active" data-category="all">All Services</button>
                <button class="category-tab" data-category="residential">Bedroom</button>
                <button class="category-tab" data-category="commercial">Living room</button>
                <button class="category-tab" data-category="consultation">Kitchen</button>
            </div>

            <div class="services-grid">
                <!-- Residential Services -->
                <div class="service-card" data-category="residential">
                    <div class="service-img">
                        <img src="assests/Modals/Kids&MasterBedroom/6.webp" alt="Full Home Design" loading="lazy">
                        <div class="service-badge">Bedroom</div>
                    </div>
                    <div class="service-content">
                        <h3>Luxury Bedroom Design</h3>
                        <p>Redefine comfort with elegant and personalized bedroom interiors.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Custom bed & wardrobes</li>
                            <li><i class="fas fa-check"></i> Accent walls & lighting</li>
                            <li><i class="fas fa-check"></i> Premium finishes</li>
                            <li><i class="fas fa-check"></i> Personalized decor</li>
                        </ul>
                        <a href="tel:+916361661047" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="service-card" data-category="residential">
                    <div class="service-img">
                        <img src="assests/Modals/Kids&MasterBedroom/4.webp" alt="Kitchen Design" loading="lazy">
                        <div class="service-badge">Bedroom</div>
                    </div>
                    <div class="service-content">
                        <h3>Smart Bedroom Setup</h3>
                        <p>Stylish, space-efficient designs built for modern living.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Modular storage</li>
                            <li><i class="fas fa-check"></i> Space-saving furniture</li>
                            <li><i class="fas fa-check"></i> Sliding wardrobes</li>
                            <li><i class="fas fa-check"></i> Calming color schemes</li>
                        </ul>
                        <a href="tel:+916361661047" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <!-- Commercial Services -->
                <div class="service-card" data-category="commercial">
                    <div class="service-img">
                        <img src="assests/index/h1.webp" alt="Office Design" loading="lazy">
                        <div class="service-badge">Living room</div>
                    </div>
                    <div class="service-content">
                        <h3>Elegant Living Room</h3>
                        <p>Create stylish, welcoming spaces that balance comfort and class.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Layout & seating design</li>
                            <li><i class="fas fa-check"></i> Accent walls & lighting</li>
                            <li><i class="fas fa-check"></i> Custom TV unit & storage</li>
                            <li><i class="fas fa-check"></i> Cozy ambience setup</li>
                        </ul>
                        <a href="tel:+916361661047" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="service-card" data-category="commercial">
                    <div class="service-img">
                        <img src="assests/index/s3.webp" alt="Retail Design" loading="lazy">
                        <div class="service-badge">Living room</div>
                    </div>
                    <div class="service-content">
                        <h3>Modern Living Space</h3>
                        <p>Smart, functional designs that elevate everyday living.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Space-saving furniture</li>
                            <li><i class="fas fa-check"></i> Modular entertainment setup</li>
                            <li><i class="fas fa-check"></i> Layered lighting</li>
                            <li><i class="fas fa-check"></i> Functional flow planning</li>
                        </ul>
                        <a href="tel:+916361661047" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <!-- Consultation Services -->
                <div class="service-card" data-category="consultation">
                    <div class="service-img">
                        <img src="assests/Modals/Modular_Kitchen_Designs/4.webp" alt="Design Consultation"
                            loading="lazy">
                        <div class="service-badge">Kitchen</div>
                    </div>
                    <div class="service-content">
                        <h3>Modular Kitchen</h3>
                        <p>Stylish, functional kitchen layouts tailored to your lifestyle.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Smart storage units</li>
                            <li><i class="fas fa-check"></i> Sleek countertop finishes</li>
                            <li><i class="fas fa-check"></i> Modern cabinet designs</li>
                            <li><i class="fas fa-check"></i> Space-optimized layout</li>
                        </ul>
                        <a href="tel:+916361661047" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="service-card" data-category="consultation">
                    <div class="service-img">
                        <img src="assests/Modals/Modular_Kitchen_Designs/6.webp" alt="Virtual Design" loading="lazy">
                        <div class="service-badge">Kitchen</div>
                    </div>
                    <div class="service-content">
                        <h3>Premium Kitchen Setup</h3>
                        <p>Elegant and efficient kitchen interiors using top-grade materials.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Customized layout planning</li>
                            <li><i class="fas fa-check"></i> Luxury fittings & accessories</li>
                            <li><i class="fas fa-check"></i> Designer backsplash options</li>
                            <li><i class="fas fa-check"></i> Soft-close drawers & units</li>
                        </ul>
                        <a href="tel:+916361661047" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Service Process -->
    <section class="service-process">
        <div class="container">
            <div class="section-title">
                <h2>Our Design Process</h2>
                <p>We follow a structured approach to ensure every project meets our high standards</p>
            </div>

            <div class="process-steps">
                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Initial Consultation</h3>
                    <p>We begin by understanding your vision, needs, and budget through detailed discussions.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3>Concept Development</h3>
                    <p>Our designers create mood boards and sketches to bring your vision to life.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-swatchbook"></i>
                    </div>
                    <h3>Material Selection</h3>
                    <p>We guide you through selecting high-quality materials that match your style and budget.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3>Implementation</h3>
                    <p>Our skilled craftsmen execute the design with precision and attention to detail.</p>
                </div>

                <div class="process-step">
                    <div class="process-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Final Reveal</h3>
                    <p>We present the completed space with finishing touches and styling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Packages -->
    <!-- <section class="service-packages">
        <div class="container">
            <div class="section-title">
                <h2>Our Service Packages</h2>
                <p>Flexible solutions tailored to different needs and budgets</p>
            </div>

            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-header">
                        <h3>Basic</h3>
                        <div class="price">₹49,999<span>/project</span></div>
                        <div class="duration">For small scale projects</div>
                    </div>
                    <div class="package-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Initial consultation</li>
                            <li><i class="fas fa-check"></i> Space planning</li>
                            <li><i class="fas fa-check"></i> Color scheme selection</li>
                            <li><i class="fas fa-check"></i> Furniture layout</li>
                            <li><i class="fas fa-check"></i> Basic 2D renderings</li>
                            <li class="unavailable"><i class="fas fa-times"></i> Material selection</li>
                            <li class="unavailable"><i class="fas fa-times"></i> 3D visualizations</li>
                            <li class="unavailable"><i class="fas fa-times"></i> Project management</li>
                        </ul>
                    </div>
                    <div class="package-footer">
                        <a href="tel:+916361661047" class="btn">Get Started</a>
                    </div>
                </div>

                <div class="package-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="package-header">
                        <h3>Standard</h3>
                        <div class="price">₹99,999<span>/project</span></div>
                        <div class="duration">For medium scale projects</div>
                    </div>
                    <div class="package-features">
                        <ul>
                            <li><i class="fas fa-check"></i> All Basic features</li>
                            <li><i class="fas fa-check"></i> Material selection</li>
                            <li><i class="fas fa-check"></i> Lighting design</li>
                            <li><i class="fas fa-check"></i> 3D visualizations</li>
                            <li><i class="fas fa-check"></i> Shopping assistance</li>
                            <li><i class="fas fa-check"></i> Two revisions</li>
                            <li class="unavailable"><i class="fas fa-times"></i> Full project management</li>
                            <li class="unavailable"><i class="fas fa-times"></i> Custom furniture design</li>
                        </ul>
                    </div>
                    <div class="package-footer">
                        <a href="tel:+916361661047" class="btn">Get Started</a>
                    </div>
                </div>

                <div class="package-card">
                    <div class="package-header">
                        <h3>Premium</h3>
                        <div class="price">₹1,99,999<span>/project</span></div>
                        <div class="duration">For large scale projects</div>
                    </div>
                    <div class="package-features">
                        <ul>
                            <li><i class="fas fa-check"></i> All Standard features</li>
                            <li><i class="fas fa-check"></i> Full project management</li>
                            <li><i class="fas fa-check"></i> Custom furniture design</li>
                            <li><i class="fas fa-check"></i> Unlimited revisions</li>
                            <li><i class="fas fa-check"></i> Site supervision</li>
                            <li><i class="fas fa-check"></i> Vendor coordination</li>
                            <li><i class="fas fa-check"></i> Final styling</li>
                            <li><i class="fas fa-check"></i> 1 year support</li>
                        </ul>
                    </div>
                    <div class="package-footer">
                        <a href="tel:+916361661047" class="btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Add this section to your services.php page where you want the package to appear -->
    <div class="service-package-section">
        <div class="package-container">
            <div class="package-header">
                <h3>Exclusive Service Package</h3>
                <div class="package-price">₹3,99,999 <span>Only</span></div>
            </div>
            <div class="package-features">
                <ul>
                    <li><i class="fas fa-check-circle"></i> Complete Interior Design Solution</li>
                    <li><i class="fas fa-check-circle"></i> Living Room, Bedroom & Kitchen Design</li>
                    <li><i class="fas fa-check-circle"></i> Premium Quality Materials</li>
                    <li><i class="fas fa-check-circle"></i> End-to-End Project Management</li>
                    <li><i class="fas fa-check-circle"></i> 3D Visualization & Layout Plans</li>
                    <li><i class="fas fa-check-circle"></i> 12 Months Post-Completion Support</li>
                </ul>
            </div>
            <div class="package-cta">
                <a href="contact-us.php" class="package-button">Get a Quote</a>
            </div>
        </div>
    </div>

    <style>
        /* Service Package Specific Styles - Won't affect other pages */
        .service-package-section {
            padding: 40px 0;
            background-color: #f9f9f9;
            margin: 30px 0;
            font-family: 'Poppins', sans-serif;
        }

        .service-package-section .package-container {
            max-width: 850px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e1e1e1;
        }

        .service-package-section .package-header {
            background: #a88802;
            color: white;
            padding: 25px 30px;
            text-align: center;
        }

        .service-package-section .package-header h3 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
            color: #fff;
        }

        .service-package-section .package-price {
            font-size: 36px;
            font-weight: 700;
            margin: 10px 0 0;
            color: white;
        }

        .service-package-section .package-price span {
            display: block;
            font-size: 16px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 5px;
        }

        .service-package-section .package-features {
            padding: 30px;
        }

        .service-package-section .package-features ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-package-section .package-features li {
            padding: 10px 0;
            font-size: 16px;
            color: #333;
            border-bottom: 1px dashed #e1e1e1;
            display: flex;
            align-items: center;
        }

        .service-package-section .package-features li:last-child {
            border-bottom: none;
        }

        .service-package-section .package-features i {
            color: #a88802;
            margin-right: 10px;
            font-size: 18px;
        }

        .service-package-section .package-cta {
            padding: 0 30px 30px;
            text-align: center;
        }

        .service-package-section .package-button {
            display: inline-block;
            background: #a88802;
            color: white;
            padding: 12px 30px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #a88802;
        }

        .service-package-section .package-button:hover {
            background: transparent;
            color: #a88802;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .service-package-section {
                padding: 30px 15px;
            }

            .service-package-section .package-header {
                padding: 20px 15px;
            }

            .service-package-section .package-header h3 {
                font-size: 20px;
            }

            .service-package-section .package-price {
                font-size: 28px;
            }

            .service-package-section .package-features {
                padding: 20px 15px;
            }

            .service-package-section .package-features li {
                font-size: 15px;
            }
        }

        /* Make sure Font Awesome is included for icons */
    </style>

    <!-- Add this before </head> if not already present -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- FAQ Section -->
    <section class="service-faq">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our interior design services</p>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does an interior design project typically take?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>The timeline varies depending on the scope of the project. A single room redesign might
                                take 4-6 weeks, while a full home interior design project could take 3-6 months. During
                                our initial consultation, we'll provide a detailed timeline based on your specific
                                requirements.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What's included in your interior design service?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Our services typically include initial consultation, space planning, concept development,
                                material selection, furniture and decor specification, lighting design, and project
                                management. The exact inclusions depend on the package you choose. We offer different
                                service levels to suit various needs and budgets.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you work with a specific style or can you adapt to my preferences?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>We pride ourselves on being style-agnostic designers. While we have our own design
                                sensibilities, our primary goal is to create spaces that reflect your personality and
                                lifestyle. We'll work closely with you to understand your aesthetic preferences and
                                translate them into a beautiful, functional design.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you handle budgets for interior design projects?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>We begin each project with a detailed discussion about your budget. Our designers are
                                skilled at creating beautiful spaces at various price points. We'll provide transparent
                                cost estimates and help prioritize spending to maximize impact. Throughout the project,
                                we'll keep you informed about costs and help make adjustments if needed.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you work with existing furniture and decor?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Absolutely! We frequently incorporate clients' existing pieces into our designs. During
                                our initial consultation, we'll assess which items work well with your new design vision
                                and suggest creative ways to repurpose or refresh pieces you want to keep. This approach
                                often helps stretch your budget while maintaining sentimental value.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service CTA -->
    <section class="service-cta">
        <div class="container">
            <h2>Ready to Transform Your Space?</h2>
            <p>Our team of expert designers is ready to bring your vision to life. Schedule a free consultation today to
                discuss your project.</p>
            <a href="tel:+916361661047" class="btn">Book a Consultation</a>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/service.js"></script>
    <!-- <script src="js/header.js"></script> -->
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
                console.log(navbar.classList);
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