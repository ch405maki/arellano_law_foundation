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
                <li><a :href="route ('administration.alf')" class="text-white transition hover:text-official-purple-200" href="#"> About </a></li>
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
    </main>

    <Footer />
</template>

<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Administration from './Partials/Buttons/Administration.vue';
import Programs from './Partials/Buttons/Programs.vue';
import Footer from './Partials/Footer/Index.vue';
</script>

<style scoped>
@import url('https://db.onlinewebfonts.com/c/2bf40ab72ea4897a3fd9b6e48b233a19?family=Garamond');

.garamond {
  font-family: 'Garamond', serif;
}
</style>