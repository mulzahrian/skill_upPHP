<?php
class person {
  private $name;
  private $city;
  function __construct($name, $city) {
    $this->name = $name;
    $this->city = $city;
    echo $this->name." lives in ".$this->city.".\n";   
  }
  function __destruct() {
    echo "Destructor invoked for: ".$this->name."\n";
  }   
};

$p1 = new person('John', 'London');
$p2 = new person('Marry', 'New York');
?>
