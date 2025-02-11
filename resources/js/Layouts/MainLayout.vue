<template>
    <header class="bg-official-purple-800">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-12 items-center justify-between">
        <div class="flex-1 md:flex md:items-center md:gap-12">
            <div class="flex items-center gap-4">
                <a class="block text-teal-600" href="#">
                    <ApplicationLogo class="h-8"/>
                </a>
                <h1 class="garamond text-lg text-white uppercase font-medium">Arellano Law Foundation</h1>
            </div>
        </div>

        <div class="md:flex md:items-center md:gap-12">
        <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
                <li><a class="text-white transition hover:text-official-purple-200" href="#"> Home </a></li>
                <li><a class="text-white transition hover:text-official-purple-200" href="#"> About </a></li>
                <Administration/>
                <Programs/>
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
        <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

            <slot />
        </div>
    </main>

</template>

<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Administration from './Partials/Buttons/Administration.vue';
import Programs from './Partials/Buttons/Programs.vue';
</script>

<style scoped>
@import url('https://db.onlinewebfonts.com/c/2bf40ab72ea4897a3fd9b6e48b233a19?family=Garamond');

.garamond {
  font-family: 'Garamond', serif;
}
</style>