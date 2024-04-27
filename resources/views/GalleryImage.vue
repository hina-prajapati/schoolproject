<template>
  <div class="gallery-image">
    <img :src="imageUrl" alt="Gallery Image" @click="openImageModal" />
  </div>
</template>

<script>
export default {
  props: {
    image: {
      type: String,
      required: true
    }
  },
  computed: {
    imageUrl() {
      // Assuming image URLs are relative to the root URL
      return process.env.BASE_URL + this.image;
    }
  },
  methods: {
    openImageModal() {
      // Implement logic to open a modal or lightbox for the image
      // You can use a library like Fancybox, Lightbox, etc.
    }
  }
};
</script>

<style scoped>
/* Add styling for the gallery image if needed */
</style>
