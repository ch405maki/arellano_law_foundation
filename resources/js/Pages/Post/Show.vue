<template>
    <Head title="User Management" />
    <MainLayout>
    <div>
      <!-- Progress Bar -->
      <div class="fixed left-0 w-full h-2 bg-gray-300">
        <div class="h-full bg-purple-500" :style="{ width: progress + '%' }"></div>
      </div>
  
      <!-- Article About Arellano Law Foundation -->
      <div>
        <div class="max-w-6xl mx-auto p-8">
          <h1 class="text-4xl font-bold mb-8">About Arellano Law Foundation</h1>
          <div class="flex items-center mb-6">
            <div>
              <div class="h-2 w-ful mb-3 text-gray-600 font-medium italic">Information Technology Center</div>
              <div class="h-2 w-full text-gray-600 font-medium italic">January 8, 2025</div>
            </div>
          </div>
          <p class="text-lg leading-8 mb-20">
            The Arellano Law Foundation (ALF) is a non-profit organization dedicated to promoting legal education, research, and community service. Established in honor of the esteemed Arellano family, who have made significant contributions to the field of law in the Philippines, the foundation aims to empower future legal professionals and uphold the rule of law.
          </p>
          <p class="text-lg leading-8 mb-20">
            One of the core missions of the Arellano Law Foundation is to provide scholarships to deserving law students. These scholarships help alleviate the financial burden of legal education, enabling students to focus on their studies and contribute meaningfully to society. The foundation also partners with various law schools and legal institutions to enhance the quality of legal education in the country.
          </p>
          <p class="text-lg leading-8 mb-20">
            In addition to its scholarship programs, the Arellano Law Foundation is actively involved in legal research and advocacy. The foundation supports research projects that address pressing legal issues, such as human rights, environmental law, and access to justice. By fostering a culture of research and innovation, ALF aims to contribute to the development of a more just and equitable legal system.
          </p>
          <p class="text-lg leading-8 mb-20">
            Community service is another cornerstone of the Arellano Law Foundation's work. The foundation organizes legal aid clinics, where law students and practicing attorneys provide free legal assistance to underserved communities. These clinics not only help individuals in need but also give law students valuable hands-on experience in the practice of law.
          </p>
          <p class="text-lg leading-8 mb-20">
            The Arellano Law Foundation also hosts annual conferences and seminars, bringing together legal experts, scholars, and practitioners to discuss emerging legal trends and challenges. These events serve as a platform for knowledge-sharing and collaboration, furthering the foundation's mission to advance the legal profession.
          </p>
        </div>
      </div>
    </div>
    </MainLayout>
  </template>
  
  <script setup>
  import { ref, onMounted, onBeforeUnmount } from "vue";
  import { Head } from '@inertiajs/vue3';
  import MainLayout from '@/Layouts/MainLayout.vue';
  
  // Reactive progress value
  const progress = ref(0);
  
  // Function to update progress
  const updateProgress = () => {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    const winHeight = window.innerHeight || document.documentElement.clientHeight;
    const docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
    progress.value = (scrollY / (docHeight - winHeight)) * 100;
  };
  
  // Add scroll event listener when the component is mounted
  onMounted(() => {
    window.addEventListener("scroll", updateProgress);
  });
  
  // Remove scroll event listener when the component is unmounted
  onBeforeUnmount(() => {
    window.removeEventListener("scroll", updateProgress);
  });
  </script>
  
  <style scoped>
  /* Add any custom styles here */
  </style>