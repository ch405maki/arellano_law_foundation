<template>
  <div class="carousel-wrapper">
    <div 
      ref="fotoramaContainer" 
      class="fotorama" 
      data-transition="crossfade"
      data-fit="cover"
      data-width="100%" 
      data-ratio="1152/280" 
      data-nav="false"  
      data-autoplay="7000"
      data-stopautoplayontouch="false">
      
      <div v-for="(item, i) in items" :key="i" class="carousel-item">
        <!-- Wrap the image with an anchor tag for linking -->
        <a :href="item.link" target="_blank" rel="noopener noreferrer">
          <img :src="item.src" class="carousel-image object-fit" alt="Carousel Image" />
        </a>
      </div>
      
      <div class="fotorama-indicators"></div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';

const items = [
  {
    src: '/images/carousel/welcome.jpg',
    link: 'https://lawphil.net/',
  },
  {
    src: '/images/carousel/image2.jpg',
    link: 'https://lawphil.net/',
  },
  {
    src: '/images/carousel/image3.png',
    link: 'programs/mcle',
  },
  {
    src: '/images/carousel/image1.jpg',
     link: '',
   },
 ]

const fotoramaContainer = ref(null);

const initializeFotorama = () => {
  const $fotorama = $(fotoramaContainer.value).fotorama();
  const fotorama = $fotorama.data('fotorama');

  $(fotoramaContainer.value).on('click', '.carousel-item a', () => {
    fotorama.startAutoplay(7000);
  });

  // Create indicators
  const indicatorsContainer = $(fotoramaContainer.value).find('.fotorama-indicators');
  items.forEach((_, index) => {
    const indicator = $('<div class="indicator"></div>');
    indicatorsContainer.append(indicator);
  });
};

onMounted(() => {
  nextTick(() => {
    initializeFotorama();
  });
});
</script>

<style scoped>
  /* Your styles here */
</style>