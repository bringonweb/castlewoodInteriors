<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assests/favicon.png">
    <title>Privacy Policy - Castlewood Interiors</title>
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
                <h1>Privacy Policy</h1>
                <!-- <p>Last updated: June 24, 2023</p> -->
            </div>
        </div>
    </section>

    <div class="container">
        <div class="policy-content">
            <div class="policy-section">
                <h2>1. Introduction</h2>
                <p>Castlewood Interiors operates the castlewoodinteriors.com website. This page informs you of our
                    policies regarding the collection, use, and disclosure of
                    personal data when you use our Service and the choices you have associated with that data.</p>
                <p>We use your data to provide and improve the Service. By using the Service, you agree to the
                    collection and use of information in accordance with this policy.</p>
            </div>

            <div class="policy-section">
                <h2>2. Information Collection</h2>
                <h3>2.1 Personal Data</h3>
                <p>While using our Service, we may ask you to provide us with certain personally identifiable
                    information that can be used to contact or identify you ("Personal Data"). Personally identifiable
                    information may include, but is not limited to:</p>
                <ul>
                    <li>Email address</li>
                    <li>First name and last name</li>
                    <li>Phone number</li>
                    <li>Address, State, Province, ZIP/Postal code, City</li>
                    <li>Cookies and Usage Data</li>
                </ul>

                <h3>2.2 Usage Data</h3>
                <p>We may also collect information how the Service is accessed and used ("Usage Data"). This Usage Data
                    may include information such as your computer's Internet Protocol address (e.g. IP address), browser
                    type, browser version, the pages of our Service that you visit, the time and date of your visit, the
                    time spent on those pages, unique device identifiers and other diagnostic data.</p>
            </div>

            <div class="policy-section">
                <h2>3. Use of Data</h2>
                <p>Castlewood Interiors uses the collected data for various purposes:</p>
                <ul>
                    <li>To provide and maintain our Service</li>
                    <li>To notify you about changes to our Service</li>
                    <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
                    <li>To provide customer support</li>
                    <li>To gather analysis or valuable information so that we can improve our Service</li>
                    <li>To monitor the usage of our Service</li>
                    <li>To detect, prevent and address technical issues</li>
                </ul>
            </div>

            <div class="policy-section">
                <h2>4. Data Protection</h2>
                <p>The security of your data is important to us, but remember that no method of transmission over the
                    Internet, or method of electronic storage is 100% secure. While we strive to use commercially
                    acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
            </div>

            <div class="policy-section">
                <h2>5. Cookies</h2>
                <p>We use cookies and similar tracking technologies to track the activity on our Service and hold
                    certain information.</p>
                <p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.
                    However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
            </div>

            <div class="policy-section">
                <h2>6. Service Providers</h2>
                <p>We may employ third party companies and individuals to facilitate our Service ("Service Providers"),
                    to provide the Service on our behalf, to perform Service-related services or to assist us in
                    analyzing how our Service is used.</p>
                <p>These third parties have access to your Personal Data only to perform these tasks on our behalf and
                    are obligated not to disclose or use it for any other purpose.</p>
            </div>

            <div class="policy-section">
                <h2>7. Changes to This Policy</h2>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the
                    new Privacy Policy on this page.</p>
                <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy
                    Policy are effective when they are posted on this page.</p>
            </div>

            <div class="last-updated">
                <!-- <p>This Privacy Policy was last updated on June 24, 2023</p> -->
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