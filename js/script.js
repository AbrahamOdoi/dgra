$(document).ready(function() {

	$(function() {
		setTimeout(hideSplash, 5000);
	});

	function hideSplash() {
		$.mobile.changePage("menupage.php", "fade");
	};


	$('#icnCategory').click(function() {
		$('#slide_category').toggle();
	});
	
	$('#content').click(function() {
		$('#slide_category').hide();
	});
	
	$('#icnSearch').click(function() {
		$('#frmContentSear').slideToggle();
	});
	
	$('#menu_DailyGraph').click(function() {
		alert('yes');
		window.location='homepage.php';
	});
	
	
	
});
