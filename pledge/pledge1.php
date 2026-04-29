<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITM- Yoga Pledge</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="pledge.css">
</head>
<body>
    <div class="container">
        <h1>INTERNATIONAL YOGA DAY 2024</h1>
        <h3>मैं शपथ लेता/लेती हूँ कि मैं स्वयं तथा अपने परिवार के साथ नियमित रूप से योगाभ्यास कर योग को जीवन शैली के रूप में आत्मसात करूंगा/करूंगी।</h3>
        <h3>I pledge to imbibe yoga as a lifestyle by practicing it regularly, both for myself and with my family.</h3>
        <div class="main-content">
            <div class="left">
                <h1 style="color: #E0636F;">Take the Pledge/ शपथ लें</h1>
                
                <?php
                // Database connection settings
                $conn = new mysqli('localhost', 'root', '', 'iitmyoga');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $error = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $college = $_POST['college'];
                    $other = $_POST['otherText'];
                    $name = $_POST['stuname'];
                    $email = $_POST['email'];

                    // Check if email already exists
                    $sql_email_check = 'SELECT * FROM students WHERE email = ?';
                    $stmt = $conn->prepare($sql_email_check);
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        // Email already registered
                        $error = "Your email is already registered.";
                    } else {
                        // Insert the new record
                        $sql_insert_data = "INSERT INTO students (college, otherText, stuname, email) VALUES (?, ?, ?, ?)";
                        $stmt = $conn->prepare($sql_insert_data);
                        $stmt->bind_param("ssss", $college, $other, $name, $email);

                        if ($stmt->execute()) {
                            echo "Registration successful!";
                        } else {
                            echo "Error: " . $sql_insert_data . "<br>" . $conn->error;
                        }
                    }

                    $stmt->close();
                }

                $conn->close();
                ?>

                <form id="certificateForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="myDropdown">Select College:</label>
                    <select id="myDropdown" name="college" onchange="showOtherInput()">
                        <option value="Institute of Information Technology & Management, Janakpuri">Institute of Information Technology & Management, Janakpuri</option>
                        <option value="Others">Others</option>
                    </select>
                    <div id="otherInput" style="display:none;">
                        <label for="otherText">Please specify:</label>
                        <input type="text" id="otherText" name="otherText">
                    </div>
                    <label for="name">Enter Your Name:</label>
                    <input type="text" id="name" name="stuname" required>
                    <label for="email">Enter Your Email:</label>
                    <input type="email" id="email" name="email" required>
                    <?php if (!empty($error)): ?>
                        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
                    <?php endif; ?>
                    <p id="emailError" style="color: red;"></p>
                    <input type="submit" value="Download Certificate">
                </form>
            </div>
            <div class="right">
                <img src="yoga.jpg" alt="Yoga_Pic">
            </div>
        </div>
    </div>
    <canvas id="certificateCanvas" style="display:none;"></canvas>
    <script src="pledge.js"></script>
</body>
</html>
