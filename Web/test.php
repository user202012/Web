<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="styletest.css" rel="stylesheet" type="text/css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<script>
function OnChangeFunction()
{ 
  if (Number(document.getElementsByName("ValueA")[0].value) + Number(document.getElementsByName("ValueB")[0].value) + Number(document.getElementsByName("ValueC")[0].value) == 100)
  {
    document.getElementById("abc").style.background = "#28921f";
  }
  else
  {
    document.getElementById("abc").style.background = "#d45252";
  }
}
</script>
<form class="form" method = "POST" novalidate>
	<ul id = "ul1">
	<li>
  <h2>Contact Us</h2>
    <span class="required_notification">* Denotes Required Field</span>
  </li> 
  <li id="abc">
    <label for="Value A">Value A:</label>
    <input type="text" name="ValueA" placeholder="80%" onchange="OnChangeFunction()" required pattern="^[0-9]+$"/>
  </li>
  <li id="abc">
      <label for="Value B">Value B:</label>
      <input type="text" name="ValueB" placeholder="15%" onchange="OnChangeFunction()" required pattern="^[0-9]+$"/>
  </li>
  <li id="abc">
      <label for="Value C">Value C:</label>
      <input type="text" name="ValueC" placeholder="5%" onchange="OnChangeFunction()" required pattern="^[0-9]+$">
  </li>
  <li>
      <label for="Value X">Value X:</label>
      <input type="text" name="ValueX" placeholder="80%" required pattern="^[0-9]+$"/>
  </li>
  <li>
      <label for="Value Y">Value Y:</label>
      <input type="text" name="ValueY" placeholder="15%" required pattern="^[0-9]+$"/>
  </li>
  <li>
      <label for="Value Z">Value Z:</label>
      <input type="text" name="ValueZ" placeholder="5%" required/>
  </li>
    <li>
      <button class="submit" type="submit" formaction = "scr.php">Submit Form</button>
    </li>
	</ul>
</form>
</body>
</html>