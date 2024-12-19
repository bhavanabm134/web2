<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '';
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : '';
    $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : '';
    $address = isset($_POST["address"]) ? htmlspecialchars($_POST["address"]) : '';
    $languages=isset($_POST["languages"])?htmlspecialchars(string:$_POST["languages"]):'';

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Submission Details</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(to right, #6a11cb, #2575fc);
                padding: 20px;
                text-align: center;
            }
            .details {
                margin: 20px auto;
                padding: 20px;
                background: #fff;
                border-radius: 8px;
                max-width: 500px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            h2 {
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class='details'>
            <h2>Submission Details</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Address:</strong> $address</p>
        </div>
    </body>
    </html>";
}
?>