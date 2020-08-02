// Recupera o arquivo com as configurações iniciais do projeto
require('@/bootstrap');
import VueI18n from 'vue-i18n';
import '@mdi/font/css/materialdesignicons.css';
import vuetify from '@/plugins/vuetify'; // path to vuetify export
import vClickOutside from 'v-click-outside';
window.Vue = require('vue');

let messages = require('@/i18n/');

import Snotify from 'vue-snotify';
import VueSwal from 'vue-swal';

import router from '@/routes';
import store from '@/store';


Vue.use(Snotify, {
	toast: {
		showProgressBar: false
	}
});

const i18n = new VueI18n({
	locale:         window.locale, // set locale
	fallbackLocale: window.fallback_locale, //falback language
	messages
});

Vue.use(VueSwal);

Vue.use(vClickOutside);

/**
 * Cria os componentes globais
 */
Vue.component(
	'PreloaderComponent',
	require('@/components/layouts/PreloaderComponent').default

);

Vue.component(
	'SidebarComponent',
	require('@/components/admin/pages/dashboard/SidebarComponent').default

);

Vue.component(
	'ToolbarComponent',
	require('@/components/admin/pages/dashboard/ToolbarComponent').default

);


// Instância do Vue JS, e seletor
const app = new Vue({
	vuetify,
	router,
	store,
	i18n,
	el: '#app'
});
