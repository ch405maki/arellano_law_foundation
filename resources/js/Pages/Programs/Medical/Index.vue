<template>
  <MainLayout>
    <Head title="Medical Services" />
    <Header>Medical Services</Header>
    <main class="flex-grow">
      <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
        <div class="flex flex-col md:flex-row justify-between gap-8">
          <!-- Main content section -->
          <section class="w-full md:w-3/4 relative">
            <div class="bg-white border-none rounded-lg mb-6 relative">
              <div class="space-y-6">
                <!-- Section Heading -->
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-official-purple-900">
                  Medical Services
                </h2>

                <!-- Introductory Paragraph -->
                <p class="text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                  The ALF/AUSL Clinic, aligned with its aim, provides primary health care services in both medical and dental facets. The clinic ensures the availability of health care services for its mandated clientele, including students, faculty members, employees, and all other members of the ALF/AUSL community.
                </p>

                <!-- Services Provided -->
                <div class="space-y-4">
                  <h3 class="text-xl md:text-2xl lg:text-3xl font-semibold text-official-purple-900">
                    Services Provided:
                  </h3>
                  <ol class="list-decimal list-inside space-y-4 text-base md:text-lg lg:text-lg text-gray-700 leading-relaxed">
                    <li>
                      <strong>Providing medical consultation and primary health care treatment, including but not limited to:</strong>
                      <ul class="list-disc list-inside ml-6">
                        <li>First aid treatment</li>
                        <li>Blood pressure and temperature reading</li>
                        <li>Taking and monitoring oxygen saturation and other vital signs</li>
                        <li>Fasting blood sugar testing</li>
                        <li>Wound dressing</li>
                        <li>Nebulization and oxygen inhalation</li>
                        <li>Weight monitoring</li>
                      </ul>
                    </li>
                    <li>
                      <strong>Delivering annual physical/medical examinations for faculty and employees.</strong>
                    </li>
                    <li>
                      <strong>Dispensing over-the-counter and prescribed medicines.</strong>
                    </li>
                    <li>
                      <strong>Issuing referral forms and medical certificates.</strong>
                    </li>
                    <li>
                      <strong>Assisting and accompanying students, personnel, and others to higher medical institutions during emergency situations.</strong>
                    </li>
                    <li>
                      <strong>Catering to the need for dental services.</strong>
                    </li>
                    <li>
                      <strong>Educating employees of AUSL/ALF on relevant health matters and disseminating health information.</strong>
                    </li>
                    <li>
                      <strong>Helping establish an institution conducive for learning by performing sanitary inspections and periodic checks for health hazards within the AUSL campus.</strong>
                    </li>
                    <li>
                      <strong>Endorsing outbreaks of medical cases within the university vicinity to higher government health offices for proper response, care, and treatment.</strong>
                    </li>
                    <li>
                      <strong>Issuing guidelines and health protocols during onsite learning and onsite examinations.</strong>
                    </li>
                    <li>
                      <strong>Taking accountability and maintaining confidentiality of all personnel and student health records.</strong>
                    </li>
                    <li>
                      <strong>Rendering primary health care to persons not connected to ALF/AUSL only if accidents or emergency situations occur within the AUSL premises.</strong>
                    </li>
                  </ol>
                </div>
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
                <h3 class="text-base md:text-lg lg:text-lg font-normal text-gray-800 mb-8">Medical Services</h3>
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