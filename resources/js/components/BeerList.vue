<template>
  <v-container>
    <v-card
      v-for="beer in beers"
      :key="beer.id"

      max-width="400"
      tile
    >
      <v-list-item three-line>
        <v-list-item-content>
          <v-list-item-title><a :href="`${route + beer.id}`">{{ beer.name }}</a></v-list-item-title>
          <v-list-item-subtitle>{{ beer.description }}</v-list-item-subtitle>
          <v-list-item-subtitle>{{ beer.percentage }}%</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
    </v-card>
  </v-container>
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
