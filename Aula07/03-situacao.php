<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $nota1 = $_GET["n1"];  
            $nota2 = $_GET["n2"];
            $m = ($nota1 + $nota2) / 2;
            echo "A média entre $nota1 e $nota2 é $m. <br/>";
            echo "Você está ". (($m < 6) ? "REPROVADO!" : "APROVADO!");
        ?>
    </div>
</body>
</html>