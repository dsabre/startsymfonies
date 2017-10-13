$(function() {
    $('.composerShow').click(function(e){
		const symfonyId = parseInt($.trim($(this).data('symfonyid')));
		const elmEmpty = $('#modalComposerShow' + symfonyId + '-empty');
	
		if(elmEmpty.length > 0){
			$.ajax({
				url: '/composer/show/' + symfonyId,
				success: function(response){
					var output = '';
					var color = false;
					
					$.each(response, function(k, row){
						output += '<span ' + (color ? 'class="text-info"' : '') + '> ' + row + ' </span><br>';
						color = !color;
					});
					
					elmEmpty.after('<small><pre>' + output + '</pre></small>').remove();
				}
			});
		}
	});
});