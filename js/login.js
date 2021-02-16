$(document).ready(function(){
	$("#submit").click(function(){
		alert('chjkcndcnjc')
		$ajax({
			url:"login.php",
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


$(document).ready(function() {
	$("#submit").on('click', function() {
		var email = $('#email').val();
		var password = $('#password').val();
		//alert(name, password)
		if(email!="" && password!=""){
			$.ajax({
				url: "login.php",
				type: "POST",
				data: {
					email: email,
					password: password,		
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
					
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});