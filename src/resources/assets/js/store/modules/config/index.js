import { APP_NAME } from '@/configs/configs';

const state = {
	app_name: localStorage.getItem(APP_NAME) || '',

};

export default {
	state
};
