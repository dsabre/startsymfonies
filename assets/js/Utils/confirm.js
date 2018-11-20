const swal = require('sweetalert2');

export function confirm(callback){
	swal({
		title              : 'Continue?',
		text               : "",
		type               : 'warning',
		showCancelButton   : true,
		confirmButtonColor : '#dc3545',
		cancelButtonColor  : '#6c757d',
		confirmButtonText  : 'Continue'
	}).then((result) =>{
		if(result.value){
			callback();
		}
	});
}