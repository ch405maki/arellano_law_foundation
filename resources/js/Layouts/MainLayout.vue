<template>
    <header class="fixed top-0 left-0 w-full bg-official-purple-800 z-10 border-b border-official-purple-600">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-12 items-center justify-between">
        <div class="flex-1 md:flex md:items-center md:gap-12">
            <div class="flex items-center gap-4">
                <a class="block text-teal-600" href="/">
                    <ApplicationLogo class="h-8"/>
                </a>
                <h1 class="font-times text-sm md:text-base lg:text-lg xl:text-lg text-transparent bg-clip-text bg-gradient-to-r from-[#FFD700] to-[#FFC400] uppercase font-semibold">Arellano Law Fovndation</h1>            </div>
            </div>

        <div class="md:flex md:items-center md:gap-12">
        <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
                <li><a class="text-white transition hover:text-official-purple-200" href="/"> Home </a></li>
                <li><a :href="route ('administration.alf')" class="text-white transition hover:text-official-purple-200" href="#"> About Us</a></li>
                <Administration/>
                <Programs/>
                <li><a :href="route ('contact')" class="text-white transition hover:text-official-purple-200" href="#"> Contact Us </a></li>
            </ul>
        </nav>

        <div class="block md:hidden">
        <button class="rounded p-2 text-white transition hover:text-official-purple-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
            >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        </div>
        </div>
    </div>
    </div>
    </header>
    
    <!-- Page Content -->
    <main>
        <div class="mt-[48px]">
            <slot />
        </div>
        <!-- Cookie popup with animation -->
        <transition name="fade" :key="showCookiePopup">
          <div 
            v-if="showCookiePopup" 
            class="cookie-popup fixed bottom-0 left-0 right-0 flex items-center justify-center py-4 z-50 mx-4 sm:mx-10"
          >
            <div class="container mx-auto px-4 py-2 bg-white rounded-lg shadow-lg border border-official-purple-300">
              <div class="flex flex-wrap items-center justify-between">
                <div class="flex items-center px-[2px] w-full md:w-7/12 lg:w-2/3">
                  <div class="md:mb-0">
                    <h3 class="text-sm font-bold text-black flex items-center">
                      We use cookies
                      <img src="https://www.svgrepo.com/show/401340/cookie.svg" alt="Cookie" class="ml-2 h-6 w-6 mr-2">
                    </h3>
                    <p class="text-xs font-medium text-body-color">
                      We use cookies to ensure you get the best experience on ArellanoLawFoundation.org <br>
                      By continuing to browse our site, you are agreeing to our use of cookies. Find out more 
                      <a :href="route('privacy_policy')" class="text-official-purple-800 underline">Click here</a>
                    </p>
                  </div>
                </div>
                <div class="flex items-center w-full md:w-5/12 lg:w-1/3 justify-end space-x-3 pr-2">
                  <button 
                    @click="acceptCookies" 
                    class="rounded-lg bg-official-purple-600 px-8 h-9 text-sm font-semibold text-white hover:bg-official-purple-500 focus:outline-none focus:ring-2 focus:ring-official-purple-500 focus:ring-offset-2"
                  >
                    Accept
                  </button>
                </div>
              </div>
            </div>
          </div>
        </transition>
    </main>

    <Footer />
</template>

<script setup>
import {ref, onMounted } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Administration from './Partials/Buttons/Administration.vue';
import Programs from './Partials/Buttons/Programs.vue';
import Footer from './Partials/Footer/Index.vue';

const loading = ref(true);
const showCookiePopup = ref(false);

const acceptCookies = () => {
  showCookiePopup.value = false; 
  localStorage.setItem('cookiesAccepted', 'true');
};

onMounted(() => {
  setTimeout(() => {
    loading.value = false;
    if (!localStorage.getItem('cookiesAccepted')) {
      showCookiePopup.value = false;
      setTimeout(() => {
        showCookiePopup.value = true;
      }, 10);
    }
  }, 2000);
});
</script>

<style scoped>
.floating-message-icon {
  position: fixed;
  bottom: 40px;
  right: 20px;
  background-color: #6200ea;
  color: white;
  border-radius: 50%;
  padding: 20px;
  font-size: 24px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.floating-message-icon:hover {
  background-color: #3700b3;
}

.relative:hover #tooltip-animation {
  visibility: visible;
  opacity: 1;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease-in-out; /* Smooth fade in/out */
}

.fade-enter-from, .fade-leave-to {
  opacity: 0; /* Initial and final states */
}

.fade-enter-to, .fade-leave-from {
  opacity: 1; /* Fully visible state */
}

.cookie-popup {
  display: flex;
  opacity: 1;
  transition: opacity 0.5s ease-in-out;
}

.cookie-popup {
  z-index: 9999 !important;
}
</style>