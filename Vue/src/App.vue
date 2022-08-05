<template>
  <div>
    <Header />
    <main>
      <router-view path="$router.key" />
    </main>
  </div>
</template>

<script>
import '@/style/global.css';
import Header from '@/components/Header';

export default {
  created() {
    this.$http.get("/ping").then((response) => {
      console.log(response)
    })
  },
  name: 'App',
  components: {
    Header,
  }
}
</script>
<style>
</style>