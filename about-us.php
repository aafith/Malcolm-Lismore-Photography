<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US | Malcolm</title>

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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item selected">
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

        <div class="about-area">
            <div class="ab-img d-flex justify-content-center align-items-center">
                <img src="images/M-logo.png" alt="logo">
            </div>
            <div class="text-area container mt-5">
                <h1 class="text-uppercase">Biography</h1>
                <p>based on the North West coast of Scotland. His lens captures the rugged beauty of the Scottish landscape, showcasing the untamed wilderness and coastal wonders.</p>
                
                <h1 class="text-uppercase mt-4">Passion for Photography</h1>
                <p>Malcolm's love for photography extends beyond landscapes. His keen eye also captures the natural wildlife and coastal birds that inhabit the breathtaking Scottish scenery.</p>
            </div>
        </div>
    </div>

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