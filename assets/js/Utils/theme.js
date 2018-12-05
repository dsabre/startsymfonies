import {loadInfo} from "./utils";

const THEME_STORAGE = 'theme';
export const THEMES = {
	blue   : {
		brightness : 'dark',
		color      : 'primary',
		links      : 'primary',
		body       : null,
		text       : null
	},
	red    : {
		brightness : 'dark',
		color      : 'danger',
		links      : 'danger',
		body       : null,
		text       : null
	},
	yellow : {
		brightness : 'light',
		color      : 'warning',
		links      : 'dark',
		body       : null,
		text       : null
	},
	cyan   : {
		brightness : 'dark',
		color      : 'info',
		links      : 'info',
		body       : null,
		text       : null
	},
	white  : {
		brightness : 'light',
		color      : 'default',
		links      : 'dark',
		body       : null,
		text       : null
	},
	black  : {
		brightness : 'dark',
		color      : 'dark',
		links      : 'dark',
		body       : null,
		text       : null
	},
	green  : {
		brightness : 'dark',
		color      : 'success',
		links      : 'success',
		body       : null,
		text       : null
	},
	gray   : {
		brightness : 'dark',
		color      : 'secondary',
		links      : 'secondary',
		body       : null,
		text       : null
	},
	//symfony : {
	//	brightness : 'light',
	//	color      : 'symfony',
	//	body       : null,
	//	text       : null
	//},
	dark   : {
		brightness : 'dark',
		color      : 'dark',
		links      : 'light',
		body       : 'dark',
		text       : 'light'
	}
};

export function getThemeSettings(){
	return THEMES[getTheme()];
}

export function getTheme(){
	let theme = 'blue';
	
	loadInfo(null, false, info => {
		if(info.theme){
			theme = info.theme;
		}
	});
	
	return theme;
}