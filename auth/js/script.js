document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Varsayılan davranışı engelle
            const url = this.href;
            console.log('Bağlantıya tıklandı:', url);
            // Burada AJAX isteği yapabilir veya başka bir işlem gerçekleştirebilirsiniz
        });
    });
});
