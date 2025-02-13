<template>
    <MainLayout>
      <Header>Arellano Law Foundation Inc.</Header>
      <Head title="Arellano Law Foundation Inc." />
      <main class="flex-grow">
        <div class="max-w-6xl mx-auto px-4 py-4 lg:py-8">
          <div class="flex flex-col md:flex-row justify-between gap-8">
            <!-- Main content section -->
            <section class="w-full md:w-3/4 relative">
              <div class="ml-2">
                  <div class="bg-white border-none rounded-lg  mb-6 relative">
                    <div class="bg-white border-none rounded-lg mb-6 relative">
                    <div class="flex flex-row sm:flex-row items-center justify-between mb-6">
                    <blockquote class="text-xl italic font-semibold text-gray-900 dark:text-white">
                        <svg class="w-8 h-8 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                        </svg>
                        <h2 class="text-sm md:text-md lg:text-lg xl:text-xl font-normal text-gray-600">
                            The Arellano Law Foundation is a non-profit, non-stock organization established by alumni and faculty members of Arellano University for contributing to the upgrading of standards of the legal proffession and to the efficient, fair, and honest administration of justice.
                            <br>
                            <br>
                            Its major project in the attainment of this objective is the operation of Arellano Law School.
                        </h2>
                    </blockquote>
                    </div>
                  </div>
                  </div>
              </div>
            </section>
  
            <aside class="w-full md:w-1/4 sticky top-0">
            <div class="mb-8 sm:mt-4 md:mt-8 lg:mt-10 xl:mt-12">
                <div class="ml-4">
                <h2 class="mb-4 text-sm md:text-base lg:text-lg xl:text-lg leading-6 font-medium text-official-purple-900 capitalize">On this page</h2>
                <hr class="mb-4 border-1 border-official-purple-800">
                    <h3 class="text-sm md:text-base lg:text-lg xl:text-lg font-normal text-gray-800 mb-8">Arellano law Foundation Inc.</h3>
                </div>
                <div class="ml-4">
                <h2 class="text-official-purple-900 text-sm md:text-base lg:text-lg xl:text-lg font-medium mb-4">Related Links</h2>
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
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import Header from '@/Components/Header.vue'
import RelatedLinks from '../Components/RelatedLinks.vue';

</script>

<style scoped>
</style>