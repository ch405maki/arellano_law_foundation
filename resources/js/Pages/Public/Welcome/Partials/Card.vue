<template>
  <div class="max-w-6xl mx-auto px-4 py-4 lg:py-8">
    <div class="programs-carousel owl-carousel owl-theme">
      <div v-for="(item, index) in items" :key="index" class="item">
        <a :href="item.href" class="block bg-white rounded shadow hover:shadow-md h-full">
          <img :src="item.image" class="w-full h-full object-cover" alt="Program Image">
        </a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const items = ref([
  {
    image: '/images/programs/ausl.jpg',
    href: 'https://arellanolaw.edu'
  },
  {
    image: '/images/programs/bar.jpg',
    href: 'programs/bar'
  },
  {
    image: '/images/programs/lawphil.jpg', 
    href: 'https://lawphil.net/'
  },
  {
    image: '/images/programs/mcle.jpg',
    href: 'programs/mcle'
  },
  {
    image: '/images/programs/iss.jpg',
    href: 'programs/mcle'
  },
  {
    image: '/images/programs/ola.jpg',
    href: 'programs/mcle'
  },
  {
    image: '/images/programs/phoenix.jpg',
    href: 'programs/mcle'
  }
]);

onMounted(() => {
  if (typeof $ !== 'undefined') {
    const owlCarousel = $('.programs-carousel').owlCarousel({
      loop: true,
      margin: 20,
      autoplay: true,
      autoplayTimeout: 4000,
      responsive: {
        0: { items: 2 },
        600: { items: 3 },
        1000: { items: 4 },
      }
    });

    // Pause autoplay on hover
    $('.programs-carousel').on('mouseover', function() {
      owlCarousel.trigger('stop.owl.autoplay');
    });

    // Resume autoplay on mouseleave
    $('.programs-carousel').on('mouseleave', function() {
      owlCarousel.trigger('play.owl.autoplay', [4000]);
    });
  } else {
    console.error('jQuery is not loaded');
  }
});
</script>

<style scoped>
/* Custom styles for Owl Carousel */
.programs-carousel .item {
  padding: 0 10px;
}

/* Navigation buttons */
.owl-nav {
  position: absolute;
  top: 50%;
  width: 100%;
  display: flex;
  justify-content: space-between;
  transform: translateY(-50%);
  pointer-events: none;
}

.owl-nav button {
  pointer-events: all;
  background: white !important;
  color: black !important;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.owl-nav button:hover {
  background: #f8f9fa !important;
}

.owl-nav button span {
  font-size: 24px;
  line-height: 1;
}

/* Dots navigation */
.owl-dots {
  text-align: center;
  margin-top: 20px;
}

.owl-dots button.owl-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #ddd !important;
  margin: 0 5px;
}

.owl-dots button.owl-dot.active {
  background: #6c63ff !important;
}
</style>