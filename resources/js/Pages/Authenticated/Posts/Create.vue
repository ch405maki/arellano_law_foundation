<template>
    <div class="w-full bg-white p-5 rounded-lg">
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
  
        <!-- Content Input (CKEditor) -->
        <div class="mb-4">
          <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
          <CKEditor v-model="form.content" :config="editorConfig" />
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
  
        <!-- Posted By Input -->
        <div class="mb-4">
          <label for="posted_by" class="block text-sm font-medium text-gray-700">Posted By</label>
          <input
            id="posted_by"
            v-model="form.posted_by"
            type="number"
            required
            class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
            placeholder="Enter user ID..."
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
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import axios from 'axios';
  import CKEditor from './CKEditor.vue'; // Import the CKEditor component
  
  // Form data
  const form = ref({
    title: '',
    content: '',
    document: '',
    link: '',
    posted_by: '',
  });
  
  // Loading state
  const isLoading = ref(false);
  
  // CKEditor configuration
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