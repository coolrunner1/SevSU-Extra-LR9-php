<?php
    /*
    7. Сортировка пузырьком
    Реализуйте алгоритм сортировки пузырьком для массива чисел.
    
    Пример:
    Вход: [64, 34, 25, 12, 22, 11, 90]
    Выход: [11, 12, 22, 25, 34, 64, 90]
    */
    function bubbleSort($array) {
        if(!is_array($array)) {
            echo "Not an array!"."\n";
            return null;
        }

        if (empty($array)) {
            echo 'Array is empty!'."\n";
            return null;
        }

        for ($i = 0; $i < sizeof($array)-2; $i++) {
            for ($j = 0; $j < sizeof($array)-$i-1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j+1];
                    $array[$j+1] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }
    
    echo "[".implode(", ", bubbleSort([-64, 34, 25, 12, 22, 11, 90]))."]\n";
    echo "[".implode(", ", bubbleSort([1, 2, 3, 4, 2, 5, 5]))."]\n";
    echo "[".implode(", ", bubbleSort([5, 3, 9, 1, 6]))."]\n";
    echo "[".implode(", ", bubbleSort([1, 1, 1, 1, 1]))."]\n";
?>