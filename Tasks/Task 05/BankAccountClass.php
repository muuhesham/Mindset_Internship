<?php

class BankAccount {
    #properties
    public $accountNumber;
    public $balance;

    function __construct($acc, $bblance){
        echo "accountNumber: ".$this->accountNumber=$acc; echo "<br>";
        echo "Balance: ".$this->balance=$bblance; echo "<br>";
    }
    #methods
    function deposit (int $cash){ 
        $this->balance += $cash;
        return "The Balance after deposite: ".$this->balance;
    }
    function withdraw (int $cash){ 
        $this->balance -= $cash;
        return "The Balance after withdraw: ".$this->balance;
    }
}

$bank = new BankAccount("21",300);
echo $bank->deposit(400);
