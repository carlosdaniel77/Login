<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" action="index.php" method="post">
    <title>Document</title>
</head>
<body>
    <h3><span style="color:blue;">Tela Principal</span><br/><br/></h3>
    <?php
     $hora = date('H');
     if ($hora > 19) {
        $saudacao = "Boa noite,";

     }elseif($hora > 12){
         $saudacao = "Boa tarde, ";
     }else{
         $saudacao = "Bom dia, ";
     }

     echo $saudacao.$_SESSION['usuario'];
    ?>
</body>
</html>