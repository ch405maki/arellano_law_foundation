<template>
    <div class="group inline-block relative">
    <button class="outline-none focus:outline-none py-2 text-white rounded-md flex items-center min-w-32">
    <span class="font-normal flex-1 hover:text-gray-300">Administration</span>
    <span>
        <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180 transition duration-300 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20">
        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
        </svg>
    </span>
    </button>
    <ul class="bg-white border rounded-md shadow-lg transform scale-0 group-hover:scale-100 absolute transition duration-300 ease-in-out origin-top min-w-52 mt-2">
    <li class="rounded-md px-2 py-2 transition duration-150 ease-in-out">
        <a @click="$inertia.visit(route('administration.alf'))" class="block w-full text-left text-gray-600 hover:text-slate-900 font-normal cursor-pointer">Arellano Law Foundation</a>
    </li>
    <li class="rounded-md px-2 py-2 transition duration-150 ease-in-out">
        <a @click="$inertia.visit(route('administration.board_trustees'))" class="block w-full text-left text-gray-600 hover:text-slate-900 font-normal cursor-pointer">Board of Trustees</a>
    </li>
    <li class="rounded-md px-2 py-2 transition duration-150 ease-in-out">
        <a @click="$inertia.visit(route('administration.admin_staff'))" class="block w-full text-left text-gray-600 hover:text-slate-900 font-normal cursor-pointer">Administration Officers</a>
    </li>
    <li class="rounded-md px-2 py-2 transition duration-150 ease-in-out">
        <a href="#" class="block w-full text-left text-gray-600 hover:text-slate-900 font-normal cursor-pointer">Departments</a>
    </li>
    </ul>
</div>
</template>

<script setup>
    import { ref, onMounted } from 'vue';
    import { usePage } from '@inertiajs/vue3';
</script>

<style scoped>

</style>