import React, {Component} from 'react';
import {deepCopy} from "../Utils/deepCopy";
import Switch from 'react-toggle-switch';
import toastr from "toastr";
import PropTypes from 'prop-types';
import {longOperation} from "../Utils/utils";

const $ = require('jquery');

class CustomCommand extends Component {
	constructor(props){
		super(props);
		
		this.ID_COMMAND_MODAL    = 'modalCustomCommand';
		this.ID_COMMANDS_MANAGER = 'modalCustomCommandManager';
		this.WEIGHT_STEPS        = 10;
		
		this.state = {
			fromManager   : false,
			customCommand : {
				symfony                  : null,
				id                       : null,
				label                    : '',
				command                  : '',
				onPreStart               : false,
				onPostStop               : false,
				onGitPull                : false,
				onComposerInstall        : false,
				onCacheAssetsReset       : false,
				weightOnPreStart         : 0,
				weightOnPostStop         : 0,
				weightOnGitPull          : 0,
				weightOnComposerInstall  : 0,
				weightOnCacheAssetsReset : 0
			},
			manager       : {
				symfony  : null,
				commands : {
					onPreStart         : [],
					onPostStop         : [],
					onGitPull          : [],
					onComposerInstall  : [],
					onCacheAssetsReset : [],
				}
			}
		};
	}
	
