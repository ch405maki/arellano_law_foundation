<template>
    <MainLayout>
        <Head title="Administration Officers" />
        <Header>Officers of the Administration</Header>
          <main class="flex-grow">
            <div class="max-w-6xl mx-auto px-8 py-4 lg:py-8">
              <div class="flex flex-col md:flex-row justify-between gap-8">
                <!-- Main content section -->
                <section class="w-full md:w-3/4 relative">
                <table class="w-full text-sm sm:text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400 ml-2 mb-8">
                <tbody>
                  <tr
                    v-for="(item, index) in roles"
                    :key="index"
                    class="border-b"
                  >
                    <td class="py-2 font-medium text-gray-600">
                      {{ item.name }}
                    </td>
                    <td class="py-2 ml-2 font-normal text-gray-600 text-official-purple-900 italic">
                      <span v-html="item.role"></span>
                    </td>
                  </tr>
                </tbody>
              </table>
              </section>
    
                <aside class="w-full md:w-1/4 sticky top-0">
                <div class="mb-8 sm:mt-4 md:mt-8 lg:mt-10 xl:mt-12 text-sm sm:text-lg">
                    <div class="ml-4">
                        <h2 class="mb-4 leading-6 text-sm md:text-base lg:text-lg xl:text-xl font-medium text-official-purple-900 capitalize">On this page</h2>
                        <hr class="mb-4 border-1 border-official-purple-800">
                        <h3 class="font-normal text-sm md:text-base lg:text-lg xl:text-xl text-gray-800 mb-8">Administration Officers</h3>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-official-purple-900 text-sm md:text-base lg:text-lg xl:text-xl font-medium mb-4">Related Links</h2>
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
    import Header from '@/Components/Header.vue'
    import RelatedLinks from '../Components/RelatedLinks.vue';
    
    // Create a ref for the current step
    const step = ref(1); // Initially set to Step 1
    
    // Function to set the current step
    const setStep = (newStep) => {
      step.value = newStep;
      console.log(`Current step set to: ${newStep}`); // Debugging log
    };
    
    const roles = [
    { role: 'Executive Director', name: 'Atty. Gabriel P. Dela Peña' },
    { role: 'Dean', name: 'Domingo M. Navarro' },
    { role: 'Assistant Dean, Director for Admission', name: 'Atty. Erik C. Lazo' },
    { role: 'Registrar', name: 'Atty. Roland A. Niedo' },
    { role: 'Assistant Registrar', name: 'Aileen P. Junio' },
    { role: 'Executive Assistant', name: 'Jocelyn L. Doctor' },
    { role: 'Dean, Office of Student Affairs', name: 'Lorina L. Pascasio' },
    { role: 'Director, Institute for Special Studies', name: 'Atty. Michael Vernon C. Guerrero' },
    { role: 'Legal Admin Officer/Data Privacy Officer', name: 'Atty. Maureen Kay E. Patajo' },
    { role: 'Comptroller', name: 'Atty. Agnes B. Santos' },
    { role: 'Director, General Services', name: 'Pedro S. Cayco' },
    { role: 'Director for Accounting', name: 'Jasmin P. Horlina' },
    { role: 'Director, Center for Legal Education and Research', name: 'Atty. Roderick M. Villostas' },
    { role: 'Director, Information Technology Center', name: 'Cristina D. Revilla' },
    { role: 'Director, Alumni Affairs', name: 'Atty. Arnaldo M. Espinas' },
    { role: 'Director, Medical Services', name: 'Atty. Judy Anne Y. Yulo, MD.' },
    { role: 'Director, Guidance Office', name: 'Arnulfo V. Lopez' },
    { role: 'Chief Librarian', name: 'Edna L. Pareño' },
    { role: 'Director, The Lawphil Project', name: 'Philipp S. Bautista' },
    { role: 'Human Resources Supervisor', name: 'Baby Amy R. Montelegre' },
    { role: 'Purchasing Head/Officer', name: 'Eduardo C. Villavicencio' },
    { role: 'Audio Visual Supervisor', name: 'Erickson R.Ocampo' },
  ];  
    
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