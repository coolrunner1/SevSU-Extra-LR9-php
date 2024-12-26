<?php
    /*
    9. Генерация массива Фибоначчи
    Напишите функцию, которая генерирует массив из первых n чисел Фибоначчи.

    Пример:
    Вход: 7
    Выход: [0, 1, 1, 2, 3, 5, 8]
    */
    function generateFibonacci($n) {
        if (!is_integer($n)) {
            return "Not an integer!";
        }

        if ($n < 1) {
            return "Number has to be greater than 0";
        } else if ($n == 1) {
            return [0];
        } else if ($n == 2) {
            return [0, 1];
        }

        $fibonacciArray = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fibonacciArray[$i] = $fibonacciArray[$i-2] + $fibonacciArray[$i-1];
        }

        return $fibonacciArray;
    }


    echo "[".implode(", ", generateFibonacci(2))."]\n";
    echo "[".implode(", ", generateFibonacci(3))."]\n";
    echo "[".implode(", ", generateFibonacci(7))."]\n";
    echo "[".implode(", ", generateFibonacci(10))."]\n";
?>