<?php

class Student
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Register
{
    private static int $idSum = 0;
    private int $idCadastro;
    private Student $dataStudent;
    
    public function __construct($dataStudent)
    {
        $this->dataStudent = $dataStudent;
        $this->idCadastro = ++Register::$idSum;
    }

    public function getDataStudent() : Student
    {
        return $this->dataStudent;
    }

    public function getDataStudentWithIdRegister() : string
    {
        return "My register is: " . $this->idCadastro . " My name is: " . $this->dataStudent->getName() . "\n";
    }
}

$student = [
    new Student("Matheus"),
    new Student("Fábio"),
    new Student("Thais")
];

$register = [
    new Register($student[0]),
    new Register($student[1]),
    new Register($student[2])
];

for($i = 0; $i < count($register); $i++)
{
    echo $register[$i]->getDataStudentWithIdRegister();
}

?>