<?php
    /*
    5. Реверс строки
    Напишите функцию, которая принимает строку и возвращает её в обратном порядке.

    Пример:
    Вход: "hello"
    Выход: "olleh"
    */
    function reverseString($string) {
        if (!is_string($string)) {
            echo "Not a string!"."\n";
            return null;
        }

        $reversedString = "";
        for ($i = strlen($string)-1; $i >= 0; $i--) {
            $reversedString = $reversedString."".$string[$i];
        }

        return $reversedString;
    }

    echo reverseString('3823')."\n";
    echo reverseString('test')."\n";
    echo reverseString('racecar')."\n";
    echo reverseString('9779')."\n";
    echo reverseString('hello')."\n";
?>