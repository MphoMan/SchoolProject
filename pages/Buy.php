<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site where you can sell your car or buy the car you are looking for.">
    <meta name="keywords" content="auto, cars, buy, buy, sale, sell, dealership, 0km, new">
    <title> INFINITE AUTOMOTIVE - Buy </title>
    <link rel="shortcut icon" href="../assets/img/logo/icon-shortcut1.jpg">
   
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="../build/css/styles.css">
</head>
<body>
    <header>
        <section class="navbar"> <!-- navigation bar -->
            <div class="container-1600">
                <div>
                    <a class="logo" href="../index.html"> <!-- Logo -->
                        <img src="../assets/img/logo/carlogo.jpeg" alt="INFINITE AUTOMOTIVE">
                    </a>
    
                    <button id="hamburguer" class="hamburguer"></button>
                </div>
        
                <nav id="main-nav" class="main-nav"> <!-- Navigation -->
                    <ul>
                        <li>
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li>
                            <a class="nav-link" href="../pages/about-us.php">About US</a>
                        </li>
						<li>
                            <a class="nav-link" href="../pages/financing-info.php">Finance</a>
                        </li>
                        <li>
                            <a class="nav-link btn-login" href="../pages/sign-in.php">Log in</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="banner-buy-home">
            <h1>Find the car<br><b>of your dreams</b></h1>
            <form class="search-form"> <!-- Search bar -->
                <input class="search-bar" type="search" placeholder="What are you looking for?">
                <button class="search-btn"><img src="../assets/img/icons/magnifying-glass.png" alt="search icon" width="25"></button>
            </form>
        </section>
    </header>






    <main class="main-dealership">
        <section>
            <h2>Our dealers</h2>
            <div class="grid-dealerships">	
                <div class="card-dealership"> <!-- Dealer Card --> 
                    <img src="../assets/img/images/dealership/nissan.webp" alt="nissan" width="20%">
                    <div class="brand-dealership">
                        <img src="../assets/img/images/buy-home/nissan-logo.webp" alt="logo nissan" width="50">
                        <div>
                            <p>Dealership</p>
                            <p><b>Nissan</b></p>
                        </div>
                    </div>
                    <a class="btn-see-cars-dealership" href="../pages/vw-cars.php">See Cars</a>
                    <a class="btn-contact" href="#modal-contact">Contact</a>
                </div>
                <div class="card-dealership">
                    <img src="../assets/img/images/dealership/renault.webp" alt="renault" width="20%">
                    <div class="brand-dealership">
                        <img src="../assets/img/images/buy-home/renault-logo.webp" alt="logo renault" width="50">
                        <div>
                            <p>Dealership</p>
                            <p><b>Renault</b></p>
                        </div>
                    </div>
                    <a class="btn-see-cars-dealership" href="../pages/vw-cars.php">See Cars</a>
                    <a class="btn-contact" href="#modal-contact">Contact</a>
                </div>
                <div class="card-dealership"> 
                    <img src="../assets/img/images/dealership/bmw.webp" alt="dealership bmw" width="20%">
                    <div class="brand-dealership">
                        <img src="../assets/img/images/buy-home/logo-bmw.webp" alt="logo bmw" width="50">
                        <div>
                            <p>Dealership</p>
                            <p><b>BMW</b></p>
                        </div>
                    </div>
                    <a class="btn-see-cars-dealership" href="../pages/vw-cars.php">See Cars</a>
                    <a class="btn-contact" href="#modal-contact">Contact</a>
                </div>
                <div class="card-dealership"> 
                    <img src="../assets/img/images/dealership/vw.jpeg" alt="dealership volkswagen" width="20%">
                    <div class="brand-dealership">
                        <img src="../assets/img/images/buy-home/volkswagen-logo.webp" alt="logo volkswagen" width="50">
                        <div>
                            <p>Dealership</p>
                            <p><b>Volkswagen</b></p>
                        </div>
                    </div>
                    <a class="btn-see-cars-dealership" href="../pages/vw-cars.php">See Cars</a>
                    <a class="btn-contact" href="#modal-contact">Contact</a>
                </div>
               
            </div>



            <!-- Modal contact -->
            <section id="modal-contact" class="modal-contact">
                <div class="modal-contact-container">
                    <a href="#body" class="close-x"><i class="fas fa-times"></i></a>
                    <img src="../assets/img/images/dealership/vw.jpeg" alt="dealership Volkswagen">
                    <div class="modal-contact-contact">
                        <header class="modal-contact-header">
                            <div class="modal-go-brand">
							<a href="#">&laquo; Back</a>
                                <img src="../assets/img/images/buy-home/volkswagen-logo.webp" alt="Logo Volkswagen">
                                <h3>dealership <strong>Volkswagen</strong></h3>
                            </div>
                        </header>
                        <section class="modal-contact-data">
                            <h3>Contact</h3>
                            <form class="modal-contact-form">
                                <div class="sign-up-field">
                                    <h3>Full name</h3>
                                    <input type="text" name="client-name" placeholder="Enter your name" autocomplete="off" required>
                                </div>
                                <div class="sign-up-field">
                                    <h3>Email</h3>
                                    <input type="email" name="client-email" placeholder="Ingresa un email" required>
                                </div>
                                <div class="sign-up-field">
                                    <h3 class="input-heading">Cell phone number</h3>
                                    <input type="tel" name="client-phone" placeholder="Enter your cell phone number" required>
                                </div>
                                <div class="sign-up-field">
                                    <h3>Vehicle of Interest</h3>
                                    <input type="text" name="wanted-vehicle" placeholder="Enter the name" autocomplete="off" required>
                                </div>
                                <input class="btn-send-query" type="submit" value="Send consult">
                            </form>
                        </section>
                    </div>
                </div>
            </section>
        </section>

        
    </main>







    <main class="main-buy-home">
        

        <h2>Vehicles that might interest you</h2>
        <section class="car-types-section">
            <div class="car-types">
                <a href="../pages/vw-cars.php" class="vehicle-card vehicle-card-hatchbacks" data-aos="zoom-in"> <!-- Vehicle Card -->
                    <img src="../assets/img/images/buy-home/vw-golf-hatchback.webp" alt="car image" width="75%">
                    <p>Hatchbacks</p>
                </a>
                <a href="./buy.php" class="vehicle-card vehicle-card-sedanes" data-aos="zoom-in"> <!-- Vehicle Card -->
                    <img src="../assets/img/images/buy-home/bmw-sedan.webp" alt="car image" width="75%">
                    <p>Sedans</p>
                </a>
                <a href="./buy.php" class="vehicle-card vehicle-card-suvs" data-aos="zoom-in"> <!-- Vehicle Card-->
                    <img src="../assets/img/images/buy-home/mb-suv.webp" alt="car image" width="75%">
                    <p>SUVS</p>
                </a>
                <a href="./buy.php" class="vehicle-card vehicle-card-trucks" data-aos="zoom-in"> <!-- Vehicle Card -->
                    <img src="../assets/img/images/buy-home/raptor-camioneta.webp" alt="car image" width="75%">
                    <p>Trucks</p>
                </a>
            </div>
        </section>
        <a class="btn-ver-autos" href="./cars.php">See All Cars</a>
    </main>
	
	
	<section class="contact-info"> 
            <div class="info-conc">    
                <div class="container-1200">
                    <h3>You'll <b>Buy a car</b> by dealership?</h3>
                    <p>The dealerships have different <b>ways to finance and take your car</b>, inform yourself before making a purchase</p>
                </div>
                <a href="./financing-info.php" data-aos="fade-up">More information</a>
            </div>
        </section>

   <footer class="footer">
        <hr>
        <div class="footer-bar"> <!-- Bar Footer -->
            <h3>DESIGNED FOR LIVING ENGINEERED TO LAST</h3>
            <div class="social-media"> <!-- Networks Footer -->
                <ul>
                    <li> <!-- Instagram -->
                        <a class="social-media-item" href="#" target="_blank"><img src="../assets/img/icons/instagram.png" alt="instagram" width="40" height="40"></a>
                    </li>
                    <li> <!-- Facebook -->
                        <a class="social-media-item" href="#" target="_blank"><img src="../assets/img/icons/facebook.png" alt="facebook" width="40" height="40"></a>
                    </li>
                    <li> <!-- Whatsapp -->
                        <a class="social-media-item" href="#" target="_blank"><img src="../assets/img/icons/whatsapp.png" alt="whatsapp" width="40" height="40"></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-sections"> <!-- Sections Footer -->
            <section> <!-- Categories -->
                <h4>Categories</h4>
                <ul>
                    <li><a href="../pages/buy.php">Buy</a></li>
                    <li><a href="../pages/financing-info.php">Finance</a></li>
                </ul>
            </section>

            <section> <!-- US -->
                <h4>US</h4>
                <ul>
                    <li><a href="../pages/financing-info.php">About Us</a></li>
                </ul>
            </section>

            <section class="section-footer-contacto"> <!-- contact us -->
                <h4>contact us</h4>
                <ul>
                    <li><a href="#"><img class="mail-icon" src="../assets/img/icons/email.png" alt="icono email" width="35" height="35"><span>info@infiniteautomotive.com</span></a></li>
                    <li><a href="#"><img class="phone-icon" src="../assets/img/icons/phone-call.png" alt="icono phone-call" width="35" height="35"><span>012 000 000</span></a></li>
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
