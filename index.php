<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Cozy Nest </title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Find a home that loves you back </h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            City Icons
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-square">
                        <img src="img/Delhi.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-square">
                        <img src="img/mumbai.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-square">
                        <img src="img/bangalore.jpg" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-square">
                        <img src="img/hyderabad.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Meerut">
                    <div class="city-card rounded-square">
                        <img src="img/Meerut.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Noida">
                <div class="city-card rounded-square">
                        <img src="img/Noida.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Ghaziabad">
                    <div class="city-card rounded-square">
                        <img src="img/Ghaziabad.jpg" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
