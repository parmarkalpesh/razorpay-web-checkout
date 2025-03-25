<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        .success-container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #28a745; /* Green for success */
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 30px;
        }

        .button {
            background-color: #007bff; /* Blue button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="success-container">
        <h1>Payment Successful!</h1>
        <p>Thank you for your payment. Your transaction has been completed successfully.</p>
        <a href="./index.php" class="button">Return to Homepage</a>
    </div>
</body>
</html>