import AdminComponent from '@/components/admin/AdminComponent';
import SiteComponent from '@/components/admin/SiteComponent';
import DashboardComponent from '@/components/admin/pages/dashboard/DashboardComponent';
import LoginComponent from '@/components/admin/pages/auth/LoginComponent';
import LogoutComponent from '@/components/admin/pages/auth/LogoutComponent';
import Page404 from '@/components/frontend/pages/404/Page404';
import HomePageComponent from '@/components/frontend/pages/home/HomePageComponent';


export default [
	/**
     * Rotas Site
     */

	{
		path:      '/',
		component: SiteComponent,
		children:  [{
			path:      '',
			component: HomePageComponent,
			name:      'home',
			meta:      {
				title: 'Página inicial',
			},
		}, {
			path:      'login',
			component: LoginComponent,
			name:      'login',
			meta:      {
				title: 'Acessar conta',
			},
		}, {
			path:      'logout',
			component: LogoutComponent,
			name:      'logout',
			meta:      {
				title: 'Saindo da conta',
			},
		}]
	},


	/**
     * Rotas Admin
     */

	{
		path:      '/admin',
		component: AdminComponent,
		children:  [{
			path:      '',
			component: DashboardComponent,
			name:      'dashboard',
			meta:      {
				title:        'Painel administrativo',
				requiresAuth: true
			},
		}]
	},

	// Rota 404
	{
		path:      '*',
		component: SiteComponent,
		children:  [{
			path:      '',
			component: Page404,
			name:      'notFound',
			meta:      {
				title: 'Página não encontrada',
			},
		}]
	},

];
