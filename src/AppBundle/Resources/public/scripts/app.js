$(function(){
	var rows           = $('table tbody tr');
	var searchField    = $("#search");
	var flgHideStopped = $("#flgHideStopped");
	var clearSearch    = $("#clearSearch");
	var starControl    = $(".starControl");
	var badgeUpdate    = $('.badgeUpdate');
	
	manageRows();
	
	badgeUpdatePulsate();
	setInterval(badgeUpdatePulsate, 10000);
	
	function badgeUpdatePulsate(){
		badgeUpdate.effect("pulsate", {}, 400);
	}
	
	$(".selectAll").on('mouseup', function(){
		var sel, range;
		var el = $(this)[0];
		if(window.getSelection && document.createRange){ //Browser compatibility
			sel = window.getSelection();
			if(sel.toString() === ''){ //no text selection
				window.setTimeout(function(){
					range = document.createRange(); //range object
					range.selectNodeContents(el); //sets Range
					sel.removeAllRanges(); //remove all ranges from selection
					sel.addRange(range);//add Range to a Selection.
				}, 1);
			}
		}
		else if(document.selection){ //older ie
			sel = document.selection.createRange();
			if(sel.text === ''){ //no text selection
				range = document.body.createTextRange();//Creates TextRange object
				range.moveToElementText(el);//sets Range
				range.select(); //make selection.
			}
		}
	});
	
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
	});
});