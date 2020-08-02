import Vue from 'vue';
import Router from 'vue-router';
import store from '@/store';

import routes from '@/routes/routers.map';

Vue.use(Router);


const router = new Router({
	routes,
	mode: 'history'
});

router.beforeEach((to, from, next) => {
	console.log(store.state.config.app_name);
	let isAuthenticated = store.state.auth.authenticated;
	let title = (to.meta.title) ? to.meta.title + ' - ' + document.title : document.title;
	document.title = title;

	if (to.name == 'login' && isAuthenticated) {
		next({
			name: 'home'
		});
	}

	if (to.matched.some(record => record.meta.requiresAuth)) {
		// this route requires auth, check if logged in
		// if not, redirect to login page.
		if (!isAuthenticated) {
			next({
				name: 'login'
			});

		} else {
			next();
		}
	} else {
		next(); // make sure to always call next()!
	}
});


export default router;
