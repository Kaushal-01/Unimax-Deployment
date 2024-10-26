<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us!</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .confirmation-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
        }
        h1 {
            color: #000000;
        }
        p {
            color: #1b1919;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #070606;
            background-color: #6fb4d1;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #3f81a0;
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <?php
            // Retrieve the user's name from the URL
            $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Valued Customer';
        ?>
        <h1>Thank You, <?php echo $name; ?>!</h1>
        <p>Your message has been successfully sent to <strong>Unimax Surveillance & HR Management Pvt. Ltd.</strong></p>
        <p>We appreciate you reaching out and will respond as soon as possible.</p>
        <a href="index.html" class="button">Return to Homepage</a>
    </div>
</body>
</html>
