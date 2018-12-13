import React, {Component} from 'react';
import toastr from "toastr";
import {deepCopy} from "../Utils/deepCopy";
import {getThemeSettings} from "../Utils/theme";
import {FAKE_TIMER, getPhpExecutables, onFaviconError, setDocumentTitle, sleep, SYMFONIES_STORAGE} from "../Utils/utils";
import {withRouter} from "react-router-dom";
import {CopyToClipboard} from 'react-copy-to-clipboard';
import { ContextMenu, MenuItem, ContextMenuTrigger } from "react-contextmenu";
import '../../css/react-contextmenu.css';

const $           = require('jquery');
const swal        = require('sweetalert2');
const ipPrefix    = '127.0.0.';
const defaultPort = 8000;

class Dashboard extends Component {
	constructor(props){
		super(props);
		
		this.state = {
			symfonies        : [],
			start            : {
				path  : '',
				ip    : '',
				port  : '',
				entry : '',
				edit  : false
			},
			gitPull          : {
				currentBranch : '',
				symfony       : null,
				started       : false
			},
			phpExecutables   : [],
			changeExecutable : {
				id            : '',
				phpExecutable : ''
			},
			search           : this.props.search,
			searchActives    : this.props.searchActives
		};
		
		this.themeSettings = getThemeSettings();
		
		this.handleReload = this.handleReload.bind(this);
	}
	
	componentDidUpdate(prevProps, prevState){
		if(this.props !== prevProps){
			this.setState({search : this.props.search});
			this.setState({searchActives : this.props.searchActives});
		}
	}
	
	componentDidMount(){
		const $urlParams   = new URLSearchParams(window.location.search);
		const $forceReload = parseInt($urlParams.get('forced'), 10) === 1;
		const $this        = this;
		
		this.loadSymfonies($forceReload, null, function(){
			if($forceReload){
				$this.props.history.push('/');
			}
		});
		
		getPhpExecutables().then(phpExecutables =>{
			this.setState({phpExecutables : phpExecutables});
		});
		
		document.addEventListener('keydown', this.handleReload);
		
		setDocumentTitle('Dashboard');
	}
	
	componentWillUnmount(){
		document.removeEventListener('keydown', this.handleReload);
	}
	
	handleReload(e){
		if(e.key === 'F5'){
			e.preventDefault();
			
			this.loadSymfonies(true, null, () => {
				toastr.info('Symfonies reloaded');
			});
		}
	}
	
	loadSymfonies(forceReload, symfonyId, callback){
		forceReload = !!forceReload;
		
		const symfonies = localStorage.getItem(SYMFONIES_STORAGE);
		
		if(symfonies && !forceReload){
			this.setState({symfonies : JSON.parse(symfonies)}, () =>{
				if(callback){
					callback();
				}
			});
		}
		else{
			let endpoint = '/api/get-symfonies';
			
			if(symfonyId){
				endpoint += '/' + symfonyId;
			}
			
			fetch(endpoint)
			.then(response => response.json())
			.then(symfonies =>{
				if(!symfonyId){
					this.setState({symfonies : symfonies}, () =>{
						localStorage.setItem(SYMFONIES_STORAGE, JSON.stringify(symfonies));
						
						if(callback){
							callback();
						}
					});
				}
				else{
					this.alterSymfonyInfo(symfonies[0], function(){
						if(callback){
							callback();
						}
					});
				}
			});
		}
	}
	
	alterSymfonyInfo(symfony, callback){
		let tmpState = deepCopy(this.state);
		const i      = tmpState.symfonies.findIndex(row => row.id === symfony.id);
		
		tmpState.symfonies[i] = symfony;
		
		this.setState(tmpState, () =>{
			localStorage.setItem(SYMFONIES_STORAGE, JSON.stringify(tmpState.symfonies));
			
			if(callback){
				callback(symfony);
			}
		});
	}
	
