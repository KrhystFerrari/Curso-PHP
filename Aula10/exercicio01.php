<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
    <style>
        .foco {
            font-size: 30px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php 
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n);  // $n ^ (1/2);
            }
            echo "O resultado da operação solicitada foi <span class='foco'>$r</span>"
        ?>
        <a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>