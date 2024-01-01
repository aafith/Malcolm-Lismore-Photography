<?php

include "php/db_conn.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Malcolm</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/mainStyle.css?<?php echo time();?>" rel="stylesheet" />
</head>

<body>
    <!-- Header Page -->
    <div id="header">
        <nav class="navbar navbar-expand-lg fixed-top p-1">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/M-logo.png" alt="logo"></a>
                <div class="justify-content-center">
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item selected">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <button class="btn menu-close" onclick="closeMenu()"><i class='bx bx-x'></i></button>
                        <button class="btn navGet-btn">
                            <a href="contact.php" >Get Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </button>
                    </ul>
                </div>
                <button class="btn menu-bar" onclick="openMenu()"><i class='bx bx-menu'></i></button>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <h1>Malcolm Lismore</h1>
                        <h3>Capturing the Beauty of Nature</h3>
                        <p>Meet Malcolm Lismore, your dedicated freelance photographer based on the enchanting North West coast of Scotland. With a profound love for the natural world, Malcolm has transformed his passion into mesmerizing visual narratives.</p>
                        <button class="btn btn-yellow-btn">
                            <a href="about-us.php" >EXPLORE MALCOLM LISMORE <i class="fa-solid fa-arrow-right"></i></a>
                        </button>
                    </div>
                    <div class="col-md-6 image-column">
                        <img src="images/bg-image.png" alt="showcase-image">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- End Header Page -->

    <div class="Featured-Galleries container p-4">
        <h1 class="title">Featured Galleries</h1>
        <div class="row mt-5">
            <div class="col-md-4 ">
                <img src="images/658bffaa6c9f8.jpeg" alt="showcase-image" class="img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="images/650de1999a259.jpg" alt="showcase-image" class="img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="images/650de1927dcc0.jpg" alt="showcase-image" class="img-thumbnail">
            </div>
        </div>
        
        <div class=" d-flex justify-content-center align-items-center my-5">
        <button class="btn navGet-btn">
                            <a href="gallery.php">CLICK TO GALLERY</a>
                        </button>
        </div>

    </div>

    <!-- Services Page -->
    <div id="services" class="container services-main">
        <div class="container">
            <div class="text-center text-white">
            <h1>Photography services offered by Malcolm</h1>
            <p>Capture the magic of your special day with our photography package.</p>
</div>
           
            <div class="row">

            <?php

                $sql = "SELECT * FROM services";

                $result = mysqli_query($conn, $sql);

                $id = 1;


                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $first_description = $row['first_description'];
                    $second_description = $row['second_description'];

                    ?>
            
            <div class="col-sm-6 services-cart p-3">
                    <div class="card p-3">
                        <div class="card-body">
                            <h1 class="cart-title text-primary"><?php echo $row['name']; ?></h1>
                            <ul class="cart-ul">
                                <li><?php echo $row['first_description']; ?></il>
                                <li><?php echo $row['second_description']; ?></il>
                            <ul>
                        </div>
                        
                        <div class="cart-footer">
                            <button class="btn navGet-btn">
                                        <a href="pricing.php">CLICK TO PRICE</a>
                            </button>
                        </div>
                    </div>
                </div>

                <?php
                } ?>

                
            </div>
        </div>
    </div>
    <!-- End Services Page -->

    
    <!-- Footer Page -->
    <footer id="footer" class="copyright">
        <div class="container pb-4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="my-2">
                            <a class="footer-logo" href="index.php"><img src="images/M-logo.png" alt="logo"></a>
                        </div>
                        <p>Meet Malcolm Lismore, your dedicated freelance photographer based...</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <h3 class="footer-title">Services</h3>
                        <ul class="list-group pt-4">
                            <li>
                                <a href="pricing.php">Wedding photography</a>

                            </li>
                            <li>
                                <a href="pricing.php">Portrait Photography</a>

                            </li>
                            <li>
                                <a href="pricing.php">Special Events</a>
                            </li>
                            <li>
                                <a href="pricing.php">Wildlife photography</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <h3 class="footer-title">Company</h3>
                        <ul class="list-group pt-4">
                            <li>
                                <a href="#">Privacy policy</a>

                            </li>
                            <li>
                                <a href="#">Terms and Conditions</a>

                            </li>
                            <li>
                                <a href="#">Contact us</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                        </ul>
                    </div>

                    

                    <div class="col-lg-3 col-md-10 col-sm-12 col-xs-12">
                        <h3 class="footer-title">Contact info</h3>
                        <div class="social-icon">
                            <a href="http://" class="phone"><i class="fa-solid fa-phone"></i></a>
                            <a href="http://" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="http://" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="social-icon-2">
                            <a href="http://" class="mail"><i class="fa-solid fa-envelope"></i> Hello@Malcolm.com</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="py-2 footer-b container-fluid">
                        <p> Copyright &copy; <span id="year"></span> <a href="" class="text-uppercase text-white">Malcolm Lismore
                                Photography</a></p>
                    </div>
    </footer>

    <!-- End Footer Page -->

    <!-- Customized JavScript -->
    <script src="js/my-script.js"></script>
    <script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</body>

</html>