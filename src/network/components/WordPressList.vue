<template>
  <section>
    <h2>Popüler WordPress Kütüphaneleri</h2>
    <ul>
      <li v-for="library in libraries" :key="library.id">
        <a :href="library.link">{{ library.name }}</a> - {{ library.description }}
      </li>
    </ul>
  </section>
</template>

<script>
export default {
  name: 'WordPressList',
  data() {
    return {
      libraries: [
        { id: 1, name: 'WooCommerce', link: 'https://woocommerce.com/', description: 'E-ticaret için bir eklenti.' },
        { id: 2, name: 'Yoast SEO', link: 'https://yoast.com/wordpress/plugins/seo/', description: 'SEO optimizasyonu için bir eklenti.' },
        { id: 3, name: 'Elementor', link: 'https://elementor.com/', description: 'Sayfa oluşturucu eklentisi.' }
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