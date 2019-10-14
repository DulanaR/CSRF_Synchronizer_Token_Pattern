<?php
if(isset($_POST['username'],$_POST['passkey'])){
	$uname = $_POST['username'];
	$pwd	= $_POST['passkey'];
	if($uname == 'admin' && $pwd == 'test123'){
		echo '<h3>You are successfully logged in as a user</h3>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
else{
	header('Location:./login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	$(document).ready(function(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_value").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "token-genarator.php", true);
	xhttp.send();
	
	});
</script>
</head>

<body>
<div style="padding-top:10px;">
    <h2>Idea About My BLOG</h2>
    
    <div >
            <form class="form" action="result.php" method="post" name="update_form">
          
                 
                    <textarea id="msgTxt"  name="msgTxt" placeholder="Add your idea about my blog " class="homeContentF"></textarea><br><br>
				    <input type="hidden" name="token" value="" id="token_value"/>
                    <input type="submit" name="cSubmit" class="homeContentF login space" value="Update">
                   
                
    </div>

</body>

</html>