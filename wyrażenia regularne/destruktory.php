<?php
class Fruit{
    public $name;
    public $color;


function __construct($name){<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;


}
$mango = new fruit();
$mango -> name='mango';
$mango -> color='yellow';  //ERROR
$mango -> $weight='300';   //ERROR
?>


    $this->name = $name;
}
function __destruct (){
    echo "The Fruit is {$this ->name}.";
}
}
$apple = new Fruit("Apple");
?>
