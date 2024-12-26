<?php
    /*
    6. Поиск дубликатов в массиве
    Напишите функцию, которая проверяет, есть ли в массиве дубликаты.

    Пример:
    Вход: [1, 2, 3, 4, 2, 5, 5]
    Выход: true: [2, 5]
    */
    function checkArrayDuplicates($array) {
        if(!is_array($array)) {
            return "Not an array!";
        }

        if (empty($array)) {
            return 'Array is empty!';
        }

        $map = array();

        foreach ($array as $number) {
            if (!is_numeric($number)) {
                return 'Array contains invalid elements!';
            }

            $map[$number] = !array_key_exists($number, $map) ? 1 : $map[$number]+1;
            if ($map[$number] > 1) {
                return true;
            }
        }

        return false;
    }

    function booleanToString($bool) {
        return ($bool ? 'true' : 'false')."\n";
    }
    
    echo booleanToString(checkArrayDuplicates([5, 3, 9, 1, 6]));
    echo booleanToString(checkArrayDuplicates([5, 3, 5, 1, 6]));
    echo booleanToString(checkArrayDuplicates([5, 3, 2, 1, 6, 2, 4, 5]));
    echo booleanToString(checkArrayDuplicates([1, 2, 3, 4, 2, 5, 5]));
?>