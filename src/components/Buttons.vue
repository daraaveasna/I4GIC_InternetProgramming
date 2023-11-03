<template>
  <button class="Button-Box" :style="{backgroundColor: bgBtn}">
    <div class="Text">{{ TextBtn }}</div>
    <font-awesome-icon :icon="['fas', 'arrow-right-long']" class="arrow" />
  </button>
</template>

<script>
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
import {fas} from "@fortawesome/free-solid-svg-icons";
import {library} from "@fortawesome/fontawesome-svg-core";
library.add(fas);

export default {
  name: "Buttons",
  props: {
    TextBtn: String,
    bgBtn: String,
  },
  components: {
    FontAwesomeIcon,
  },
};
</script>

<style scoped>
.Button-Box {
  width: 130px;
  height: 40px;
  border-radius: 6px;
  border: none;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}
.Button-Box:hover {
  box-shadow: 3px 3px lightgray;
  transform: translate(3px, 3px);
  cursor: pointer;
}
.arrow {
  color: white;
  width: 35px;
  height: 16px;
}
.Text {
  font-family: "Quicksand", sans-serif;
  font-size: 14px;
  font-weight: 600;
  color: white;
}
</style>
