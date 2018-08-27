<?php

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

function task2(...$args)
{
    $operator = array_shift($args);
    switch ($operator) {
        case '-':
            echo implode($operator, $args) . ' = ';
            $first_number = array_shift($args);
            foreach ($args as $var) {
                $first_number -= $var;
            }
            echo $first_number;
            break;
        case '+':
            echo implode($operator, $args) . ' = ';
            $first_number = array_shift($args);
            foreach ($args as $var) {
                $first_number += $var;
            }
            echo $first_number;
            break;
        case '*':
            echo implode($operator, $args) . ' = ';
            $first_number = array_shift($args);
            foreach ($args as $var) {
                $first_number *= $var;
            }
            echo $first_number;
            break;
        case '/':
            if (in_array(0, $args, true)) {
                echo "Ноль и на ноль делить нельзя, введите другие значения";
                break;
            } else {
                echo implode($operator, $args) . ' = ';
                $first_number = array_shift($args);
                foreach ($args as $var) {
                    $first_number/= $var;
                }
                echo $first_number;
                break;
            }
    }
}

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

function task4()
{
    echo date('d.m.Y H:i');
    echo "<br />";
    echo mktime(00,00,00, 02, 24, 2016);
}


function task5()
{
    $karl = "Карл у Клары украл Кораллы<br/>";
    echo str_replace('К', '', "$karl");
    $botle = "Две бутылки лимонада";
    echo str_replace('Две', 'Три', "$botle");
}
function task6()
{
    $data = "Hello again!";
    file_put_contents('test.txt', $data);
    echo file_get_contents('test.txt');
}
