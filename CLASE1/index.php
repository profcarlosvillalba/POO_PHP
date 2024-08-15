<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Clases en PHP</p>

    <?php

        class Persona
        {
            private $dni;
            private $nombre;
            private $apellido;
            private $sexo;
            private $fecha_nacimiento;
            private $domicilio;

            public function __construct($dni, $nombre, $apellido, $sexo, $fecha_nacimiento, $domicilio) {
                $this->dni = $dni;
                $this->nombre = $nombre;
                $this->apellido = $apellido; 
                $this->sexo = $sexo; 
                $this->fecha_nacimiento = $fecha_nacimiento; 
                $this->domicilio = $domicilio; 
            }

            public function getDni(){
                return $this->dni;
            }
            

            public function getNombre(){
                return $this->nombre;
            }

            public function getApellido(){
                return $this->apellido;
            }

            public function getSexo(){
                return $this->sexo;
            }
            public function getFecha_nacimiento(){
                return $this->fecha_nacimiento;
            }

            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            public function setApellido($apellido){
                $this->apellido = $apellido;
            }

            public function setSexo($sexo){
                $this->sexo = $sexo;
            }
            public function setFecha_nacimiento($fecha_nacimiento){
                $this->fecha_nacimiento = $fecha_nacimiento;
            }

            public function saludar(){
                return "Hola, mi dni es " . $this->getDni() . " mi nombre es " . $this->getNombre() . " mi apellido es " . $this->getApellido() . " mi sexo es " . $this->getSexo() . " mi fecha de nacimiento es " . $this->getFecha_nacimiento();
            }
        }

        $persona = new Persona("37590136", "caaarlos","villalba", "Masculino", "1993-09-14", "CH 32");

        $persona->setNombre("carlos");

        echo $persona->saludar();
        
    ?>   
    
</body>
</html>