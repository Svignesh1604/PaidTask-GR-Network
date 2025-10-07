<?php
include 'config.php';

if (isset($_POST['payment_id'])) {
    $payment_id = $_POST['payment_id'];
    $status = "Success";
    $date = date("Y-m-d H:i:s");

    $stmt = $conn->prepare("INSERT INTO payments (payment_id, status, date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $payment_id, $status, $date);

    if ($stmt->execute()) {
        echo "Payment Successful!";
    } else {
        echo "Error saving payment.";
    }
}
?>
