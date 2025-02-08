<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: #FA5B0F;
            color: #ffffff;
            text-align: center;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            font-size: 20px;
        }
        .email-content {
            padding: 20px;
            color: #333;
        }
        .email-content p {
            margin: 10px 0;
        }
        .email-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .email-button {
            display: inline-block;
            background: #FA5B0F;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">New Customer Message</div>
        <div class="email-content">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['mobile'] }}</p>
            <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
            <p><strong>Message:</strong> {{ $data['message'] }}</p>
        </div>
        <div class="email-footer">
            Thanks
        </div>
    </div>
</body>
</html>
