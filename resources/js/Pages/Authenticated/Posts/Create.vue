<template>
<Head title="Create Post" />
<AuthenticatedLayout>
  <div class="flex flex-col bg-gray-100">
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row w-full justify-center">
                <!-- Content section -->
            <div class="w-full bg-white p-5 rounded-lg mt-4">
              <!-- Title -->
              <div class="text-left">
                <h2 class="text-xl font-bold">Create New Post</h2>
              </div>

              <!-- Form -->
              <form @submit.prevent="submitForm" class="mt-4">
                <!-- Title Input -->
                <div class="mb-4">
                  <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                  <input
                    id="title"
                    v-model="form.title"
                    type="text"
                    required
                    class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                    placeholder="Enter title..."
                  />
                </div>

                
                <!-- Content Input with CKEditor -->
                <div class="sm:col-span-12 mb-4">
                  <InputLabel for="content" value="Content" />
                  <ckeditor :editor="editor" v-model="form.content" :config="editorConfig"></ckeditor>
                </div>

                <!-- Document Input -->
                <div class="mb-4">
                  <label for="document" class="block text-sm font-medium text-gray-700">Document (Optional)</label>
                  <input
                    id="document"
                    v-model="form.document"
                    type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                    placeholder="Enter document URL or path..."
                  />
                </div>

                <!-- Link Input -->
                <div class="mb-4">
                  <label for="link" class="block text-sm font-medium text-gray-700">Link (Optional)</label>
                  <input
                    id="link"
                    v-model="form.link"
                    type="url"
                    class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                    placeholder="Enter link..."
                  />
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                  <button
                    type="submit"
                    :disabled="isLoading"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600"
                  >
                    {{ isLoading ? 'Creating...' : 'Create Post' }}
                  </button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </main>
  </div>
</AuthenticatedLayout>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { usePage } from '@inertiajs/vue3';

const userId = usePage().props.userId;

// Form data
const form = ref({
  title: '',
  content: '',
  document: '',
  link: '',
  posted_by: userId,
});

// Loading state
const isLoading = ref(false);

const editor = ClassicEditor;
const editorConfig = {
  toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
};

// Function to handle form submission
const submitForm = async () => {
  isLoading.value = true;

  try {
    // Send a POST request to the API endpoint
    const response = await axios.post('/api/posts', form.value);

    // Handle success
    console.log('Post created successfully:', response.data);
    alert('Post created successfully!');

    // Reset the form
    form.value = {
      title: '',
      content: '',
      document: '',
      link: '',
      posted_by: '',
    };
  } catch (error) {
    // Handle errors
    console.error('Error creating post:', error.response?.data);
    alert('Failed to create post. Please check the form and try again.');
  } finally {
    isLoading.value = false;
  }
};
</script>

<style scoped>
/* Add custom styles if needed */
</style>