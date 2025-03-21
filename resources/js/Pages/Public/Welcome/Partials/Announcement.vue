<template>
    <div class="bg-official-purple-300">
      <div class="max-w-6xl mx-auto px-4 py-8 lg:py-10">
        <div class="px-4 flex justify-between items-center flex-shrink-0 mb-2">
          <h1 class="font-bold text-lg sm:text-xl md:text-xl lg:text-2xl">Announcement</h1>
          <a href="" class="text-xs md:text-base ml-auto bg-official-purple-800 text-white px-3 py-2 rounded active:ring-2 active:ring-offset-2 active:ring-official-purple-900 transition duration-300 ease-in-out hover:bg-official-purple-700">
            View All Announcement
            <i class="ml-2 fa-solid fa-arrow-right"></i>
          </a>   
        </div>
  
        <ul class="divide-y divide-gray-200">
          <li class="px-4 py-4" v-for="announcement in announcements.data" :key="announcement.id">
            <div class="flex justify-between">
              <a :href="route('post.show', { id: announcement.id })" class="mb-4">
                <span class="font-semibold text-lg md:text-2xl text-gray-900 hover:text-official-purple-950 transition duration-300 ease-in-out hover:underline">
                  {{ announcement.title }}
                </span>
                <div class="h-2 w-full mb-3 text-gray-600 font-medium italic text-sm">
                  {{ announcement.user.department }} | Posted: {{ formatDate(announcement.created_at) }}
                </div>
              </a>
            </div>
            <p class="text-gray-700 text-sm md:text-base" v-html="announcement.content"></p>
          </li>
        </ul>
  
        <!-- Pagination Controls (Lower Right) -->
        <div class="flex justify-end mt-6 px-2">
          <nav class="inline-flex items-center p-2 rounded text-white space-x-2">
            <button 
              @click="fetchPage(announcements.prev_page_url)" 
              :disabled="!announcements.prev_page_url"
              class="p-2 rounded border border-official-purple-900 bg-official-purple-700 hover:bg-official-purple-600 disabled:opacity-50 disabled:cursor-not-allowed"
            >
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
              </svg>
            </button>
            <p class="text-purple-800 text-sm">Page {{ announcements.current_page }} of {{ announcements.last_page }}</p>
            <button 
              @click="fetchPage(announcements.next_page_url)" 
              :disabled="!announcements.next_page_url"
              class="p-2 rounded border border-official-purple-900 bg-official-purple-700 hover:bg-official-purple-600 disabled:opacity-50 disabled:cursor-not-allowed"
            >
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5.0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </button>
          </nav>
        </div>
  
      </div>
    </div>
  </template>
  
  <script setup>
  import { router } from '@inertiajs/vue3';
  
  const props = defineProps({
    announcements: {
      type: Object, // Laravel pagination returns an object
      required: true
    }
  });
  
  const formatDate = (dateString) => {
    const date = new Date(dateString);
    return new Intl.DateTimeFormat('en-US', { 
      month: 'long', 
      day: 'numeric', 
      year: 'numeric', 
    }).format(date);
  };
  
  // Fetch new page using Inertia.js (NO FULL PAGE RELOAD)
  const fetchPage = (url) => {
    if (url) {
      router.get(url, {}, { preserveScroll: true, preserveState: true });
    }
  };
  </script>
  