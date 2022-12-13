<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site where you can sell your car or buy the car you are looking for.">
    <meta name="keywords" content="auto, cars, buy, buy, sale, sell, dealership, 0km, new">
    <title> INFINITE AUTOMOTIVE </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./assets/img/logo/icon-shortcut.jpg">
    
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="./build/css/styles.css">
</head>
<body>
    <header>
        <section class="navbar"> <!-- navigation bar -->
            <div class="container-1600">
                <div>
                    <a class="logo" href="./index.php"> <!-- Logo -->
                        <img src="./assets/img/logo/carlogo.jpeg" alt="INFINITE AUTOMOTIVE">
                    </a>
    
                    <button id="hamburguer" class="hamburguer"></button>
                </div>
        
                <nav id="main-nav" class="main-nav"> <!-- Navigation -->
                    <ul>
						<li>
                            <a class="nav-link" href="./pages/Buy.php">Buy</a>
                        </li>
                        <li>
                            <a class="nav-link" href="./pages/about-us.php">About Us</a>
                        </li>
						<li>
                            <a class="nav-link" href="./pages/financing-info.php">Finance</a>
                        </li>
                        <li>
                            <a class="nav-link btn-login" href="./pages/sign-in.php">Log in</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="banner">
            <img class="banner-img" src="./assets/img/logo/icon-shortcut.jpg" width="50%"> <!-- banner image -->
            <div class="banner-content"> <!-- First part of the banner -->
                <h1>The <b>Best Platform</b> For <br>Sell ​​and Buy Cars</h1>
                <p>The best platform to sell or buy cars has arrived in Switzerland. <br>At Infinite Automotive we make it easy for you.</p>
                <a class="btn-Explore" href="#main">Explore</a>
            </div>
        </section>
    </header>

    <main id="main" class="main-content">
        <h2>What can you do here?</h2>
        <p>Everything related to the world of vehicles is found here</p>
        
        <section class="section-buy">
            <img data-aos="fade-left" data-aos-duration="1500" src="./assets/img/images/landing-page/buy.webp" alt="driving inside" width="50%">
            <div data-aos="fade-right" data-aos-duration="1500">
                <h3>Find the car of your <br><b>Dreams</b></h3>
                <a class="btn-buy" href="./pages/buy.php">buy</a> <!-- Buy button -->
            </div>
        </section>

        

        <h2>Information and Statistics of your Account</h2>
        <p>You can access your profile to see your information, sales, purchases, favourites and much more</p>

        <section class="section-contact section-profile">
            <img data-aos="fade-right" data-aos-duration="1500" src="./assets/img/images/landing-page/profile.svg" alt="contact image" width="50%">
            <div data-aos="fade-left" data-aos-duration="1500">
                <h3>Visit your <b>Profile</b> to see your <br> information and statistics</h3>
                <a class="btn-contact" href="./pages/user.php">My Profile</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <hr>
        <div class="footer-bar"> <!-- Bar Footer -->
            <h3>DESIGNED FOR LIVING ENGINEERED TO LAST</h3>
            <div class="social-media"> <!-- Networks Footer -->
                <ul>
                    <li> <!-- Instagram -->
                        <a class="social-media-item" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li> <!-- Facebook -->
                        <a class="social-media-item" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li> <!-- Whatsapp -->
                        <a class="social-media-item" href="#" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-sections"> <!-- Sections Footer -->
            <section> <!-- Categories -->
                <h4>Categories</h4>
                <ul>
                    <li><a class="social-media-item" href="./pages/buy.php">Buy</a></li>
                </ul>
            </section>

            <section class="section-footer-contacto"> <!-- contact us -->
                <h4>contact us</h4>
                <ul>
                    <li>
                        <a class="social-media-item" href="#"><i class="fa fa-envelope">info@infiniteautomotive.com</i></a>
                    </li>
                    <li>
                        <a class="social-media-item" href="#"><i class="fa fa-phone">012000000</i></a>
                    </li>
                </ul>
            </section>
        </div>
        <h3>© 2022 Infinite Automotive, Inc.</h3>
        
    </footer>


    <!-- AOS (Animate On Scroll) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>