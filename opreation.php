<?php

include "receive.php";

class opreation extends receive
{
    public function sum()
    {
        return $this->num1+$this->num2+$this->num3;
    }
    public function multiply()
    {
        return $this->num1*$this->num2*$this->num3;
    }
    public function average()
    {
        return ($this->num1+$this->num2+$this->num3)/3;
    }
}
