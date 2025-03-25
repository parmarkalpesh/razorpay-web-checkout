<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            max-width: 600px;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #4a148c;
            font-weight: 600;
        }
        .form-label {
            font-weight: 500;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #6a11cb;
            outline: none;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -10px;
            margin-left: -10px;
        }
        .col-md-6, .col-md-3 {
            padding-right: 10px;
            padding-left: 10px;
            box-sizing: border-box;
        }
        .col-md-6 {
            width: 50%;
        }
        .col-md-3 {
            width: 25%;
        }
        .btn {
            width: 100%;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Form</h2>
        <form method="post" action="./payscript.php">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text"name="address" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Contact Number</label>
                <input type="tel" name="contact" class="form-control" required>
            </div>
            
            <button type="submit" class="btn">Place Order</button>
        </form>
    </div>
</body>
</html>