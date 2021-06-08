<?php
class person {
  //Object
  private $name;
  private $city;
  //Cunstruct Function
  function __construct($name, $city) {
    $this->name = $name;
    $this->city = $city;
    echo $this->name." lives in ".$this->city.".\n";   
  }
  //Destruct Function
  function __destruct() {
    echo "Destructor invoked for: ".$this->name."\n";
  }   
};

$p1 = new person('John', 'London');
$p2 = new person('Marry', 'New York');
?>
