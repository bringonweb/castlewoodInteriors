<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund Policy - Castlewood Interiors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/policies.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body class="policy-page">
    <?php include('partials/header.php'); ?>

    <section class="policy-hero">
        <div class="container">
            <div class="policy-hero-content">
                <h1>Refund Policy</h1>
                <!-- <p>Last updated: June 24, 2023</p> -->
            </div>
        </div>
    </section>

    <div class="container">
        <div class="policy-content">
            <div class="policy-section">
                <h2>1. General Refund Policy</h2>
                <p>At Castlewood Interiors, we strive to provide exceptional service and complete satisfaction with our
                    interior design services. Due to the custom nature of our work, we have established the following
                    refund policy:</p>

                <div class="note-box">
                    <p>All design fees are non-refundable once work has begun on your project. However, we will do
                        everything possible to ensure your complete satisfaction with our services.</p>
                </div>
            </div>

            <div class="policy-section">
                <h2>2. Consultation Fees</h2>
                <h3>2.1 Initial Consultations</h3>
                <p>Initial consultation fees are non-refundable but may be applied to future services if you choose to
                    work with us within 60 days of the consultation.</p>

                <h3>2.2 Cancellation</h3>
                <p>If you need to cancel or reschedule your consultation, we require at least 48 hours notice.
                    Cancellations with less than 48 hours notice may result in forfeiture of your consultation fee.</p>
            </div>

            <div class="policy-section">
                <h2>3. Design Services</h2>
                <h3>3.1 Deposits</h3>
                <p>A 50% deposit is required to begin design work. This deposit is non-refundable once we have begun
                    work on your project.</p>

                <h3>3.2 Project Cancellation</h3>
                <p>If you choose to cancel your project after work has begun but before completion:</p>
                <ul>
                    <li>You will be responsible for payment of all work completed up to the cancellation date</li>
                    <li>Any unused portion of your deposit may be applied to future services within one year</li>
                    <li>No refunds will be issued for completed work</li>
                </ul>
            </div>

            <div class="policy-section">
                <h2>4. Product Purchases</h2>
                <h3>4.1 Custom Orders</h3>
                <p>All custom furniture, window treatments, and other made-to-order items are non-refundable and
                    non-returnable once the order has been placed with the manufacturer.</p>

                <h3>4.2 Stock Items</h3>
                <p>Stock items may be returned within 14 days of receipt, subject to a 20% restocking fee. Items must be
                    in original condition and packaging.</p>

                <h3>4.3 Damaged Items</h3>
                <p>If your item arrives damaged, please contact us immediately. We will arrange for inspection and
                    replacement of damaged goods at no additional cost to you.</p>
            </div>

            <div class="policy-section">
                <h2>5. Satisfaction Guarantee</h2>
                <p>We stand behind our work and want you to be completely satisfied. If you're not happy with any aspect
                    of our service:</p>
                <ul>
                    <li>We will work diligently to address your concerns and make necessary adjustments</li>
                    <li>If we're unable to resolve the issue to your satisfaction, we may offer a partial credit toward
                        future services</li>
                </ul>
            </div>

            <div class="policy-section">
                <h2>6. How to Request a Refund</h2>
                <p>To request a refund for eligible services or products:</p>
                <ul>
                    <li>Email us at refunds@castlewoodinteriors.com within 7 days of service completion or product
                        receipt</li>
                    <li>Include your name, project details, and reason for refund request</li>
                    <li>We will review your request and respond within 5 business days</li>
                </ul>
            </div>

            <!-- <div class="last-updated">
                <p>This Refund Policy was last updated on June 24, 2023</p>
            </div> -->
        </div>
    </div>

    <?php include('partials/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/policies.js"></script>
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

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (navbar.classList.contains('active') &&
                    !navbar.contains(e.target) &&
                    !mobileMenuBtn.contains(e.target)) {
                    navbar.classList.remove('active');
                    document.body.classList.remove('no-scroll');
                    mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';

                    // Close all dropdowns
                    document.querySelectorAll('.has-dropdown').forEach(item => {
                        item.classList.remove('active');
                    });
                }
            });

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