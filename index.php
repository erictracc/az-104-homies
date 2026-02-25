<?php
session_start();

// Page Variables
$title = "Azure Test Environment";
$message = "Nick is awesome.";
$date = date("Y-m-d H:i:s");

// Session Counter
if (!isset($_SESSION['clicks'])) {
    $_SESSION['clicks'] = 0;
}

if (isset($_POST['increment'])) {
    $_SESSION['clicks']++;
}

$reasons = [
    "Because he builds apps in Azure.",
    "Because he deploys like a cloud engineer.",
    "Because infrastructure meetings don’t scare him.",
    "Because PHP + Azure = power combo."
];

$randomReason = $reasons[array_rand($reasons)];
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
            padding-top: 60px;
            transition: background-color 0.3s;
        }
        .dark {
            background-color: #1e1e1e;
            color: white;
        }
        .card {
            background: white;
            width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0,0,0,0.15);
        }
        .dark .card {
            background: #2c2c2c;
        }
        h1 {
            color: #0078D4;
        }
        button {
            padding: 10px 20px;
            margin: 8px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            background-color: #0078D4;
            color: white;
            font-weight: bold;
        }
        button:hover {
            background-color: #005a9e;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
        }
    </style>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle("dark");
        }
    </script>
</head>

<body>

<div class="card">
    <h1>🚀 Azure PHP Interactive App</h1>
    <h2><?php echo $message; ?></h2>

    <p><strong>Why?</strong> <?php echo $randomReason; ?></p>

    <form method="POST">
        <button type="submit" name="increment">Increase Counter</button>
    </form>

    <p>Button clicked: <strong><?php echo $_SESSION['clicks']; ?></strong> times</p>

    <button onclick="window.location.reload();">Refresh Server Time</button>
    <button onclick="toggleDarkMode();">Toggle Dark Mode</button>

    <div class="footer">
        Server Time: <?php echo $date; ?>
    </div>
</div>

</body>
</html>