	/**
	 * @param nextIp
	 * @return {*|number}
	 * @private
	 */
	_getNextIp(nextIp){
		nextIp = nextIp || 2;
		
		const symfonies = this.state.symfonies;
		
		for(let i = 0; i < symfonies.length; i++){
			if(symfonies[i].ip == null){
				continue;
			}
			
			if(nextIp === parseInt(symfonies[i].ip.replace(ipPrefix, '').split(' ').join(''), 10)){
				nextIp = this._getNextIp(nextIp + 1);
			}
		}
		
		return nextIp;
	}
	
	switchStarred(id){
		fetch('/api/switch-starred/' + id)
		.then(() =>{
			this.loadSymfonies(true);
		});
	};
	
	restart($symfony, $event){
		$event.preventDefault();
		
		swal({
			title               : 'Restart symfony?',
			text                : $symfony.path,
			showCancelButton    : true,
			confirmButtonText   : 'Restart',
			showLoaderOnConfirm : true,
			confirmButtonColor  : '#007bff',
			cancelButtonColor   : '#6c757d',
			preConfirm          : () =>{
				fetch('/api/restart/' + $symfony.id);
				return sleep(4000);
			},
			allowOutsideClick   : () => !swal.isLoading()
		}).then(() =>{
			// favicon reload
			this.setState({faviconHash : Date.now()});
			this.render();
			
			swal({
				title : 'Symfony restarted correctly',
				type  : 'success'
			});
		});
	}
	
	cacheAssetsReset($symfony, $event){
		$event.preventDefault();
		
		swal({
			title               : 'Cahce and assets reset?',
			text                : $symfony.path,
			showCancelButton    : true,
			confirmButtonText   : 'Continue',
			showLoaderOnConfirm : true,
			confirmButtonColor  : '#007bff',
			cancelButtonColor   : '#6c757d',
			preConfirm          : () =>{
				return fetch('/api/cache-assets-reset/' + $symfony.id)
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
			},
			allowOutsideClick   : () => !swal.isLoading()
		}).then(() =>{
			swal({
				title : 'Cache and assets resetted correctly',
				type  : 'success'
			});
		});
	}
	
	stop($symfony, $event){
		$event.preventDefault();
		
		const $this = this;
		
		swal({
			title               : 'Stop symfony?',
			text                : $symfony.path,
			showCancelButton    : true,
			confirmButtonText   : 'Stop',
			showLoaderOnConfirm : true,
			confirmButtonColor  : '#dc3545',
			cancelButtonColor   : '#6c757d',
			preConfirm          : () =>{
				return fetch('/api/stop/' + $symfony.id)
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
			},
			allowOutsideClick   : () => !swal.isLoading()
		}).then(result =>{
			if(result.value !== undefined){
				$this.alterSymfonyInfo(result.value, function(){
					swal({
						title : 'Symfony stopped correctly',
						type  : 'success'
					});
				});
			}
		});
	}
	
	deleteInfo($symfony, event){
		event.preventDefault();
		
		const $this = this;
		
		swal({
			title               : 'Delete symfony start info?',
			text                : $symfony.path,
			showCancelButton    : true,
			confirmButtonText   : 'Delete',
			showLoaderOnConfirm : true,
			confirmButtonColor  : '#dc3545',
			cancelButtonColor   : '#6c757d',
			preConfirm          : () =>{
				return fetch('/api/delete-info/' + $symfony.id)
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
			},
			allowOutsideClick   : () => !swal.isLoading()
		}).then(result =>{
			if(result.value !== undefined){
				$this.alterSymfonyInfo(result.value, function(){
					swal({
						title : 'Symfony info deleted correctly',
						type  : 'success'
					});
				});
			}
		});
	}
	
	recheck($symfony, $event){
		$event.preventDefault();
		
		fetch('/api/recheck/' + $symfony.id)
		.then(response => response.json())
		.then(response =>{
			this.alterSymfonyInfo(response, function(){
				toastr.success('Symfony successfully rechecked');
			});
		});
	}
	
