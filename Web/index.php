<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<ul id = "ul1">
	<li><label id = "icon_button">Dsport</label></li>
	<li><button class = "Button" id = "panel">Главная страница</button></li>
	<li><button class = "Button" id = "panel">Расписание</button></li>
	<li><button class = "Button" id = "panel">Личный кабинет</button></li>
	<li><button class = "Button" id = "panel">Наши тренеры</button></li>
	</ul>

	<div id="middle-div">
	<form method = "POST" class="sidebar" >
	<ul>
		<li>
		<?php include "script.php"?>
		</li>
	</ul>
	</form>
	
	<div>
	</div>
	<form id="borderform" method = "POST">
	<ul id = "ul1">
	<li><button id = "instr" style = "text-align:center; white-space: pre-wrap;"><i class="fas fa-pen"></i>История покупок</button></li>
	<li><button id = "instr" style = "text-align:center; white-space: pre-wrap;"><i class="fas fa-pen"></i>История изменения информации</button></li>
	<li><button id = "instr" style = "text-align:center; white-space: pre-wrap;"><i class="fas fa-pen"></i>Расписание</button></li>
	</ul>
	<ul id = "ul1">
	<li><button id = "instr" style = "text-align:center; white-space: pre-wrap;"><i class="fas fa-pen"></i>История покупок</button></li>
	<li><button id = "instr" style = "text-align:center; white-space: pre-wrap;"><i class="fas fa-pen"></i>История изменения информации</button></li>
	<li><button id = "instr" style = "text-align:center; white-space: pre-wrap;"><i class="fas fa-pen"></i>Расписание</button></li>
	</ul>
	</form>

	<form id="rightform" method = "POST">
	</form>
	</div>

</body>
</html>