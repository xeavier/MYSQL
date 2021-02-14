$(document).ready(function(){
	$("#submit").click(function(){
		//alert('chjkcndcnjc')
		alert("jhvhj")
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