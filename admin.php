<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css?<?php echo time(); ?>" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/mainStyle.css?<?php echo time(); ?>" rel="stylesheet" />
</head>

<body>
    <div id="form">
        <form action="php/login.php" method="post">
        <img src="images/M-logo.png" alt="logo" class="pb-4">
            <h1 class="sub-title">Account Login</h1>
            <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="text" name="uname" placeholder="Username" />
            <input type="password" name="pass" placeholder="Password" />
            <button type="submit" class="btn submit-btn">Login</button>
        </form>
    </div>
</body>

</html>