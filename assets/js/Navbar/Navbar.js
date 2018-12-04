import React, {Component} from 'react';
import '../../../node_modules/bootstrap/dist/css/bootstrap.min.css';
import {Link, withRouter} from "react-router-dom";
import {getThemeSettings} from "../Utils/theme";
import * as faviconSymfony from '../../images/symfony.ico';
import * as faviconBootstrap from '../../images/bootstrap.ico';
import * as faviconBrowserstack from '../../images/browserstack.ico';
import * as faviconFontawesome from '../../images/fontawesome.ico';
import * as faviconPassgenerator from '../../images/passgenerator.ico';
import * as faviconRegex from '../../images/regex.ico';
import * as faviconCb from '../../images/cb.png';
import * as faviconJsonlint from '../../images/jsonlint.png';
import * as faviconYopmail from '../../images/yopmail.gif';
import {getPhpExecutables, getVersion, longOperation, PHP_EXECUTABLES_STORAGE, SYMFONIES_STORAGE, URL_GITHUB} from "../Utils/utils";
import {deepCopy} from "../Utils/deepCopy";

class Navbar extends Component {
	constructor(props){
		super(props);
		
		this.themeSettings = getThemeSettings();
		
		this.state = {
			updateAvailable : false,
			phpExecutables  : [],
			version         : '',
			addSymfony      : {
				path          : '',
				phpExecutable : '',
			}
		};
	}
	
	componentDidMount(){
		getPhpExecutables().then(phpExecutables =>{
			this.setState({phpExecutables : phpExecutables});
		});
		
		getVersion().then(version =>{
			this.setState({version : version});
		});
	}
	
	render(){
		return (
			<div>
				<nav className={"navbar navbar-expand-lg navbar-" + this.themeSettings.brightness + " bg-" + this.themeSettings.color}>
					<Link to={'/'} className={'navbar-brand mr-0'}>
						Startsymfonies
					</Link>
					
					<a href={URL_GITHUB} target="_blank" className="badge badge-secondary ml-2 mr-2">{this.state.version}</a>
					
					{this.state.updateAvailable &&
					<a href={URL_GITHUB} target="_blank" className="badge badge-warning">Update available</a>
					}
					
					<button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span className="navbar-toggler-icon"/>
					</button>
					
					<div className="collapse navbar-collapse" id="navbarSupportedContent">
						<ul className="navbar-nav mr-auto">
							<li className={"nav-item" + (window.location.pathname === '/' ? ' active' : '')}>
								<Link to={'/'} className={'nav-link'}>
									<i className="fas fa-home mr-1"/>
									Home
								</Link>
							</li>
							<li className={"nav-item" + (window.location.pathname === '/settings' ? ' active' : '')}>
								<Link to={'/settings'} className={'nav-link'}>
									<i className="fas fa-info-circle mr-1"/>
									Settings
								</Link>
							</li>
							
							{this.manageLinks()}
							{this.usefulLinks()}
						</ul>
					</div>
					
					{this.props.location.pathname === '/' && this.props.formSearch}
				</nav>
				
				{this.addSymfonyModal()}
			</div>
		);
	}
	
	manageLinks(){
		return (
			<li className="nav-item dropdown">
				<a className="nav-link dropdown-toggle" href="#" id="manageLinks" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i className="fas fa-wrench"/>
					Manage
				</a>
				<div className={"dropdown-menu bg-" + (this.themeSettings.body || 'light')} aria-labelledby="manageLinks">
					<a data-toggle="modal" data-target="#addSymfonyModal" className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="#">
						<i className="fas fa-plus text-success mr-2"/>
						Add symfony from path
					</a>
					<a onClick={longOperation.bind(this, 'Launch scan now?', 'Scan', null, 'scan', 'Scan completed', this, null)} className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="#">
						<i className="fas fa-search-plus text-info mr-2"/>
						Launch scan
					</a>
					<a onClick={longOperation.bind(this, 'Launch prune now?', 'Prune', '#dc3545', 'prune', 'Prune completed', this, null)} className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="#">
						<i className="fas fa-search-minus text-danger mr-2"/>
						System prune
					</a>
					<a onClick={longOperation.bind(this, 'Start all symfonies with ip and port?', 'Start', '#28a745', 'start-all', 'Start all task completed', this, 10000)} className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="#">
						<i className="fas fa-play text-success mr-2"/>
						Start all symfonies with ip and port
					</a>
					<a onClick={longOperation.bind(this, 'Stop all?', 'Stop', '#dc3545', 'stop-all', 'Stop all task completed', this, null)} className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="#">
						<i className="fas fa-stop text-warning mr-2"/>
						Stop all
					</a>
					<a onClick={longOperation.bind(this, 'Delete all now?', 'Delete', '#dc3545', 'delete-all', 'All symfonies deleted correctly', this, null)} className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="#">
						<i className="far fa-trash-alt text-danger mr-2"/>
						Delete all
					</a>
				</div>
			</li>
		);
	}
	
