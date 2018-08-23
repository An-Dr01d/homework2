<?php

echo "<br/>Функция 1";
echo "<br/>";
$array = array('имя', 'почта', 'телефон');
function task1($array, $second = true)
{
    if ($second == false) {
        $masseffect = implode(" ", $array);
        echo $masseffect;
    } else {
        $masseffect = implode("<p> </p>", $array);
        return $masseffect;
    }
}
echo task1($array, $second = true);
echo "<br/>";
echo "<br/>Функция 2";
echo "<br/>";
function task2(...$args) // Добавляем для первого аргумента переменную
{
    $operator = array_shift($args);
    echo implode($args, $operator) . ' = ';
    $score = 0; // Переменная, которая помогает избежать проблем при вычислении
    foreach ($args as $key => $v) {
        if ($score > 1) { // Условия, для исключения вычислений с первым символом
            switch ($operator) {
                case '-':
                    $score -= $v;
                    break;
                case '+':
                    $score += $v;
                    break;
                case '*':
                    $score *= $v;
                    break;
                case '/':
                    $score /= $v;
                    break;
            }
        } else {
            $score = $v;
        }
    }
    echo $score;
}
echo task2('-', 2, 2, 10, 5.4);
echo "<br/>";
echo "<br/>Функция 3";
echo "<br/>";
function task3($rows, $cols)
{
    if ($rows < 1 || $cols < 1) {
        echo "Ошибка";
    } else {
        echo $table = '<table border="1">';
        for ($tr = 1; $tr <= $rows; $tr++) {
            $table .= '<tr>';
            for ($td = 1; $td <= $cols; $td++) {
                $table .= '<td>' . $tr * $td . '</td>';
            }
        }

        $table .= '</tr>';

        $table .= '</table>';
        echo $table;
    }
}
task3(-8, 8);

echo "<br/>";
