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
              </v-toolbar>
              <v-card-text>
                <v-form
                  v-model="isValid"
                  @submit.prevent="login"
                >
                  <v-text-field
                    v-model="formData.email"
                    label="E-mail"
                    name="email"
                    prepend-icon="mdi-account"
                    type="email"
                    :rules="emailValidation"
                  />

                  <v-text-field
                    id="password"
                    v-model="formData.password"
                    label="Password"
                    name="password"
                    prepend-icon="mdi-lock"
                    type="password"
                    :rules="passwordValidation"
                  />

                  <v-card-actions>
                    <v-btn
                      type="submit"
                      color="primary"
                      :disabled="!isValid"
                    >
                      Login
                    </v-btn>
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
import { emailRules, passwordRules } from '@/validators';
export default {
	data() {
		return {
			formData: {
				email:    '',
				password: ''
			},

			emailValidation:    emailRules,
			passwordValidation: passwordRules,
			isValid:            true
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
				.catch(() => {
					this.$snotify.error('Falha ao logar', 'Erro');
				});
		}
	}
};
</script>
