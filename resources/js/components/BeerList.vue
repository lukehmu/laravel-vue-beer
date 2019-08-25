<template>
  <div class="flex-center position-ref full-height">
    <ul>
      <li
        v-for="beer in beers"
        :key="beer.id"
      >
        <!-- {{ beer.id }} -->
        <a :href="`${route + beer.id}`">{{ beer.name }}</a>
        {{ beer.description }}
        {{ beer.percentage }}%
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  name: 'BeerList',
  props: {
    beers: {
      type: Array,
      default: () => [],
    },
    route: {
      type: String,
      default: '',
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
