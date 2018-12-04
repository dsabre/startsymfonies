import React, {Component} from 'react';
import {getTheme, getThemeSettings, setTheme, THEMES} from "../Utils/theme";
import {INFO_STORAGE, setDocumentTitle} from "../Utils/utils";
import {deepCopy} from "../Utils/deepCopy";
import toastr from "toastr";

const swal = require('sweetalert2');

class Settings extends Component {
	constructor(props){
		super(props);
		
		this.state = {
			info         : [],
			newDirectory : ''
		};
		
		this.theme         = getTheme();
		this.themeSettings = getThemeSettings();
		
		this.handleReload = this.handleReload.bind(this);
	}
	
	componentDidMount(){
		this.loadInfo();
		
		document.addEventListener('keydown', this.handleReload);
		
		setDocumentTitle('System info');
	}
	
	componentWillUnmount(){
		document.removeEventListener('keydown', this.handleReload);
	}
	
	handleReload(e){
		if(e.key === 'F5'){
			e.preventDefault();
			
			this.loadInfo(true, function(){
				toastr.info('Info reloaded');
			});
		}
	}
	
	loadInfo(forceReload, callback){
		forceReload = !!forceReload;
		
		const settings = localStorage.getItem(INFO_STORAGE);
		
		if(settings && !forceReload){
			this.setState({info : JSON.parse(settings)});
		}
		else{
			fetch('/api/get-system-info')
			.then(response => response.json())
			.then(info =>{
				this.setState({info : info}, () =>{
					localStorage.setItem(INFO_STORAGE, JSON.stringify(info));
					
					if(callback){
						callback();
					}
				});
			});
		}
	}
	
	render(){
		const directoriesToScan   = this.state.info.directoriesToScan || [];
		const phpExecutable       = this.state.info.phpExecutable || '';
		const otherPhpExecutables = this.state.info.otherPhpExecutables || [];
		const gitExecutable       = this.state.info.gitExecutable || '';
		const composerExecutable  = this.state.info.composerExecutable || '';
		const hostsFile           = this.state.info.hostsFile || '';
		//const themeSelected       = this.state.info.themeSelected || '';
		const userRunning         = this.state.info.userRunning || '';
		const autoupdate          = this.state.info.autoupdate || false;
		const checkVersion        = this.state.info.checkVersion || false;
		const configPath          = this.state.info.configPath || '';
		
		return (
			<div className={"container"}>
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
						
						<dt className="col-sm-3">Symfony executable</dt>
						<dd className="col-sm-9 font-monospace">/usr/local/bin/symfony</dd>
						
						<dt className="col-sm-3">Check version</dt>
						<dd className="col-sm-9">
							{checkVersion && <i className="fas fa-check text-success" aria-hidden="true"/>}
							{!checkVersion && <i className="fas fa-times text-muted" aria-hidden="true"/>}
						</dd>
						
						<dt className="col-sm-3 text-truncate">Autoupdate</dt>
						<dd className="col-sm-9">
							{autoupdate && <i className="fas fa-check text-success" aria-hidden="true"/>}
							{!autoupdate && <i className="fas fa-times text-muted" aria-hidden="true"/>}
						</dd>
						
						<dt className="col-sm-3">Host file</dt>
						<dd className="col-sm-9 font-monospace">{hostsFile}</dd>
						
						<dt className="col-sm-3">Theme</dt>
						<dd className="col-sm-9 font-monospace">
							<p className={"m-0"}>{this.theme}</p>
							
							<div className="btn-group" role="group" aria-label="Select theme">
								{Object.keys(THEMES).map((theme, k) =>{
									return (
										<button onClick={setTheme.bind(this, theme)} key={k} className={"btn btn-secondary btn-sm" + (this.theme === theme ? ' active' : '')}>{theme}</button>);
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
					this.loadInfo(true);
					
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
