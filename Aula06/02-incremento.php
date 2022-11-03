<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*Esse exercicio pretende  demonstrar o uso de operadores 
            de incremento e decremento.*/

            $atual = $_GET["aa"];  #Essa linha pega o ano na URl
            echo "O ano atual é $atual e o ano anterior é ". --$atual;
        ?>
    </div>
</body>
</html>