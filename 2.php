<?php
    /*
    2. Палиндром
    Напишите функцию, которая проверяет, является ли строка палиндромом (читается одинаково слева направо и справа налево).

    Пример:
    Вход: "racecar"
    Выход: true
    */
    function checkIfPalindrome($string) {
        if (!is_string($string)) {
            echo "Not a string!"."\n";
            return false;
        }

        if ($string == strrev($string)) {
            return true;
        }
        return false;
    }

    function booleanToString($bool) {
        return ($bool ? 'true' : 'false')."\n";
    }

    echo booleanToString(checkIfPalindrome('3823'));
    echo booleanToString(checkIfPalindrome('test'));
    echo booleanToString(checkIfPalindrome('racecar'));
    echo booleanToString(checkIfPalindrome('9779'));
?>