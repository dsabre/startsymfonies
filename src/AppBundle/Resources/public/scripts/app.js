$(function(){
	var rows           = $('table tbody tr');
	var searchField    = $("#search");
	var flgHideStopped = $("#flgHideStopped");
	var clearSearch    = $("#clearSearch");
	var starControl    = $(".starControl");
	
	manageRows();
	
	$('.setDefaultVal').click(function(e){
		e.preventDefault();
		
		$($(this).data('field')).val($(this).data('val'));
		
		return false;
	});
	
	clearSearch.click(function(e){
		e.preventDefault();
		
		searchField.val('');
		manageRows();
		
		return false;
	});
	
	searchField.keyup(function(){
		manageRows();
	});
	
	flgHideStopped.click(function(){
		manageRows();
	});
	
	starControl.click(function(e){
		e.preventDefault();
		
		var item = $(this);
		var symId = parseInt($.trim(item.data('id')));
		
		$.ajax({
			url     : '/star-control/' + symId,
			success : function(){
				item.toggleClass('text-warning').toggleClass('fa-star').toggleClass('fa-star-o').blur();
			}
		});
		
		return false;
	});
	
	function manageRows(){
		var string      = $.trim(searchField.val()).replace(/ +/g, " ").toLowerCase();
		var hideSkipped = flgHideStopped.is(":checked");
		
		rows.show().filter(function(){
			var text   = $(this).text().replace(/\s+/g, " ").toLowerCase();
			var status = $(this).children("td.colLink").text().replace(/\s+/g, " ").toLowerCase();
			
			var checkString  = string !== "" ? !~text.indexOf(string) : false;
			var checkSkipped = hideSkipped ? ~status.indexOf("stopped") : false;
			
			return checkString || checkSkipped;
		}).hide();
	}
	
	$('.swalContinue').click(function(e){
		e.preventDefault();
		
		var href = $(this).attr('href');
		
		swal({
			title: "Continue?",
			text: "",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((checkContinue) => {
			if (checkContinue) {
				location.href = href;
			}
		});
		
		return false;
	})
});