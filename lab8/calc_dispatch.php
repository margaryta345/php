<?php

class Calc {
    public function add($x, $y) {
        return $x + $y;
    }

    public function subtract($x, $y) {
        return $x - $y;
    }

    public function multiply($x, $y) {
        return $x * $y;
    }

    public function divide($x, $y) {
        if ($y == 0) {
            return "Помилка: Ділення на нуль!";
        }
        return $x / $y;
    }

    public function modulo($x, $y) {
        if ($y == 0) {
            return "Помилка: Ділення на нуль!";
        }
        return $x % $y;
    }

    public function squareRoot($x) {
        if ($x < 0) {
            return "Помилка: Корінь з від'ємного числа!";
        }
        return sqrt($x);
    }

    public function power($x, $y) {
        return pow($x, $y);
    }
}

class Dispatcher {
    private $calculator;

    public function __construct($calculator) {
        $this->calculator = $calculator;
    }

    public function display($result) {
        echo "Результат: $result<br>";
    }
    

    public function dispatch($operation, ...$args) {
        switch ($operation) {
            case 'add':
                $result = $this->calculator->add(...$args);
                break;
            case 'subtract':
                $result = $this->calculator->subtract(...$args);
                break;
            case 'multiply':
                $result = $this->calculator->multiply(...$args);
                break;
            case 'divide':
                $result = $this->calculator->divide(...$args);
                break;
            case 'modulo':
                $result = $this->calculator->modulo(...$args);
                break;
            case 'square_root':
                $result = $this->calculator->squareRoot(...$args);
                break;
            case 'power':
                $result = $this->calculator->power(...$args);
                break;
            default:
                $result = "Невідома операція";
                break;
        }
        $this->display($result);
    }
}


$calculator = new Calc();
$dispatcher = new Dispatcher($calculator);

$dispatcher->dispatch('add', 5, 3);
$dispatcher->dispatch('subtract', 10, 4);
$dispatcher->dispatch('multiply', 6, 7);
$dispatcher->dispatch('divide', 20, 5);
$dispatcher->dispatch('modulo', 20, 3);
$dispatcher->dispatch('square_root', 25);
$dispatcher->dispatch('power', 2, 3);
