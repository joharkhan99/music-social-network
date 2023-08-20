<template>
  <div id="AddYoutubeVideo" class="container max-w-4xl mx-auto pt-20 pb-20 px-6">
    <div class="text-gray-900 text-xl">AddYoutubeVideo</div>

    <div class="bg-green-500 w-full h-1 mb-4"></div>

    <TextInput label="Title" :labelColor="true" placeholder="Cool new song" v-model:input="title" inputType="text" error="this is test error" class="mb-6" />

    <TextInput label="Video URL" :labelColor="true" placeholder="kasdklakd" v-model:input="VideoCode" inputType="text" error="this is test error" class="mb-6" />

    <SubmitFormButton btnText="Add Video" />

  </div>
</template>

<script setup>
import TextInput from '@/components/global/TextInput.vue';
import SubmitFormButton from '@/components/global/SubmitFormButton.vue';
</script>