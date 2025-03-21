<template>
  <Head title="User Management" />
  <MainLayout>
    <div>
      <!-- Progress Bar -->
      <div class="fixed left-0 w-full h-2 bg-gray-300 z-50">
        <div class="h-full bg-purple-500" :style="{ width: progress + '%' }"></div>
      </div>

      <div>
        <div class="max-w-6xl mx-auto p-8">
          <h1 class="text-4xl font-bold mt-8">{{ announcement.title }}</h1>
          <div class="flex items-center mb-8">
            <div>
              <div class="h-2 w-full mb-3 text-gray-600 font-medium italic">
                {{ announcement.user.department }} | Posted: {{ formatDate(announcement.created_at) }}
              </div>
            </div>
          </div>
          <p class="text-lg leading-8 mb-20" v-html="announcement.content"></p>

          <!-- Display Images with Lightbox -->
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <img 
              v-for="(img, index) in announcement.image" 
              :key="index" 
              :src="img" 
              alt="Announcement Image" 
              class="w-full h-60 object-cover shadow-md hover:cursor-zoom-in"
              @click="showLightbox(img, index)"
            />
          </div>
          <!-- <div class="relative mb-8 flex flex-col items-center">
            <div class="w-full mb-4">
              <img v-for="(img, index) in announcement.image" 
              :key="index" 
              :src="img" 
              alt="Post Image" 
              class="object-cover w-full rounded-lg hover:cursor-zoom-in mb-4" 
              @click="showLightbox(index)"/>
            </div>
          </div> -->

          <!-- Lightbox Component -->
          <vue-easy-lightbox 
            :visible="lightboxVisible"
            :imgs="announcement.image"
            :index="lightboxIndex"
            @hide="lightboxVisible = false"
          />
        </div>
      </div>
    </div>
  </MainLayout>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import VueEasyLightbox from 'vue-easy-lightbox';

const props = defineProps({
  announcement: {
    type: Object, // Changed from Array to Object since announcement should be an object
    required: true
  },
});

const formatDate = (dateString) => {
  const date = new Date(dateString);
  return new Intl.DateTimeFormat('en-US', { 
    month: 'long', 
    day: 'numeric', 
    year: 'numeric', 
  }).format(date);
};

// Lightbox state
const lightboxVisible = ref(false);
const lightboxIndex = ref(0);

// Function to show lightbox
const showLightbox = (img, index) => {
  lightboxIndex.value = index;
  lightboxVisible.value = true;
};

// Scroll Progress Bar
const progress = ref(0);

const updateProgress = () => {
  const scrollY = window.pageYOffset || document.documentElement.scrollTop;
  const winHeight = window.innerHeight || document.documentElement.clientHeight;
  const docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
  progress.value = (scrollY / (docHeight - winHeight)) * 100;
};

onMounted(() => {
  window.addEventListener("scroll", updateProgress);
});

onBeforeUnmount(() => {
  window.removeEventListener("scroll", updateProgress);
});
</script>

<style scoped>
/* Add any custom styles here */
</style>
