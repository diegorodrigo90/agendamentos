<template>
  <div>
    <v-app-bar dark>
      <v-app-bar-nav-icon
        v-if="menu"
        @click.stop="$emit('toggle-drawer')"
      />
      <img
        src="@assets/img/calendar-logo.png"
        style="height: inherit; padding: 10px;"
      >
      <v-toolbar-title>
        <router-link
          class="routerLink"
          link
          app
          :to="{ name: 'home' }"
        >
          {{ this.$store.state.config.app_name }}
        </router-link>
      </v-toolbar-title>

      <v-spacer />

      <v-menu
        left
        bottom
      >
        <template
          v-if="this.$store.state.auth.authenticated"
          v-slot:activator="{ on, attrs }"
        >
          <v-btn
            icon
            v-bind="attrs"
            v-on="on"
          >
            <v-icon>mdi-dots-vertical</v-icon>
          </v-btn>
        </template>

        <v-list>
          <v-list-item>
            <v-list-item-title>
              {{
                this.$store.state.auth.user.name
              }}
            </v-list-item-title>
          </v-list-item>
          <v-spacer />
          <v-list-item
            :to="{ name: 'logout' }"
            link
          >
            <v-list-item-title>
              Sair
            </v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </v-app-bar>
  </div>
</template>

<script>
export default {
	props: {
		menu: {
			type:    Boolean,
			default: false
		}
	}
};
</script>

<style scoped>
.routerLink{
     text-decoration: none;
     color: #FFF !important;
 }
</style>
