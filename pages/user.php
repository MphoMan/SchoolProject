<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site where you can sell your car or buy the car you are looking for.">
    <meta name="keywords" content="auto, cars, buy, buy, sale, sell, dealership, 0km, new">
    <title> INFINITE AUTOMOTIVE - Your Profile </title>
    <link rel="shortcut icon" href="../assets/img/logo/icon-shortcut1.jpg">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/de0eb60c48.js" ></script>

    <link rel="stylesheet" href="../build/css/styles.css">
</head>
<body>
    <div class="layout-user">
        <aside class="user-aside">
            <div class="user-aside-navbar">
                <img src="../assets/img/logo/icon-shortcut1.jpg" alt="Logo">
                <div class="aside-navbar">
                    <div class="my-account">
                        <h3><i class="fas fa-bars"></i> <span>My account</span></h3>
                        <div>
                            <a href="#">Summary</a>
                            <a href="#">My data</a>
                            <a href="./forgetPassword.php">Change password</a>
                        </div>
                    </div>
                    <div class="purchases">
                        <h3><i class="fas fa-shopping-bag"></i> <span>Shopping</span></h3>
                        <div>
                            <a href="#">Favorites</a>
                            <a href="#">Questions</a>
                        </div>
                    </div>
                    <div class="sales">
                        <h3><i class="fas fa-bullhorn"></i> <span>Sales</span></h3>
                        <div>
                            <a href="#">My Publications</a>
                            <a href="#">Questions</a>
                            <a href="#">Sales</a>
                        </div>
                    </div>
                    <div class="settings">
                        <h3><i class="fas fa-cog"></i> <span>Setting</span></h3>
                        <div>
                            <a href="#">Security</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <main>
            <header>
                <section class="navbar"> <!-- Navigation bar -->
                    <div class="container-1600">
                        <div>
                            <a class="logo" href="../index.php"> <!-- Logo -->
                                <img src="../assets/img/logo/carlogo.jpeg" alt="logo">
                            </a>
            
                            <button id="hamburguer" class="hamburguer"><i class="fas fa-bars"></i></button>
                        </div>
                
                <nav id="main-nav" class="main-nav"> <!-- Navigation -->
					<ul>
                        <li>
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
						<li>
                            <a class="nav-link" href="../pages/Buy.php">Buy</a>
                        </li>
                        <li>
                            <a class="nav-link" href="../pages/about-us.php">About US</a>
                        </li>
                        <li>
                            <a class="nav-link" href="../pages/dealers.php">dealers</a>
                        </li>
                        <li>
                            <a class="nav-link btn-login" href="../pages/sign-in.php">Log in</a>
                        </li>
                    </ul>
                </nav>
                    </div>
                </section>
            </header>

            <div class="user-resume-container">
                <div class="situation">
                    <p>My account</p>
                    <p><i class="fas fa-chevron-right"></i></p>
                    <h2>Summary</h2>
                </div>
    
                <section class="user-info">
                    <div class="user-img-name">
                        <img src="../assets/img/images/user/profile-user.png" alt="user">
                        <div>
                            <h2>Name Surname</h2>
                            <p>Standard User</p>
                        </div>
                    </div>
                    <div class="user-data">
                        <h3>Data:</h3>
                        <p><strong>Email:</strong> example@gmail.com</p>
                        <p><strong>Cell:</strong> 012 000 0000</p>
                        <p><strong>Date of Birth:</strong> 18/06/2000</p>
                    </div>
                    <div class="user-location">
                        <h3>Location:</h3>
                        <p><strong>Province:</strong> KZN</p>
                        <p><strong>City:</strong> Durban</p>
                    </div>
                </section>
    
                <section class="user-publications">
                    <h2><i class="fas fa-list-ul"></i> My Publications</h2>
                    <div class="publications">
                        <div class="publication">
                            <div>
                                <img src="../assets/img/images/buy/golf-gti.webp" alt="Volkswagen Golf GTI">
                                <div class="publication-brand">
                                    <img src="../assets/img/images/buy-home/volkswagen-logo.webp" alt="Logo Volkswagen">
                                    <h3>Volkswagen Golf GTI</h3>
                                </div>
                            </div>
                            <h4>R320 000.00</h4>
                        </div>
                        <div class="publication">
                            <div>
                                <img src="../assets/img/images/buy/nissan-kicks.webp" alt="Nissan Kicks">
                                <div class="publication-brand">
                                    <img src="../assets/img/images/buy-home/nissan-logo.webp" alt="Logo Nissan">
                                    <h3>Nissan Kicks</h3>
                                </div>
                            </div>
                            <h4>R290 000.00</h4>
                        </div>
                    </div>
                </section>
    
                <section class="user-favs">
                    <h2><i class="fas fa-star"></i> My favourites</h2>
                    <div class="favs-cars">
                        <a class="card-car" href="./car.php"> <!-- Card -->
                            <img src="../assets/img/images/buy/golf-gti.webp" alt="image Volkswagen Golf GTI">
                            <div> <!-- Vehicle Data -->
                                <div class="car-brand">
                                    <img src="../assets/img/images/buy-home/volkswagen-logo.webp" alt="Logo Volkswagen" width="30">
                                    <h3>Volkswagen Golf GTI</h3>
                                </div>
                                <div>
                                    <p>Year: 2020</p>
                                    <p>Kilometres: 35687</p>
                                    <p>R 350 000</p>
                                </div>
                            </div>
                        </a>
                        <a class="card-car" href="#"> <!-- Card -->
                            <img src="../assets/img/images/buy/swift.webp" alt="image suzuki">
                            <div> <!-- Vehicle Data -->
                                <div class="car-brand">
                                    <img src="../assets/img/images/buy-home/suzuki_logo.webp" alt="logo suzuki" width="30">
                                    <h3>Suzuki Swift</h3>
                                </div>
                                <div>
                                    <p>Year: 2017</p>
                                    <p>Kilometres: 90600</p>
                                    <p>R 146 000</p>
                                </div>
                            </div>
                        </a>
                        <a class="card-car" href="#"> <!-- Card -->
                            <img src="../assets/img/images/buy/320i.webp" alt="image bmw">
                            <div> <!-- Vehicle Data -->
                                <div class="car-brand">
                                    <img src="../assets/img/images/buy-home/logo-bmw.webp" alt="logo bmw" width="30">
                                    <h3>BMW 320i</h3>
                                </div>
                                <div>
                                    <p>Year: 2014</p>
                                    <p>Kilometres: 190780</p>
                                    <p>R 314 000</p>
                                </div>
                            </div>
                        </a>
                        <a class="card-car" href="#"> <!-- Card -->
                            <img src="../assets/img/images/buy/fiesta.webp" alt="image ford">
                            <div> <!-- Vehicle Data -->
                                <div class="car-brand">
                                    <img src="../assets/img/images/buy-home/logo-ford.webp" alt="logo ford" width="40">
                                    <h3>Ford Fiesta</h3>
                                </div>
                                <div>
                                    <p>Year: 2016</p>
                                    <p>Kilometres: 60790</p>
                                    <p>R 178 000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </div>

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
        </main>
    </div>
</body>
</html>