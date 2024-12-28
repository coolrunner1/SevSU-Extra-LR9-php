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
            echo "Not an array!"."\n";
            return null;
        }

        if (empty($array)) {
            echo 'Array is empty!'."\n";
            return null;
        }

        $map = array();
        $duplicateNumbers = array();

        foreach ($array as $number) {
            if (!is_numeric($number)) {
                echo 'Array contains invalid elements!'."\n";
                return null;
            }

            $map[$number] = !array_key_exists($number, $map) ? 1 : $map[$number]+1;
            if ($map[$number] > 1 && !in_array($number, $duplicateNumbers)) {
                array_push($duplicateNumbers, $number);
            }
        }

        asort($duplicateNumbers);
        return sizeof($duplicateNumbers) < 1 ? "false"."\n" : "true: [".implode(", ", $duplicateNumbers)."]\n";
    }



    echo checkArrayDuplicates([5, 3, 9, 1, 6]);
    echo checkArrayDuplicates([5, 3, 2, 1, 6, 2, 4, 5]);
    echo checkArrayDuplicates([1, 6, 6, 2, 3, 4, 2, 5, 5]);
?>