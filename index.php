<?php
// Basic variables
$title = "Azure Test Environment";
$message = "Nick is awesome.";
$date = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            text-align: center;
            padding-top: 80px;
        }
        .card {
            background: white;
            width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1 {
            color: #0078D4;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>🚀 Azure PHP App</h1>
    <h2><?php echo $message; ?></h2>
    <p>This app is running successfully in our Azure test environment.</p>
    <div class="footer">
        Server Time: <?php echo $date; ?>
    </div>
</div>

</body>
</html>