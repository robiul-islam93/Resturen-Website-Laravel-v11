<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-header {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .email-body {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .email-footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-header">
        <img src="{{ asset('adminpanel/icons/logo/my-logo.png') }}" alt="Logo" style="height: 50px;">
        <h1>{{ config('app.name') }}</h1>
    </div>
    <div class="email-body">
        {{ $slot }}
        {{ isset($subcopy) ? $subcopy : '' }}
    </div>
    <div class="email-footer">
        &copy; {{ now()->year }} {{ config('app.name') }}. All rights reserved.
    </div>
</body>
</html>
