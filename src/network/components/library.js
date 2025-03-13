export function fetchLibraries() {
  return fetch('/libraries')
    .then(response => response.json())
    .then(data => {
      console.log('Kütüphaneler:', data);
      return data;
    })
    .catch(error => {
      console.error('Hata:', error);
    });
} 