<?php
include 'db.php';
$id = $_GET['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['appointment_date'];

    $conn->query("UPDATE visitors SET name='$name', email='$email', phone='$phone', appointment_date='$date' WHERE id=$id");
    header("Location: manage_visitors.php");
}

$result = $conn->query("SELECT * FROM visitors WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!--  -->
<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM visitors WHERE id=$id");
header("Location: manage_visitors.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Visitor</title>
</head>
<body>
<h1>Edit Visitor</h1>
<form method="POST">
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>
    <input type="date" name="appointment_date" value="<?php echo $row['appointment_date']; ?>" required><br>
    <button type="submit" name="update">Update</button>
</form>
</body>
</html>
