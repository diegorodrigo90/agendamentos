<template>
  <v-container>
    <v-navigation-drawer
      v-model="drawer"
      v-click-outside="hideDrawer"
      :color="color"
      :src="bg"
      absolute
      dark
      @toggle-drawer="$refs.drawer.drawer = !$refs.drawer.drawer"
    >
      <v-list
        dense
        nav
        class="py-0"
      >
        <v-list-item two-line>
          <v-list-item-avatar>
            <img
              src="https://randomuser.me/api/portraits/men/81.jpg"
            >
          </v-list-item-avatar>

          <v-list-item-content>
            <v-list-item-title> {{ title }} </v-list-item-title>
            <v-list-item-subtitle>Subtext</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>

        <v-divider />

        <v-list-item
          v-for="item in items"
          :key="item.title"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>
              {{ item.title }}
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-container>
</template>

<script>
export default {
	data() {
		return {
			title:  'Agendamento',
			drawer: false,
			items:  [
				{ title: 'Dashboard', icon: 'mdi-view-dashboard' },
				{ title: 'Photos', icon: 'mdi-image' },
				{ title: 'About', icon: 'mdi-help-box' }
			],
			color:         'dark',
			colors:        ['primary', 'blue', 'success', 'red', 'teal'],
			right:         false,
			expandOnHover: false,
			background:    false
		};
	},
	computed: {
		bg() {
			return this.background
				? 'https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg'
				: undefined;
		}
	},
	methods: {
		hideDrawer() {
			this.drawer = false;
		}
	}
};
</script>

<style></style>
