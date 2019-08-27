<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="resposta"></div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	
$.post("https://web.smartgps.com.br/api/login", {
     email : "api@smartgps.com.br", password : "123456"
 }, function(msg){
     console.log(msg);
     $.get("https://web.smartgps.com.br/api/get_devices_latest?user_api_hash="+msg.user_api_hash,
      function(response){
	     console.log(response);
	     $("#resposta").html(resposta);
	     
	 })
     
 })
</script>
</body>
</html>