<?php

include "db_conn.php";


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $message = validate($_POST['message']);

    if (empty($name) || empty($email) ||  empty($phone) || empty($message)) {
        header("Location: ../contact.php?error=All fields are required");
        exit();
    } else {
        // Prepare and execute the SQL query
        $sql = "INSERT INTO message (name, email, phone, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $result = $stmt->execute([$name, $email, $phone, $message]);

            if ($result) {
                header("Location: ../contact.php?success=Your Message Sent successfully");
                exit();
            } else {
                header("Location: ../contact.php.php?error=Database error");
                exit();
            }
        } else {
            header("Location: ../contact.php?error=SQL statement preparation failed");
            exit();
        }
    }
} else {
    header("Location: ../contact.php");
    exit();
}