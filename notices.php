<?php
// Replace these values with your own database credentials
$host = 'localhost';
$dbname = 'iitmjkac_Information';
$username = 'iitmjkac_Gautam123';
$password = 'Gautam@123+##';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the query to fetch data from the AllNotices table
    $stmt = $pdo->query("SELECT notice_title, file_path, date_uploaded FROM AllNotices ORDER BY notice_id DESC");

    // Fetch all rows as an associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Notices</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
      margin: 0;
      padding: 0;
    }

    .hero-section {
      background-color: #800000;
      color: #fff;
      text-align: center;
      padding: 50px;
      margin: 0;
    }

    .hero-section h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .back-button {
      margin-top: 20px;
    }
        .container {
            text-align: center;
            margin-top: 50px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #f2f2f2;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <div class="hero-section">
        <h1>All Notices</h1>
        <a href="http://www.iitmjanakpuri.com" class="btn btn-light back-button">Back</a>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S. No.</th>
                    <th>Notice</th>
                    <th>Date Uploaded</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Counter to track the row number
                $rowNumber = 1;
                
                // Loop through each row and display the data
                foreach ($rows as $row) {
                    $noticeTitle = $row['notice_title'];
                    $filePath = $row['file_path'];
                    $dateUploaded = $row['date_uploaded'];

                    // Generate the hyperlink for the notice_title
                    $noticeLink = '<a target="_blank" href="' . $filePath . '">' . $noticeTitle . '</a>';
                    
                    echo '<tr>';
                    echo '<td>' . $rowNumber . '</td>';
                    echo '<td>' . $noticeLink . '</td>';
                    echo '<td>' . $dateUploaded . '</td>';
                    echo '</tr>';

                    // Increment the row number for the next iteration
                    $rowNumber++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>