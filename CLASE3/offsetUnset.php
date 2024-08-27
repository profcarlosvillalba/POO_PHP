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

        // Eliminar un elemento usando offsetUnset
        $habilidadesLenguajes->offsetUnset('C++'); 

        // Mostrar los resultados
        foreach ($habilidadesLenguajes as $key => $value) {
            echo "$key => $value\n";
        }
        ?>

   
    
</body>
</html>