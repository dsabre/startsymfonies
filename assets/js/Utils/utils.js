import React from 'react';

const swal = require('sweetalert2');

export const SYMFONIES_STORAGE       = 'symfonies';
export const PHP_EXECUTABLES_STORAGE = 'php_executables';
export const INFO_STORAGE            = 'settings';
export const FAKE_TIMER              = 300;
export const URL_GITHUB              = 'https://github.com/raniel86/startsymfonies';
export const VERSION                 = 'v3.4.1';
export const CID_CHECK               = 'last_version_check';
export const CID_UPDATE              = 'update_available';

export function setDocumentTitle(title){
	document.title = title + " | " + getSiteName();
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

export function getSiteName(){
	return 'Startsymfonies ' + parseInt(VERSION.split('.')[0].replace('v', '').split(' ').join(''), 10);
}

export function getLastVersion(forceReload){
	const lastCheck   = parseInt(localStorage.getItem(CID_CHECK), 10);
	const now         = new Date();
	const cid         = 'version';
	const lastVersion = localStorage.getItem(cid);
	
	// 86400000 = 24h
	forceReload = forceReload || !lastVersion || !lastCheck || now.getTime() - lastCheck > 86400000;
	
	if(!forceReload){
		return new Promise(resolve =>{
			resolve(JSON.parse(lastVersion));
		});
	}
	else{
		return fetch('https://api.github.com/repos/raniel86/startsymfonies/releases/latest')
		.then(response => response.json())
		.then(response =>{
			loadInfo(null, false, info =>{
				localStorage.setItem(cid, JSON.stringify(response));
				localStorage.setItem(CID_CHECK, '' + now.getTime());
				localStorage.setItem(CID_UPDATE, response.tag_name !== VERSION && info.checkUpdates ? '1' : '0');
			});
			
			return response;
		});
	}
}

export function onFaviconError(event){
	event.target.src = '/favicon.ico';
}

export function longOperation($title, $button, $confirmButtonColor, $apiEndpoint, $successMessage, $component, $fakeTimer, $event){
	$event.preventDefault();
	
	$confirmButtonColor = $confirmButtonColor || '#007bff';
	$fakeTimer          = parseInt($fakeTimer || 0, 10);
	
	let $text = '';
	if($title.indexOf('\n') > -1){
		let $texts = $title.split('\n');
		
		$title = $texts[0];
		$text  = $texts[1];
	}
	
	swal({
		title               : $title,
		text                : $text,
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

export function loadInfo(component, forceReload, callback){
	forceReload = !!forceReload;
	
	const settings = localStorage.getItem(INFO_STORAGE);
	
	if(settings && !forceReload){
		const info = JSON.parse(settings);
		
		if(component){
			component.setState({info : info}, () =>{
				if(callback){
					callback(info);
				}
			});
		}
		else{
			if(callback){
				callback(info);
			}
		}
	}
	else{
		fetch('/api/get-system-info')
		.then(response => response.json())
		.then(info =>{
			if(component){
				component.setState({info : info}, () =>{
					localStorage.setItem(INFO_STORAGE, JSON.stringify(info));
					
					if(callback){
						callback(info);
					}
				});
			}
			else{
				localStorage.setItem(INFO_STORAGE, JSON.stringify(info));
				
				if(callback){
					callback(info);
				}
			}
		});
	}
}
