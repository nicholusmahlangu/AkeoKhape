<?php
// passenger_insert.php
include '../php_config_files/db.php'; // Include database connection
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = password_hash($_POST['pswd'], PASSWORD_DEFAULT); // secure hashing

    // File Upload
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $fileName = basename($_FILES["idUpload"]["name"]);
    $targetFile = $uploadDir . time() . "_" . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = ['pdf', 'jpg', 'jpeg', 'png'];

    if (!in_array($fileType, $allowedTypes)) {
        die("Only PDF, JPG, JPEG, and PNG files are allowed.");
    }

    if (move_uploaded_file($_FILES["idUpload"]["tmp_name"], $targetFile)) {
        // Insert into DB
        $stmt = $conn->prepare("INSERT INTO passengers (fullName, email, phoneNumber, pswd, fileUpload) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fullname, $email, $phone, $password, $targetFile);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "File upload failed.";
    }
}

$conn->close();