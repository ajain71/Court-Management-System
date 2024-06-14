<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Court case Management</title>
    <link rel="stylesheet" href="public/css/carousel.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/2f7569df82.js" crossorigin="anonymous"></script>
    <link rel="icon" href="public/images/statue.jpg" type="image/x-icon">
</head>

<body>

    <div id="home">
        <div class="title-bar">
            <div id="item1">
                <i class="fas fa-gavel fa-3x"></i>
                <h1>Court Case Information System</h1>
            </div>
            <div id="item2">
                <button class="sm" id="home-login-btn" onclick="location.href='#login'">Login</button>
              
            </div>
        </div>
        <div class="index">
            <div class="left">
                <p class="quote">"No one is above the law and no one is below the law. Justice has got to be blind. The
                    more powerful shall not pick on the less powerful."
                    <br><br>
                    <span id="quote1">
                        ~ Josh Earnest
                    </span>
                </p>
            </div>

            <div class="right">
                <img src="public/images/statue.jpg" alt="statue" class="justice">
            </div>
        </div>
    </div>
    <!-- home section ends -->

    <div id="login">
        <div class="carousel-wrapper">
            <div class="carousel__button carousel__button--prev hide">
                <i class="fas fa-chevron-left fa-4x"></i>
            </div>
            <div class="carousel__track-container">
                <ul class="carousel__track">
                    <li class="carousel__slide current-slide">
                        <img class="carousel__image" src="public/images/quote1.jpg" alt="">
                        <button class="sm" id="client-btn" onclick="window.location.href='client_login.php'">
                            Log in as Client
                        </button>
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__image" src="public/images/quote2.jpg" alt="">
                        <button class="sm" id="lawyer-btn" onclick="window.location.href='lawyer_login.php'">
                            Log in as Lawyer
                        </button>
                    </li>
                    <li class="carousel__slide">
                        <img class="carousel__image" src="public\images\quote3.jpg" alt="">
                        <button class="sm" id="admin-btn" onclick="window.location.href='admin_login.php'">
                            Log in as Admin
                        </button>
                    </li>
                    <!--<li class="carousel__slide">
                        <img class="carousel__image" src="public\images\quote7.webp" alt="">
                        <button class="sm" id="search-btn" onclick="window.location.href=' search.php '">
                             Queries
                        </button>
                    </li>-->
                </ul>
            </div>
            <div class="carousel__button carousel__button--next">
                <i class="fas fa-chevron-right fa-4x"></i>
            </div>
        </div>
        <div class="carousel__nav">
            <button class="carousel__indicator current-slide"></button>
            <button class="carousel__indicator"></button>
            <button class="carousel__indicator"></button>
            
        </div>
    </div>
    <!-- login carousel ends -->



    <script src="public/js/app.js"> </script>

</body>

</html>