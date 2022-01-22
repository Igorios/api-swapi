<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo APi</title>
</head>
<body>

<h1>Consumindo API</h1>

    <?php

        $url = "https://swapi.dev/api/people/?page=2";
        # Decodificando api
        $resultado = json_decode(file_get_contents($url)); 
        # var_dump($resultado);
        
        # Procurando Ator
        foreach($resultado->results as $ator) {
            echo "Ator: " .$ator->name. "<br>";

            echo "Altura: " .$ator->height. "cm<br>";

            echo "Cor do cabelo " .$ator->hair_color;

            echo "<hr>";
        }

    ?>

</body>
</html>