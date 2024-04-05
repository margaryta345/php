<?php

class Multy {
    private $number;
    public function __construct($number) {
        $this->number = $number;
    }
    public function multyTable() {
        $table .= "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $this->number * $i;
            $table .= "<tr><td>{$this->number} * $i</td><td>=</td><td>$result</td></tr>";
        }
        $table .= "</table>";
        return $table;
    }
}

$tableFirst = new Multy(2);
$tableSecond = new Multy(3);
echo $tableFirst->multyTable();
echo $tableSecond->multyTable();

