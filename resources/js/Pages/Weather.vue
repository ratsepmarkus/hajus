<template>
  <div class="bg-blue-300 w-80 h-72 m-8 static rounded-lg mx-auto">
    <div
      class="bg-gray-100 w-80 h-72 -m-2 hover:m-0 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
      <h1 class="m-4 text-2xl font-bold">{{ data.name }}</h1>
      <h1 class="m-4 text-xl font-bold">Weather: {{ data.weather[0].main }}</h1>
      <hr class="m-4 rounded-2xl border-t-2">
      <p class="m-4 text-md font-bold">🌡️Temperature: {{ data.main.temp }}</p>
      <p class="m-4 text-md font-bold">❗Feels like: {{data.main.feels_like}}</p>
      <p class="m-4 text-md font-bold">💨Wind: {{data.wind.speed}}</p>
    </div>
  </div>

</template>
<script>
export default {
  props: { data: String },
};
// export default { layoutName: "Authenticated" };
</script>
<script setup>
import { Head } from "@inertiajs/inertia-vue3";
</script>
<style scoped>
</style>