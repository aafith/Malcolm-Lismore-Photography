<?php

include "db_conn.php";

if (isset($_GET['edit'])) {
    
    $edit = $_GET['edit'];
    
    // Prepare and execute the SQL query
    $sql = "SELECT * FROM services WHERE id= '$edit'";

    $result = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
    }
}

?>



<?php


if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_GET['edit']))
{
    $edit = $_GET['edit'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    // Prepare and execute the SQL query
    $sql = "UPDATE services set name= '$name', description= '$description', price= '$price' where id= '$edit'";
    if(mysqli_query($conn,$sql)) {
        echo '<script> location.replace("../dashboard.php")</script>'; 
        exit();
    } else{
        header("Location: edit.php?error=Database error");
        exit();
    }
        
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gallery</title>

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <!-- Icon Font Stylesheet -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../css/mainStyle.css?<?php echo time(); ?>" rel="stylesheet" />

</head>

<body>
    <div id="form">
        <form action="#" method="post">
            <h1 class="sub-title"><?php echo $name; ?></h1>
            <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if(isset($_GET['success'])) {?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>" />
            <input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>" />
            <input type="text" name="price" placeholder="Price" value="<?php echo $price; ?>" />
            <button type="submit" class="btn submit-btn">Edit</button>
        </form>
    </div>
</body>

</html>