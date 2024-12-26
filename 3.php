<?php
    /*
    3. Подсчет гласных в строке
    Напишите функцию, которая подсчитывает количество гласных в строке.

    Пример:
    Вход: "Hello, World!"
    Выход: 3 (гласные: "e", "o", "o")
    */
    function isVowel($character) {
	    return in_array(strtolower($character), ["a", "e", "i", "o", "u"]);
    }

    function vowelsCount($string) {
        if (!is_string($string)) {
            return "Not a string!";
        }

        $count = 0;
        foreach (str_split($string) as $character) {
            if (isVowel($character)) {
                $count++;
            }
        }
        return $count;
    }

    echo vowelsCount("test")."\n";
    echo vowelsCount("tdsf")."\n";
    echo vowelsCount("Hello, world!")."\n";
?>