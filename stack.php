<?php
class CreateStack {
  public $top;
  public $stack = array();

  function __construct() {
    $this->top = -1;
  }

  // create a function to check whether 
  // the stack is empty or not  
  public function isEmpty() {
    if($this->top == -1) {
      echo "Stack is empty. \n";
    } else {
      echo "Stack is not empty. \n";
    }
  }

  //create a function to return size of the stack 
  public function size() { 
     return $this->top+1;
  }

  //create a function to add new element 
  public function push($x) {
    $this->stack[++$this->top] = $x;
    echo $x." is added into the stack. \n"; 
  }

  //create a function to delete top element   
  public function pop() {
    if($this->top < 0){
      echo "Stack is empty. \n";
    } else {
      $x = $this->stack[$this->top--];
      echo $x." is deleted from the stack. \n";
    }    
  }

  public function topElement() {
    if($this->top < 0) {
      echo "Stack is empty. \n";
    } else {
      return $this->stack[$this->top];
    }
  }
}

// test the code 
$MyStack = new CreateStack();
$MyStack->push(10);
$MyStack->push(20);
$MyStack->push(30);
$MyStack->push(40);

$MyStack->pop();
$MyStack->isEmpty();
?>
