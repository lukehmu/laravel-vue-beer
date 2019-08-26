<template>
  <div class="text-center">
    <v-menu offset-y>
      <template v-slot:activator="{ on }">
        <v-btn
          color="primary"
          dark
          v-on="on"
        >
          Menu
        </v-btn>
      </template>
      <v-list>
        <v-list-item
          v-for="(item, index) in navItems"
          :key="index"
        >
          <v-list-item-title>
            <a :href="item.link">{{ item.title }}</a>
          </v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
</template>
<script>
export default {
  name: 'NavBar',
  props: {
    indexBeersRoute: {
      type: String,
      default: 'beers',
    },
    createBeersRoute: {
      type: String,
      default: 'beers/create',
    },
  },
  data() {
    return {
      navItems: [
        { title: 'View all beers', link: 'beers' },
        { title: 'Create beer', link: 'beers/create' },
      ],
    }
  },
}
</script>
<style scoped>
</style>
