<?php
$conn = new mysqli('localhost', 'iitmjkac_Gautam123', 'Gautam@123+##', 'iitmjkac_Information');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $sql_email_check = 'SELECT * FROM students WHERE email = ?';
    $stmt = $conn->prepare($sql_email_check);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo 'exists';
    } else {
        echo 'available';
    }

    $stmt->close();
}

$conn->close();
?>
