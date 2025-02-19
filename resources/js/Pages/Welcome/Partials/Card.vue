<template>
    <div class="max-w-6xl mx-auto px-4 py-4 lg:py-8 flex flex-wrap justify-center">
      <div v-for="(item, index) in items" :key="index" class="w-full md:w-1/2 xl:w-1/4 p-4">
        <a :href="item.href" class="block bg-white rounded shadow hover:shadow-md">
          <img :src="item.image" class="w-full h-[100px] object-cover" alt="Program Image">
        </a>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const items = ref([
    {
      image: '/images/programs/ausl.jpg',
      href: 'https://arellanolaw.edu'
    },
    {
      image: '/images/programs/bar_review.jpg',
      href: 'programs/bar'
    },
    {
      image: '/images/programs/lawphil.jpg', 
      href: 'https://lawphil.net/'
    },
    {
      image: '/images/programs/mcle.jpg',
      href: 'programs/mcle'
    }
  ]);
  </script>