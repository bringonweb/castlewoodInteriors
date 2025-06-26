<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - Castlewood Interiors</title>
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
                <h1>Terms & Conditions</h1>
                <!-- <p>Last updated: June 24, 2023</p> -->
            </div>
        </div>
    </section>

    <div class="container">
        <div class="policy-content">
            <div class="policy-section">
                <h2>1. Introduction</h2>
                <p>Welcome to Castlewood Interiors ("Company", "we", "our", "us"). These Terms of Service ("Terms",
                    "Terms of Service") govern your use of our website located at castlewoodinteriors.com (together or
                    individually "Service") operated by Castlewood Interiors.</p>
                <p>By accessing or using the Service, you agree to be bound by these Terms. If you disagree with any
                    part of the terms, then you may not access the Service.</p>
            </div>

            <div class="policy-section">
                <h2>2. Services</h2>
                <p>Castlewood Interiors provides interior design services including but not limited to:</p>
                <ul>
                    <li>Residential interior design</li>
                    <li>Commercial interior design</li>
                    <li>Space planning and consultation</li>
                    <li>Custom furniture design</li>
                    <li>Project management</li>
                </ul>
            </div>

            <div class="policy-section">
                <h2>3. Consultations & Appointments</h2>
                <h3>3.1 Scheduling</h3>
                <p>All design consultations must be scheduled in advance. We require at least 48 hours notice for
                    cancellation or rescheduling of appointments.</p>

                <h3>3.2 Fees</h3>
                <p>Initial consultations may be subject to a fee which will be applied toward any future services should
                    you choose to work with us.</p>
            </div>

            <div class="policy-section">
                <h2>4. Payments & Pricing</h2>
                <h3>4.1 Pricing</h3>
                <p>All prices quoted are estimates until a final design plan is approved. Final pricing may vary based
                    on actual materials selected and project scope.</p>

                <h3>4.2 Payment Schedule</h3>
                <p>A 50% deposit is required to begin work, with the balance due upon project completion. For larger
                    projects, we may establish a payment schedule with milestones.</p>
            </div>

            <div class="policy-section">
                <h2>5. Intellectual Property</h2>
                <p>All designs, drawings, and specifications created by Castlewood Interiors remain our intellectual
                    property until full payment is received. Upon final payment, the client receives a license to use
                    the designs for the specified project only.</p>
            </div>

            <div class="policy-section">
                <h2>6. Limitation of Liability</h2>
                <p>Castlewood Interiors shall not be liable for any indirect, incidental, special, consequential or
                    punitive damages, including without limitation, loss of profits, data, use, goodwill, or other
                    intangible losses.</p>
            </div>

            <div class="policy-section">
                <h2>7. Changes to Terms</h2>
                <p>We reserve the right to modify these terms at any time. We will notify you of any changes by posting
                    the new Terms on this page.</p>
            </div>

            <div class="last-updated">
                <!-- <p>These Terms were last updated on June 24, 2023</p> -->
            </div>
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