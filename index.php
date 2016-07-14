 
<html>
	<head>
		<title>Android Push Notification using GCM</title>
		<style>
		#first{
    display: block;
    width: 50%;
    margin: 2% auto;
    height: 40px;
    font-size: 100%;
	border:1px solid #339596;
}

	#second{
    display: block;
    width: 50%;
    margin: 2% auto;
    height: 40px;
    font-size: 100%;
	border:1px solid #339596;
}
	#title{
    display: block;
     width: 50%;
    margin: 2% auto;
    height: 40px;
    font-size: 100%;
	border:1px solid #339596;
}

	#message{
  display: block;
     width: 50%;
    margin: 2% auto;
    height: 80px;
    font-size: 100%;
	border:1px solid #339596;
}
	#sendButton {
    margin: 2% 5%;
    border: none;
	align: center;
    background-color: #339596;
    color: #ffffff;
    padding: 2% 10%;
    font-size: 100%;

}

	.formId {
	align: center;
	text-align: center;
    font-size: 100%;
	}
	
	.headerClass {
	    padding: 1% 0;
    text-align: center;
    width: 100%;
    text-decoration: none;
    background-color: #339596;
    margin: 0;
    color: #ffffff;
	}
	
	.headerBody {
    text-align: center;
    align: center;
	vertical-align: middle;
    background-color: #339596;
    margin: 0px;
	 height: 18%;
    color: #ffffff;
	}.nuulMargin {
  
    margin: 0px;
   
	}
		</style>
	</head>
	
	<body class =" nuulMargin">
	<div class = "headerBody">
		<h1 class = "headerClass">Firesbase Cloud Messaging (Php Web Server)</h1>
		</div>
		
		<form method='post' action='send.php' class = "formId">
			
			<input type='text' name='server_key' placeholder='Enter Server key' id="first" class = "formId"/>
			<input type='text' name='token' placeholder='Enter Device Registration Token'  id="second" class = "formId"/>
			<input name='title' placeholder='Enter a title' id="title" class = "formId"/>
			<input name='message' placeholder='Enter a message' id="message" class = "formId"/>
			
			<button id="sendButton">Send Notification</button>
		</form>
		<p class = "formId">
			<?php
			
				if(isset($_REQUEST['success'])){
					echo "<strong>Cool!</strong> Message sent successfully check your device...";
				}
				
				if(isset($_REQUEST['failure'])){
					echo "<strong>Oops!</strong> Could not send message check API Key and Token...";
				}
			?>
		</p>
		
		<footer class = "formId">
			Copyright 2016 &copy; All Rights Reserved to <a href='http://luseen.com/'>Luseen</a>
		</footer>
	</body>
	
</html>