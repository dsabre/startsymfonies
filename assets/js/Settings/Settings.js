import React, {Component} from 'react';
import {getTheme, getThemeSettings, THEMES} from "../Utils/theme";
import {loadInfo, setDocumentTitle} from "../Utils/utils";
import {deepCopy} from "../Utils/deepCopy";
import toastr from "toastr";

const swal = require('sweetalert2');

class Settings extends Component {
	constructor(props){
		super(props);
		
		this.state = {
			info         : [],
			newDirectory : '',
			hidden: true
		};
		
		this.theme         = getTheme();
		this.themeSettings = getThemeSettings();
		
		this.handleReload = this.handleReload.bind(this);
	}
	
	componentDidMount(){
		const $urlParams   = new URLSearchParams(window.location.search);
		const $forceReload = parseInt($urlParams.get('forced'), 10) === 1;
		
		if($forceReload){
			loadInfo(null, true, () => {
				window.location.href = '/settings';
			});
		}
		else{
			this.setState({hidden: false});
			
			loadInfo(this);
			
			document.addEventListener('keydown', this.handleReload);
		}
		
		setDocumentTitle('System info');
	}
	
	componentWillUnmount(){
		document.removeEventListener('keydown', this.handleReload);
	}
	
	handleReload(e){
		if(e.key === 'F5'){
			e.preventDefault();
			
			loadInfo(this, true, () =>{
				toastr.info('Info reloaded');
			});
		}
	}
	
	render(){
		const directoriesToScan   = this.state.info.directoriesToScan || [];
		const phpExecutable       = this.state.info.phpExecutable || '';
		const otherPhpExecutables = this.state.info.otherPhpExecutables || [];
		const gitExecutable       = this.state.info.gitExecutable || '';
		const yarnExecutable      = this.state.info.yarnExecutable || '';
		const composerExecutable  = this.state.info.composerExecutable || '';
		const hostsFile           = this.state.info.hostsFile || '';
		const themeSelected       = this.state.info.theme || '';
		const userRunning         = this.state.info.userRunning || '';
		const checkUpdates        = this.state.info.checkUpdates || false;
		const configPath          = this.state.info.configPath || '';
		
		return (
			<div className={"container"} hidden={this.state.hidden}>
				<div className={"bg-" + (this.themeSettings.body === null ? 'light' : this.themeSettings.body) + " text-" + (this.themeSettings.text === null ? 'dark' : this.themeSettings.text) + " p-3 mt-3 border border-secondary rounded animated fadeIn"}>
					<h1 className="mb-3">Settings</h1>
					
					<dl className="row">
						<dt className="col-sm-3">Directories to scan</dt>
						<dd className="col-sm-9">
							<table className={"table table-borderless table-sm table-striped table-hover"}>
								<tbody>
								{directoriesToScan.map((directory, i) =>{
									return (
										<tr key={i}>
											<td>{directory}</td>
											<td>
												<a onClick={this.removeDirectory.bind(this, i)} href="#" className={"btn btn-outline-danger btn-sm btn-block"}>
													<i className="fas fa-times mr-2"/>
													Remove
												</a>
											</td>
										</tr>
									);
								})}
								<tr>
									<td colSpan={2}>
										<form onSubmit={this.addDirectory.bind(this)} className="form-inline">
											<div className="form-group w-75 pr-3">
												<input required={true} value={this.state.newDirectory} onChange={this.handleChangeNewDirectory.bind(this)} type="text" className={"form-control form-control-sm w-100"} placeholder={"New directory"}/>
											</div>
											<button type="submit" className="btn btn-outline-success btn-sm w-25">
												<i className="fas fa-plus mr-2"/>
												Add directory
											</button>
										</form>
									</td>
								</tr>
								</tbody>
							</table>
						</dd>
						
						<dt className="col-sm-3">Php executable</dt>
						<dd className="col-sm-9 font-monospace">{phpExecutable}</dd>
						
						<dt className="col-sm-3">Other php executables</dt>
						<dd className="col-sm-9 font-monospace">{otherPhpExecutables.join(', ') || ''}</dd>
						
						<dt className="col-sm-3">Git executable</dt>
						<dd className="col-sm-9 font-monospace">{gitExecutable}</dd>
						
						<dt className="col-sm-3">Composer executable</dt>
						<dd className="col-sm-9 font-monospace">{composerExecutable}</dd>
						
						<dt className="col-sm-3">Yarn executable</dt>
						<dd className="col-sm-9 font-monospace">{yarnExecutable}</dd>
						
						<dt className="col-sm-3">Check updates</dt>
						<dd className="col-sm-9">
							{checkUpdates && <i className="fas fa-check text-success" aria-hidden="true"/>}
							{!checkUpdates && <i className="fas fa-times text-muted" aria-hidden="true"/>}
						</dd>
						
						<dt className="col-sm-3">Host file</dt>
						<dd className="col-sm-9 font-monospace">{hostsFile}</dd>
						
						<dt className="col-sm-3">Theme</dt>
						<dd className="col-sm-9 font-monospace">
							<p className={"m-0"}>{themeSelected}</p>
							
							<div className="btn-group" role="group" aria-label="Select theme">
								{Object.keys(THEMES).map((theme, k) =>{
									return (
										<a key={k} href={"/action/set-theme/" + theme} className={"btn btn-secondary btn-sm" + (themeSelected === theme ? ' active' : '')}>{theme}</a>);
								})}
							</div>
						</dd>
						
						<dt className="col-sm-3">Running on user</dt>
						<dd className="col-sm-9 font-monospace">{userRunning}</dd>
						
						<dt className="col-sm-3">Config file path</dt>
						<dd className="col-sm-9 font-monospace">
							<a className={"text-" + this.themeSettings.links} title={"Click to show raw config"} href={"/raw-config"} target={"_blank"}>
								<u>
									<small>{configPath}</small>
								</u>
							</a>
						</dd>
					</dl>
				</div>
			</div>
		);
	}
	
