<template>
  <section>
    <h2>Popüler Kütüphaneler</h2>
    <ul>
      <li v-for="library in libraries" :key="library.id">
        <a :href="library.link">{{ library.name }}</a> - {{ library.description }}
      </li>
    </ul>
  </section>
</template>

<script>
export default {
  name: 'LibraryList',
  data() {
    return {
      libraries: [
        { id: 1, name: 'NumPy', link: 'https://pypi.org/project/numpy/', description: 'Sayısal hesaplamalar için.' },
        { id: 2, name: 'Pandas', link: 'https://pypi.org/project/pandas/', description: 'Veri analizi ve manipülasyonu için.' },
        { id: 3, name: 'Matplotlib', link: 'https://pypi.org/project/matplotlib/', description: 'Veri görselleştirme için.' },
        { id: 4, name: 'Scikit-learn', link: 'https://pypi.org/project/scikit-learn/', description: 'Makine öğrenimi için.' },
        { id: 5, name: 'Symfony', link: 'https://packagist.org/packages/symfony/symfony', description: 'PHP için bir framework.' },
        { id: 6, name: 'Laravel', link: 'https://packagist.org/packages/laravel/laravel', description: 'Modern web uygulamaları için bir framework.' }
      ]
    }
  }
}
</script>

<style scoped>
ul {
  list-style-type: none;
  padding: 0;
}

ul li {
  background: #ffffff;
  margin: 10px 0;
  padding: 15px;
  border-radius: 5px;
  transition: background-color 0.3s, transform 0.2s;
}

ul li:hover {
  background-color: #e9ecef;
  transform: scale(1.02);
}
</style> 