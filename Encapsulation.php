<?php

class Employee 
{
    
    private $name;
    private $position;
    private $salary;

    
    public function __construct($name, $position, $salary) 
    {
        $this->name = $name;
        $this->position = $position;
        $this->setSalary($salary);
    }

    
    public function getName() 
    {
        return $this->name;
    }

    
    public function getPosition() 
    {
        return $this->position;
    }

    
    public function getSalary() 
    {
        return $this->salary;
    }

    
    public function setSalary($salary) 
    {
        if ($salary > 0) {
            $this->salary = $salary;
        } 
        else 
        {
            throw new Exception("Salary must be a positive number.");
        }
    }

    
    public function displayEmployeeInfo() {
        echo "Employee Name: " . $this->getName() . "\n";
        echo "Position: " . $this->getPosition() . "\n";
        echo "Salary: $" . $this->getSalary() . "\n";
    }
}



    
    $employee = new Employee("John Doe", "Software Engineer", 60000);
    $employee->displayEmployeeInfo();
    $employee->setSalary(70000);
    echo "\nAfter Salary Update:\n";
    $employee->displayEmployeeInfo();

?>