<?php

abstract class technique {
abstract public function Run();
abstract public function specAction();
}

class Car extends technique {
    public function Run(){
        echo 'Машина поехала'."\r\n";
    }
    public function specAction(){
        echo 'Закись азота';
    }
}
class Tanks extends technique {
    public function Run(){
        echo 'Танк поехал'."\r\n";
    }
    public function specAction(){
        echo 'Выстрел из пушки';
    }
}
class specEquip extends technique {
    public function Run(){
        echo 'Бульдозер поехал'."\r\n";
    }
    public function specAction(){
        echo 'Ковш поднят';
    }
}
$car = new Car();
function enginery(technique $car) {
    $car->Run();
    $car->specAction();
  }
enginery($car);