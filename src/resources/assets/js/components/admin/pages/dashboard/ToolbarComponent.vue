<template>
  <v-app-bar
    dark
    app
  >
    <v-app-bar-nav-icon @click.stop="$emit('toggle-drawer')" />
    <v-toolbar-items>
      <img
        src="@assets/img/calendar-logo.png"
        style="height: inherit; padding: 10px;"
      >
    </v-toolbar-items>

    <h5>
      {{ this.$store.state.config.app_name }}
    </h5>
    </v-img>
    </v-img>
  </v-app-bar>
</template>