	render(){
		return (
			<React.Fragment>
				<div className="modal fade" id={this.ID_COMMAND_MODAL} tabIndex="-1" role="dialog" aria-labelledby={this.ID_COMMAND_MODAL + 'Label'} aria-hidden="true">
					<div className="modal-dialog modal-lg text-dark" role="document">
						<div className="modal-content">
							<div className="modal-header">
								<h5 className="modal-title" id={this.ID_COMMAND_MODAL + 'Label'}>Custom command</h5>
								<button type="button" className="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form onSubmit={this.saveCommand.bind(this)}>
								<div className="modal-body">
									<div className="form-group">
										<label htmlFor="label">Label</label>
										<input type="text" className="form-control" id="label" placeholder="Label" value={this.state.customCommand.label} onChange={this.handleChangeCustomCommand.bind(this, null, false)} required/>
									</div>
									
									<div className="form-group">
										<label htmlFor="command">Command</label>
										<input type="text" className="form-control" id="command" placeholder="Command" value={this.state.customCommand.command} onChange={this.handleChangeCustomCommand.bind(this, null, false)} required/>
									</div>
									
									<div className="row">
										<div className="form-group col-md-4">
											<p className={'mb-1 float-left'}>On pre start</p>
											<Switch className={'mb-1 float-right'} onClick={this.handleChangeCustomCommand.bind(this, 'onPreStart', true)} on={this.state.customCommand.onPreStart}/>
											
											<div className="clearfix"/>
											
											<label className={'mb-0'} htmlFor="weightOnPreStart">Weight</label>
											<input disabled={!this.state.customCommand.onPreStart} type="number" min="0" step="1" className="form-control" id="weightOnPreStart" placeholder="Weight" value={this.state.customCommand.weightOnPreStart} onChange={this.handleChangeCustomCommand.bind(this, null, false)} required/>
										</div>
										
										<div className="form-group col-md-4">
											<p className={'mb-1 float-left'}>On post stop</p>
											<Switch className={'mb-1 float-right'} onClick={this.handleChangeCustomCommand.bind(this, 'onPostStop', true)} on={this.state.customCommand.onPostStop}/>
											
											<div className="clearfix"/>
											
											<label className={'mb-0'} htmlFor="weightOnPostStop">Weight</label>
											<input disabled={!this.state.customCommand.onPostStop} type="number" min="0" step="1" className="form-control" id="weightOnPostStop" placeholder="Weight" value={this.state.customCommand.weightOnPostStop} onChange={this.handleChangeCustomCommand.bind(this, null, false)} required/>
										</div>
										
										<div className="form-group col-md-4">
											<p className={'mb-1 float-left'}>On cache & assets reset</p>
											<Switch className={'mb-1 float-right'} onClick={this.handleChangeCustomCommand.bind(this, 'onCacheAssetsReset', true)} on={this.state.customCommand.onCacheAssetsReset}/>
											
											<div className="clearfix"/>
											
											<label className={'mb-0'} htmlFor="weightOnCacheAssetsReset">Weight</label>
											<input disabled={!this.state.customCommand.onCacheAssetsReset} type="number" min="0" step="1" className="form-control" id="weightOnCacheAssetsReset" placeholder="Weight" value={this.state.customCommand.weightOnCacheAssetsReset} onChange={this.handleChangeCustomCommand.bind(this, null, false)} required/>
										</div>
										
										<div className="form-group col-md-4">
											<p className={'mb-1 float-left'}>On git pull</p>
											<Switch className={'mb-1 float-right'} onClick={this.handleChangeCustomCommand.bind(this, 'onGitPull', true)} on={this.state.customCommand.onGitPull}/>
											
											<div className="clearfix"/>
											
											<label className={'mb-0'} htmlFor="weightOnGitPull">Weight</label>
											<input disabled={!this.state.customCommand.onGitPull} type="number" min="0" step="1" className="form-control" id="weightOnGitPull" placeholder="Weight" value={this.state.customCommand.weightOnGitPull} onChange={this.handleChangeCustomCommand.bind(this, null, false)} required/>
										</div>
										
										<div className="form-group col-md-4">
											<p className={'mb-1 float-left'}>On composer install</p>
											<Switch className={'mb-1 float-right'} onClick={this.handleChangeCustomCommand.bind(this, 'onComposerInstall', true)} on={this.state.customCommand.onComposerInstall}/>
											
											<div className="clearfix"/>
											
											<label className={'mb-0'} htmlFor="weightOnComposerInstall">Weight</label>
											<input disabled={!this.state.customCommand.onComposerInstall} type="number" min="0" step="1" className="form-control" id="weightOnComposerInstall" placeholder="Weight" value={this.state.customCommand.weightOnComposerInstall} onChange={this.handleChangeCustomCommand.bind(this, null, false)} required/>
										</div>
									</div>
								</div>
								<div className="modal-footer">
									<button onClick={this.cancelCommandForm.bind(this)} type="button" className="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="submit" className="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div className="modal fade" id={this.ID_COMMANDS_MANAGER} tabIndex="-1" role="dialog" aria-labelledby={this.ID_COMMANDS_MANAGER + 'Label'} aria-hidden="true">
					<div className="modal-dialog modal-lg text-dark" role="document">
						<div className="modal-content">
							<div className="modal-header">
								<h5 className="modal-title" id={this.ID_COMMANDS_MANAGER + 'Label'}>
									Custom commands manager
									<p className={'mb-0'}><small><i>{this.state.manager.symfony ? this.state.manager.symfony.path : ''}</i></small></p>
								</h5>
								<button type="button" className="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div className="modal-body">
								{Object.keys(this.state.manager.commands).map((eventName, k) =>{
									if(this.state.manager.commands[eventName].length){
										return (
											<div key={k}>
												<i><b>{eventName.replace(/([A-Z])/g, ' $1').toLowerCase().replace(/^./, str => str.toUpperCase())}</b></i>
												
												<table className="table table-bordered table-hover table-sm table-striped">
													<thead>
													<tr>
														<th>Label</th>
														{eventName !== 'others' && <th className={'w-25'}>Weight</th>}
														<th className={'w-25'}>Actions</th>
													</tr>
													</thead>
													<tbody>
													{this.state.manager.commands[eventName].map((command, j) =>{
														const weightAttr = 'weight' + (eventName.replace(/^./, str => str.toUpperCase()));
														
														return (
															<tr key={j}>
																<td>{command.label}</td>
																
																{eventName !== 'others' && <td>
																	<input onChange={this.changeCommandWeight.bind(this, command, weightAttr)} type="number" min="0" step="1" className="form-control form-control-sm" placeholder="Weight" value={command[weightAttr]}/>
																</td>}
																
																<td className={'text-center'}>
																	<button onClick={this.executeCommand.bind(this, command.id, command.label, this.state.manager.symfony)} className="btn btn-primary btn-sm w-25" title={'Run'}>
																		<i className="fas fa-space-shuttle"/>
																	</button>
																	
																	<button onClick={this.handleOpenCustomCommand.bind(this, this.state.manager.symfony, command)} className="btn btn-warning btn-sm w-25 mx-2" title={'Edit'} data-toggle="modal" data-target={"#" + this.ID_COMMAND_MODAL}>
																		<i className="fas fa-pencil-alt"/>
																	</button>
																	
																	<button onClick={this.deleteCommand.bind(this, command)} className="btn btn-danger btn-sm w-25" title={'Delete'}>
																		<i className="fas fa-times"/>
																	</button>
																</td>
															</tr>
														);
													})}
													</tbody>
												</table>
											</div>
										);
									}
								})}
							</div>
							<div className="modal-footer">
								<button type="button" className="btn btn-secondary" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</React.Fragment>
		);
	}
	
