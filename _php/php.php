<?php
$nome = $_POST["tnome"];
$sexo = $_POST["tsexo"];
$idade = $_POST["tidade"];
$_POST["tsenha"];
$_POST["temail"];
$menssagem = $_POST["tmsg"];
?>
<?php
$to = "bruninhakjurugat11@gmail.com";
$message = "Nome: $nome<br/> Sexo: $sexo</br> Idade: $idade</br> Menssagem: $menssagem</br>";
$header = "MIME_Version:1.0\n";
mail($to,$message,$header);
echo "Menssagem enviada com sucesso!"
?>