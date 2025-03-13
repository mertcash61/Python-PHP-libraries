<template>
  <div id="app">
    <Header />
    <LibraryList />
    <WordPressList />
    <Footer />
  </div>
</template>

<script>
import Header from './components/Header.vue';
import LibraryList from './components/LibraryList.vue';
import WordPressList from './components/WordPressList.vue';
import Footer from './components/Footer.vue';

export default {
  name: 'App',
  components: {
    Header,
    LibraryList,
    WordPressList,
    Footer
  }
}
</script>

<style>
@import './styles/main.scss';
</style> 