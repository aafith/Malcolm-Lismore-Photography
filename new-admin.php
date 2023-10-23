<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ADMIN</title>

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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/mainStyle.css?<?php echo time(); ?>" rel="stylesheet" />

</head>

<body>
    <div id="form">
        <form action="php/add.php" method="post" enctype="multipart/form-data">
            <h1 class="sub-title">Create admin</h1>
            <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if(isset($_GET['success'])) {?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <input type="text" name="uname" placeholder="Username" />
            <input type="text" name="name" placeholder="Name" />
            <input type="password" name="pass" placeholder="Paswword" />
            <input type="file" name="imgUrl" accept=".jpg, .jpeg, .png" id="file-upload" class="hidden-input" />
            <label for="file-upload" class="upload-button rounded-0">
                <span><i class="fa-solid fa-cloud-arrow-up"></i> Upload File</span>
            </label>
            <button type="submit" class="btn submit-btn">Add</button>
        </form>
    </div>
</body>

</html>