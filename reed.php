<!DOCTYPE html>
<html>
<head>
	<title>Диалоги</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBbffKLC-s0rEEDxtCGvP7_n93ohAcax1Y",
    authDomain: "chat-66cb9.firebaseapp.com",
    databaseURL: "https://chat-66cb9.firebaseio.com",
    projectId: "chat-66cb9",
    storageBucket: "",
    messagingSenderId: "718594030435"
  };
  firebase.initializeApp(config);
</script>
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/reed.js"></script>
</head>
<body>
	<div class="content">
		
	<div class="block-chat">
					<select id="list-messages">
						<option>Пусто</option>
					</select>
					<div class="chat" id="chat">

					</div>

				</div>

			</div>

</body>
</html>