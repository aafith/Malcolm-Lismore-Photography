<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Icon Font Stylesheet -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css?<?php echo time(); ?>" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/mainStyle.css?<?php echo time(); ?>" rel="stylesheet" />
</head>

<body>
    <div id="form">
        <form action="php/login.php" method="post">
            <h1 class="sub-title">Account Login</h1>
            <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="text" name="uname" placeholder="Username" />
            <input type="password" name="pass" placeholder="Paswword" />
            <button type="submit" class="btn submit-btn">Login</button>
        </form>
    </div>
</body>

</html>