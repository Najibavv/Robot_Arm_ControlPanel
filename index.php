<!DOCTYPE html>
<html>
<head>
<title>Control Interface</title>
 <link 
 rel="stylesheet" href="css.css">
</head>

<body>

<form action="submit.php" method="post">
<h2>Motor1:</h2><br>

 <input type="range" min="0" max="180" value="0" class="slider" id="myRange1" name="m1">
 <p>Value: <span id = "value1"></span></p>
<br>
<h2>Motor2:</h2><br>

 <input type="range" min="0" max="180" value="0" class="slider" id="myRange2" name="m2">
 <p>Value: <span id = "value2"></span></p>
<br>
<h2>Motor3:</h2><br>

 <input type="range" min="0" max="180" value="0" class="slider" id="myRange3" name="m3">
 <p>Value: <span id = "value3"></span></p>
<br>
<h2>Motor4:</h2><br>
 <input type="range" min="0" max="180" value="0" class="slider" id="myRange4" name="m4">
 <p>Value: <span id = "value4"></span></p>
<br>
<h2>Motor5:</h2><br>

 <input type="range" min="0" max="180" value="0" class="slider" id="myRange5" name="m5">
 <p>Value: <span id = "value5"></span></p>
<br>
<h2>Motor6:</h2><br>
 <input type="range" min="0" max="180" value="0" class="slider" id="myRange6" name="m6">
 <p>Value: <span id = "value6"></span></p>
 
<input type="submit" value="save" name= save >
 <input type="submit" value = "ON" name = on  >
</form>

</body>

<script src="javascript.js"></script>
</html>