<template>
    <div class="col-span-1 lg:col-span-4 order-first lg:order-last">
      <h4 class="text-3xl text-gray-700 mb-5">Order Summary</h4>
      <div class="p-10 rounded-md shadow-md bg-white">
        <Item v-for="(item, i) in items" :key="i" :item="item" />
      </div>
    </div>
  </template>
  
  <script>
// Assuming Item.vue is in the same directory as Summary.vue
import Item from "./Item.vue";
  
  export default {
    name: "Summary",
    props: {
      items: Object,
    },
    components: {
      Item,
    },
    data() {
      return {};
    },
  };
  </script>
  