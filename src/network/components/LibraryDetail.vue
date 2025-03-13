<template>
  <div class="library-detail">
    <h2>{{ library.name }}</h2>
    <p>{{ library.description }}</p>
    <a :href="library.link" class="button">Kütüphaneyi İncele</a>
  </div>
</template>

<script>
export default {
  name: 'LibraryDetail',
  props: {
    library: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
.library-detail {
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
}
</style> 