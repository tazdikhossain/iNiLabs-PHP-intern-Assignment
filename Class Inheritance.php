<?php


class Shape 
{
    
    public function getArea() 
    {
        return 0;
    }
}



class Circle extends Shape 
{
    private $radius;

   
    public function __construct($radius) 
    {
        $this->radius = $radius;
    }

   
    public function getArea() 
    {
        return pi() * pow($this->radius, 2);
    }
}



class Rectangle extends Shape 
{
    private $width;
    private $height;

    
    public function __construct($width, $height) 
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() 
    {
        return $this->width * $this->height;
    }
}


class Square extends Rectangle
{
    
    public function __construct($side) 
    {
        parent::__construct($side, $side);
    }
}


class Triangle extends Shape 
{
    private $base;
    private $height;

   
    public function __construct($base, $height) 
    {
        $this->base = $base;
        $this->height = $height;
    }

    
    public function getArea() 
    {
        return 0.5 * $this->base * $this->height;
    }
}



$circle = new Circle(5);
echo "Circle Area: " . $circle->getArea() . "\n";


$rectangle = new Rectangle(4, 7);
echo "Rectangle Area: " . $rectangle->getArea() . "\n";


$square = new Square(6);
echo "Square Area: " . $square->getArea() . "\n";


$triangle = new Triangle(8, 5);
echo "Triangle Area: " . $triangle->getArea() . "\n";

?>