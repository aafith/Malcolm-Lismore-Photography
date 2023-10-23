<?php

include "db_conn.php";

if (isset($_GET['edit'])) {
    
    $edit = $_GET['edit'];
    
    // Prepare and execute the SQL query
    $sql = "SELECT * FROM gallery WHERE id= '$edit'";

    $result = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_array($result)){
    $id = $row['id'];
    $imgUrl = $row['image_url'];
    $catg = $row['image_cat'];
    $tag = $row['tag'];
    $link = $row['link'];
    }
}

?>


<?php


if (isset($_POST['catg']) && isset($_POST['tag']) && isset($_POST['link']) && isset($_GET['edit']))
{
    $edit = $_GET['edit'];
    $catg = $_POST['catg'];
    $tag = $_POST['tag'];
    $link = $_POST['link'];


    if (isset($_FILES['imgUrl']['error']) === 4) {
        header("Location: editImg.php?error=Image Does Not Exist");
        exit(); 
    } else{
        $img_name = $_FILES['imgUrl']['name'];
        $img_size = $_FILES['imgUrl']['size'];
        $tmp_name = $_FILES['imgUrl']['tmp_name'];

        $allowed_exs = ['jpg', 'jpeg', 'png'];
        $img_ex = explode('.' , $img_name);
        $img_ex = strtolower(end($img_ex));

        if(!in_array($img_ex, $allowed_exs)) {
            header("Location: editImg.php?error=Invalid Image Extenstion");
            exit(); 
        }
        else {
            $new_img_name = uniqid();
            $new_img_name .= "." . $img_ex;

            move_uploaded_file($tmp_name, '../images/' . $new_img_name);

            // Prepare and execute the SQL query
            $sql = "UPDATE gallery set image_url= '$new_img_name', image_cat= '$catg', tag= '$tag', link= '$link' where id= '$edit'";
            if(mysqli_query($conn,$sql)) {
                echo '<script> location.replace("../dashboard.php")</script>'; 
                exit();
            }else {
                header("Location: editImg.php?error=Database error");
                exit();
            }
        }
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../css/mainStyle.css?<?php echo time(); ?>" rel="stylesheet" />

</head>

<body>
    <div id="form">
        <form action="#" method="post" enctype="multipart/form-data">
            <h1 class="sub-title">Edit Gallery</h1>
            <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if(isset($_GET['success'])) {?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <input type="text" name="catg" placeholder="Category" value="<?php echo $catg; ?>" />
            <input type="text" name="tag" placeholder="Tag" value="<?php echo $tag; ?>" />
            <input type="text" name="link" placeholder="Link" value="<?php echo $link; ?>" />
            <input type="file" name="imgUrl" accept=".jpg, .jpeg, .png" id="file-upload" class="hidden-input" />
            <label for="file-upload" class="upload-button rounded-0">
                <span><i class="fa-solid fa-cloud-arrow-up"></i> Upload File</span>
            </label>
            <button type="submit" class="btn submit-btn">Edit</button>
        </form>
    </div>
</body>

</html>