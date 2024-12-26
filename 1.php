<?php
    /*
    1. Поиск максимального элемента в массиве
    Напишите функцию, которая принимает массив чисел и возвращает наибольшее значение из него.
    
    Пример:
    Вход: [5, 3, 9, 1, 6]
    Выход: 9
    */

    function greatestNumber($array) {
        if(!is_array($array)) {
            return "Not an array!";
        }

        if (empty($array)) {
            return 'Array is empty!';
        }

        $max = null;

        foreach ($array as $number) {
            if (!is_numeric($number)) {
                return 'Array contains invalid elements!';
            }

            if ($number > $max) {
                $max = $number;
            }
        }


        return $max;
    }

    echo greatestNumber([])."\n";;
    echo greatestNumber([1, 'string', 2])."\n";;
    echo greatestNumber([5, 3, 9, 1, 6])."\n";
?>