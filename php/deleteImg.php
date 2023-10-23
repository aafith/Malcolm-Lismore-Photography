<?php

include "db_conn.php";

if (isset($_GET['delete'])) {
    
    $delete = $_GET['delete'];
    
    // Prepare and execute the SQL query
    $sql = "DELETE FROM gallery WHERE id = '$delete'";
    
    if(mysqli_query($conn,$sql)) {
        echo '<script> location.replace("../dashboard.php")</script>'; 
        exit();
    } else{
        header("Location: edit.php?error=Database error");
        exit();
    }
        
}