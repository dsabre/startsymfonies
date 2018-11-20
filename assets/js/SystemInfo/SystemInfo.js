import React, {Component} from 'react';
import toastr from "toastr";
import {getTheme, getThemeSettings, setTheme, THEMES} from "../Utils/theme";
import {setDocumentTitle} from "../Utils/utils";

const INFO_STORAGE = 'system-info';

class SystemInfo extends Component {
	constructor(props){
		super(props);
		
		this.state = {
			info : []
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
		
		const systemInfo = localStorage.getItem(INFO_STORAGE);
		
		if(systemInfo && !forceReload){
			this.setState({info : JSON.parse(systemInfo)});
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
		
		return (
			<div className={"container"}>
				<div className={"bg-" + (this.themeSettings.body === null ? 'light' : this.themeSettings.body) + " text-" + (this.themeSettings.text === null ? 'dark' : this.themeSettings.text) + " p-3 mt-3 border border-secondary rounded animated fadeIn"}>
					<h1 className="mb-3">Settings</h1>
					
					<dl className="row">
						<dt className="col-sm-3">Directories to scan</dt>
						<dd className="col-sm-9">
							<ol>
								{directoriesToScan.map((directory, i) =>{
									return (<li key={i} className="font-monospace">{directory}</li>);
								})}
							</ol>
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
							
							{/*<p className="text-muted">*/}
							{/*<small>*/}
							{/*<b>Possible values:</b> {STYLES.join(', ')}*/}
							{/*</small>*/}
							{/*</p>*/}
						</dd>
						
						<dt className="col-sm-3">Running on user</dt>
						<dd className="col-sm-9 font-monospace">{userRunning}</dd>
					</dl>
				</div>
			</div>
		);
	}
}

export default SystemInfo;
