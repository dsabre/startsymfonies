const swal = require('sweetalert2');

export const SYMFONIES_STORAGE       = 'symfonies';
export const PHP_EXECUTABLES_STORAGE = 'php_executables';
export const FAKE_TIMER              = 300;
export const URL_GITHUB              = 'https://github.com/raniel86/startsymfonies2';
export const VERSION                 = '3.0.0';
export const SITE_NAME               = 'Startsymfonies ' + (VERSION.split('.')[0]);

export function setDocumentTitle(title){
	document.title = title + " | " + SITE_NAME;
}

export function sleep(ms) {
	return new Promise(resolve => setTimeout(resolve, ms));
}

export function longOperation($title, $button, $confirmButtonColor, $apiEndpoint, $successMessage, $component, $fakeTimer, $event){
	$event.preventDefault();
	
	$confirmButtonColor = $confirmButtonColor || '#007bff';
	$fakeTimer = parseInt($fakeTimer || 0, 10);
	
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