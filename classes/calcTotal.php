<?php

class CalcTotal {
    public $totalAmount;

    function calcTotal(){
        for($index = 0; $index < count($_SESSION['amount']); $index++){
            $this->totalAmount += $_SESSION['amount'][$index];
        }
        return print('Total = '. $this->totalAmount);
    }
}