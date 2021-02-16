$(document).ready(function(){
	$("#submit").click(function(){
		//alert('chjkcndcnjc')
		alert("reg")
		$ajax({
			url:"signup.php",
			type: "post",
			data:$("#frm").serialize(),
			success:function(d){
				 alert(d)
			}
		})
	})
})