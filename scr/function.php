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
function task2(...$args)
{
    $operator = array_shift($args);
    echo implode($operator, $args) . ' = ';
    $first_number = array_shift($args);
    foreach ($args as $var) {
        switch ($operator) {
            case '-':
                $first_number -= $var;
                break;
            case '+':
                $first_number += $var;
                break;
            case '*':
                $first_number *= $var;
                break;
            case '/':
                $first_number /= $var;
                break;
        }
    }
    echo $first_number;
}
echo task2('*', 3, 2, 10, 5.4);

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

echo "<br/>";
echo "<br/>Функция 4";
echo "<br/>";
function task4()
{
    echo date('d.m.Y H:i');
    echo "<br/>";
    echo mktime(00,00,00, 02, 24, 2016);
}
task4();
echo "<br/>";
echo "<br/>Функция 5";
echo "<br/>";
function task5()
{
    $karl = 'Карл у Клары украл Кораллы';
    echo str_replace('К', '', "$karl");
    echo "<br/>";
    $botle = 'Две бутылки лимонада';
    echo str_replace('Две', 'Три', "$botle");
}
task5();
echo "<br/>";
echo "<br/>Функция 6";
echo "<br/>";
function task6()
{
    $data = "Hello again!";
    file_put_contents('test.txt', $data);
    echo file_get_contents('test.txt');
}
task6();
