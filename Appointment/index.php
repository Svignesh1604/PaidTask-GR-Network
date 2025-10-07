<?php include 'db.php'; ?>

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

    $sql = "INSERT INTO visitors (name, email, phone, appointment_date, address, whom_to_meet, department, reason)
            VALUES ('$name', '$email', '$phone', '$date', '$address', '$whom', '$dept', '$reason')";

    if ($conn->query($sql)) {
        header("Location: receipt.php");
        exit();
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>
<!-- HTML FORM SAME AS BEFORE -->

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="sidebar">
    <h2>Visitors</h2>
    <a href="index.php">Home</a>
    <a href="new_visitors.php">New Visitors</a>
    <a href="manage_visitors.php">Manage Visitors</a>
    
</div>
<div class="content">
    <h1>Appointment Form</h1>
    <form method="POST" action="submit.php">
        
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Phone:</label>
    <input type="number" name="phone" required><br>

     <label>Aadhar no:</label>
    <input type="number" name="aadhar" required><br>

    <label>Appointment Date:</label>
    <input type="date" name="appointment_date" required><br>

    <label>Address:</label>
    <textarea name="address" required></textarea><br>

    <label>Whom to Meet:</label>
    <textarea name="whom_to_meet" required></textarea><br>

    <label>Department:</label>
    <select name="department" required>
        <option value="">--Select Department--</option>
        <option value="HR">HR</option>
        <option value="Administration">Administration</option>
        <option value="Technical">Technical</option>
        <option value="Finance">CEO</option>
    </select><br>

    <label>Reason for Visit:</label>
    <textarea name="reason" required></textarea><br>

    <button type="submit" name="submit">Submit</button>
</form>


   
</div>
</body>
</html>
