$(function() {
	$('.editPhpExecutable').click(function(e){
		var $this = $(this);
		var $symfonyId = parseInt($.trim($this.data('symfonyid')));
		var $phpExecutable = $.trim($this.data('php'));
		var $form = $($this.data('target')).find('form');
		
		$form.attr('action', $form.data('action').replace('|||', $symfonyId));
		$('#phPExecutable').val($phpExecutable);
	});
});