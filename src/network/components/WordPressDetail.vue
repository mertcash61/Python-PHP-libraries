<template>
  <div class="wordpress-detail">
    <h2>{{ library.name }}</h2>
    <p>{{ library.description }}</p>
    <a :href="library.link" class="button">Kütüphaneyi İncele</a>
  </div>
</template>

<script>
export default {
  name: 'WordPressDetail',
  props: {
    library: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
.wordpress-detail {
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
}
</style> 