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
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item selected">
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
    </div>


    <!-- End Header Page -->

        <!-- Contact Page -->
        <div id="contact" class="container mt-5">
        <h1 class="title text-center border-0 pt-5">GET QUOTE</h1>
        <div class="row">
            <div class="contact-right">
                <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <form action="php/contact.php" method="post">
                    <div class="d-flex gap-4">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    </div>
                    <input type="text" name="phone" placeholder="Phone">
                    <textarea name="message" placeholder="Message" rows="6"></textarea>
                    <button type="submit" class="btn submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Contact Page -->

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