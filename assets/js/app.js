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

const $ = require('jquery');
const themeSettings = getThemeSettings();

class App extends Component {
	constructor(props){
		super(props);
		
		if(themeSettings.body !== null){
			$('body').addClass('bg-' + themeSettings.body);
		}
		
		this.state = {
			search: '',
			searchActives: true
		};
	}
	
	formSearch(){
		return (
			<div className="form-inline my-2 my-lg-0">
				<div className="input-group">
					<input type="search" className="form-control" placeholder="Search" value={this.state.search} onChange={this.searchSymfony.bind(this)} />
					<div className="input-group-append">
						<div className="input-group-text">
							<a href="#" className="input-group-addon fa fa-times text-muted" onClick={this.clearSearch.bind(this)} />
						</div>
					</div>
				</div>
				
				<div className="custom-control custom-checkbox navbar-text ml-2 bg-light text-dark rounded border border-secondary">
					<input id={'flgHideStopped'} type="checkbox" className="custom-control-input" checked={this.state.searchActives} onChange={this.searchActiveSymfony.bind(this)} />
					<label style={{cursor: 'pointer'}} className="custom-control-label mx-2" htmlFor="flgHideStopped">Hide stopped</label>
				</div>
			</div>
		);
	}
	
	searchSymfony($event){
		this.setState({search: $event.target.value});
	}
	
	clearSearch($event){
		$event.preventDefault();
		
		this.setState({search: ''});
	}
	
	searchActiveSymfony($event){
		this.setState({searchActives: $event.target.checked});
	}
	
	render(){
		return (
			<div>
				<BrowserRouter>
					<div>
						<Navbar formSearch={this.formSearch()} />
						
						<Switch>
							<Route path={'/system-info'} component={SystemInfo} />
							<Route path="/" render={() => <Dashboard search={this.state.search} searchActives={this.state.searchActives} />} />
						</Switch>
					</div>
				</BrowserRouter>
				
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
}

ReactDOM.render(<App />, document.getElementById('root'));
