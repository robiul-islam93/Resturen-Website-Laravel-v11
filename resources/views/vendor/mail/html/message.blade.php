<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
</head>
<body>
    <p>You are receiving this email because we received a password reset request for your account.</p>
    <p>If you did not request a password reset, no further action is required.</p>
    <p><strong>Click the button below to reset your password:</strong></p>
    <p>
        <a href="{{ $resetUrl }}" 
           style="background-color:rgb(5, 85, 155); color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            Reset Password
        </a>
    </p>
    <!-- <p>If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:</p>
    <p>{{ $resetUrl }}</p> -->
</body>
</html>
