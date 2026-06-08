<?php

// Crea un trait chiamato “Calculator” definendo le seguenti operazioni tra numeri:

//      public function sum($a, $b) {
//          return $a + $b;
//      }

//      public function sub($a, $b) {
//          return $a - $b;
//      }

//      public function mul($a, $b) {
//          return $a * $b;
//      }

//      public function div($a, $b) {
//          return $a / $b;
//      }

//      public function sqr($a){
//          return sqrt($numero);
//      }

// Crea quindi una classe Rettangolo con i seguenti attributi:
// -	Base (b);
// -	Altezza (h);

// Il tuo compito sarà quello di creare 3 metodi che andranno a calcolare:
// -	Area → b * h
// -	Perimetro → 2 * b + 2 * h
// -	Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)

// Tutte queste operazioni però dovranno essere richiamate dal trait Calculator

trait Calculator{

    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $a / $b;
    }

    public function sqr($a){
        return sqrt($a);
    }
}


class Rectangle{
    use Calculator;

    public $b;
    public $h;

    public function __construct($b, $h){
        $this->b = $b;
        $this->h = $h;
    }

    public function calculateArea(){
        return $this->mul($this->b, $this->h);
    }

    public function printArea(){
        echo "L'area del rettangolo è: " . $this->calculateArea() . "\n";
    }

    public function calculatePerimeter(){
        $firstMember = $this->mul(2, $this->b);
        $secondMember = $this->mul(2, $this->h);
        return $this->sum($firstMember, $secondMember);
    }

    public function printPerimeter(){
        echo "Il perimetro del rettangolo è: " . $this->calculatePerimeter() . "\n";
    }

    public function calculateDiagonal(){
        $firstMember = $this->mul($this->h, $this->h);
        $secondMember = $this->mul($this->b, $this->b);
        $sum = $this->sum($firstMember, $secondMember);
        return $this->sqr($sum);
    }

    public function printDiagonal(){
        echo "La diagonale del rettangolo è: " . $this->calculateDiagonal() . "\n";
    }
}


$rectangle1 = new Rectangle(4, 6);
$rectangle1->printArea();
$rectangle1->printPerimeter();
$rectangle1->printDiagonal();

$rectangle2 = new Rectangle(2, 2);
$rectangle2->printArea();
$rectangle2->printPerimeter();
$rectangle2->printDiagonal();