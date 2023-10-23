<?php

include "php/db_conn.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | Malcolm Lismore Photography</title>

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Icon Font Stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/mainStyle.css?<?php echo time(); ?>" rel="stylesheet" />
</head>

<body>
    <!-- Header Page -->
    <div id="header">
        <nav class="navbar navbar-expand-lg fixed-top p-1">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/ML-logo.png" alt=""></a>
                <div class="justify-content-center">
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a onclick="clickFun()" class="drop-btn nav-link dropdown-toggle">Services</a>
                            <div id="dropNav" class="drop-nav">
                                <a href="#services">Wildlife photography</a>
                                <a href="#services">Fashion photography</a>
                                <a href="#services">Wedding photography</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <button class="btn menu-close" onclick="closeMenu()"><i class='bx bx-x'></i></button>
                        <button class="btn get-btn">Get Quote</button>
                    </ul>
                </div>
                <button class="btn menu-bar" onclick="openMenu()"><i class='bx bx-menu'></i></button>
            </div>
        </nav>

        <div class="header-text container text-center">
            <div>
                <h1 class="text-center">Malcolm Lismore Photography</h1>
                <p>A Journey into the World of Full-Time Photography</p>
                <div class="social-icon">
                    <a href="http://" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="http://" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="http://" class="tiktok"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="http://" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!-- End Header Page -->

    <!-- About Page -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/65361a58975d9.jpeg" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">about me</h1>
                    <p class="about-bio">Meet Malcolm Lismore, your dedicated freelance photographer based on the
                        enchanting North West coast of Scotland. With a profound love for the natural world, Malcolm has
                        transformed his passion into mesmerizing visual narratives. His keen eye captures the raw beauty
                        of Scotland, showcasing its rugged landscapes, diverse wildlife, and the grace of coastal birds.
                        With years of experience and a deep-seated passion for photography, Malcolm brings a unique
                        perspective to every project he undertakes.</p>

                    <div class="about-tab">
                        <button class="tab-link btn active" onclick="openTab('skills')">Skills</button>
                        <button class="tab-link btn" onclick="openTab('experience')">Experience</button>
                        <button class="tab-link btn" onclick="openTab('education')">Education</button>
                    </div>

                    <div class="tab-contents active-tab" id="skills">
                        <ul class="ex-list">
                            <li><span>📸 Photography Skills</span>Highlight your technical proficiency in photography,
                                including knowledge of camera equipment, lighting, composition, and editing software.
                            </li>
                            <li><span>🌟 Creativity</span>Emphasize your ability to think creatively and come up with
                                unique and visually appealing concepts for photo shoots.</li>
                            <li><span>✏️ Photo Editing</span>Mention your expertise in using editing software like Adobe
                                Photoshop or Lightroom to enhance and retouch photos.</li>
                        </ul>
                    </div>

                    <div class="tab-contents" id="experience">
                        <ul class="ex-list">
                            <li><span>Photographer | A+ Studio or Freelance JULY, 2021 - Present
                                </span>
                                <ul>
                                    <li>Captured stunning and impactful photographs for a diverse range of clients,
                                        including individuals, families, businesses, and organizations.</li>
                                    <li>Specialized in portrait, event, and commercial photography, consistently
                                        delivering images that exceeded client expectations.</li>
                                    <li>Demonstrated exceptional creativity in conceptualizing and executing
                                        photoshoots, resulting in visually engaging and unique imagery.</li>
                                    <li>Utilized advanced photo editing software, such as Adobe Photoshop and Lightroom,
                                        to enhance and retouch photos, ensuring the highest quality output.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-contents" id="education">
                        <ul class="ex-list">
                            <li><span>🎓 Bachelor of Fine Arts in Photography</span>
                                ESOFT Metro Campus<br />Colombo, Sri Lanka<br />JULY, 2020 of Graduation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

    <!-- Services Page -->
    <div id="services" class="container-fluid">
        <div class="container">
            <h1 class="sub-title">What I Offer</h1>
            <div class="services-list">

                <?php

                $sql = "SELECT * FROM services";

                $result = mysqli_query($conn, $sql);

                $id = 1;


                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $description = $row['description'];
                    $price = $row['price'];

                    ?>

                <div>
                    <h2><?php echo $row['name']; ?></h2>
                    <p><?php echo $row['description']; ?></p>
                    <h3>$<?php echo $row['price']; ?></h3>
                    <a href="#contact" class="btn">Get Quote</a class="bold">
                </div>

                <?php
                } ?>


            </div>
        </div>
    </div>
    <!-- End Services Page -->

    <!-- Portfolio Page -->
    <div class="container" id="portfolio">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">

            <?php


            $sql = "SELECT * FROM gallery";

            $result = mysqli_query($conn, $sql);

            $id = 1;

            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $imgUrl = $row['image_url'];
                $catg = $row['image_cat'];
                $tag = $row['tag'];
                $link = $row['link'];

                ?>


            <div class="work">
                <img src="images/<?php echo $row['image_url']; ?>">
                <div class="layer">
                    <h3><?php echo $row['image_cat']; ?></h3>
                    <p>"<?php echo $row['tag']; ?>"</p>
                    <a href="<?php echo $row['link']; ?>"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>

            <?php
            } ?>

        </div>

        <button class="btn more-btn" id="moreBtn">See More</button>
    </div>
    <!-- End Portfolio Page -->

    <!-- Contact Page -->
    <div id="contact" class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Get Quote</h1>
                <p><i class="fa-solid fa-envelope"></i> malcolm@photography.com</p>
                <p><i class="fa-solid fa-phone"></i> +94 75 345 3435</p>
                <div class="social-icon">
                    <a href="http://" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="http://" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="http://" class="tiktok"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="http://" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <a href="" class="btn downCv-btn">Downloard CV</a>
            </div>
            <div class="contact-right">
                <?php if(isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if(isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <form action="php/contact.php" method="post">
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="email" name="email" placeholder="Your Email">
                    <textarea name="message" placeholder="Your Message" rows="6"></textarea>
                    <button type="submit" class="btn submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Contact Page -->

    <!-- Footer Page -->
    <footer id="footer" class="copyright">
        <div class="container">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="mt-5">
                            <a class="footer-logo" href="#"><img src="images/ML-logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <h3 class="footer-title">Menu</h3>
                            <ul class="list-group pt-4">
                                <li>
                                    <a href="#services">Home</a>

                                </li>
                                <li>
                                    <a href="#services">About Me</a>

                                </li>
                                <li>
                                    <a href="#services">Portfolio</a>
                                </li>
                            </ul>
                    </div>

                    <div class="col-lg-3 col-md-10 col-sm-12 col-xs-12">
                        <h3 class="footer-title">Contact</h3>
                        <ul class="list-group pt-4">
                            <li>
                                <a href="#"><i class="fa-solid fa-map-pin"></i> Main Street, colombo-01</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-phone"></i> +94 123 4567 or +94 123 4867</a>
                            </li>
                            <li>
                                <a href="mailto:malcolm@lismorephotography.com"><i class="fa-solid fa-envelope"></i>
                                    malcolm@photography.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-10 col-sm-12 col-xs-12">
                        <h3 class="footer-title">Follow Us</h3>
                        <div class="social-icon">
                    <a href="http://" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="http://" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="http://" class="tiktok"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="http://" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                    </div>

                    <div class="p-4">
                        <p class="text-center"> Copyright &copy; <span id="year"></span> <a href="" class="text-uppercase">Malcolm Lismore Photography</a></p>
                    </div>

                </div>
            </div>
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