	remove($symfony, $event){
		$event.preventDefault();
		
		const $this = this;
		
		swal({
			title               : 'Remove symfony?',
			text                : $symfony.path,
			showCancelButton    : true,
			confirmButtonText   : 'Remove',
			showLoaderOnConfirm : true,
			confirmButtonColor  : '#dc3545',
			cancelButtonColor   : '#6c757d',
			preConfirm          : () =>{
				return fetch('/api/remove/' + $symfony.id)
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
			},
			allowOutsideClick   : () => !swal.isLoading()
		}).then(() =>{
			$this.loadSymfonies(true, null, function(){
				swal({
					title : 'Symfony deleted correctly',
					type  : 'success'
				});
			});
		});
	}
	
	composerActivity($symfony, $activity, $event){
		$event.preventDefault();
		
		swal({
			title               : 'Execute composer install?',
			text                : $symfony.path,
			showCancelButton    : true,
			confirmButtonText   : 'Continue',
			showLoaderOnConfirm : true,
			confirmButtonColor  : '#007bff',
			cancelButtonColor   : '#6c757d',
			preConfirm          : () =>{
				return fetch('/api/composer/' + $activity + '/' + $symfony.id)
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
			},
			allowOutsideClick   : () => !swal.isLoading()
		}).then(() =>{
			swal({
				title : 'Composer ' + $activity + ' executed correctly',
				type  : 'success'
			});
		});
	}
	
