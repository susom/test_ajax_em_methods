<template>
  <div id="app">
    <div class="row">
      <div class="col-12">
        <JSMO/>
      </div>
    </div>
  </div>
</template>

<script>
import JSMO from "@/components/JSMO.vue";

export default {
  name: 'App',
  components: {
    JSMO
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
