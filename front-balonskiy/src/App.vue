<template>
  <router-view/>
  <Toast position="bottom-right"/>
</template>

<script>
import authService from "@/services/auth.service";

export default {
  name: 'App',
  components: {},


  mounted() {
    authService.checkAuthorized()
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /*text-align: center;*/
  color: #2c3e50;
}
</style>