	symfoniesTable(){
		const {symfonies, search, searchActives} = this.state;
		
		return (
			<table className={"table table-hover table-sm table-bordered mb-0" + (symfonies.length === 0 ? ' d-none' : '') + (this.themeSettings.body === 'dark' ? ' table-dark' : '')}>
				<thead>
				<tr>
					<th>Stared</th>
					<th>Favicon</th>
					<th>Path</th>
					<th>Version</th>
					<th>PHP used</th>
					<th>Status</th>
					<th>Links</th>
					<th>Operations</th>
				</tr>
				</thead>
				<tbody>
				{symfonies.filter(row =>{
					if(search.length){
						const $rowValue = Object.values(row).join('').toLowerCase();
						
						return $rowValue.indexOf(search.toLowerCase()) > -1;
					}
					else{
						return true;
					}
				}).filter(row =>{
					if(searchActives){
						return (!!row.status) === searchActives;
					}
					else{
						return true;
					}
				}).map(row =>{
					let badgeColor = 'badge-symfony-' + row.version.charAt(0);
					
					if(row.version.indexOf('x.x') > -1){
						badgeColor = 'badge-danger';
					}
					
					const LinksActive = () => [
						<a key={1} onClick={this.restart.bind(this, row)} href="#" className={"btn btn-" + (this.themeSettings.body === 'dark' ? 'dark' : 'light') + " text-primary"} aria-hidden="true" title="Restart">
							<i className="fas fa-redo-alt"/>
						</a>,
						<a key={2} onClick={this.stop.bind(this, row)} href="#" className={"btn btn-" + (this.themeSettings.body === 'dark' ? 'dark' : 'light') + " text-" + (this.themeSettings.body === 'dark' ? 'light' : 'dark')} aria-hidden="true" title="Stop">
							<i className="fas fa-stop"/>
						</a>,
						<a key={3} onClick={this.handleOpenStart.bind(this, row, true)} href="#" className={"btn btn-" + (this.themeSettings.body === 'dark' ? 'dark' : 'light') + " text-info"} aria-hidden="true" title="Edit" data-toggle="modal" data-target="#modalSymfony">
							<i className="fas fa-pencil-alt"/>
						</a>
					];
					
					const LinksOk = () => [
						<a key={1} onClick={this.cacheAssetsReset.bind(this, row)} href="#" className={"btn btn-" + (this.themeSettings.body === 'dark' ? 'dark' : 'light') + " text-secondary"} aria-hidden="true" title="Cache &amp; assets reset">
							<i className="fas fa-sync-alt"/>
						</a>
					];
					
					const contextMenuTrigger = 'context_menu_symfony_' + row.id;
					const contextMenu = (
						<ContextMenu id={contextMenuTrigger}>
							<MenuItem onClick={this.handleOpenEditExecutable.bind(this, row)} attributes={{'data-toggle': 'modal', 'data-target': '#modalEditPhpExecutable'}}>
								Edit php executable
							</MenuItem>
							<MenuItem onClick={this.recheck.bind(this, row)}>
								Recheck configuration now
							</MenuItem>
							<MenuItem onClick={this.composerActivity.bind(this, row, 'install')}>
								Composer install
							</MenuItem>
							
							{!!row.currentGitBranch &&
							<MenuItem onClick={this.handleOpenGitPull.bind(this, row)} attributes={{'data-toggle': 'modal', 'data-target': '#modalGitPull'}}>
								Git pull
							</MenuItem>
							}
							
							<MenuItem divider />
							
							{!!row.ip &&
								<MenuItem onClick={this.deleteInfo.bind(this, row)} attributes={{'className': 'text-danger'}}>
									Delete info
								</MenuItem>
							}
							
							<MenuItem onClick={this.remove.bind(this, row)} attributes={{'className': 'text-danger'}}>
								DELETE SYMFONY
							</MenuItem>
						</ContextMenu>
					);
					
					return (
						<ContextMenuTrigger key={row.id} id={contextMenuTrigger} renderTag={'tr'}>
							<td className={"text-center"}>
								{contextMenu}
								
								{row.starred &&
								<i className="fas fa-star text-warning" onClick={this.switchStarred.bind(this, row.id)}/>}
								{!row.starred &&
								<i className="far fa-star text-secondary" onClick={this.switchStarred.bind(this, row.id)}/>}
							</td>
							<td className={"text-center"}>
								{!!row.status &&
									<span className={"bg-white rounded-circle p-1"}>
										<img style={{marginTop: '-1px'}} onError={onFaviconError.bind(this)} src={row.faviconUrl} alt="" width={16}/>
									</span>
								}
								
								{!row.status && <span className={"text-secondary"}>--</span>}
							</td>
							<td>
								<CopyToClipboard
									text={row.path}
									onCopy={() => toastr.info('Path copied to clipboard')}
								>
									<small style={{cursor: 'pointer'}} title={"Click to copy path to clipboard"}>{row.path}</small>
								</CopyToClipboard>
							</td>
							<td className={"text-center"}>
								<span className={"badge " + badgeColor}>{row.version}</span>
							</td>
							<td>
								<small>{row.phpExecutable}</small>
							</td>
							
							{row.ok && !row.status && <td className={"text-center bg-secondary text-light"}>
								<small>Stopped</small>
							</td>}
							{row.ok && !!row.status && <td className={"text-center bg-success text-light"}>
								<small>Active</small>
							</td>}
							{!row.ok && <td className={"text-center bg-danger text-light"}>
								<small>Error</small>
							</td>}
							
							<td>
								{row.ok && !row.ip && !row.port && <span className={"text-secondary"}>--</span>}
								{!row.ok && <span className="text-danger">Error</span>}
								
								{row.ok && row.ip && row.port &&
								<ul className="list-unstyled m-0">
									{row.links.aliases.map((link, k) =>{
										if(!!row.status){
											return (<li key={k}>
												<a className={"text-" + this.themeSettings.links} href={link} target={"_blank"}>{link}</a>
											</li>);
										}
										else{
											return (<li key={k}>
												<span className={"text-" + this.themeSettings.links}>{link}</span>
											</li>);
										}
									})}
									
									{row.links.link.map((link, k) =>{
										if(row.links.aliases.length > 0){
											if(!!row.status){
												return (
													<li key={k}>
														<a href={link} target={"_blank"}>
															<small className={"text-secondary"}>{link}</small>
														</a>
													</li>
												);
											}
											else{
												return (
													<li key={k}>
														<small className={"text-secondary"}>{link}</small>
													</li>
												);
											}
										}
										else{
											if(!!row.status){
												return (<li key={k}>
													<a className={"text-" + this.themeSettings.links} href={link} target={"_blank"}>{link}</a>
												</li>);
											}
											else{
												return (
													<li key={k}>
														<span className={"text-" + this.themeSettings.links}>{link}</span>
													</li>
												);
											}
										}
									})}
								</ul>
								}
							</td>
							<td>
								<div className="btn-group" role="group" aria-label="Operations">
									{!!row.ok && !row.status &&
									<a href="#" className={"btn btn-" + (this.themeSettings.body === 'dark' ? 'dark' : 'light') + " text-success"} aria-hidden="true" title="Start" data-toggle="modal" data-target="#modalSymfony" onClick={this.handleOpenStart.bind(this, row, false)}>
										<i className="fas fa-play"/>
									</a>
									}
									
									{!!row.ok && !!row.status && <LinksActive/>}
									
									{!!row.ok && <LinksOk/>}
									
									<div className="btn-group" role="group">
										<button id="btnGroupOperations" type="button" className={"btn btn-" + (this.themeSettings.body === 'dark' ? 'dark' : 'light') + " dropdown-toggle btn-sm"} data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Other actions
										</button>
										<div className="dropdown-menu bg-light" aria-labelledby="btnGroupOperations">
											<a onClick={this.handleOpenEditExecutable.bind(this, row)} className="dropdown-item" href="#" data-toggle="modal" data-target="#modalEditPhpExecutable">Edit php executable</a>
											<a onClick={this.recheck.bind(this, row)} className="dropdown-item" title={"Recheck the symfony configuration"} href="#">Recheck now</a>
											
											{/*<a className="dropdown-item composerShow" href="#" data-toggle="modal" data-target="#modalComposerShow">Composer show</a>*/}
											<a onClick={this.composerActivity.bind(this, row, 'install')} className="dropdown-item" href="#">Composer install</a>
											{/*<a onClick={this.composerActivity.bind(this, row.id, 'update')} className="dropdown-item" href="#">Composer update</a>*/}
											
											{!!row.currentGitBranch &&
											<a onClick={this.handleOpenGitPull.bind(this, row)} className="dropdown-item" href="#" data-toggle="modal" data-target="#modalGitPull">Git pull</a>}
											
											{!!row.ip &&
											<a onClick={this.deleteInfo.bind(this, row)} className="dropdown-item text-danger" href="#">Delete info</a>}
											
											<a onClick={this.remove.bind(this, row)} className="dropdown-item text-danger" href="#">DELETE SYMFONY</a>
										</div>
									</div>
								
								</div>
							</td>
						</ContextMenuTrigger>
					);
				})}
				</tbody>
			</table>
		);
	}
	
