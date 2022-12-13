<?php
  session_start();
  if (!isset($_SESSION['first_name'])) {
      header("Location:./index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site where you can sell your car or buy the car you are looking for.">
    <meta name="keywords" content="auto, cars, buy, buy, sale, sell, dealership, 0km, new">
    <title> INFINITE AUTOMOTIVE - Cars </title>
    <link rel="shortcut icon" href="../assets/img/logo/icon-shortcut1.jpg">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/de0eb60c48.js" ></script>


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
                            <a class="nav-link" href="../pages/financing-info.php">Finance</a>
                        </li>
                        <li>
                            <a class="nav-link btn-login" href="../pages/logout.php">Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </section>
    </header>
    <?php 
        echo '<h1>Welcome '.$_SESSION['first_name'].'</h1>';
         ?>
   <main class="main-buyy">
        <section class="amount-sort-section"> <!-- Number of vehicles and order -->
            <p class="total-vehicles">8 vehicles found</p>
            <div class="sort-vehicles"> <!-- ordering -->
                <img src="../assets/img/icons/od.png" alt="ordering icon" width="25">
                <p>Sort by:</p>
                <select name="ordering" id="">
                    <option value="">Lowest price</option>
                    <option value="">Highest price</option>
                </select>
            </div>
        </section>


            <section class="cars-list"> <!-- Vehicle List -->
                <a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/golf-gti.webp" alt="">
                    <div> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/volkswagen-logo.webp" alt="logo volkswagen" width="28">
                            <h3>Volkswagen Golf GTI</h3>
                        </div>
                        <div>
                            <p>Year: 2020</p>
                            <p>Kilometros: 35678</p>
                            <p>R 320 000</p>
                        </div>
                    </div>
                </a>
				<a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/nissan-kicks.webp" alt=" nissan">
                    <div class="info-car"> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/nissan-logo.webp" alt="logo nissan" width="30">
                            <h3>Nissan Kicks</h3>
                        </div>
                        <div class="car-data">
                            <p>Year: 2021</p>
                            <p>Kilometros: 23500</p>
                            <p>R 297 000</p>
                        </div>
                    </div>
                </a>
                <a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/320i.webp" alt=" bmw">
                    <div> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/logo-bmw.webp" alt="logo bmw" width="30">
                            <h3>BMW 320i</h3>
                        </div>
                        <div>
                            <p>Year: 2014</p>
                            <p>Kilometros: 190780</p>
                            <p>R 314 000</p>
                        </div>
                    </div>
                </a>
                <a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/fiesta.webp" alt=" ford">
                    <div> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/logo-ford.webp" alt="logo ford" width="50">
                            <h3>Ford Fiesta</h3>
                        </div>
                        <div>
                            <p>Year: 2016</p>
                            <p>Kilometros: 60790</p>
                            <p>R 178 000</p>
                        </div>
                    </div>
                </a>
                <a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/amg-c450.webp" alt=" mercedes">
                    <div> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/logo-mercedes-benz.webp" alt="logo mercedes" width="50">
                            <h3>Mercedes AMG C450</h3>
                        </div>
                        <div>
                            <p>Year: 2016</p>
                            <p>Kilometros: 78900</p>
                            <p>R 597 000</p>
                        </div>
                    </div>
                </a>
                <a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/clio.webp" alt=" renault">
                    <div> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/renault-logo.webp" alt="logo renault" width="50">
                            <h3>Renault Clio</h3>
                        </div>
                        <div>
                            <p>Year: 2018</p>
                            <p>Kilometros: 46900</p>
                            <p>R 1760 00</p>
                        </div>
                    </div>
                </a>
                <a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/swift.webp" alt=" suzuki">
                    <div> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/suzuki_logo.webp" alt="logo suzuki" width="30">
                            <h3>Suzuki Swift</h3>
                        </div>
                        <div>
                            <p>Year: 2017</p>
                            <p>Kilometros: 90600</p>
                            <p>R 146 000</p>
                        </div>
                    </div>
                </a>
                <a class="card-car" href="./car-to-cars.php"> <!-- Card Auto -->
                    <img src="../assets/img/images/buy/accent.webp" alt=" hyundai">
                    <div> <!-- Vehicle Data -->
                        <div class="car-brand">
                            <img src="../assets/img/images/buy-home/hyundai-logo.webp" alt="logo hyundai" width="40">
                            <h3>Hyundai Accent</h3>
                        </div>
                        <div>
                            <p>Year: 2018</p>
                            <p>Kilometros: 108500</p>
                            <p>R 218 000</p>
                        </div>
                    </div>
                </a>
            </section>
        </section>

        <section class="pages"> <!-- Pages -->
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Following</a>
        </section>
    </main>

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

</body>
</html>