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
        // Crear un ArrayObject con algunos valores iniciales
        $habilidadesLenguajes = new ArrayObject([
            'C++'  => 5,
            'C'    => 7,
            'PHP'  => 10,
            'Java' => 8,
            'Ruby' => 1
        ]);

        // Obtener una copia del array subyacente
        $copiaArray = $habilidadesLenguajes->getArrayCopy();

        // Mostrar el contenido de la copia del array
        print_r($copiaArray);
        ?>

   
    
</body>
</html>