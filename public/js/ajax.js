$(document).ready(function(){

	$('.eliminar').click(function(e){
		e.preventDefault();
		var form = $('#ajax-form');
		var token = form.children().children().val();
		var url = form.attr('action');
		console.log(url);
	});

});