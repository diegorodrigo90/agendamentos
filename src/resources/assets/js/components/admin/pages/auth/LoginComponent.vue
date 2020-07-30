<template>
  <v-app id="inspire">
    <v-main>
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col
            cols="12"
            sm="8"
            md="4"
          >
            <v-card class="elevation-12">
              <v-toolbar
                color="primary"
                dark
                flat
              >
                <v-toolbar-title>Login form</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      :href="source"
                      icon
                      large
                      target="_blank"
                      v-on="on"
                    >
                      <v-icon>mdi-code-tags</v-icon>
                    </v-btn>
                  </template>
                  <span>Source</span>
                </v-tooltip>
              </v-toolbar>
              <v-card-text>
                <v-form v-model="isValid"  @submit.prevent="login">
                  <v-text-field
                    label="E-mail"
                    v-model="formData.email"
                    name="email"
                    prepend-icon="mdi-account"
                    type="email"
                    :rules="emailRules"
                    required
                  ></v-text-field>

                  <v-text-field
                    id="password"
                    v-model="formData.password"
                    label="Password"
                    name="password"
                    prepend-icon="mdi-lock"
                    type="password"
                     :rules="passwordRules"
                    required
                  ></v-text-field>

<v-card-actions>
    <v-btn type="submit"
    color="primary" 
    :disabled="!isValid"
    >Login</v-btn>
</v-card-actions>

                </v-form>
              </v-card-text>
              
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>












<script>
export default {
	data() {
		return {
			formData: {
				email:    '',
				password: ''
			},
      isValid: true,
			errors: {},
			error:  ''
		};
	},
	methods: {
		login() {
			this.$store
				.dispatch('login', this.formData)
				.then(() => {
					this.$snotify.success('Sucesso ao logar', 'OK');
					this.$router.push({ name: 'dashboard' });
				})
				.catch(response => {
					this.error = response.error;
					this.$snotify.error('Falha...', 'Erro');
				});
		}
	}
};
</script>
