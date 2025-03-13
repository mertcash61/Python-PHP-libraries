<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoş Geldiniz</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #e9ecef; color: #333;">
    <div class="container" style="max-width: 600px; margin: auto; padding: 20px; background: #ffffff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #35424a;">Hoş Geldiniz!</h1>
        <p style="text-align: center;">Başarılı bir şekilde giriş yaptınız.</p>
        <a href="{{ route('home') }}" style="display: block; text-align: center; padding: 10px; background-color: #28a745; color: white; border-radius: 4px; text-decoration: none;">Ana Sayfaya Git</a>
    </div>
</body>
</html>
