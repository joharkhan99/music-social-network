<template>
  <div>
    <label class="block uppercase traking-wide text-xs font-bold mb-2">
      {{ label }}
    </label>

    <img :src="image" class="rounded w-full border-solid border-4 border-green-500">

  </div>
</template>

<script setup>
import { defineProps, toRefs } from 'vue';

const props = defineProps({
  label: String,
  image: String,
});

const { label, image } = toRefs(props);
</script>