<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a href="contact.php" class="btn">Get Free Consultation</a>
            </div>
        </div>
    </section>

    <!-- Service Categories -->
    <section class="service-categories">
        <div class="container">
            <div class="section-title">
                <h2>Our Interior Design Services</h2>
                <p>Explore our comprehensive range of interior design services tailored for residential and commercial
                    spaces</p>
            </div>

            <div class="category-tabs">
                <button class="category-tab active" data-category="all">All Services</button>
                <button class="category-tab" data-category="residential">Residential</button>
                <button class="category-tab" data-category="commercial">Commercial</button>
                <button class="category-tab" data-category="consultation">Consultation</button>
            </div>

            <div class="services-grid">
                <!-- Residential Services -->
                <div class="service-card" data-category="residential">
                    <div class="service-img">
                        <!-- <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80"
                            alt="Full Home Design" loading="lazy"> -->
                        <div class="service-badge">Residential</div>
                    </div>
                    <div class="service-content">
                        <h3>Full Home Design</h3>
                        <p>Complete interior design solutions for your entire home, creating cohesive and beautiful
                            living spaces.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Space planning & layout</li>
                            <li><i class="fas fa-check"></i> Material & finish selection</li>
                            <li><i class="fas fa-check"></i> Custom furniture design</li>
                            <li><i class="fas fa-check"></i> Lighting design</li>
                        </ul>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="service-card" data-category="residential">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1558&q=80"
                            alt="Kitchen Design" loading="lazy">
                        <div class="service-badge">Residential</div>
                    </div>
                    <div class="service-content">
                        <h3>Kitchen Design</h3>
                        <p>Beautiful and functional kitchen designs that combine aesthetics with practicality.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Modular kitchen planning</li>
                            <li><i class="fas fa-check"></i> Cabinet design & material selection</li>
                            <li><i class="fas fa-check"></i> Countertop solutions</li>
                            <li><i class="fas fa-check"></i> Appliance integration</li>
                        </ul>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <!-- Commercial Services -->
                <div class="service-card" data-category="commercial">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80"
                            alt="Office Design" loading="lazy">
                        <div class="service-badge">Commercial</div>
                    </div>
                    <div class="service-content">
                        <h3>Office Design</h3>
                        <p>Productive and inspiring work environments that reflect your company's brand and culture.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Workspace planning</li>
                            <li><i class="fas fa-check"></i> Reception & meeting areas</li>
                            <li><i class="fas fa-check"></i> Acoustics & lighting</li>
                            <li><i class="fas fa-check"></i> Brand integration</li>
                        </ul>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="service-card" data-category="commercial">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Retail Design" loading="lazy">
                        <div class="service-badge">Commercial</div>
                    </div>
                    <div class="service-content">
                        <h3>Retail Design</h3>
                        <p>Captivating retail spaces that enhance customer experience and drive sales.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Store layout & flow</li>
                            <li><i class="fas fa-check"></i> Display & fixture design</li>
                            <li><i class="fas fa-check"></i> Lighting solutions</li>
                            <li><i class="fas fa-check"></i> Brand storytelling</li>
                        </ul>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <!-- Consultation Services -->
                <div class="service-card" data-category="consultation">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Design Consultation" loading="lazy">
                        <div class="service-badge">Consultation</div>
                    </div>
                    <div class="service-content">
                        <h3>Design Consultation</h3>
                        <p>Expert advice to help you make informed decisions about your interior design project.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Personalized design advice</li>
                            <li><i class="fas fa-check"></i> Space evaluation</li>
                            <li><i class="fas fa-check"></i> Color & material guidance</li>
                            <li><i class="fas fa-check"></i> Budget planning</li>
                        </ul>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="service-card" data-category="consultation">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1583845112203-2932990235b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80"
                            alt="Virtual Design" loading="lazy">
                        <div class="service-badge">Consultation</div>
                    </div>
                    <div class="service-content">
                        <h3>Virtual Design</h3>
                        <p>Professional interior design services delivered remotely for your convenience.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Online consultations</li>
                            <li><i class="fas fa-check"></i> Digital mood boards</li>
                            <li><i class="fas fa-check"></i> 3D renderings</li>
                            <li><i class="fas fa-check"></i> Shopping lists</li>
                        </ul>
                        <a href="#" class="btn btn-outline">Learn More</a>
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
    <section class="service-packages">
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
                        <a href="contact.php" class="btn">Get Started</a>
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
                        <a href="contact.php" class="btn">Get Started</a>
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
                        <a href="contact.php" class="btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            <a href="contact.php" class="btn">Book a Consultation</a>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/service.js"></script>
    <script src="js/header.js"></script>
</body>

</html>