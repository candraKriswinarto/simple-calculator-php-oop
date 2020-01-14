<?php 

class Calc {
  private $oper;
  private $num1;
  private $num2;

  public function __construct($oper, $num1, $num2) {
    $this->oper = $oper;
    $this->num1 = $num1;
    $this->num2 = $num2;
  }

  public function calculator() {
    switch($this->oper) {
      case 'add':
        return $result = $this->num1 + $this->num2;
        break;
      case 'sub':
        return $result = $this->num1 - $this->num2;
        break;
      case 'div':
        return $result = $this->num1 / $this->num2;
        break;
      case 'mul':
        return $result = $this->num1 * $this->num2;
        break;
      default:
        echo "Error!";
        break;
    }
  }
}