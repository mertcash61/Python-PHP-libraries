// JavaScript işlevselliği eklemek için burayı kullanabilirsiniz.

document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Varsayılan davranışı engelle
            const url = this.href;
            console.log('Bağlantıya tıklandı:', url);
            // Burada AJAX isteği yapabilir veya başka bir işlem gerçekleştirebilirsiniz
            alert(`Bu bağlantıya tıkladınız: ${this.innerText}`); // Tıklanan bağlantının ismini göster
            window.location.href = url; // Bağlantıya yönlendir
        });
    });

    const title = document.getElementById('main-title');

    title.addEventListener('mouseover', function() {
        title.style.color = '#ff4500'; // Üzerine gelindiğinde renk değişimi
    });

    title.addEventListener('mouseout', function() {
        title.style.color = ''; // Rengi eski haline döndür
    });
});
