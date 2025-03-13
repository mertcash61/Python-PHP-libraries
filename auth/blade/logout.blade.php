<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çıkış Yap</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-color: #f0f4f8; color: #333;">
    <div class="container" style="max-width: 400px; margin: auto; padding: 20px; background: #ffffff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #35424a;">Çıkış Yap</h2>
        <p style="text-align: center;">Çıkış yapmak istediğinize emin misiniz?</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" style="width: 100%; padding: 10px; background-color: #dc3545; color: white; border: none; border-radius: 4px; cursor: pointer;">Çıkış Yap</button>
        </form>
    </div>
</body>
</html> 