	render(){
		const {symfonies} = this.state;
		const $table      = this.symfoniesTable();
		const $tableRows  = $table.props.children[1].props.children.length;
		
		return (
			<div className={"container-fluid"}>
				{symfonies.length > 0 && $tableRows > 0 && $table}
				{symfonies.length > 0 && $tableRows > 0 && this.modalSymfony()}
				{symfonies.length > 0 && $tableRows > 0 && this.modalGitPull()}
				{symfonies.length > 0 && $tableRows > 0 && this.modalEditPhpExecutable()}
				
				{symfonies.length > 0 && $tableRows === 0 &&
				<p className={"bg-info text-light text-center mt-3 p-3"}>No symfonies found.</p>}
				
				{symfonies.length === 0 &&
				<p className={"bg-warning mt-3 p-3"}>No symfonies found, launch a scan now.</p>}
			</div>
		);
	}
	
	modalGitPull(){
		return (
			<div className="modal fade" id="modalGitPull" tabIndex="-1" role="dialog" aria-labelledby="modalGitPullLabel" aria-hidden="true">
				<div className="modal-dialog modal-lg text-dark" role="document">
					<div className="modal-content">
						<div className="modal-header">
							<h5 className="modal-title" id="modalGitPullLabel">{!!this.state.gitPull.symfony ? this.state.gitPull.symfony.path : ''}</h5>
							<button type="button" className="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form onSubmit={this.gitPull.bind(this)}>
							<div className="modal-body">
								<p className={"mb-0"}><b>Select git branch to pull:</b></p>
								
								{!!this.state.gitPull.symfony && this.state.gitPull.symfony.gitBranches.map((branch, k) =>{
									return (
										<div key={k} className="custom-control custom-radio">
											<input onChange={this.selectBranch.bind(this, branch)} checked={this.state.gitPull.currentBranch === branch} type="radio" id={"gitBranch_" + branch} className="custom-control-input"/>
											<label className="custom-control-label" htmlFor={"gitBranch_" + branch}>{branch}</label>
										</div>
									);
								})}
							</div>
							<div className="modal-footer">
								{!this.state.gitPull.started && <div>
									<button type="button" className="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
									<button type="submit" className="btn btn-primary">Pull</button>
								</div>}
								
								{this.state.gitPull.started && <div>
									<i className="fas fa-spinner fa-pulse"/>
								</div>}
							</div>
						</form>
					</div>
				</div>
			</div>
		);
	}
	
