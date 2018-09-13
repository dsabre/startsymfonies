$(function() {
    $('.composerShow').click(function(e){
		var symfonyId = parseInt($.trim($(this).data('symfonyid')));
		var path = $.trim($(this).data('path'));
		var elmEmpty = $('#modalComposerShow-empty');
		var elmContent = $('#modalComposerShow-content');
	
		elmEmpty.removeClass('d-none');
		elmContent.text('');
	
		$('#modalComposerShowPath').text(path);
	
		$.ajax({
			url: '/composer/show/' + symfonyId,
			success: function(response){
				var output = '';
				var color = false;
			
				$.each(response, function(k, row){
					output += '<small ' + (color ? 'class="text-info"' : '') + '> ' + row + ' </small><br>';
					color = !color;
				});
			
				elmEmpty.addClass('d-none');
				elmContent.html(output);
			}
		});
	});
});