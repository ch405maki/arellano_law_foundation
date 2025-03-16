<template>
    <footer class="bg-official-purple-300">
        <div class="max-w-6xl mx-auto px-4 py-4 lg:py-8">
        <button
            @click="scrollToTop"
            class="fixed bottom-4 right-4 flex items-center justify-center w-10 h-10 bg-official-purple-600 text-white rounded-full shadow-lg hover:bg-official-purple-500 focus:outline-none focus:ring-2 focus:ring-official-purple-400 focus:ring-offset-2 z-40"
            >
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
            </svg>
        </button>
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="flex justify-center mb-2">
                <img src="/images/logo/alfLogo.png" class="h-16 w-auto" alt="AUSL Logo" />
            </div>
            <!-- Text Content -->
            <div class="text-slate-700 text-center">
                <span class="uppercase font-times self-center text-md md:text-md lg:text-lg xl:text-xl font-semibold whitespace-nowrap text-official-purple-900">
                    Arellano Law Fovndation
                </span>
                <p class="text-sm md:text-sm lg:text-md xl:text-lg">Taft Avenue Corner Menlo Street, Pasay City, Metro Manila, Philippines  1300</p>
                <p class="text-sm md:text-sm lg:text-md xl:text-lg mb-2">Tel. Nos. 8404-30 89 to 93</p>
                <!-- <h1><a :href="route('privacy_policy')" class="text-official-purple-800 text-sm md:text-sm lg:text-md xl:text-lg hover:underline">Privacy Policy</a></h1> -->

                <div class="hidden sm:flex justify-center space-x-4 mt-6 items-center">
                    <!-- Increase image size and make responsive -->
                    <a :href="route('privacy_policy')" class="flex-shrink-0">
                        <img 
                            src="/images/privacy/registration.jpg" 
                            alt="Registration" 
                            class="h-[130px] md:h-[150px] lg:h-[170px] object-cover"
                        />
                    </a>
                    <a :href="route('privacy_policy')" class="flex-shrink-0">
                        <img 
                            src="/images/privacy/corseal.png" 
                            alt="CorSeal" 
                            class="h-[130px] w-[130px] md:h-[150px] md:w-[150px] lg:h-[170px] lg:w-[170px] object-cover" 
                        />
                    </a>
                </div>
            </div>
            <hr class="my-6 border-official-purple-800 sm:mx-auto dark:border-official-purple-900 lg:my-8" />
            <div class="flex justify-center">
                <span class="text-sm text-gray-500 text-center ">© 2025 <a href="#" class="hover:underline">Arellano Law Fovndation</a>. All Rights Reserved.
                </span>
            </div>
        </div>
    </div>
    </footer>
</template>

<script setup>
    import { ref } from 'vue';

    function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>

<style scoped>
    @import url('https://db.onlinewebfonts.com/c/14ab77252fbc4bdca1dbdf8051cb7e96?family=BF+Invicta+W00+Bold');

    .text-invicta {
        font-family: 'BF Invicta W00 Bold', sans-serif;
    }
</style>
