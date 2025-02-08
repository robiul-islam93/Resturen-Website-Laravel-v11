<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7e695c;
            margin: 0;
            padding: 0;
        }
        .email-container {
            align-items: end;
            max-width: 800px;
            background: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .email-header {
            background: #FA5B0F;
            color: #ffffff;
            text-align: center;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            font-size: 24px;
            font-weight: bold;
        }
        .email-content {
            padding: 20px;
            color: #333;
        }
        .email-content p {
            font-size: 18px;
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
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">🎉 Congratulations! 🎉</div>
        <div class="email-content">
            <p>We are thrilled to share this exciting moment with you!</p>
            <p>Congratulations on your achievement!</p>
            <a href="{{url('/')}}" class="email-button">Go Home</a>
        </div>
        <div class="email-footer">
            Best wishes
        </div>
    </div>
</body>
</html>
