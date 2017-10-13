$(function() {
    $('.composerShow').click(function(e){
		const symfonyId = parseInt($.trim($(this).data('symfonyid')));
		const elmEmpty = $('#modalComposerShow' + symfonyId + '-empty');
	
		if(elmEmpty.length > 0){
			$.ajax({
				url: '/composer/show/' + symfonyId,
				success: function(response){
					elmEmpty.after('<small><pre>' + response + '</pre></small>').remove();
				}
			});
		}
	});
});