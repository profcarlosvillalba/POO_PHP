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

        
        $habilidadesLenguajes->offsetSet('C++', 7); 

        $habilidadesLenguajes->offsetSet('PHP', 1); 

        $habilidadesLenguajes->offsetSet('Python', 3); 


        $habilidadesLenguajes->offsetSet(null, 4); 

        foreach ($habilidadesLenguajes as $key => $value) {
            echo "$key => $value\n";
        }
        ?>
    
</body>
</html>