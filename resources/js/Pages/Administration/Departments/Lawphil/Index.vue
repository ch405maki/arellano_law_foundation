<template>
  <MainLayout>
    <Header>LawPhil Project</Header>
    <Head title="LawPhil" />
    <main class="flex-grow">
      <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
        <div class="flex flex-col md:flex-row justify-between gap-8">
          <!-- Main content section -->
          <section class="w-full md:w-3/4 relative">
            <div class="bg-white border-none rounded-lg mb-6 relative">
              <div class="space-y-6">
                <!-- Section Heading -->
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-official-purple-900">
                  LawPhil Project
                </h2>

                <!-- Introductory Paragraph -->
                <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                  Lawphil is a legal indexing and database gathering project that seeks to provide ready access to an effective, comprehensive, dependable, and affordable website with free online legal research services. It serves students, attorneys, legal researchers, and anyone interested in the law in the Philippines and around the world.
                </p>

                <!-- Key Features -->
                <div class="space-y-4">
                  <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-official-purple-900">
                    Key Features:
                  </h3>
                  <ul class="list-disc list-inside text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                    <li>Comprehensive legal database for Philippine laws and jurisprudence.</li>
                    <li>Free and accessible online legal research services.</li>
                    <li>User-friendly interface for students, attorneys, and legal researchers.</li>
                    <li>Regular updates to ensure accuracy and reliability.</li>
                    <li>Global accessibility for anyone interested in Philippine law.</li>
                  </ul>
                </div>

                <!-- Mission Statement -->
                <div class="space-y-4">
                  <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-official-purple-900">
                    Mission:
                  </h3>
                  <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                    The LawPhil Project aims to democratize access to legal information by providing a reliable and free platform for legal research. It empowers individuals and professionals alike to navigate the complexities of the law with ease and confidence.
                  </p>
                </div>
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
                      :src="`/images/offices/LawPhil.jpg`"
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
                  LawPhil
                </h3>
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