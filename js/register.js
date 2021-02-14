$(document).ready(function(){
	$("#submit").click(function(){
		//alert('chjkcndcnjc')
		alert("register")
		$ajax({
			url:"login.php",
			type: "post",
			data:$("#frm").serialize(),
			success:function(d){
				 alert(d)
			}
		})
	})
})