<?php

abstract class technique {
abstract public function Run();
}

class Car extends technique {
    public function Run(){
        echo 'Машина поехала';
    }
}
class Tanks extends technique {
    public function Run(){
        echo 'Танк поехал';
    }
}
class specEquip extends technique {
    public function Run(){
        echo 'Бульдозер поехал';
    }
}
$car = new Car();
function enginery(technique $car) {
    $car->Run();
  }
enginery($car);