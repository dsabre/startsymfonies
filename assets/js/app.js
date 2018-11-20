import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Route, Switch} from "react-router-dom";
import Dashboard from "./Dashboard/Dashboard";
import SystemInfo from "./SystemInfo/SystemInfo";
import Navbar from "./Navbar/Navbar";
import '../../node_modules/bootstrap/dist/css/bootstrap.min.css';
import '../../node_modules/bootstrap/dist/js/bootstrap.min.js';
import '../../node_modules/toastr/build/toastr.min.css';
import '../css/app.css';
import {getThemeSettings} from "./Utils/theme";
import {deepCopy} from "./Utils/deepCopy";
import {INFO_STORAGE} from "./Utils/utils";

const $             = require('jquery');
const themeSettings = getThemeSettings();

class App extends Component {
	constructor(props){
		super(props);
		
		if(themeSettings.body !== null){
			$('body').addClass('bg-' + themeSettings.body);
		}
		
		this.state = {
			search        : '',
			searchActives : true,
			hidden        : !localStorage.getItem(INFO_STORAGE),
			configured    : !!localStorage.getItem(INFO_STORAGE),
			configuration : {
				numDirs      : 1,
				numOthersPhp : 1
			}
		};
	}
	
	componentDidMount(){
		if(!localStorage.getItem(INFO_STORAGE)){
			const $this = this;
			
			fetch('/api/get-system-info')
			.then(response => response.json())
			.then(response =>{
				$this.setState({
					hidden     : false,
					configured : response.configured
				});
			});
		}
	}
	
	render(){
		return (
			<div>
				{this.state.configured ? this.renderSite() : this.renderInstall()}
				
				<div className="text-center mt-2">
					<ul className="list-inline mb-0">
						<li className="list-inline-item border-right border-secondary pr-3">
							<small className="text-muted">
								<i className="fas fa-external-link-alt"/>
								<a href="https://github.com/raniel86/startsymfonies2/issues" target="_blank" className="text-muted">Issues</a>
							</small>
						</li>
						<li className="list-inline-item border-right border-secondary pr-3">
							<small className="text-muted">
								<i className="fas fa-external-link-alt"/>
								<a href="https://raw.githubusercontent.com/raniel86/startsymfonies2/master/LICENSE" target="_blank" className="text-muted">View license</a>
							</small>
						</li>
						<li className="list-inline-item">
							<small className="text-muted">
								<i className="fas fa-external-link-alt"/>
								<a href="https://github.com/raniel86" target="_blank" className="text-muted">Developer page</a>
							</small>
						</li>
					</ul>
				</div>
			</div>
		);
	}
	
	renderSite(){
		return (
			<div hidden={this.state.hidden}>
				<BrowserRouter>
					<div>
						<Navbar formSearch={this.formSearch()}/>
						
						<Switch>
							<Route path={'/system-info'} component={SystemInfo}/>
							<Route path="/" render={() =>
								<Dashboard search={this.state.search} searchActives={this.state.searchActives}/>}/>
						</Switch>
					</div>
				</BrowserRouter>
			</div>
		);
	}
	
	formSearch(){
		return (
			<div className="form-inline my-2 my-lg-0">
				<div className="input-group">
					<input type="search" className="form-control" placeholder="Search" value={this.state.search} onChange={this.searchSymfony.bind(this)}/>
					<div className="input-group-append">
						<div className="input-group-text">
							<a href="#" className="input-group-addon fa fa-times text-muted" onClick={this.clearSearch.bind(this)}/>
						</div>
					</div>
				</div>
				
				<div className="custom-control custom-checkbox navbar-text ml-2 bg-light text-dark rounded border border-secondary">
					<input id={'flgHideStopped'} type="checkbox" className="custom-control-input" checked={this.state.searchActives} onChange={this.searchActiveSymfony.bind(this)}/>
					<label style={{cursor : 'pointer'}} className="custom-control-label mx-2" htmlFor="flgHideStopped">Hide stopped</label>
				</div>
			</div>
		);
	}
	
	searchSymfony($event){
		this.setState({search : $event.target.value});
	}
	
	clearSearch($event){
		$event.preventDefault();
		
		this.setState({search : ''});
	}
	
