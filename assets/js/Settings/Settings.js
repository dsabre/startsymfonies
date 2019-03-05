import React, {Component} from 'react';
import {getTheme, getThemeSettings, THEMES} from "../Utils/theme";
import {CID_UPDATE, getLastVersion, loadInfo, longOperation, setDocumentTitle, SYMFONIES_STORAGE} from "../Utils/utils";
import {deepCopy} from "../Utils/deepCopy";
import toastr from "toastr";
import Switch from 'react-toggle-switch';
import '../../../node_modules/react-toggle-switch/dist/css/switch.min.css';

const swal = require('sweetalert2');

class Settings extends Component {
	constructor(props){
		super(props);
		
		this.state = {
			info         : [],
			newDirectory : '',
			hidden       : true,
			edit         : '',
			editValue    : ''
		};
		
		this.theme         = getTheme();
		this.themeSettings = getThemeSettings();
		
		this.handleReload = this.handleReload.bind(this);
	}
	
	componentDidMount(){
		const $urlParams   = new URLSearchParams(window.location.search);
		const $forceReload = parseInt($urlParams.get('forced'), 10) === 1;
		
		if($forceReload){
			loadInfo(null, true, () =>{
				localStorage.removeItem(SYMFONIES_STORAGE);
				
				getLastVersion(true).then(() => window.location.href = '/settings');
			});
		}
		else{
			this.setState({hidden : false});
			
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
				toastr.info('Settings reloaded');
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
				<div className={"bg-" + (this.themeSettings.body === null ? 'light' : this.themeSettings.body) + " text-" + (this.themeSettings.text === null ? 'dark' : this.themeSettings.text) + " p-3 mt-3 border border-secondary py-2 rounded animated fadeIn"}>
					<h1 className="mb-3">Settings</h1>
					
					<dl className="row">
						<dt className="col-sm-3 border-top border-secondary py-2">Directories to scan</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							<table className={"table table-borderless table-sm table-striped table-hover"}>
								<tbody>
								{directoriesToScan.map((directory, i) =>{
									return (
										<tr key={i}>
											<td className={"font-monospace"}>{directory}</td>
											<td className={"text-right"}>
												<button onClick={longOperation.bind(this, 'Launch scan now?\n' + directory, 'Scan', null, 'scan/' + i, 'Scan completed', this, null)} className={"btn btn-outline-info btn-sm mr-2"} type={"button"}>
													<i className="fas fa-search-plus mr-2"/>
													<small>Scan</small>
												</button>
												<button onClick={longOperation.bind(this, 'Launch prune now?\n' + directory, 'Prune', '#dc3545', 'prune/' + i, 'Prune completed', this, null)} className={"btn btn-outline-danger btn-sm mr-2"} type={"button"}>
													<i className="fas fa-search-minus mr-2"/>
													<small>Prune</small>
												</button>
												<button onClick={this.removeDirectory.bind(this, i)} className={"btn btn-danger btn-sm"} type={"button"}>
													<i className="fas fa-times mr-2"/>
													<small>Remove</small>
												</button>
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
						
						<dt className="col-sm-3 border-top border-secondary py-2">Php executable</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							{this.editableField('phpExecutable', phpExecutable)}
						</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Other php executables</dt>
						<dd className="col-sm-9 border-top border-secondary py-2 font-monospace">{otherPhpExecutables.join(', ') || ''}</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Git executable</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							{this.editableField('gitExecutable', gitExecutable)}
						</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Composer executable</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							{this.editableField('composerExecutable', composerExecutable)}
						</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Yarn executable</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							{this.editableField('yarnExecutable', yarnExecutable)}
						</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Check updates</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							<span style={{marginBottom: '-6px'}} className={"float-left mt-1"}>
								<Switch onClick={this.editBoolValue.bind(this, 'checkUpdates', !checkUpdates)} on={checkUpdates} />
							</span>
							
							{checkUpdates && <div className={"float-right"}>
								<button onClick={this.checkUpdate} type={'button'} className={'btn btn-outline-secondary btn-sm'}>
									<i className="fas fa-sync-alt mr-1" />
									Check now
								</button>
							</div>}
						</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Host file</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							{this.editableField('hostsFile', hostsFile)}
						</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Theme</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							<p className={"m-0 font-monospace"}>{themeSelected}</p>
							
							<div className="btn-group" role="group" aria-label="Select theme">
								{Object.keys(THEMES).map((theme, k) =>{
									return (
										<a key={k} href={"/action/set-theme/" + theme} className={"btn btn-secondary btn-sm" + (themeSelected === theme ? ' active' : '')}>{theme}</a>);
								})}
							</div>
						</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Running on user</dt>
						<dd className="col-sm-9 border-top border-secondary py-2 font-monospace">{userRunning}</dd>
						
						<dt className="col-sm-3 border-top border-secondary py-2">Config file path</dt>
						<dd className="col-sm-9 border-top border-secondary py-2">
							<a className={"text-" + this.themeSettings.links} title={"Click to show raw config"} href={"/raw-config"} target={"_blank"}>
								<u className={"font-monospace"}>
									{configPath}
								</u>
							</a>
						</dd>
					</dl>
				</div>
			</div>
		);
	}
	
	checkUpdate(){
		getLastVersion(true).then(() => {
			if(parseInt(localStorage.getItem(CID_UPDATE), 10) === 0){
				toastr.info('No update available');
			}
			else{
				toastr.warning('New update available');
			}
		});
	}
	
	editableField(field, value){
		return (
			<div>
				<div hidden={this.state.edit === field}>
					<span className="float-left font-monospace">{value}</span>
					<button onClick={this.setEdit.bind(this, field, value)} className={"btn btn-outline-secondary btn-sm ml-2 float-right"}>
						<i className="fas fa-edit mr-1"/>
						Edit
					</button>
				</div>
				
				<div hidden={this.state.edit !== field}>
					<input onChange={this.handleChangeEditValue.bind(this)} type="text" className={"form-control form-control-sm d-inline w-50"} value={this.state.editValue}/>
					<button onClick={this.saveEditValue.bind(this)} className={"btn btn-primary btn-sm ml-2"}>Save</button>
					<button onClick={this.setEdit.bind(this, '', '')} className={"btn btn-secondary btn-sm ml-2"}>Cancel</button>
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
		.then(() => this.setState(tmpState, () =>{
			loadInfo(this, true);
		}));
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
	
	setEdit(field, value){
		let tmpState = deepCopy(this.state);
		
		tmpState.edit      = field;
		tmpState.editValue = value;
		
		this.setState(tmpState);
	}
	
	handleChangeEditValue(event){
		const value  = event.target.value;
		let tmpState = deepCopy(this.state);
		
		tmpState.editValue = value;
		
		this.setState(tmpState);
	}
	
	saveEditValue(){
		let tmpState = deepCopy(this.state);
		
		fetch('/api/set-config-value', {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : JSON.stringify({
				field : tmpState.edit,
				value : tmpState.editValue
			})
		})
		.then(() =>{
			tmpState.info[tmpState.edit] = tmpState.editValue;
			
			tmpState.edit      = '';
			tmpState.editValue = '';
			
			this.setState(tmpState, () =>{
				loadInfo(this, true);
			});
		});
	}
	
	editBoolValue(field, value){
		let tmpState = deepCopy(this.state);
		
		tmpState.info[field] = value;
		this.setState(tmpState);
		
		fetch('/api/set-config-value/bool', {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : JSON.stringify({
				field : field,
				value : value
			})
		}).then(() =>{
			loadInfo(this, true);
		});
	}
}

export default Settings;
