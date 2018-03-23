$(function(){
	const searchField    = $('#search');
	const flgHideStopped = $("#flgHideStopped");
	
	//manageRows();
	
	$("#clearSearch").click(function(e){
		e.preventDefault();
		
		searchField.val('');
		manageRows();
		
		return false;
	});
	
	flgHideStopped.click(function(){
		manageRows();
	});
	
	searchField.keyup(function(){
		manageRows();
	});
	
	function manageRows(){
		var string      = $.trim(searchField.val()).replace(/ +/g, " ").toLowerCase();
		var hideSkipped = flgHideStopped.is(":checked");
		
		$('table tbody tr').show().filter(function(){
			var text   = $(this).text().replace(/\s+/g, " ").toLowerCase();
			var status = $(this).children("td.colStatus").text().replace(/\s+/g, " ").toLowerCase();
			
			var checkString  = string !== "" ? !~text.indexOf(string) : false;
			var checkSkipped = hideSkipped ? ~status.indexOf("stopped") : false;
			
			return checkString || checkSkipped;
		}).hide();
	}
});