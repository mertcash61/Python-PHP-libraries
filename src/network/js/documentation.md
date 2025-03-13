# Proje Kütüphaneleri Dokümantasyonu

Bu doküman, projede kullanılan kütüphanelerin nasıl çalıştığını ve nasıl entegre edildiğini açıklamaktadır.

## 1. Vue.js
Vue.js, kullanıcı arayüzleri oluşturmak için kullanılan bir JavaScript framework'üdür. Projemizde bileşen tabanlı bir yapı kullanarak, uygulamanın farklı bölümlerini modüler hale getiriyoruz.

### Kullanım
- **Bileşenler**: Projede `Header`, `LibraryList`, `WordPressList` ve `Footer` gibi bileşenler bulunmaktadır.
- **Veri Yönetimi**: Her bileşen, kendi verilerini yönetir ve kullanıcı etkileşimlerine yanıt verir.

## 2. SCSS
SCSS, CSS'in bir ön işleyicisidir ve daha karmaşık stil yapıları oluşturmak için kullanılır. Değişkenler, iç içe geçmiş kurallar ve mixin'ler gibi özellikler sunar.

### Kullanım
- **Değişkenler**: `variables.scss` dosyasında renk ve yazı tipi gibi değişkenler tanımlanmıştır.
- **Ana Stil Dosyası**: `main.scss` dosyası, tüm stil ayarlarını içermektedir.

## 3. Axios
Axios, HTTP istekleri yapmak için kullanılan bir kütüphanedir. API ile etkileşimde bulunmak için kullanılır.

### Kullanım
- **Veri Çekme**: `fetchLibraries` fonksiyonu, `/libraries` endpoint'ine GET isteği yaparak kütüphane verilerini çeker.
- **Hata Yönetimi**: İstek sırasında bir hata oluşursa, hata mesajı konsola yazdırılır.

## 4. Flask (Python)
Flask, Python ile yazılmış bir mikro web framework'üdür. API oluşturmak için kullanılır.

### Kullanım
- **API Endpoint**: `/libraries` endpoint'i, kütüphane verilerini JSON formatında döndürür.
- **Veri Yapısı**: Kütüphaneler, id, isim, bağlantı ve açıklama gibi alanları içerir.

## 5. SQL
SQL, veritabanı yönetimi için kullanılan bir dildir. Projemizde kütüphane verilerini saklamak için kullanılır.

### Kullanım
- **Tablo Oluşturma**: `create_tables.sql` dosyasında, kütüphaneler için bir tablo oluşturulmuştur.
- **Veri Ekleme**: Kütüphane verileri, uygulama çalışırken veritabanına eklenir.

## Sonuç
Bu doküman, projede kullanılan kütüphanelerin nasıl çalıştığını ve nasıl entegre edildiğini açıklamaktadır. Herhangi bir sorunuz veya ek isteğiniz varsa, lütfen belirtin!