	handleOpenGitPull(symfony){
		let tmpState = deepCopy(this.state);
		
		tmpState.gitPull.currentBranch = symfony.currentGitBranch;
		tmpState.gitPull.symfony       = symfony;
		
		this.setState(tmpState);
	}
	
	selectBranch(branch){
		let tmpState = deepCopy(this.state);
		
		tmpState.gitPull.currentBranch = branch;
		
		this.setState(tmpState);
	}
	
	gitPull(event){
		event.preventDefault();
		
		let tmpState = deepCopy(this.state);
		
		tmpState.gitPull.started = true;
		this.setState(tmpState);
		
		fetch('/api/git-pull-symfony/' + tmpState.gitPull.symfony.id + '/' + tmpState.gitPull.currentBranch)
		.then(response => response.json())
		.then(response =>{
			this.alterSymfonyInfo(response, () =>{
				$('#modalGitPull').modal('hide');
				
				tmpState.gitPull.started = false;
				this.setState(tmpState);
				
				toastr.success('Symfony git pull successfully executed');
			});
		});
	}
	
	modalSymfony(){
		return (
			<div className="modal fade" id="modalSymfony" tabIndex="-1" role="dialog" aria-labelledby="modalSymfonyLabel" aria-hidden="true">
				<div className="modal-dialog modal-lg text-dark" role="document">
					<div className="modal-content">
						<div className="modal-header">
							<h5 className="modal-title" id="modalSymfonyLabel">{this.state.start.path}</h5>
							<button type="button" className="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form onSubmit={!this.state.start.edit ? this.handleSubmitStart.bind(this) : this.handleSubmitEdit.bind(this)}>
							<div className="modal-body">
								<div className="form-group" hidden={this.state.start.edit}>
									<label htmlFor="ip">IP</label>
									<input type="text" className="form-control" name="ip" id="ip" placeholder="IP" value={this.state.start.ip} onChange={this.handleChangeStart.bind(this, null, 'ip')} required/>
									<a href="#" className="form-text text-info" onClick={this.handleChangeStart.bind(this, ipPrefix + '1', 'ip')}>Set to {ipPrefix + '1'}</a>
								</div>
								
								<div className="form-group" hidden={this.state.start.edit}>
									<label htmlFor="port">Port</label>
									<input type="number" className="form-control" name="port" id="port" placeholder="Port" value={this.state.start.port} onChange={this.handleChangeStart.bind(this, null, 'port')} required/>
									<a href="#" className="form-text text-info" onClick={this.handleChangeStart.bind(this, defaultPort + 1, 'port')}>Set to {defaultPort + 1}</a>
								</div>
								
								<div className="form-group">
									<label htmlFor="entry">Entry point <small>(one per line)</small></label>
									<textarea name="entry" id="entry" className="form-control" rows="5" placeholder="Entry point" value={this.state.start.entry} onChange={this.handleChangeStart.bind(this, null, 'entry')}/>
								</div>
							</div>
							<div className="modal-footer">
								<button type="button" className="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" className="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		);
	}
	
	handleOpenStart(symfony, edit, event){
		let stateStart = this.state.start;
		
		stateStart['id']    = symfony.id;
		stateStart['path']  = symfony.path;
		stateStart['entry'] = symfony.entryPoint !== null ? JSON.parse(symfony.entryPoint).join('\n') : '';
		stateStart['edit']  = !!edit;
		
		if(symfony.ip !== null){
			stateStart['ip'] = symfony.ip;
		}
		else{
			stateStart['ip'] = ipPrefix + this._getNextIp();
		}
		
		if(symfony.port !== null){
			stateStart['port'] = symfony.port;
		}
		else{
			stateStart['port'] = defaultPort;
		}
		
		this.setState({start : stateStart});
	}
	
	handleChangeStart(value, key, event){
		if(value === null){
			value = event.target.value;
		}
		else{
			event.preventDefault();
		}
		
		let stateStart = this.state.start;
		
		stateStart[key] = value;
		
		this.setState({start : stateStart});
	}
	
	handleSubmitEdit(event){
		event.preventDefault();
		
		let tmpState = deepCopy(this.state);
		
		fetch('/api/edit/' + tmpState.start.id, {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : JSON.stringify({
				entry : tmpState.start.entry
			})
		})
		.then(response => response.json())
		.then(response =>{
			this.alterSymfonyInfo(response, function(){
				$('#modalSymfony').modal('hide');
				toastr.success('Symfony edited correctly');
			});
		});
	}
	
	handleSubmitStart(event){
		event.preventDefault();
		
		let tmpState   = deepCopy(this.state);
		let $this      = this;
		const endpoint = '/api/start/' + tmpState.start.id;
		const payload  = JSON.stringify({
			ip    : tmpState.start.ip,
			port  : tmpState.start.port,
			entry : tmpState.start.entry
		});
		
		fetch(endpoint, {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : payload
		});
		
		setTimeout(function(){
			$this.loadSymfonies(true, tmpState.start.id);
			
			$('#modalSymfony').modal('hide');
			
			toastr.success('Symfony started correctly');
		}, FAKE_TIMER);
	}
	
	handleOpenEditExecutable(symfony, event){
		let tmpState = deepCopy(this.state);
		
		tmpState.changeExecutable['id']            = symfony.id;
		tmpState.changeExecutable['phpExecutable'] = symfony.phpExecutable;
		
		this.setState(tmpState);
	}
	
	handleChangePhpExecutable(event){
		let tmpState = deepCopy(this.state);
		
		tmpState.changeExecutable[event.target.id] = event.target.value;
		
		this.setState(tmpState);
	}
	
	modalEditPhpExecutable(){
		const {phpExecutables, changeExecutable} = this.state;
		
		return (
			<div className="modal fade show" id="modalEditPhpExecutable" tabIndex="-1" role="dialog" aria-labelledby="modalEditPhpExecutableLabel">
				<div className="modal-dialog" role="document">
					<div className="modal-content">
						<div className="modal-header">
							<h5 className="modal-title" id="modalEditPhpExecutableLabel">Edit PHP executable</h5>
							<button type="button" className="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<form onSubmit={this.editPhpExecutable.bind(this)}>
							<div className="modal-body">
								<div className="form-group">
									<label htmlFor="phpExecutable">PHP executable</label>
									<select value={changeExecutable.phpExecutable} onChange={this.handleChangePhpExecutable.bind(this)} className="form-control" id="phpExecutable" required={true}>
										{phpExecutables.map((phpExec, k) =>{
											return (<option key={k} value={phpExec}>{phpExec}</option>);
										})}
									</select>
								</div>
							</div>
							<div className="modal-footer">
								<a href="#" className="btn btn-secondary" data-dismiss="modal">Close</a>
								<button type="submit" className="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		);
	}
	
	editPhpExecutable(event){
		event.preventDefault();
		
		let tmpState   = deepCopy(this.state);
		let $this      = this;
		const endpoint = '/api/set-php-executables/' + tmpState.changeExecutable.id;
		const payload  = JSON.stringify({
			phpExecutable : tmpState.changeExecutable.phpExecutable,
		});
		
		fetch(endpoint, {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : payload
		});
		
		setTimeout(function(){
			$this.loadSymfonies(true, tmpState.changeExecutable.id);
			
			$('#modalEditPhpExecutable').modal('hide');
			
			toastr.success('PHP executable changed correctly');
		}, FAKE_TIMER);
	}
}

export default withRouter(Dashboard);