	getWeights(symfony, eventName){
		return this.getCommansByEventName(symfony, eventName).length * this.WEIGHT_STEPS + this.WEIGHT_STEPS;
	}
	
	getCommansByEventName(symfony, eventName){
		return symfony.customCommands.filter(customCommand =>{
			return customCommand[eventName];
		}).sort((a, b) =>{
			const weightAttr = 'weight' + (eventName.replace(/^./, str => str.toUpperCase()));
			return a[weightAttr] - b[weightAttr];
		});
	}
	
	getCommansWithoutEventName(symfony){
		return symfony.customCommands.filter(customCommand =>{
			return !customCommand.hasEvents;
		});
	}
	
	handleOpenCustomCommand(symfony, command){
		let tmpState = deepCopy(this.state);
		
		$('#' + this.ID_COMMANDS_MANAGER).modal('hide');
		
		tmpState.customCommand = {
			symfony                  : symfony,
			id                       : command ? command.id : null,
			label                    : command ? command.label : '',
			command                  : command ? command.command : '',
			onPreStart               : command ? command.onPreStart : false,
			onPostStop               : command ? command.onPostStop : false,
			onGitPull                : command ? command.onGitPull : false,
			onComposerInstall        : command ? command.onComposerInstall : false,
			onCacheAssetsReset       : command ? command.onCacheAssetsReset : false,
			weightOnPreStart         : command ? command.weightOnPreStart : this.getWeights(symfony, 'onPreStart'),
			weightOnPostStop         : command ? command.weightOnPostStop : this.getWeights(symfony, 'onPostStop'),
			weightOnGitPull          : command ? command.weightOnGitPull : this.getWeights(symfony, 'onGitPull'),
			weightOnComposerInstall  : command ? command.weightOnComposerInstall : this.getWeights(symfony, 'onComposerInstall'),
			weightOnCacheAssetsReset : command ? command.weightOnCacheAssetsReset : this.getWeights(symfony, 'onCacheAssetsReset')
		};
		
		tmpState.fromManager = command !== undefined;
		
		this.setState(tmpState);
	}
	
	handleOpenCustomCommandsManager(symfony){
		let tmpState = deepCopy(this.state);
		
		tmpState.manager = {
			symfony  : symfony,
			commands : {
				onPreStart         : this.getCommansByEventName(symfony, 'onPreStart'),
				onPostStop         : this.getCommansByEventName(symfony, 'onPostStop'),
				onGitPull          : this.getCommansByEventName(symfony, 'onGitPull'),
				onComposerInstall  : this.getCommansByEventName(symfony, 'onComposerInstall'),
				onCacheAssetsReset : this.getCommansByEventName(symfony, 'onCacheAssetsReset'),
				others             : this.getCommansWithoutEventName(symfony),
			}
		};
		
		tmpState.fromManager = false;
		
		this.setState(tmpState);
	}
	
