<template>
    <MainLayout>
      <Head title="Academic Guidelines" />
      <Header>60th MCLE Seminar (March 8,15,22 and 29, 2025)</Header>
      <main class="flex-grow">
        <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
          <div class="flex flex-col md:flex-row justify-between gap-8">
            <!-- Main content section -->
            <section class="w-full lg:w-3/4">
                <div class="bg-white border-none rounded-lg mb-6 relative">
              <div class="space-y-6">
                <!-- Section Heading -->
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-official-purple-900">
                    Mandatory Continuing Legal Education (MCLE) 
                </h2>

                <!-- Introductory Paragraph -->
                <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                    Pursuant to Supreme Court Bar Matter No. 850, all lawyers must complete at least 36 credit unit hours of continuing legal education seminars every three years. The Foundation is a duly accredited MCLE provider, thus it regularly conducts MCLE seminars for lawyers.
                </p>

                <!-- Program Details -->
                <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                    The Foundation through the Center for Legal Education and Research facilitates the conduct of MCLE.
                </p>
              </div>
            </div>
                <div class="relative overflow-x-auto">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-official-purple-900">
                        Files
                    </h2>
                    <table class="w-full text-sm text-left text-gray-500 mb-8">
                        <thead class="text-xs text-gray-700 bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-sm lg:text-lg font-medium text-official-purple-900">
                                    Description
                                </th>
                                <th scope="col" class="px-4 py-3 text-sm lg:text-lg font-medium text-official-purple-900">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="pdf in pdfs"
                                :key="pdf.code"
                                class="border-b"
                            >
                                <td class="px-4 py-4 text-sm lg:text-lg font-normal text-gray-800">
                                    {{ pdf.description }}
                                </td>
                                <td class="px-4 py-4">
                                    <a
                                        :href="pdf.url"
                                        download
                                        class="flex items-center text-official-purple-500 hover:text-official-purple-700 text-sm lg:text-lg font-normal whitespace-nowrap"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 lg:w-5 h-4 lg:h-5 mr-1 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 16.5l-4-4h2.5V3h3v9.5H16l-4 4zm-7 1.5h14v2H5v-2z" />
                                        </svg>
                                        Download
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="relative mb-8 flex flex-col items-center bg-slate-100">
                        <div  class="w-full mb-4">
                            <img src="/images/mcle/mcle_poster.jpg" alt="Post Image" class="object-cover w-full rounded-lg hover:cursor-zoom-in" @click="showLightbox(index)"/>
                        </div>
                    </div>
                </div>
            </section>
  
            <aside class="w-full md:w-1/4 sticky top-0">
            <div class="mb-8 sm:mt-4 md:mt-8 lg:mt-10 xl:mt-12">
                <div class="ml-4">
                <h2 class="mb-4 text-lg leading-6 font-medium text-official-purple-900 capitalize">On this page</h2>
                <hr class="mb-4 border-1 border-official-purple-800">
                    <h3 class="text-lg font-normal text-gray-800 mb-8">MCLE</h3>
                </div>
                <div class="ml-4">
                <h2 class="text-official-purple-900 text-lg font-medium mb-4">Related Links</h2>
                <hr class="mb-4 border-1 border-official-purple-800">
                <ul class="list-inside list-disc">
                    <RelatedLinks />
                </ul>
                </div>
            </div>
            </aside>
        </div>
      </div>
    </main>
  </MainLayout>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { reactive, onMounted, onBeforeUnmount } from 'vue';
  import { Head } from '@inertiajs/vue3';
  import MainLayout from '@/Layouts/MainLayout.vue';
  import RelatedLinks from '../Components/RelatedLinks.vue';
  import Header from "@/Components/Header.vue";
  
  const pdfs = ref([
      { description: 'Registration form (12 units)', url: '/pdf/Registration form (12 units).pdf' },
      { description: 'Registration form (24 units)', url: '/pdf/Registration form (24 units).pdf' },
      { description: 'Registration form (36 units)', url: '/pdf/Registration form (36 units).pdf' },
      { description: 'Registration form (Completion units)', url: '/pdf/Registration form (Completion units).pdf' },
    ]);
  
  const isMobile = reactive({ value: window.innerWidth <= 768 });
  
  const checkIfMobile = () => {
  isMobile.value = window.innerWidth <= 768;
  };
  
  onMounted(() => {
  window.addEventListener('resize', checkIfMobile);
  });
  
  onBeforeUnmount(() => {
  window.removeEventListener('resize', checkIfMobile);
  });
  </script>
  
  <style scoped>
  .container {
  max-width: 1200px;
  }
  
  .sticky {
  position: sticky;
  top: 0;
  }
  
  .overflow-y-auto {
  overflow-y: auto;
  }
  
  .h-screen {
  height: 100vh;
  }
  
  .fixed {
  position: fixed;
  }
  
  .bottom-4 {
  bottom: 1rem;
  }
  
  .right-4 {
  right: 1rem;
  }
  
  .flex {
  display: flex;
  }
  
  .space-x-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(0.5rem * var(--tw-space-x-reverse));
  margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
  }
  
  .v-btn {
  margin-top: 16px;
  margin-right: 8px;
  }
  </style>