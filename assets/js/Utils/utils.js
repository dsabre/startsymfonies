const swal = require('sweetalert2');

export const SYMFONIES_STORAGE       = 'symfonies';
export const PHP_EXECUTABLES_STORAGE = 'php_executables';
export const INFO_STORAGE            = 'settings';
export const FAKE_TIMER              = 300;
export const URL_GITHUB              = 'https://github.com/raniel86/startsymfonies';

export function setDocumentTitle(title){
	getSiteName().then(siteName => {
		document.title = title + " | " + siteName;
	});
}

export function getPhpExecutables(forceReload){
	forceReload = !!forceReload;
	
	const phpExecutables = localStorage.getItem(PHP_EXECUTABLES_STORAGE);
	
	if(phpExecutables && !forceReload){
		return new Promise((resolve) =>{
			resolve(JSON.parse(phpExecutables));
		});
	}
	else{
		return fetch('/api/get-php-executables')
		.then(response => response.json())
		.then(phpExecutables =>{
			localStorage.setItem(PHP_EXECUTABLES_STORAGE, JSON.stringify(phpExecutables));
			return phpExecutables;
		});
	}
}

export function sleep(ms){
	return new Promise(resolve => setTimeout(resolve, ms));
}

export function getSiteName(forceReload){
	return getVersion(!!forceReload).then(version => {
		version = parseInt(version.split('.')[0].replace('v', '').split(' ').join(''), 10);
		
		return 'Startsymfonies ' + version;
	});
}

export function getVersion(forceReload){
	const cid = 'version';
	const version = localStorage.getItem(cid);
	
	if(version && !forceReload){
		return new Promise(resolve => {
			resolve(version);
		});
	}
	else{
		return fetch('https://api.github.com/repos/raniel86/startsymfonies/releases/latest')
		.then(response => response.json())
		.then(response => {
			localStorage.setItem(cid, response.tag_name);
			
			return response.tag_name;
		});
	}
}

export function longOperation($title, $button, $confirmButtonColor, $apiEndpoint, $successMessage, $component, $fakeTimer, $event){
	$event.preventDefault();
	
	$confirmButtonColor = $confirmButtonColor || '#007bff';
	$fakeTimer          = parseInt($fakeTimer || 0, 10);
	
	swal({
		title               : $title,
		showCancelButton    : true,
		confirmButtonText   : $button,
		showLoaderOnConfirm : true,
		confirmButtonColor  : $confirmButtonColor,
		cancelButtonColor   : '#6c757d',
		preConfirm          : () =>{
			if($fakeTimer === 0){
				return fetch('/api/' + $apiEndpoint)
				.then(response =>{
					if(!response.ok){
						throw new Error(response.statusText)
					}
					return response.json()
				})
				.catch(error =>{
					swal.showValidationMessage(
						`Request failed: ${error}`
					)
				});
			}
			else{
				fetch('/api/' + $apiEndpoint);
				
				return sleep($fakeTimer);
			}
		},
		allowOutsideClick   : () => !swal.isLoading()
	}).then((result) =>{
		if(result.value){
			swal({
				title : $successMessage,
				type  : 'success'
			}).then(() =>{
				if($component.props.history.location.pathname === '/'){
					window.location.href = '/?forced=1';
				}
				else{
					$component.props.history.push('/?forced=1');
				}
			});
		}
	});
}