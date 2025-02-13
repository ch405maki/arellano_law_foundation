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
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="mb-6 md:mb-0 flex items-center space-x-4">
                    <!-- AUSL Logo -->
                    <img src="/images/logo/alfLogo.png" class="h-16 w-auto" alt="AUSL Logo" />

                    <!-- Text Content -->
                    <div class="text-slate-700">
                        <span class="font-times self-center text-md md:text-md lg:text-lg xl:text-xl font-semibold whitespace-nowrap text-official-purple-900">
                            Arellano Law Fovndation
                        </span>
                        <p class="text-sm md:text-sm lg:text-md xl:text-lg">Taft Avenue Corner Menlo Street, Pasay City, Metro Manila, Philippines</p>
                        <p class="text-sm md:text-sm lg:text-md xl:text-lg">Tel. Nos. 8404-30 89 to 93</p>
                    </div>
                </div>

                <div class="hidden sm:flex justify-center space-x-4 mt-6 items-center">
                    <!-- Increase image size and make responsive -->
                </div>

                </div>
                <div class="grid grid-cols-3 justify-items gap-8 sm:gap-6 sm:grid-cols-3 px-2">
                    <div>
                        <h2 class="mb-4 text-xs md:text-sm lg:text-sm xl:text-sm font-semibold text-official-purple-900 uppercase">Quick Links</h2>
                        <ul class="text-slate-700">
                            <li class="mb-4">
                                <a href="#" class="hover:underline cursor-pointer text-xs md:text-sm lg:text-sm xl:text-sm">List 1</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline cursor-pointer text-xs md:text-sm lg:text-sm xl:text-sm">List 2</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-4 text-xs md:text-sm lg:text-sm xl:text-sm font-semibold text-official-purple-900 uppercase">Follow us</h2>
                        <ul class="text-slate-700">
                            <li class="mb-4 flex items-center">
                                <a href="/contact/socials" class="text-xs md:text-sm lg:text-sm xl:text-sm hover:underline hover:text-blue-600 flex items-center">
                                    <i class="mdi mdi-facebook text-blue-600 mr-2"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="mb-4 flex items-center">
                                <a href="https://www.youtube.com/@AUSLofficial" class="text-xs md:text-sm lg:text-sm xl:text-sm hover:underline hover:text-red-600 flex items-center">
                                    <i class="mdi mdi-youtube text-red-600 mr-2"></i>
                                    <span>YouTube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-4 text-xs md:text-sm lg:text-sm xl:text-sm font-semibold text-official-purple-900 uppercase">Legal</h2>
                        <ul class="text-slate-700">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-xs md:text-sm lg:text-sm xl:text-sm">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <hr class="my-6 border-official-purple-800 sm:mx-auto dark:border-official-purple-900 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 text-center ">© 2025 <a href="#" class="hover:underline">ALF</a>. All Rights Reserved.
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
