<template>
  <MainLayout>
    <Header v-if="departmentName != 'Information Technology Center'">{{ departmentName }} Department</Header>
    <Header v-else>{{ departmentName }}</Header>
    <Head title="Departments" />
    <main class="flex-grow">
      <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
        <div class="flex flex-col md:flex-row justify-between gap-8">
          <!-- Main content section -->
          <section class="w-full md:w-3/4 relative">
            <div class="ml-2">
                <div class="bg-white border-none rounded-lg  mb-6 relative">
                  <div class="bg-white border-none rounded-lg mb-6 relative">
                  <div class="flex flex-row sm:flex-row items-center justify-between mb-6">
                  </div>
                </div>
                </div>
            </div>
          </section>

          <aside class="w-full md:w-1/4 sticky top-0">
          <div class="mb-8 sm:mt-4 md:mt-8 lg:mt-10 xl:mt-12">
              <div class="ml-4">
                <div class="relative  mb-2 flex flex-col items-center">
                  <div class="w-full mb-4">
                    <img
                      :src="`/images/offices/${ departmentName }.jpg`"
                      alt="Office Image"
                      class="object-cover w-full rounded-lg hover:cursor-zoom-in"
                      onerror="this.src='/images/logo/alfLogo.png'"
                    />
                  </div>
                </div>
              <h2 class="mb-4 text-sm md:text-base lg:text-lg xl:text-lg leading-6 font-medium text-official-purple-900 capitalize">On this page</h2>
              <hr class="mb-4 border-1 border-official-purple-800">
                  <h3 class="text-sm md:text-base lg:text-lg xl:text-lg font-normal text-gray-800 mb-8" v-if="departmentName != 'Information Technology Center'">{{ departmentName }} Department</h3>
                  <h3 class="text-sm md:text-base lg:text-lg xl:text-lg font-normal text-gray-800 mb-8" v-else >{{ departmentName }}</h3>
              <h2 class="mb-4 text-sm md:text-base lg:text-lg xl:text-lg leading-6 font-medium text-official-purple-900 capitalize">Social Media</h2>
              <hr class="mb-4 border-1 border-official-purple-800">
                  <h3 class="text-sm md:text-base lg:text-lg xl:text-lg font-normal text-blue-800 mb-8 hover:underline" v-if="departmentName === 'CLEAR'"><a href="https://www.facebook.com/p/Center-for-Legal-Education-and-Research-100063942916347/"><i class="fa-brands fa-facebook"></i> CLEAR Facebook Page</a></h3>
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

defineProps({
  departmentName: String,
});

</script>

<style scoped>
</style>