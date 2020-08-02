const emailRules = [v => !!v || 'Email  is required',
	v => !v || /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'E-mail must be valid'
];
const passwordRules = [v => !!v || 'Password  is required'];

export {
	emailRules,
	passwordRules
};
