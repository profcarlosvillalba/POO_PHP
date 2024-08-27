<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ArrayObject en PHP</p>

    <?php

      $lenguajes = array(
            'php',
            'python',
            'java',
            'c++',
            'c'
        );

        $objetoLenguajes = new ArrayObject($lenguajes);

        $cantidad = $objetoLenguajes->count();
       
        echo $cantidad;
        
    ?>   
    
</body>
</html>