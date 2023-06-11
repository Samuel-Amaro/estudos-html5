<?php 

$fname = $_GET['fname'];
$lname = $_GET['lname'];


?>

<h1>Dados do formulário enviado</h1>

<h2>Sua opinião foi recebida como:</h2>

<input type="text" value="<?php "fname=$fname&lname=$lname </br>"; ?>">

<p>O servidor processou sua entrada e retornou esta resposta.</p>