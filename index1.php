<html>
<head>
<link rel="stylesheet"href="christmass.css">
<title>christmassgift</title></head>
<body>
<?php
$name =$_POST["name"];
$state =$_POST["state"];
echo "<h2>good choices $name you are one step 
of becoming a millioner in $state</h2>";
echo "<h1>have you 
ever bought something on amazon $name?</h1><br>";
?>
<form action="index2.php"method="post">
<p3>yes<input type="radio"name="radio"></p3><br>
<p3>no<input type="radio"name="radio"></p3>
<br><br>
<h1>what best way do you think we can end convid 19?
<br><br><br>
<p3>allow small licerced trades to sell vaccines
</p3><br><input type="radio"size="60px"><br><br>
<p3>suspend coutries with high risk from travilling</p3>
<br><input type="radio"><br><br>
<p3>the world health is doing a good job so far</p3>
<br><input type="radio"><br><br>
<p3>help less developed countries</p3>
<br><input type="radio"><br><br>
<p3>others not stated</p3>
<br><input type="radio"><br>
<h1>do you think globel warming is going down soon</h1>
<p3>yes</p3><input type="radio"name="radio"><br>
<p3>no</p3><input type="radio"name="radio">
<br><br>
<h1>why do you say so</h1>
<br><br>
<input type="text"><br><br>
<?php
echo "<h1>think you for all your responses $name </h1>";
echo "<h1>kindly re-enter your full names to claim price</h1>";
?>
<input type="text"name="fullnames"placeholder="smith martin"
required/>
<input type="submit"value="claim"/>
</form>
</body>
<html>