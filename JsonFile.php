<?php

// JSON dosyasının yolu
$jsonFilePath = 'composer.json';

// JSON dosyasını oku
if (file_exists($jsonFilePath)) {
    $jsonContent = file_get_contents($jsonFilePath);
    
    // JSON verisini diziye dönüştür
    $data = json_decode($jsonContent, true);
    
    // Hata kontrolü
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('JSON verisi okunamadı: ' . json_last_error_msg());
    }

    // Veriyi işleme
    echo "Proje Adı: " . htmlspecialchars($data['name']) . PHP_EOL;
    echo "Açıklama: " . htmlspecialchars($data['description']) . PHP_EOL;
    echo "Gerekli Kütüphaneler:" . PHP_EOL;

    foreach ($data['require'] as $package => $version) {
        echo "- $package: $version" . PHP_EOL;
    }
} else {
    die('JSON dosyası bulunamadı.');
} 