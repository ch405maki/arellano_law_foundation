<template>
    <Head title="User Management" />
    <MainLayout>
    <div>
      <!-- Progress Bar -->
      <div class="fixed left-0 w-full h-2 bg-gray-300">
        <div class="h-full bg-purple-500" :style="{ width: progress + '%' }"></div>
      </div>

      <div>
        <div class="max-w-6xl mx-auto p-8">
          <h1 class="text-4xl font-bold mt-8">{{ announcement.title }}</h1>
          <div class="flex items-center mb-8">
            <div>
              <div class="h-2 w-ful mb-3 text-gray-600 font-medium italic">{{ announcement.user.department }} | Posted: {{ formatDate(announcement.created_at) }}</div>
            </div>
          </div>
          <p class="text-lg leading-8 mb-20" v-html="announcement.content"></p>
        </div>
      </div>
    </div>
    </MainLayout>
  </template>
  
  <script setup>
  import { ref, onMounted, onBeforeUnmount } from "vue";
  import { Head } from '@inertiajs/vue3';
  import MainLayout from '@/Layouts/MainLayout.vue';

  const props = defineProps({
    announcement: {
      type: Array,
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
  
  // Reactive progress value
  const progress = ref(0);
  
  // Function to update progress
  const updateProgress = () => {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    const winHeight = window.innerHeight || document.documentElement.clientHeight;
    const docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
    progress.value = (scrollY / (docHeight - winHeight)) * 100;
  };
  
  // Add scroll event listener when the component is mounted
  onMounted(() => {
    window.addEventListener("scroll", updateProgress);
  });
  
  // Remove scroll event listener when the component is unmounted
  onBeforeUnmount(() => {
    window.removeEventListener("scroll", updateProgress);
  });
  </script>
  
  <style scoped>
  /* Add any custom styles here */
  </style>