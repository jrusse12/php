<?php

class vehicle {
    
public $color;
public $num_doors;
public $shape;
public $cost;
public $brand;

    public function _construct() {
        echo '<h2>About this vehicle.</h2>';
    }// end of constructor
    public function showBrand(){
        echo ' <table><tr><td>This is a '.$this->brand.' Countash.</td></tr>';
    }

    public function showPrice() {
        echo '<tr><td>Price of Vehicle is '.$this->cost.'.</td></tr>';
    }// end of method showPrice
    
    public function numOfDoors(){
        echo '<tr><td>This vehicle has '.$this->num_doors.' doors.</td></tr>' ;
    }// end of method numOfDoors
    
    public function drive(){ 
        echo '<tr><td>Vroooom!</td></tr></table>';
    }// end of method drive
}// end of class vehicle
?>
<html>
    <head>
        <title>PHP OOP Vehicle Class</title>    
        <link rel='stylesheet' type='text/css' href='main.css'/>
    </head>
    <body>
        <h1>Hello and Welcome to Josiah's Car Garage</h1>
<?php

$vehicle = new vehicle;

$vehicle->brand = 'Lamborgini';
$vehicle->color = 'Green';
$vehicle->cost  = '$111,000.00';
$vehicle->num_doors = 2;
$vehicle->shape = 'Sport';

$vehicle->_construct(); 
$vehicle->showBrand();
$vehicle->showPrice();
$vehicle->numOfDoors();
$vehicle->drive();

?>
            <?php echo $vehicle; ?>
    </body>
</html>
