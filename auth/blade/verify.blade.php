<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-posta Doğrulama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #f0f4f8; color: #333;">
    <div class="container" style="max-width: 400px; margin: auto; padding: 20px; background: #ffffff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #35424a;">E-posta Doğrulama</h2>
        <p style="text-align: center;">E-posta adresinize bir doğrulama bağlantısı gönderildi. Lütfen e-postanızı kontrol edin.</p>
        <a href="{{ route('login') }}" style="display: block; text-align: center; padding: 10px; background-color: #007bff; color: white; border-radius: 4px; text-decoration: none;">Giriş Sayfasına Dön</a>
    </div>
</body>
</html> 