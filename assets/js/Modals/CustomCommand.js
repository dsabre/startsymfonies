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
			customCommand : {
				symfony                  : null,
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
									<button type="button" className="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
								<h5 className="modal-title" id={this.ID_COMMANDS_MANAGER + 'Label'}>Custom commands manager</h5>
								<button type="button" className="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form onSubmit={this.saveCommand.bind(this)}>
								<div className="modal-body">
											{Object.keys(this.state.manager.commands).map((eventName, k) => {
												if(this.state.manager.commands[eventName].length){
													return (
														<div key={k}>
															<b>{eventName.replace(/([A-Z])/g, ' $1').toLowerCase().replace(/^./, str => str.toUpperCase())}</b>
															
															<table className="table table-bordered table-hover table-sm">
																<tbody>
																	{this.state.manager.commands[eventName].map((command, j) => {
																		const weightAttr = 'weight' + (eventName.replace(/^./, str => str.toUpperCase()));
																		
																		return (
																			<tr key={j}>
																				<td>{command.label}</td>
																				<td>{command[weightAttr]}</td>
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
							</form>
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
		});
	}
	
	handleOpenCustomCommand(symfony){
		let tmpState = deepCopy(this.state);
		
		tmpState.customCommand = {
			symfony                  : symfony,
			label                    : '',
			command                  : '',
			onPreStart               : false,
			onPostStop               : false,
			onGitPull                : false,
			onComposerInstall        : false,
			onCacheAssetsReset       : false,
			weightOnPreStart         : this.getWeights(symfony, 'onPreStart'),
			weightOnPostStop         : this.getWeights(symfony, 'onPostStop'),
			weightOnGitPull          : this.getWeights(symfony, 'onGitPull'),
			weightOnComposerInstall  : this.getWeights(symfony, 'onComposerInstall'),
			weightOnCacheAssetsReset : this.getWeights(symfony, 'onCacheAssetsReset')
		};
		
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
			}
		};
		
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
		
		fetch('/api/new-custom-command', {
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
		});
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
}

CustomCommand.propTypes = {
	onSubmit  : PropTypes.func,
	onExecute : PropTypes.func
};

export default CustomCommand;