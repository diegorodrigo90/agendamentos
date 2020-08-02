<template>
  <v-app-bar
    dark
    app
  >
    <v-app-bar-nav-icon @click.stop="$emit('toggle-drawer')" />
  </v-app-bar>
</template>
