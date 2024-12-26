<?php
    /*
    8. Поиск факториала числа
    Напишите функцию для нахождения факториала числа, используя рекурсию.
    
    Пример:
    Вход: 5
    Выход: 120
    */
    function factorialCalculate($number) {
        if ($number == 1) {
            return $number;
        }
        return $number * factorialCalculate($number-1);
    }

    function factorial($number) {
        if (!is_integer($number)) {
            return "Not an integer!";
        }

        return factorialCalculate($number);
    }
    
    echo factorial(2)."\n";
    echo factorial(3)."\n";
    echo factorial(5)."\n";
    echo factorial(10)."\n";
    echo factorial(10.1)."\n";
?>