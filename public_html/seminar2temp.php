<?php
function getAdder($operand1) {
    return function ($operand2) use ($operand1) {
        return $operand1 + $operand2; };
}
$adder = getAdder(2); $result = $adder(3); echo $result;