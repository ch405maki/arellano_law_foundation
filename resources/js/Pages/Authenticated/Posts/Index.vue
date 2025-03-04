<template>
    <Head title="Staff Management" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Manage Posts
                </h2>
                <!-- Export to PDF Button -->
                <div class="relative">
                <a :href="route('post.create')" class="bg-gray-800 hover:bg-gray-700 text-white px-4 py-[5px] rounded-lg flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Post
                </a>
                </div>
            </div>
        </template>
        <div class="flex flex-col bg-gray-100">
            <main class="flex-grow">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row w-full justify-center">
                        <!-- Content section -->
                        <div class="w-full py-2">
                            <div class="flex flex-col">
                                <div class=" overflow-x-auto">
                                    <div class="min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full">
                                                <thead>
                                                    <tr class="bg-gray-50">
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Title </th>
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Content </th>
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Department </th>
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-300 ">
                                                    <!-- Table -->
                                                    <tr v-for="post in posts" :key="post.id" class="bg-white transition-all duration-500 hover:bg-gray-50">
                                                        <td class="p-4 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{post.title}}</td>
                                                        <td class="p-4 whitespace-nowrap text-sm leading-6 font-medium text-gray-900" v-html="post.content"></td>
                                                        <td class="p-4 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{post.user.department}}</td>
                                                        <td class="p-4">
                                                            Actions
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End main content section -->
                    </div>
                </div>
            </main>
        </div> 
    </AuthenticatedLayout>
</template>

<script setup>
import { ref, defineProps } from 'vue';
import { useForm } from '@inertiajs/vue3';
import axios from 'axios';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps({
    posts: {type: Array, required: true},
})

</script>

<style scoped>

</style>