	handleChangeCustomCommand(key, boolean, event){
		let tmpState = deepCopy(this.state);
		
		key = key || event.target.id;
		
		tmpState.customCommand[key] = !boolean ? event.target.value : !tmpState.customCommand[key];
		
		this.setState(tmpState);
	}
	
	saveCommand(event){
		event.preventDefault();
		
		let tmpState = deepCopy(this.state);
		
		const endpoint = !tmpState.customCommand.id ? '/api/new-custom-command' : '/api/edit-custom-command/' + tmpState.customCommand.id;
		
		fetch(endpoint, {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : JSON.stringify({
				label                    : tmpState.customCommand.label,
				weightOnPreStart         : tmpState.customCommand.weightOnPreStart,
				weightOnPostStop         : tmpState.customCommand.weightOnPostStop,
				weightOnGitPull          : tmpState.customCommand.weightOnGitPull,
				weightOnComposerInstall  : tmpState.customCommand.weightOnComposerInstall,
				weightOnCacheAssetsReset : tmpState.customCommand.weightOnCacheAssetsReset,
				command                  : tmpState.customCommand.command,
				symfonyId                : tmpState.customCommand.symfony.id,
				onPreStart               : tmpState.customCommand.onPreStart,
				onPostStop               : tmpState.customCommand.onPostStop,
				onGitPull                : tmpState.customCommand.onGitPull,
				onComposerInstall        : tmpState.customCommand.onComposerInstall,
				onCacheAssetsReset       : tmpState.customCommand.onCacheAssetsReset,
			})
		})
		.then(response => response.json())
		.then(response =>{
			$('#' + this.ID_COMMAND_MODAL).modal('hide');
			
			toastr.success('Custom command saved');
			
			if(this.props.onSubmit){
				this.props.onSubmit(response);
			}
			
			if(tmpState.fromManager){
				this.handleOpenCustomCommandsManager(response);
				$('#' + this.ID_COMMANDS_MANAGER).modal('show');
			}
		});
	}
	
	cancelCommandForm(){
		if(this.state.customCommand.id){
			$('#' + this.ID_COMMANDS_MANAGER).modal('show');
		}
	}
	
	executeCommand(commandId, commandLabel, symfony){
		const title = [
			'Run command ' + commandLabel + '?',
			'on path: ' + symfony.path
		].join('\n');
		
		longOperation(title, 'Run', null, 'run-custom-command/' + commandId, 'Command executed correctly').then(() =>{
			if(this.props.onExecute){
				this.props.onExecute(commandId, commandLabel, symfony);
			}
		});
	}
	
	deleteCommand(command){
		longOperation('Delete command ' + command.label + '?', 'Delete', '#dc3545', 'delete-custom-command/' + command.id, 'Command deleted correctly').then(response =>{
			if(this.props.onSubmit){
				this.props.onSubmit(response);
			}
			
			this.handleOpenCustomCommandsManager(response);
		});
	}
	
	changeCommandWeight(command, weightProperty, event){
		fetch('/api/change-weight-custom-command/' + command.id, {
			method  : 'POST',
			headers : {
				Accept         : 'application/json',
				'Content-Type' : 'application/json'
			},
			body    : JSON.stringify({
				weightProperty : weightProperty,
				newWeight      : parseInt(event.target.value, 10)
			})
		})
		.then(response => response.json())
		.then(response =>{
			if(this.props.onSubmit){
				this.props.onSubmit(response);
			}
			
			this.handleOpenCustomCommandsManager(response);
		});
	}
}

CustomCommand.propTypes = {
	onSubmit  : PropTypes.func,
	onExecute : PropTypes.func
};

export default CustomCommand;