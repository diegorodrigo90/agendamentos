<template>
  <v-app>
    <toolbar-component
      :color="$refs.color"
      @toggle-drawer="$refs.drawer.drawer = !$refs.drawer.drawer"
    />
    <sidebar-component ref="drawer" />
  </v-app>
</template>

<script>
export default {
	computed: {
		user() {
			return this.$store.state.auth.user;
		}
	},
	methods: {
		logout() {
			this.$store.dispatch('logout');

			this.$snotify.success('Sucesso ao deslogar', 'logout...');

			this.$router.push({ name: 'login' });
		}
	}
};
</script>

<style>
.router-link-exact-active {
    color: #4bd02a !important;
}
.spacing-custon {
    padding: 40px 0;
}
.color-white {
    color: #fff !important;
}
</style>
