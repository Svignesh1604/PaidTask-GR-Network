<?php
include 'db.php';
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['visitor'] = $_POST;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['appointment_date'];
    $address = $_POST['address'];
    $whom = $_POST['whom_to_meet'];
    $dept = $_POST['department'];
    $reason = $_POST['reason'];
    $aadhar = $_POST['aadhar'];

    // Use prepared statement for safety
    $stmt = $conn->prepare("INSERT INTO visitors 
        (name, email, phone, appointment_date, address, whom_to_meet, department, reason, aadhar) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssss", $name, $email, $phone, $date, $address, $whom, $dept, $reason, $aadhar);

    if ($stmt->execute()) {
        header("Location: receipt.php");
        exit();
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
