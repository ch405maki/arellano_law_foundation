<template>
  <MainLayout>
    <Head title="Phoenix Program" />
    <Header>Phoenix Program</Header>
    <main class="flex-grow">
      <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
        <div class="flex flex-col md:flex-row justify-between gap-8">
          <!-- Main content section -->
          <section class="w-full md:w-3/4 relative">
            <div class="bg-white border-none rounded-lg mb-6 relative">
              <div class="space-y-6">
                <!-- Section Heading -->
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-official-purple-900">
                  Phoenix Program
                </h2>

                <!-- Introductory Paragraph -->
                <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                  The Phoenix Program is a special program designed for law graduates of Arellano University who need to retake the bar examination or are undergoing a refresher program.
                </p>

                <!-- Program Details -->
                <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                  In this specialized program, graduates are provided with selected seminars aimed at helping them successfully hurdle the bar exam. The program focuses not only on academic preparation but also on other essential aspects of the bar examination, ensuring a holistic approach to success.
                </p>
              </div>
            </div>
          </section>

          <!-- Sidebar -->
          <aside class="w-full md:w-1/4 sticky top-0">
            <div class="mb-8 sm:mt-4 md:mt-8 lg:mt-10 xl:mt-12">
              <div class="ml-4">
                <h2 class="mb-4 text-lg md:text-xl lg:text-2xl font-semibold text-official-purple-900 capitalize">
                  On this page
                </h2>
                <hr class="mb-4 border-1 border-official-purple-800" />
                <h3 class="text-base md:text-lg lg:text-lg font-normal text-gray-800 mb-8">Phoenix Program</h3>
              </div>
              <div class="ml-4">
                <h2 class="text-official-purple-900 text-lg md:text-xl lg:text-2xl font-semibold mb-4">Related Links</h2>
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
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import RelatedLinks from "../Components/RelatedLinks.vue";
import Header from "@/Components/Header.vue";
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