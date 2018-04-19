<!DOCTYPE html>
<html>
<head>
	<title>Поиск</title>
	<meta charset="UTF-8">
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
<script type="text/javascript" src="js/find.js"></script>
</head>
<body>
	<style type="text/css">
		.table_dark {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  width: 640px;
  text-align: left;
  border-collapse: collapse;
  background: #252F48;
  margin: 10px;
}
.table_dark th {
  color: #EDB749;
  border-bottom: 1px solid #37B5A5;
  padding: 12px 17px;
}
.table_dark td {
  color: #CAD4D6;
  border-bottom: 1px solid #37B5A5;
  border-right:1px solid #37B5A5;
  padding: 7px 17px;
}
.table_dark tr:last-child td {
  border-bottom: none;
}
.table_dark td:last-child {
  border-right: none;
}
.table_dark tr:hover td {
  text-decoration: underline;
}
	</style>
	<table id="list_find" class="table_dark">
		<th>Имя</th>
		<th>Пол</th>
		<th>Возраст</th>
		<th>Пол собеседника</th>
		<th>Возраст собеседника</th>
	</table>
</body>
</html>