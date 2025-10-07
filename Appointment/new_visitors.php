<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>New Visitors</title>
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
    <h1>New Visitors</h1>
    <table>
        <tr>
            <th>Name</th><th>Email</th><th>Phone</th><th>Date</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM visitors ORDER BY created_at DESC LIMIT 5");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['appointment_date']}</td>
                  </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
