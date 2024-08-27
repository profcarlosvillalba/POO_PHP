<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Uso de append en PHP</p>

    <?php
        //Primeramente declaro un vector de habilidades de un desarrollador
        $habilidades = array(
            'Desarrollador Backend',
            'Desarrollador Frontend',
            'Testing',
            'Desarrollador Fullstack'
        );
        /*creo una variable que almacenará la instancia de la clase ArrayObject 
        el cual le pasaremos como argumento las habilidades*/
        $objetoHabilidades = new ArrayObject($habilidades);
        /*El método append de la clase ArrayObject se usa para agregar un nuevo elemento al final del array.
         En este caso, se añade "UI/UX Design" al array original.*/
        $objetoHabilidades->append('UI/UX Design');
        /*Se crea un iterador a partir del objeto ArrayObject utilizando el método getIterator(). 
        Un iterador permite recorrer los elementos del array de manera secuencial.*/
        $iterador = $objetoHabilidades->getIterator();
        /*Bucle while para Recorrer el Array:
            Dentro del bucle:

            valid() verifica si el iterador está en una posición válida dentro del array.
            current() devuelve el elemento actual del iterador.
            next() mueve el iterador al siguiente elemento.
            Cada elemento del array se imprime utilizando echo, seguido de una etiqueta <br> para agregar un salto de línea en la salida HTML.*/
        while ($iterador->valid())
        {
            echo $iterador->current() . "<br>";
            $iterador->next();
        }
        
        
    ?>   
    
</body>
</html>