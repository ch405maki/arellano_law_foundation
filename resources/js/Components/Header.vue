<template>
    <div class="relative mb-4">
      <img src="/images/header.jpg" alt="Background Image" class="w-full h-auto object-cover" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-lg sm:text-xl md:text-xl lg:text-2xl xl:text-4xl font-bold text-center">
          <span ref="typewriterText"></span>
        </h1>
      </div>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  
  export default {
    setup(_, { slots }) {
      const typewriterText = ref(null);
      const typingSpeed = 50;
  
      onMounted(() => {
        if (slots.default && slots.default().length > 0) {
          const textContent = slots.default()[0].children;
          let index = 0;
          const typeText = () => {
            if (typewriterText.value && index < textContent.length) {
              typewriterText.value.innerHTML += textContent[index];
              index++;
              setTimeout(typeText, typingSpeed);
            }
          };
          typeText();
        }
      });
      return { typewriterText };
    },
  };
  </script>
  
  <style scoped>
    @import url('https://db.onlinewebfonts.com/c/2bf40ab72ea4897a3fd9b6e48b233a19?family=Garamond');
    
    .garamond {
      font-family: 'Garamond', serif;
    }
  </style>