	searchActiveSymfony($event){
		this.setState({searchActives : $event.target.checked});
	}
	
	renderInstall(){
		let directoriesToScan = [];
		for(let i = 1; i <= this.state.configuration.numDirs; i++){
			directoriesToScan.push(
				<input key={i} type="text" className="form-control mt-1" name="configuration[directoriesToScan][]" placeholder={"Directory path (" + i + ")"} required={true} />);
		}
		
		let otherPhpExecutables = [];
		for(let i = 1; i <= this.state.configuration.numOthersPhp; i++){
			otherPhpExecutables.push(
				<input key={i} type="text" className="form-control mt-1" name="configuration[otherPhpExecutables][]" placeholder={"Other PHP executable (" + i + ")"} required={true} />);
		}
		
		return (
			<div className={'container mt-3 bg-light border p-3'} hidden={this.state.hidden}>
				<h1>Create configuration</h1>
				
				<form action={'/action/save-configuration'} method={'POST'}>
					<div className="form-group">
						<div className="row">
							<div className="col-md-6">
								<label><b>Directories to scan</b></label>
							</div>
							<div className="col-md-6 text-right">
								<a onClick={this.setNum.bind(this, '+', 'numDirs')} href="#" className={'btn btn-secondary mr-2'}>Add directory</a>
								<a onClick={this.setNum.bind(this, '-', 'numDirs')} href="#" className={'btn btn-secondary'}>Remove directory</a>
							</div>
						</div>
						
						{directoriesToScan}
					</div>
					
					<div className="form-group">
						<label htmlFor="phpExecutable"><b>PHP executable</b></label>
						<input type="text" className="form-control" id="phpExecutable" name={"configuration[phpExecutable]"} placeholder="PHP executable" required={true} />
					</div>
					
					<div className="form-group">
						<div className="row">
							<div className="col-md-6">
								<label><b>Other PHP executables</b></label>
							</div>
							<div className="col-md-6 text-right">
								<a onClick={this.setNum.bind(this, '+', 'numOthersPhp')} href="#" className={'btn btn-secondary mr-2'}>Add PHP</a>
								<a onClick={this.setNum.bind(this, '-', 'numOthersPhp')} href="#" className={'btn btn-secondary'}>Remove PHP</a>
							</div>
						</div>
						
						{otherPhpExecutables}
					</div>
					
					<div className="row">
						<div className="form-group col-md-6">
							<label htmlFor="gitExecutable"><b>Git executable</b></label>
							<input defaultValue={'/usr/bin/git'} type="text" className="form-control" id="gitExecutable" name={"configuration[gitExecutable]"} placeholder="Git executable" />
						</div>
						<div className="form-group col-md-6">
							<label htmlFor="composerExecutable"><b>Composer executable</b></label>
							<input defaultValue={'/usr/bin/composer'} type="text" className="form-control" id="composerExecutable" name={"configuration[composerExecutable]"} placeholder="Composer executable" required={true} />
						</div>
						<div className="form-group col-md-6">
							<label htmlFor="symfonyExecutable"><b>Symfony executable</b></label>
							<input type="text" className="form-control" id="symfonyExecutable" name={"configuration[symfonyExecutable]"} placeholder="Symfony executable" />
						</div>
						<div className="form-group col-md-6">
							<label htmlFor="hostsFile"><b>Host file</b></label>
							<input defaultValue={'/etc/hosts'} type="text" className="form-control" id="hostsFile" name={"configuration[hostsFile]"} placeholder="Host file" required={true} />
						</div>
					</div>
					
					<button type="submit" className="btn btn-primary btn-lg btn-block">Save configuration</button>
				</form>
			</div>
		);
	}
	
	setNum($action, $item, $event){
		$event.preventDefault();
		
		let $tmpState = deepCopy(this.state);
		
		if($action === '+'){
			$tmpState.configuration[$item]++;
		}
		else{
			$tmpState.configuration[$item]--;
			$tmpState.configuration[$item] = $tmpState.configuration[$item] < 1 ? 1 : $tmpState.configuration[$item];
		}
		
		this.setState($tmpState);
	}
}

ReactDOM.render(<App/>, document.getElementById('root'));
