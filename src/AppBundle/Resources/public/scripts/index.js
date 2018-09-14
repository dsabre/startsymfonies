$(function(){
	// ---------- BADGE UPDATE ANIMATION ----------
	badgeUpdatePulsate();
	setInterval(badgeUpdatePulsate, 10000);
	function badgeUpdatePulsate(){
		$('.badgeUpdate').effect("pulsate", {}, 400);
	}
	// ---------- END BADGE UPDATE ANIMATION ----------
	
	
	// ---------- VALUE SETTER ----------
	$('.setDefaultVal').click(function(e){
		e.preventDefault();
		
		$($(this).data('field')).val($(this).data('val'));
		
		return false;
	});
	// ---------- END VALUE SETTER ----------
	
	
	// ---------- STAR CONTROL ----------
	$(".starControl").click(function(e){
		e.preventDefault();
		
		var item  = $(this);
		var symId = parseInt($.trim(item.data('id')));
		
		$.ajax({
			url     : '/star-control/' + symId,
			success : function(){
				item.toggleClass('text-warning').toggleClass('text-secondary').toggleClass('fas').toggleClass('far').blur();
			}
		});
		
		return false;
	});
	// ---------- END STAR CONTROL ----------
	
	
	// ---------- CONFIRM ACTION ----------
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
	// ---------- END CONFIRM ACTION ----------
});