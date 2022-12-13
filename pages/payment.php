<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site where you can sell your car or buy the car you are looking for.">
    <meta name="keywords" content="auto, cars, buy, buy, sale, sell, dealership, 0km, new">
    <title> INFINITE AUTOMOTIVE - Payment </title>
    <link rel="shortcut icon" href="../assets/img/logo/icon-shortcut1.jpg"> 
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../build/css/styles.css">

</head>
<body>

<div class="containerpay">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="number - street - suburb">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Pretoria">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>country :</span>
                        <input type="text" placeholder="South Africa">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="0001">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="..\assets\img\images\payment\card_img.png" alt="">     
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Mr XH Ndlovu">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2024">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123">
                    </div>
                </div>

            </div>
            <div class="flex">
                <a class="close" id="close" href="./vw-cars.php"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <input type="submit" value="Buy" class="submit-btn">
       
    </form>

</div>    
    
</body>
</html>