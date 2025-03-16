<template>
    <Head title="User Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">User Management</h2>
        </template>
        <div class="flex flex-col  bg-gray-100">
            <main class="flex-grow">
                <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col md:flex-row w-full justify-center px-8">
                        <!-- Main content section -->
                        <div class="w-full md:w-2/3 mt-2">
                            <div class="flex flex-col ">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="min-w-full  inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full">
                                                <thead>
                                                    <tr class="bg-gray-50">
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Name </th>
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Email </th>
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Department </th>
                                                        <th scope="col" class="p-4 text-left text-sm leading-6 font-semibold text-gray-900 capitalize"> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-300 ">
                                                    <!-- Table -->
                                                    <tr v-for="user in users" :key="user.id" class="bg-white transition-all duration-500 hover:bg-gray-50">
                                                        <td class="p-4 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{user.name}}</td>
                                                        <td class="p-4 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{user.email}}</td>
                                                        <td class="p-4 whitespace-nowrap text-sm leading-6 font-medium text-gray-900 ">{{user.department}}</td>
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

                        <!-- User Creation Form -->
                        <div class="w-full md:w-1/3 p-2 flex justify-start">
                            <form @submit.prevent="submitForm" class="w-full bg-white p-5 rounded-lg">
                                <!-- Title -->
                                <div class="text-left">
                                    <h2 class="text-xl font-bold">Create New User</h2>
                                </div>

                                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-12">
                                    <!-- Name Input -->
                                    <div class="sm:col-span-12">
                                        <InputLabel for="name" value="Name" />
                                        <TextInput
                                            id="name"
                                            v-model="form.name"
                                            autofocus
                                            required
                                            type="text"
                                            class="mt-1 block w-full border border-gray-300 rounded-lg"
                                            placeholder="Name Here..."
                                        />
                                    </div>

                                    <!-- Email Input -->
                                    <div class="sm:col-span-12">
                                        <InputLabel for="email" value="Email" />
                                        <TextInput
                                            id="email"
                                            v-model="form.email"
                                            required
                                            type="email"
                                            class="mt-1 block w-full border border-gray-300 rounded-lg"
                                            placeholder="Email Here..."
                                        />
                                    </div>

                                    <!-- Password Input -->
                                    <div class="sm:col-span-12">
                                        <InputLabel for="password" value="Password" />
                                        <TextInput
                                            id="password"
                                            v-model="form.password"
                                            required
                                            type="password"
                                            class="mt-1 block w-full border border-gray-300 rounded-lg"
                                            placeholder="Password Here..."
                                        />
                                    </div>

                                    <!-- Department Dropdown -->
                                    <div class="sm:col-span-12">
                                        <InputLabel for="department" value="Department" />
                                        <select
                                            id="department"
                                            v-model="form.department"
                                            required
                                            class="mt-1 block w-full border border-gray-300 rounded-lg"
                                        >
                                            <option value="" disabled selected>Select Department</option>
                                            <option value="IT">IT</option>
                                            <option value="HR">HR</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Marketing">Marketing</option>
                                        </select>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="sm:col-span-12 flex justify-center">
                                        <PrimaryButton type="submit" :disabled="isLoading">
                                            <i class="fa-solid fa-save"></i>  {{ isLoading ? 'Saving...' : 'Save' }}
                                        </PrimaryButton>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End User Creation Form -->
                    </div>
                </div>
            </main>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    users: { type: Array, required: true },
});


// Form data
const form = ref({
    name: '',
    email: '',
    password: '',
    department: '',
    role: 'User',
}); 

// Loading state
const isLoading = ref(false);

// Function to handle form submission
const submitForm = async () => {
    isLoading.value = true; // Start loading

    try {
        // Send a POST request to the API endpoint
        const response = await axios.post('/api/users', form.value);

        // Handle success
        console.log('User created successfully:', response.data);
        alert('User created successfully!');

        // Reset the form
        form.value = {
            name: '',
            email: '',
            password: '',
            department: '',
        };
    } catch (error) {
        // Handle errors
        console.error('Error creating user:', error.response?.data);
        alert('Failed to create user. Please check the form and try again.');
    } finally {
        isLoading.value = false; // Stop loading
    }
};
</script>

<style scoped>
.v-btn {
    width: 100%;
    transition: all 0.3s ease-in-out;
}

.v-btn:hover {
    transform: scale(1.05);
}

.v-icon {
    margin-left: 8px;
}

</style>