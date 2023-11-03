<template>
  <div class="content">
    <h2 class="gradient-text">This is my first VueJS project</h2>
    <button class="mybtn" @click="goToTP2">TP02</button>
  </div>
</template>

<script>
export default {
  methods: {
    goToTP2() {
      this.$router.push("/tp2");
    },
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "JetBrains Mono", monospace;
  background: #fff;
}
.gradient-text {
  font: bold;
  background: linear-gradient(to right, hsl(98 100% 62%), hsl(204 100% 59%));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 1.5rem;
  text-align: center;
  margin: 1rem 0;
}
.scrollbar-black::-webkit-scrollbar-thumb {
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
  background-color: #000;
}
.content {
  text-align: center;
  padding: 10px;
}
.mybtn {
  color: white;
  background-color: #4caf50;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  margin-top: 20px;
}
.mybtn:hover {
  background-color: #3e8e41;
}
</style>