	usefulLinks(){
		return (
			<li className="nav-item dropdown">
				<a className="nav-link dropdown-toggle" href="#" id="usefulLinks" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i className="fas fa-link"/>
					Useful links
				</a>
				<div className={"dropdown-menu bg-" + (this.themeSettings.body || 'light')} aria-labelledby="usefulLinks">
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://symfony.com/" target="_blank"><img src={faviconSymfony} alt="" width="16"/> Symfony site</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://symfony.com/roadmap" target="_blank"><img src={faviconSymfony} alt="" width="16"/> Symfony roadmap</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="http://nux.net/secret" target="_blank"><img src={faviconSymfony} alt="" width="16"/> Symfony Secret Generator</a>
					<div className="dropdown-divider"/>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="http://getbootstrap.com/docs/4.1/getting-started/introduction/" target="_blank"><img src={faviconBootstrap} alt="" width="16"/> Bootstrap documentation</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://fontawesome.com/icons?d=gallery&amp;m=free" target="_blank"><img src={faviconFontawesome} alt="" width="16"/> Fontawesome</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="http://www.yopmail.com/it/email-generator.php" target="_blank"><img src={faviconYopmail} alt="" width="16"/> YOPmail</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://regex101.com/" target="_blank"><img src={faviconRegex} alt="" width="16"/> Regex101</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://jsoncompare.com/#!/simple/" target="_blank"><img src={faviconJsonlint} alt="" width="16"/> JSONCompare (ex JSONLint)</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://codebeautify.org/" target="_blank"><img src={faviconCb} alt="" width="16"/> Code beautify (a Swiss Army knife :D)</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://passwordsgenerator.net/" target="_blank"><img src={faviconPassgenerator} alt="" width="16"/> Secure Password Generator</a>
					<a className={"dropdown-item text-" + (this.themeSettings.text || 'dark')} href="https://www.browserstack.com/" target="_blank"><img src={faviconBrowserstack} alt="" width="16"/> BrowserStack</a>
				</div>
			</li>
		);
	}
	
	addSymfonyModal(){
		return (
			<div className="modal fade" id="addSymfonyModal" tabIndex="-1" role="dialog" aria-labelledby="addSymfonyModalLabel" aria-hidden="true">
				<div className="modal-dialog" role="document">
					<div className="modal-content">
						<div className="modal-header">
							<h5 className="modal-title" id="addSymfonyModalLabel">Add symfony</h5>
							<button type="button" className="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form onSubmit={this.addSymfonySubmit.bind(this)}>
							<div className="modal-body">
								<div className="form-group">
									<label htmlFor="addSymfonyPath">Symfony absolute path</label>
									<input onChange={this.handleChangeAddSymfony.bind(this, 'path')} value={this.state.addSymfonyPath} type="text" className="form-control" id="addSymfonyPath" placeholder="Symfony absolute path"/>
								</div>
								<div className="form-group">
									<label htmlFor="addSymfonyPhp">PHP executable</label>
									<select onChange={this.handleChangeAddSymfony.bind(this, 'phpExecutable')} className="form-control" id="addSymfonyPhp">
										{this.state.phpExecutables.map(row =>{
											return (<option key={row} value={row}>{row}</option>);
										})}
									</select>
								</div>
							</div>
							<div className="modal-footer">
								<button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" className="btn btn-success">Add</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		);
	}
	
	handleChangeAddSymfony($key, $event){
		$event.preventDefault();
		
		let tmpState = deepCopy(this.state);
		
		tmpState.addSymfony[$key] = $event.target.value;
		
		this.setState(tmpState);
	}
	
	addSymfonySubmit($event){
		$event.preventDefault();
		
		const $this = this;
		
		fetch('/api/add-symfony-from-path', {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : JSON.stringify(this.state.addSymfony)
		})
		.then(() =>{
			if($this.props.history.location.pathname === '/'){
				window.location.href = '/?forced=1';
			}
			else{
				$this.props.history.push('/?forced=1');
			}
		});
	}
}

export default withRouter(Navbar);
