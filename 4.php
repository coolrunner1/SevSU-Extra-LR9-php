<?php
    /*
    4. Поиск второго по величине числа в массиве
    Напишите функцию, которая находит второе по величине число в массиве. Если такого числа нет, функция должна возвращать null.

    Пример:
    Вход: [10, 20, 4, 45, 99]
    Выход: 45
    */
    function secondGreatestNumber($array) {
        if(!is_array($array)) {
            echo "Not an array!"."\n";
            return null;
        }

        if (empty($array)) {
            echo 'Array is empty!'."\n";
            return null;
        }

        $prevMax = null;
        $max = null;

        foreach ($array as $number) {
            if (!is_numeric($number)) {
                echo 'Array contains invalid elements!'."\n";
                return false;
            }

            if ($number > $max) {
                $max = $number;
            }
        }

        foreach ($array as $number) {
            if ($number > $prevMax && $number < $max) {
                $prevMax = $number;
            }
        }


        return $prevMax;
    }

    echo secondGreatestNumber([])."\n";
    echo secondGreatestNumber([1, 'string', 2])."\n";
    echo secondGreatestNumber([5, 3, 9, 1, 6])."\n";
    echo secondGreatestNumber([10, 20, 4, 45, 99])."\n";
    echo secondGreatestNumber([10, 10])."\n";
?>