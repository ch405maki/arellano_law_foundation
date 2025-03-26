<template>
    <MainLayout>
      <Header>Center for Legal Education and Research </Header>
      <Head title="Center for Legal Education and Research " />
      <main class="flex-grow">
        <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
          <div class="flex flex-col md:flex-row justify-between gap-8">
            <!-- Main content section -->
            <section class="w-full md:w-3/4 relative">
              <div class="bg-white border-none rounded-lg mb-6 relative">
                <div class="space-y-6">
                  <!-- Section Heading -->
                  <div class="flex items-center space-x-2">
                    <img src="/images/logo/clear.jpg" alt="" class="w-12 h-12 object-cover rounded-lg" />
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-official-purple-900">
                      Center for Legal Education and Research
                    </h2>
                  </div>

                  <!-- Introductory Paragraph -->
                  <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                    The Center for Legal Education and Research (CLEAR) is Arellano Law Foundation’s dedicated unit towards supporting bar candidates in their preparation for the country’s toughest licensure examination.
                </p>
                </div>
              </div>
            </section>
  
            <!-- Sidebar -->
            <aside class="w-full md:w-1/4 sticky top-0">
              <div class="mb-8 sm:mt-4 md:mt-8 lg:mt-10 xl:mt-12">
                <div class="ml-4">
                  <div class="relative mb-2 flex flex-col items-center">
                    <div class="w-full mb-4">
                      <img
                        :src="`/images/offices/CLEAR.jpg`"
                        alt="Office Image"
                        class="object-cover w-full rounded-lg hover:cursor-zoom-in"
                        onerror="this.src='/images/logo/alfLogo.png'"
                      />
                    </div>
                  </div>
                  <h2 class="mb-4 text-sm md:text-base lg:text-lg xl:text-lg leading-6 font-medium text-official-purple-900 capitalize">
                    On this page
                  </h2>
                  <hr class="mb-4 border-1 border-official-purple-800" />
                  <h3 class="text-sm md:text-base lg:text-lg xl:text-lg font-normal text-gray-800 mb-8">
                    CLEAR
                  </h3>
                    <h2 class="mb-4 text-sm md:text-base lg:text-lg xl:text-lg leading-6 font-medium text-official-purple-900 capitalize">Social Media</h2>
                    <hr class="mb-4 border-1 border-official-purple-800">
                    <h3 class="text-sm md:text-base lg:text-lg xl:text-lg font-normal text-blue-800 mb-8 hover:underline"><a href="https://www.facebook.com/p/Center-for-Legal-Education-and-Research-100063942916347/"><i class="fa-brands fa-facebook"></i> CLEAR Facebook Page</a></h3>
                </div>
                <div class="ml-4">
                  <h2 class="text-official-purple-900 text-sm md:text-base lg:text-lg xl:text-lg font-medium mb-4">
                    Related Links
                  </h2>
                  <hr class="mb-4 border-1 border-official-purple-800" />
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
  import { Head } from '@inertiajs/vue3';
  import MainLayout from '@/Layouts/MainLayout.vue';
  import Header from '@/Components/Header.vue';
  import RelatedLinks from '../../Components/RelatedLinks.vue';
  </script>
  
  <style scoped>
  /* Custom styles for better typography and spacing */
  .leading-relaxed {
    line-height: 1.6;
  }
  
  .space-y-6 > * + * {
    margin-top: 1.5rem;
  }
  
  .space-y-4 > * + * {
    margin-top: 1rem;
  }
  
  .space-y-2 > * + * {
    margin-top: 0.5rem;
  }
  
  .sticky {
    position: sticky;
    top: 0;
  }
  </style>