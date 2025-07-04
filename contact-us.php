<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Castlewood Interiors</title>
    <link rel="icon" type="image/png" href="assests/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <?php include('partials/header.php'); ?>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you. Whether you have a question about our services, pricing, or anything
                    else, our team is ready to answer all your questions.</p>
                <a href="tel:+916361661047" class="btn">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Contact Main Section -->
    <section class="contact-main">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info" id="contact-info">
                    <h3>Contact Information</h3>
                    <ul class="contact-details">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Our Office</h4>
                                <p>A-411, 17th Cross Rd, Begur, Bengaluru, Karnataka 560068</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h4>Phone Number</h4>
                                <p>+91 63616 61047</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email Address</h4>
                                <p>info@castlewoodinteriors.com</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Working Hours</h4>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 10:00 AM - 4:00 PM</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="contact-form" id="contact-form">
                    <h3>Send Us a Message</h3>
                    <form action="send_contact.php" method="POST">
                        <div class="form-group">
                            <label for="contact-name">Your Name *</label>
                            <input type="text" id="contact-name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Your Email *</label>
                            <input type="email" id="contact-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-phone">Your Phone *</label>
                            <input type="tel" id="contact-phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-service">Service Interested In</label>
                            <select id="contact-service" name="service">
                                <option value="">Select a service</option>
                                <option value="residential">Residential Design</option>
                                <option value="commercial">Commercial Design</option>
                                <option value="wardrobes">Wardrobes</option>
                                <option value="kitchens">Modular Kitchens</option>
                                <option value="furniture">Sofa & Decor</option>
                                <option value="tv-units">TV Units</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Your Message *</label>
                            <textarea id="contact-message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="form-submit">SEND MESSAGE</button>
                    </form>
                </div>
            </div>

            <div class="contact-map" id="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.963163735351!2d77.62205037593453!3d12.86883228743701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6b8e1e64f4c3%3A0x6c3d37f1c2a72779!2sA-411%2C%2017th%20Cross%20Rd%2C%20Begur%2C%20Bengaluru%2C%20Karnataka%20560068!5e0!3m2!1sen!2sin!4v1720077612345!5m2!1sen!2sin"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta">
        <div class="container">
            <h2>Ready to Transform Your Space?</h2>
            <p>Our interior design experts are ready to bring your vision to life. Contact us today to schedule a
                consultation.</p>
            <a href="tel:+916361661047" class="btn">Book a Consultation</a>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/contact.js"></script>
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