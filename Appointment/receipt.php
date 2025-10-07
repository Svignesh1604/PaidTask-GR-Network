<?php
session_start();
if (!isset($_SESSION['visitor'])) {
    header("Location: new_visitors.php");
    exit();
}

$data = $_SESSION['visitor'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Receipt</title>
    <link rel="stylesheet" href="style1.css">
    

</head>
<body>

<div class="receipt" id="receipt">
    <h2>Appointment Receipt</h2>
    <p><strong>Name:</strong> <?= htmlspecialchars($data['name']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($data['email']) ?></p>
    <p><strong>Phone:</strong> <?= htmlspecialchars($data['phone']) ?></p>
    <p><strong>Aadhar:</strong> <?= htmlspecialchars($data['aadhar']) ?></p>
    <p><strong>Appointment Date:</strong> <?= htmlspecialchars($data['appointment_date']) ?></p>
    <p><strong>Address:</strong> <?= nl2br(htmlspecialchars($data['address'])) ?></p>
    <p><strong>Whom to Meet:</strong> <?= nl2br(htmlspecialchars($data['whom_to_meet'])) ?></p>
    <p><strong>Department:</strong> <?= htmlspecialchars($data['department']) ?></p>
    <p><strong>Reason:</strong> <?= nl2br(htmlspecialchars($data['reason'])) ?></p>
    
</div>

<button class="btn" onclick="downloadPDF()">Download PDF</button>

<!-- html2pdf CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
function downloadPDF() {
    const element = document.getElementById('receipt');
    const opt = {
        margin:       0.5,
        filename:     'Appointment_Receipt.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    html2pdf().from(element).set(opt).save();
}
</script>

</body>
</html>
