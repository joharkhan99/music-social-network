<template>
  <div id="CreatePost" class="container max-w-4xl mx-auto pt-20 pb-20 px-6">
    <div class="text-gray-900 text-xl">Create Post</div>
    <div class="bg-green-500 w-full h-1"></div>

    <CropperModal v-if="showModal" :minAspectRatioProp="{ width: 16, height: 9 }" :maxAspectRatioProp="{ width: 16, height: 9 }" @croppedImageData="setCroppedImageData" @showModal="showModal = false" />

    <div class="flex flex-wrap mt-4 mb-6">
      <div class="w-full md:w-1/2 px-3">
        <TextInput label="Title" :labelColor="true" placeholder="Awesome COncert!!!" v-model:input="title" inputType="text" error="this is test error" />
      </div>

      <div class="w-full md:w-1/2 px-3">
        <TextInput label="Location" :labelColor="true" placeholder="Islamabad, Pakistan" v-model:input="location" inputType="text" error="this is test error" />
      </div>
    </div>

    <div class="flex flex-wrap mt-4 mb-6">
      <div class="w-full md:w-1/2 px-3">
        <DisplayCropperButton label="Post Picture" btnText="Post Picture" @showModal="showModal = true" />
      </div>
    </div>

    <div class="flex flex-wrap mt-4 mb-6">
      <div class="w-full md:w-1/2 px-3">
        <CroppedImage label="Cropped Image" btn :image="image" />
      </div>
    </div>

    <div class="flex flex-wrap mt-4 mb-6">
      <div class="w-full px-3">
        <TextArea label="Description" placeholder="Please enter some information here" v-model="description" error="this is test error" />
      </div>
    </div>

    <div class="flex flex-wrap mt-8 mb-6">
      <div class="w-full md:w-1/2 px-3">
        <SubmitFormButton btnText="Create Post" />
      </div>
    </div>

  </div>
</template>

<script setup>
import TextInput from '@/components/global/TextInput.vue';
import { ref } from 'vue';
import DisplayCropperButton from '@/components/global/DisplayCropperButton.vue';
import TextArea from '@/components/global/TextArea.vue';
import SubmitFormButton from '@/components/global/SubmitFormButton.vue';
import CropperModal from '@/components/global/CropperModal.vue';
import CroppedImage from '@/components/global/CroppedImage.vue';

let showModal = ref(false);
let title = ref(null);
let location = ref(null);
let description = ref(null);
// let imageData = null;
let image = ref(null);

const setCroppedImageData = (data) => {
  // imageData = data;
  image.value = data.imageUrl
}


</script>