

<?php
include 'db.php';


?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Visitors</title>
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
    <h1>Manage Visitors</h1>
    <table>
    <tr>
        <th>Name</th><th>Email</th><th>Phone</th><th>Appointment Date</th>
        <th>Department</th><th>Whom to Meet</th><th>Reason</th>
        <th>Status</th><th>Actions</th>
    </tr>

   

    <?php
    $result = $conn->query("SELECT * FROM visitors");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td>" . $row['appointment_date'] . "</td>
            <td>" . $row['department'] . "</td>
            <td>" . $row['whom_to_meet'] . "</td>
            <td>" . $row['reason'] . "</td>
            <td>" . $row['status'] . "</td>
            
            <td>
                <form method='post' action='update_status.php' style='display:inline;'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <input type='hidden' name='status' value='" . ($row['status'] == 'Inside' ? 'Outside' : 'Inside') . "'>
                    <button type='submit'>" . ($row['status'] == 'Inside' ? 'Mark Out' : 'Mark In') . "</button>
                </form>
            </td>
        </tr>";
    }
    ?>
</table>
 


</div>
</body>
</html>
