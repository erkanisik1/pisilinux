$(function(){
	$('.dissolved').click(function(){
		dataid = $(this).data("id");
		$.ajax('Ajax/dissolved', {
		    type: 'POST',  // http method
		    data: { id: dataid },  // data to submit
		    success: function (data) {
		        location.reload();
		    }
		});
	})	
})