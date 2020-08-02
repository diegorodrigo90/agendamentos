import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from 'vuex-persistedstate';

import preloader from '@/store/modules/preloader/';
import auth from '@/store/modules/auth/';
import config from '@/store/modules/config/';


Vue.use(Vuex);

export default new Vuex.Store({
	modules: {
		preloader,
		auth,
		config,
		plugins: [createPersistedState({ storage: window.sessionStorage })],
	}
});
