<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uygulama Başlığı</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header style="background-color: #35424a; color: #ffffff; padding: 20px; text-align: center;">
        <h1>Python ve PHP Kütüphaneleri</h1>
        <nav>
            <ul style="list-style-type: none; padding: 0;">
                <li style="display: inline; margin: 0 15px;"><a href="{{ route('home') }}" style="color: #ffffff; text-decoration: none;">Ana Sayfa</a></li>
                <li style="display: inline; margin: 0 15px;"><a href="{{ route('about') }}" style="color: #ffffff; text-decoration: none;">Hakkında</a></li>
                <li style="display: inline; margin: 0 15px;"><a href="{{ route('contact') }}" style="color: #ffffff; text-decoration: none;">İletişim</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
