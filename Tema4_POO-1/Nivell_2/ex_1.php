<?php
declare(strict_types = 1);

class PokerDice {
    public $shapes = [7, 8, 'J', 'Q', 'K', 'As'];
    public $index;
    public static $totalThrows = 0;

    function throw() {
        $this->index = rand(0, 5);
        self::$totalThrows++;
    }
    function shapeName() {      
        return $this->shapes[$this->index];
    }
    static function getTotalThrows() {
        return self::$totalThrows;
    }
}

//VERIFICACION:

//Creamos 5 objetos(dados) de la clase PockerDice
$dice1 = new PokerDice();
$dice2 = new PokerDice();
$dice3 = new PokerDice();
$dice4 = new PokerDice();
$dice5 = new PokerDice();

//Lanzamos los 5 dados n veces (usamos 'rand', de 2 a 10 tiros)
for ($i=0; $i < rand(2, 10); $i++) {
    $dice1->throw();
    $dice2->throw();
    $dice3->throw();
    $dice4->throw();
    $dice5->throw();
}

//Mostramos la figura del último tiro de cada dado
echo "Dado 1: " . $dice1->shapeName() . "<br>";
echo "Dado 2: " . $dice2->shapeName() . "<br>";
echo "Dado 3: " . $dice3->shapeName() . "<br>";
echo "Dado 4: " . $dice4->shapeName() . "<br>";
echo "Dado 5: " . $dice5->shapeName() . "<br>";

//Mostramos la cantidad total de tiros realizados (dado por rand)
echo "Número total de tiros: " . PokerDice::getTotalThrows();

?>