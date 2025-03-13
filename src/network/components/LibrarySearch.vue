<template>
  <div class="library-search">
    <input type="text" v-model="searchQuery" placeholder="Kütüphane ara..." />
    <button @click="searchLibrary">Ara</button>
  </div>
</template>

<script>
export default {
  name: 'LibrarySearch',
  data() {
    return {
      searchQuery: ''
    }
  },
  methods: {
    searchLibrary() {
      // Arama işlemi burada yapılacak
      console.log('Arama yapılıyor:', this.searchQuery);
    }
  }
}
</script>

<style scoped>
.library-search {
  margin-bottom: 20px;
}

.library-search input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.library-search button {
  padding: 10px 15px;
  margin-left: 5px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.library-search button:hover {
  background-color: #0056b3;
}
</style> 