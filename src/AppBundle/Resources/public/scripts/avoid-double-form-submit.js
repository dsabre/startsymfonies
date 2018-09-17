class AvoidDbClickSubmit{
	constructor(){
		if(typeof jQuery.fn.preventDoubleSubmission === 'undefined'){
			this._setJqueryPlugin();
		}
		
		$('form').preventDoubleSubmission();
	}
	
	/**
	 * @returns {AvoidDbClickSubmit}
	 * @private
	 */
	_setJqueryPlugin(){
		jQuery.fn.preventDoubleSubmission = function() {
			$(this).on('submit',function(e){
				let $form = $(this);
				
				if ($form.data('submitted') === true) {
					// Previously submitted - don't submit again
					e.preventDefault();
				} else {
					// Mark it so that the next submit can be ignored
					$form.data('submitted', true);
				}
			});
			
			// Keep chainability
			return this;
		};
		
		return this;
	}
}

$(function() {
	new AvoidDbClickSubmit();
});