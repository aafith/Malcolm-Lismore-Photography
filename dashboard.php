<?php
session_start();
include "php/db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

    <nav class="nav-left">
        <div class="top-profile d-flex justify-content-center align-items-center m-auto">
            <?php

                $uname =  $_SESSION['user_name'];

                $sql = "SELECT * FROM admin WHERE user_name = '$uname'";

                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($result)) {
                    $imgUrl = $row['image_url'];
                    ?>
                    
            <img src="images/<?php echo $row['image_url']; ?>" style="width: 60px; height: 60px; margin-right: 10px; ">
            <?php
                }
            ?>
            <div>
            <h1><?php echo $_SESSION['name'];?></h1>
            <p>@<?php echo $_SESSION['user_name'];?></p>
            </div>
        </div>

        <div class="menu">
            <button class="menu-link btn active" onclick="openmenu('add')"><i class="fa-solid fa-image"></i> Galleries</button>
            <button class="menu-link btn" onclick="openmenu('d-services')"><i class="fa-solid fa-laptop"></i> SERVICES</button>
            <button class="menu-link btn" onclick="openmenu('message')"><i class="fa-solid fa-message"></i></i> Enquiries</button>
            <button class="menu-link btn" onclick="openmenu('admin')"><i class="fa-solid fa-user"></i> Admin</button>
            
            <a class="btn logout" href="php/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log out</a>
        </div>
    </nav>

    <div class="container" id="main-area">
        <div class="menu-contents active-menu" id="add">
            <div class="container">
                <button class="add-btn btn"><a href="new-image.php"><i class="fa-solid fa-plus"></i> ADD NEW IMAGE</a></button>
                <table class="table table-bordered m-5">
                    <thead>
                        <tr class="text-center align-middle">
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = "SELECT * FROM gallery";

                            $result = mysqli_query($conn, $sql);

                            $id = 1;

                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
                                $imgUrl = $row['image_url'];
                                $catg = $row['image_cat'];

                            
                                ?>

                        <tr class="text-center align-middle">
                            <td class="db-image"><img src="images/<?php echo $row['image_url']; ?>"></td>
                            <td><?php echo $catg?></td>


                            <td class="text-center">
                                <button class="btn btn-primary"><a href="php/editImg.php?edit=<?php echo $id ?>">
                                <i class="fa-solid fa-pen-to-square"></i> Edit</a></button>
                                <button class="btn btn-danger"><a href="php/deleteImg.php?delete=<?php echo $id ?>"><i class="fa-solid fa-trash"></i> Delete</a></button>

                            </td>




                        </tr>


                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="menu-contents" id="message">
            <div class="container">
                <table class="table table-bordered m-5">
                    <thead>
                        <tr class="text-center align-middle">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Message</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = "SELECT * FROM message";

                            $result = mysqli_query($conn, $sql);

                            $id = 1;

                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $message = $row['message'];

                            
                                ?>

                        <tr class="text-center align-middle">
                            <td><?php echo $name?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $phone?></td>
                            <td><?php echo $message?></td>


                            <td class="text-center">
                                <button class="btn btn-danger"><a
                                        href="php/message-delete.php?delete=<?php echo $id ?>"><i class="fa-solid fa-trash"></i> Delete</a></button>

                            </td>




                        </tr>


                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="menu-contents" id="admin">
            <div class="container">
                <button class="add-btn btn"><a href="new-admin.php"><i class="fa-solid fa-plus"></i> ADD NEW ADMIN</a></button>
                <table class="table table-bordered m-5">
                    <thead>
                        <tr class="text-center align-middle">
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Image</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = "SELECT * FROM admin";

                            $result = mysqli_query($conn, $sql);

                            $id = 1;

                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $username = $row['user_name'];
                                $password = $row['password'];
                                $imgUrl = $row['image_url'];

                            
                                ?>

                        <tr class="text-center align-middle">
                            <td><?php echo $name?></td>
                            <td><?php echo $username?></td>
                            <td><?php echo $password?></td>
                            <td class="db-image"><img src="images/<?php echo $row['image_url']; ?>"></td>


                            <td class="text-center">
                                <button class="btn btn-primary"><a href="php/edit.php?edit=<?php echo $id ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a></button> &nbsp;
                                <button class="btn btn-danger"><a href="php/delete.php?delete=<?php echo $id ?>"><i class="fa-solid fa-trash"></i> Delete</a></button>

                            </td>




                        </tr>


                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="menu-contents" id="d-services">
            <div class="container">
                <table class="table table-bordered m-5">
                    <thead>
                        <tr class="text-center align-middle">
                            <th scope="col">Name</th>
                            <th scope="col">1st Description</th>
                            <th scope="col">2nd Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = "SELECT * FROM services";

                            $result = mysqli_query($conn, $sql);

                            $id = 1;

                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $first_description = $row['first_description'];
                                $second_description = $row['second_description'];
                                $price = $row['price'];

                            
                                ?>

                        <tr class="text-center align-middle">
                            <td><?php echo $name?></td>
                            <td><?php echo $first_description?></td>
                            <td><?php echo $second_description?></td>
                            <td><?php echo $price?></td>


                            <td class="text-center">
                                <button class="btn btn-primary"><a href="php/editservices.php?edit=<?php echo $id ?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
                            </td>


                        </tr>


                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
}else{
    header("Location: admin.php");
    exit();
}
?>

    <!-- Customized JavScript -->
    <script type="text/javascript" src="js/my-script.js"></script>
</body>

</html>