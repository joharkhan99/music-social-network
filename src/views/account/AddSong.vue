<template>
  <div id="AddSong" class="container max-w-4xl mx-auto pt-20 pb-20 px-6">
    <div class="text-gray-900 text-xl">Edit Profile</div>

    <div class="bg-green-500 w-full h-1 mb-4"></div>

    <TextInput label="Title" :labelColor="true" placeholder="John" v-model:input="title" inputType="text" error="this is test error" class="mb-6" />

    <div class="w-full">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Select Image</label>


      <input type="file" id="image" ref="fileInput"
        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-400 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        @change="getUploadedImage">

    </div>

    <SubmitFormButton btnText="Add Song" />

  </div>
</template>

<script setup>
import TextInput from '@/components/global/TextInput.vue';
import SubmitFormButton from '@/components/global/SubmitFormButton.vue';
</script>