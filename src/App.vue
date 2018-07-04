<template>
  <div id="app">
    <menu-header></menu-header>
    <router-view/>
  </div>
</template>

<script>

import MenuHeader from './components/MenuHeader'  

export default {
  name: 'App',
  components: {
    MenuHeader,
  },
}
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
