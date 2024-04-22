<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "  Manaus   ";//ltrim tira os espaços do inicio
        echo (strlen($nome));//rtim tira os espaços do final
        echo "<br/>";
        echo trim($nome);
    ?>
    
</body>
</html>