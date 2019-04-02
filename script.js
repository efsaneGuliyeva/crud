$(".sil").click(function(){
	var id = $(this).data("id");
	
	
	$.ajax({
		type: "POST",
		url: "delete.php",
		data: {del_id: id},
		success: function(data){
			location.reload();
		}
	});
});