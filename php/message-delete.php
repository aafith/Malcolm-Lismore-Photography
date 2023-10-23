<?php

include "db_conn.php";

if (isset($_GET['delete'])) {
    
    $delete = $_GET['delete'];
    
    // Prepare and execute the SQL query
    $sql = "DELETE FROM message WHERE id = '$delete'";
    
    if(mysqli_query($conn,$sql)) {
        echo '<script> location.replace("../dashboard.php")</script>'; 
        exit();
    } else{
        header("Location: delete.php?error=Database error");
        exit();
    }
        
}