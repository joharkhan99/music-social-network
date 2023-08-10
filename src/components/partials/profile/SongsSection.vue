<template>
  <div>
    <div class="mx-auto py-4">
      <div class="flex flex-wrap font-bold text-gray-100">
        <div class="text-gray-900 text-xl">Songs</div>
        <div class="bg-geen-500 w-full h-1"></div>

        <div class="w-full mt-4">
          <RouterLinkButton btn-text="Delete Song" color="red" url="/account/delete-song" />
          <RouterLinkButton btn-text="Add Song" color="green" url="/account/add-song" class="mr-2" />
        </div>

      </div>
    </div>

    <div class="pb-4">
      <SongPlayer />
    </div>
  </div>
</template>

<script setup>
import RouterLinkButton from '@/components/global/RouterLinkButton.vue';
import SongPlayer from '@/components/partials/profile/SongPlayer.vue';
</script>