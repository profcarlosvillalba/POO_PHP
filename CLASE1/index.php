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
    private string $dni;
    private string $nombre;
    private string $apellido;
    private string $sexo;
    private string $fecha_nacimiento;
    private string $domicilio;

    public function __construct(
        string $dni,
        string $nombre,
        string $apellido,
        string $sexo,
        string $fecha_nacimiento,
        string $domicilio
    ) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->domicilio = $domicilio;
    }

    public function getDni(): string
    {
        return $this->dni;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getSexo(): string
    {
        return $this->sexo;
    }

    public function getFechaNacimiento(): string
    {
        return $this->fecha_nacimiento;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }

    public function setFechaNacimiento(string $fecha_nacimiento): void
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function saludar(): string
    {
        return "Hola, mi DNI es " . $this->dni .
               ", mi nombre es " . $this->nombre .
               ", mi apellido es " . $this->apellido .
               ", mi sexo es " . $this->sexo .
               ", mi fecha de nacimiento es " . $this->fecha_nacimiento;
    }
}




   $persona = new Persona(
    "37590136",
    "Carlos",
    "Villalba",
    "Masculino",
    "1993-09-14",
    "CH 32"
);

$persona->setNombre("Carlos");

echo $persona->saludar();
        
    ?>   
    
</body>
</html>