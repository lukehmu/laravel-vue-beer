<template>
  <div class="flex-center position-ref full-height">
    <p> {{ message }} </p>
  </div>
</template>
<script>
export default {
  name: 'Welcome',
  data() {
    return {
      message: 'HI',
    }
  },
}
</script>
<style scoped>
</style>
