<?php
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['uname']) && isset($_POST['pass'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if (empty($name) || empty($uname) || empty($pass)) {
        header("Location: ../new-admin.php?error=All fields are required");
        exit();
    } else {

        if (isset($_FILES['imgUrl']['error']) === 4) {
            header("Location: ../new-image.php?error=Image Does Not Exist");
            exit(); 
        }else {
            $img_name = $_FILES['imgUrl']['name'];
            $img_size = $_FILES['imgUrl']['size'];
            $tmp_name = $_FILES['imgUrl']['tmp_name'];

            $allowed_exs = ['jpg', 'jpeg', 'png'];
            $img_ex = explode('.' , $img_name);
            $img_ex = strtolower(end($img_ex));

            if(!in_array($img_ex, $allowed_exs)) {
                header("Location: ../new-image.php?error=Invalid Image Extenstion");
                exit(); 
            }
            else {
                $new_img_name = uniqid();
                $new_img_name .= "." . $img_ex;

                move_uploaded_file($tmp_name, '../images/' . $new_img_name);

                // Prepare and execute the SQL query
                $sql = "INSERT INTO admin (name, user_name, password, image_url) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $result = $stmt->execute([$name, $uname, $pass, $new_img_name]);

                    if ($result) {
                        header("Location: ../new-admin.php?success=Your account has been created successfully");
                        exit();
                    } else {
                        header("Location: ../new-admin.php?error=Database error");
                        exit();
                    }
                } else {
                    header("Location: ../new-admin.php?error=SQL statement preparation failed");
                    exit();
                }
            }
        }
    }
    
} else {
    header("Location: ../new-admin.php?error=error");
    exit();
}