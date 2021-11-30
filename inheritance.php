<?php
/*
    # Inheritance/Pewarisan 
      > single inheritance: 1 parent dan 1 child
      > hierarchical inheritance: 1 parent dan banyak child
*/

// Employee sebagai class parent
class Employee
{
    // attributes
    public $name;
    public $email;

    /*
            # method constructor
              > method yang HARUS dikerjakan
        */

    function __construct($paramName, $paramEmail)
    {
        $this->name = $paramName;
        $this->email = $paramEmail;
    }

    function showEmployee()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

// Manager sebagai child dari Employee
class Manager extends Employee
{
    public $position;

    function showManager($paramPosition)
    {
        echo "Position: " . $paramPosition . "<br><br>";
    }
}

// Staff adalah child dari Employee
class Staff extends Employee
{
    public $task;
    function showStaff($paramTask)
    {
        echo "Task: " . $paramTask . "<br>";
    }
}

// membuat object baru berasal dari class child
$james = new Manager("James", "james@email.com");
$james->showEmployee();
$james->showManager("IT Manager");

$george = new Manager("George", "george@email.com");
$george->showEmployee();
$george->showManager("PR Manager");

$stefany = new Staff("Stefany", "stefany@email.com");
$stefany->showEmployee();
$stefany->showStaff("Reporting");
