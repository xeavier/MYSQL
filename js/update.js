$(document).ready(function(){
	$("#submit").click(function(){
		alert('chjkcndcnjc')
		$ajax({
			url:"update.php",
			type: "POST",
			data: {
				email: email,
				password: password				
			},
			success:function(d){
				alert('chjkcndcnjc')
			}
		})
	})
})