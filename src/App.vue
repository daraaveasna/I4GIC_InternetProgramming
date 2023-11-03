<template>
  <div class="Box">
    <ProductPage />
    <CardsPage />
  </div>
</template>

<script>
import CardsPage from "./views/CardsPage.vue";
import ProductPage from "./views/ProductPage.vue";

export default {
  name: "App",
  components: {
    ProductPage,
    CardsPage,
  },
};
</script>

<style scoped>
.Box {
  margin: auto;
  width: 1500px;
  /* border: 1px solid blue; */
}
</style>
