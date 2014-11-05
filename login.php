<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<title>Ratio</title>
		
		<link rel="stylesheet" type="text/css" href="http://babbage.cs.missouri.edu/~celkr8/Project/v2/app/views/project/css/login.css">
	 
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		
		<script type = "text/javascript">
			$(function() {
				window.setInterval(function(){				
						$('body').css("background-image", "url(../images/background2.jpg)");
						}
					}, 2000);
			});
			
		</script>
		
		<script type = "text/javascript">
			function registration(){
				document.getElementById("ratio-img").addEventListener("click", function(){
					document.getElementById("register").submit();
				});
			}
		</script>
	</head>	
	
	<body>
		<div id = "all-wrapper">
			<div id = "title-wrapper">
				<h1 id = "ratio-title">Rati</h1>
				
				<form id = "register" method = "POST" action = "http://babbage.cs.missouri.edu/~celkr8/Project/v2/index.php/projectController/register">
					<img id = "ratio-img" src = "http://babbage.cs.missouri.edu/~celkr8/Project/v2/app/views/project/images/piechart.png" alt = "pie chart" onclick = "registration()">
				</form>
			</div>
			
			<form id = "login">
				<input type = "text" name = "username" placeholder = "username" class = "login-textbox">
				<br/>
				<input type = "password" name = "password" placeholder = "password" class = "login-textbox">
				<br/>
				<input type = "submit" name = "login" value = "Login" id = "login-button">
			</form>	
		</div>
	</body>	
</html>
