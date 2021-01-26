/*function hideLoader() {
    $('#loading').hide();
}

$(window).ready(hideLoader);

// Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
setTimeout(hideLoader, 20 * 1000);*/
$(document).ready(function(){
	$('.flake').css('cursor','pointer');
	$('.flake').click(function(){
		$('#flake').removeClass("flake:nth-child(1)");
		$('#flake').removeClass('flake:nth-child(2)');
		$('#flake').removeClass('flake:nth-child(3)');
		$('#flake').removeClass('flake:nth-child(4)');
		$('#flake').removeClass('flake:nth-child(5)');
		$('#flake').removeClass('flake:nth-child(6)');
		$('#flake').removeClass('flake:nth-child(7)');
		$('#flake').removeClass('flake:nth-child(8)');
		$('#flake').removeClass('flake:nth-child(9)');
		$('#flake').removeClass('flake:nth-child(10)');
		$('#flake').removeClass('flake:nth-child(11)');
		$('#flake').removeClass('flake:nth-child(12)');
		$('#flake').removeClass('flake:nth-child(13)');
		$('#flake').removeClass('flake:nth-child(14)');
		$('#flake').removeClass('flake:nth-child(15)');
	});
});