	handleChangeNewDirectory(event){
		const value  = event.target.value;
		let tmpState = deepCopy(this.state);
		
		tmpState['newDirectory'] = value;
		
		this.setState(tmpState);
	}
	
	addDirectory(event){
		event.preventDefault();
		
		let tmpState = deepCopy(this.state);
		
		tmpState.info.directoriesToScan.push(tmpState.newDirectory);
		tmpState['newDirectory'] = '';
		
		fetch('/api/set-directories-to-scan', {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : JSON.stringify({
				directoriesToScan : tmpState.info.directoriesToScan
			})
		})
		.then(() => this.setState(tmpState));
	}
	
	removeDirectory(k, event){
		event.preventDefault();
		
		let tmpState = deepCopy(this.state);
		
		swal({
			title               : 'Remove directory?',
			text                : tmpState.info.directoriesToScan[k],
			showCancelButton    : true,
			confirmButtonText   : 'Continue',
			showLoaderOnConfirm : true,
			confirmButtonColor  : '#dc3545',
			cancelButtonColor   : '#6c757d',
			preConfirm          : () =>{
				tmpState.info.directoriesToScan.splice(k, 1);
				
				return fetch('/api/set-directories-to-scan', {
					method  : 'POST',
					headers : {
						Accept         : 'application/json',
						'Content-Type' : 'application/json'
					},
					body    : JSON.stringify({
						directoriesToScan : tmpState.info.directoriesToScan
					})
				})
				.catch(error =>{
					swal.showValidationMessage(
						`Request failed: ${error}`
					)
				});
			},
			allowOutsideClick   : () => !swal.isLoading()
		}).then(result =>{
			if(result.value !== undefined){
				this.setState(tmpState, () =>{
					loadInfo(this, true);
					
					swal({
						title : 'Directory removed correctly',
						type  : 'success'
					});
				});
			}
		});
	}
}

export default Settings;
