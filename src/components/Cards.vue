<template>
  <div class="Cards-Box" :style="{backgroundColor: bg}">
    <div>
      <div class="Text">{{ Text }}</div>
      <div class="btn">
        <Buttons :bgBtn="bgBtn" :TextBtn="TextBtn" />
      </div>
    </div>
    <img class="Img" :src="Img" alt="Item" />
  </div>
</template>

<script>
import Buttons from "./Buttons.vue";
export default {
  name: "Cards",
  props: {
    Img: String,
    Text: String,
    bg: String,
    bgBtn: String,
    TextBtn: String,
  },
  components: {
    Buttons,
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.Cards-Box {
  width: 482px;
  height: 300px;
  border: 1px solid rgba(129, 177, 61, 1);
  border-radius: 10px;
  margin-top: 20px;
  box-shadow: 10px 10px lightgray;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.Cards-Box:hover {
  box-shadow: 5px 5px lightgray;
  transform: translate(3px, 3px);
  cursor: pointer;
  border: 1px solid #eee;
}
.Img {
  margin-top: 80px;
  margin-left: 28px;
  width: 450px;
}
.Text {
  font-family: "Quicksand", sans-serif;
  font-size: 22px;
  width: 240px;
  color: rgba(37, 61, 78, 1);
  font-weight: 800;
  position: absolute;
  top: 60px;
  left: 40px;
}
.btn {
  position: absolute;
  bottom: 90px;
  left: 40px;
}
</style>
