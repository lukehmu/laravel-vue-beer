<template>
  <div class="flex-center position-ref full-height">
    <p> {{ message }} </p>
  </div>
</template>
<script>
export default {
  name: 'Welcome',
  props: {
    message: {
      type: String,
      default: 'default message',
    },
  },
  data() {
    return {
      genericData: 'HI',
    }
  },
}
</script>
<style scoped>
</style>
