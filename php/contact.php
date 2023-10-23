<?php

include "db_conn.php";


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $message = validate($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        header("Location: ../index.php?error=All fields are required");
        exit();
    } else {
        // Prepare and execute the SQL query
        $sql = "INSERT INTO message (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $result = $stmt->execute([$name, $email, $message]);

            if ($result) {
                header("Location: ../index.php?success=Your Message Sent successfully");
                exit();
            } else {
                header("Location: ../index.php?error=Database error");
                exit();
            }
        } else {
            header("Location: ../index.php?error=SQL statement preparation failed");
            exit();
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}