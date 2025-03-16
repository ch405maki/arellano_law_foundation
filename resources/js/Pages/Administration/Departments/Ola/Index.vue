<template>
    <MainLayout>
      <Header>Office of the Legal Aid (OLA)</Header>
      <Head title="Departments" />
      <main class="flex-grow">
        <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
          <div class="flex flex-col md:flex-row justify-between gap-8">
            <!-- Main content section -->
            <section class="w-full md:w-3/4 relative">
              <div class="bg-white border-none rounded-lg mb-6 relative">
                <div class="space-y-6">
                  <!-- Section Heading -->
                  <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-official-purple-900">
                    Legal Aid Clinic through the Office of the Legal Aid (OLA)
                  </h2>
  
                  <!-- Introductory Paragraph -->
                  <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                    The Office of the Legal Aid (OLA) was created in 1999 after the Supreme Court approved the Clinical Legal Education Program (CLEP) of the school.
                  </p>
  
                  <!-- Goals Section -->
                  <div class="space-y-4">
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-official-purple-900">
                      Main Goals of the Office:
                    </h3>
                    <ol class="list-decimal list-inside space-y-4 text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                      <li>
                        To provide free quality legal services to indigent clients in adjoining communities.
                      </li>
                      <li>
                        To provide experiential education and training to CLEP students through actual courtroom practice, case handling, seminars, and activities as required by Rule 138-A in different areas of practice such as:
                        <ul class="list-disc list-inside ml-6">
                          <li>Criminal Law</li>
                          <li>Civil Law</li>
                          <li>Domestic Law</li>
                          <li>Labor Law</li>
                        </ul>
                      </li>
                      <li>
                        To supervise externship programs of CLEP students in line with the legal education program required in the curriculum.
                      </li>
                    </ol>
                  </div>
  
                  <!-- Location Section -->
                  <div class="space-y-4">
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-official-purple-900">
                      Location:
                    </h3>
                    <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                      The Office of the Legal Aid is located at the Ground Floor, Heilbronn Hall, Arellano University School of Law, Donada Street, Pasay City.
                    </p>
                  </div>
  
                  <!-- Achievements Section -->
                  <div class="space-y-4">
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-official-purple-900">
                      Achievements:
                    </h3>
                    <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                      The Office of the Legal Aid continues to provide free legal assistance to indigents and also spearheads the supervision of the new Supreme Court requirement, the Clinical Legal Education Program (CLEP).
                    </p>
                    <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                      For the years 2022 and 2023, the OLA, together with its supervising lawyers and CLEP interns, successfully resolved twenty (20) cases within Metro Manila. Cases of our clients were either dismissed, acquitted, compromised, or founded on a lesser offense.
                    </p>
                    <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                      In addition to the cases handled, the Office has assisted and provided legal advice to 60 walk-in clients.
                    </p>
                    <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                      Furthermore, the Office is responsible for handling the compliance of the CLEP requirements of the Law School. For the academic year 2022-2023, the Office assisted in filing, certification, and oath-taking for 1,206 students enrolled in CLEP 1 and 2.
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
                        :src="`/images/offices/OLA.jpg`"
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
                    Office of the Legal Aid
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
  
  defineProps({
    departmentName: String,
  });
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