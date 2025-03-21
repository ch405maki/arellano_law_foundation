<template>
  <Head title="Create Post" />
  <AuthenticatedLayout>
    <div class="flex flex-col bg-gray-100">
      <main class="flex-grow">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-10">
          <div class="flex flex-col md:flex-row w-full justify-center">
            <!-- Content section -->
            <div class="w-full bg-white p-5 rounded-lg mt-4">
              <!-- Title -->
              <div class="text-left">
                <h2 class="text-xl font-bold">Create New Post</h2>
              </div>

              <!-- Form -->
              <form @submit.prevent="submitForm" class="mt-4" enctype="multipart/form-data">
                <!-- Category Input -->
                <div class="mb-4 max-w-xl">
                  <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                  <select
                    id="category"
                    v-model="form.category"
                    required
                    class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                  >
                    <option value="">Select Category</option>
                    <option value="Announcement">Announcement</option>
                    <option value="News">News</option>
                  </select>
                </div>

                <!-- Title Input -->
                <div class="mb-4">
                  <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
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
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                <div class="sm:col-span-12 mb-4">
                  <InputLabel for="content" value="Content" />
                  <ckeditor :editor="editor" v-model="form.content" :config="editorConfig"></ckeditor>
                </div>

                <!-- Document Input -->
                <div class="mb-4">
                  <label for="document" class="block text-sm font-medium text-gray-700 mb-2">Document (Optional)</label>
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
                  <label for="link" class="block text-sm font-medium text-gray-700 mb-2">Link (Optional)</label>
                  <input
                    id="link"
                    v-model="form.link"
                    type="url"
                    class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                    placeholder="Enter link..."
                  />
                </div>

                <!-- Image Upload Input -->
                <div class="mb-4">
                  <label for="images" class="block text-sm font-medium text-gray-700 mb-2">Images (Optional)</label>
                  <div class="flex items-center justify-center w-full">
                    <label
                      class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100"
                    >
                      <div v-if="previewImages.length === 0" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg
                          class="w-8 h-8 mb-4 text-gray-500"
                          aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 20 16"
                        >
                          <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                          />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500">
                          <span class="font-semibold">Click to upload</span>
                        </p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG, or GIF (MAX. 800x400px)</p>
                      </div>
                      <div v-else class="grid grid-cols-3 gap-4 p-4">
                        <div v-for="(image, index) in previewImages" :key="index" class="relative">
                          <img :src="image" alt="Preview" class="w-full h-32 object-cover rounded-lg" />
                          <button
                            type="button"
                            @click.stop="removeImage(index)"
                            class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center"
                          >
                            X
                          </button>
                        </div>
                      </div>
                      <input
                        id="images"
                        type="file"
                        multiple
                        @change="handleImageUpload"
                        class="hidden"
                      />
                    </label>
                  </div>
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
import { useToast } from 'vue-toastification';

const userId = usePage().props.userId;
const toast = useToast();

// Form data
const form = ref({
  title: '',
  category: '',
  content: '',
  document: '',
  link: '',
  posted_by: userId,
  images: [], 
});

// Image previews
const previewImages = ref([]);

// Loading state
const isLoading = ref(false);

const editor = ClassicEditor;
const editorConfig = {
  toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
};

// Function to handle image upload
const handleImageUpload = (event) => {
  const files = event.target.files;
  form.value.images = files;
  previewImages.value = [];

  // Generate previews for uploaded images
  Array.from(files).forEach((file) => {
    const reader = new FileReader();
    reader.onload = (e) => previewImages.value.push(e.target.result);
    reader.readAsDataURL(file);
  });
};

// Function to remove an image
const removeImage = (index) => {
  form.value.images.splice(index, 1);
  previewImages.value.splice(index, 1);
};

// Function to handle form submission
const submitForm = async () => {
  isLoading.value = true;

  try {
    const formData = new FormData();
    formData.append('title', form.value.title);
    formData.append('category', form.value.category);
    formData.append('content', form.value.content);
    formData.append('document', form.value.document);
    formData.append('link', form.value.link);
    formData.append('posted_by', form.value.posted_by);

    // Append each image to the FormData object
    if (form.value.images) {
      for (let i = 0; i < form.value.images.length; i++) {
        formData.append('images[]', form.value.images[i]);
      }
    }

    // Send a POST request to the API endpoint
    const response = await axios.post('/api/posts', formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
      },
    });

    // Show success toast
    toast.success('Post created successfully!');

    // Reset the form
    form.value = {
      title: '',
      content: '',
      document: '',
      link: '',
      posted_by: userId,
      images: [],
    };
    previewImages.value = [];

    setTimeout(() => {
      // Redirect to the post details page
      window.location.href = route('post.index');
    }, 3000);
    
  } catch (error) {
    // Show error toast
    toast.error('Failed to create post. Please check the form and try again.');
    console.error('Error creating post:', error.response?.data);
  } finally {
    isLoading.value = false;
  }
};
</script>

<style scoped>
.remove-button {
  background-color: #ef4444;
  color: white;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  cursor: pointer;
  border: none;
  position: absolute;
  top: 8px;
  right: 8px;
}

.remove-button:hover {
  background-color: #dc2626;
}

.preview-image {
  width: 100%;
  height: 128px;
  object-fit: cover;
  border-radius: 8px;
}
</style>