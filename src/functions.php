<?php


function task1($array, $second = true)
{
    if ($second) {
        $info = "<p>" . implode("</p><p>", $array) . "</p>"; // Вывести значение масива в отдельных параграфах
        echo $info;
    } else {
        $info = implode(" ", $array); // Вывести значение масива в одну строку
        return $info;
    }
}

function task2(...$args)
{
    $operator = array_shift($args);
    switch ($operator) {
        case '-': // Вычетание
            echo implode($operator, $args) . ' = ';
            $first_number = array_shift($args);
            foreach ($args as $var) {
                $first_number -= $var;
            }
            echo $first_number;
            break;
        case '+': // Сложение
            echo implode($operator, $args) . ' = ';
            $first_number = array_shift($args);
            foreach ($args as $var) {
                $first_number += $var;
            }
            echo $first_number;
            break;
        case '*': // Умножение
            echo implode($operator, $args) . ' = ';
            $first_number = array_shift($args);
            foreach ($args as $var) {
                $first_number *= $var;
            }
            echo $first_number;
            break;
        case '/': // Деление
            if (in_array(0, $args, true)) {  // Запрет деления на 0
                echo "Ноль и на ноль делить нельзя, введите другие значения";
                break;
            } else {
                echo implode($operator, $args) . ' = '; // Если аргумент не равен 0
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
    if ($rows < 1 || $cols < 1) { // ПРоверка на целые числа
        echo "Ошибка";
    } else {
        echo $table = '<table border="1">'; // Начало таблицы
        for ($tr = 1; $tr <= $rows; $tr++) {
            $table .= '<tr>'; // Начало строки
            for ($td = 1; $td <= $cols; $td++) {
                $table .= '<td>' . $tr * $td . '</td>'; // Произведение, формирующее значение ячейки
            }
        }

        $table .= '</tr>'; // Конец строки

        $table .= '</table>'; // Конец таблицы
        echo $table;
    }
}

function task4()
{
    echo date('d.m.Y H:i'); // Текущая дата и время
    echo "<br />";
    echo mktime(00,00,00, 02, 24, 2016); // 24.02.2016 00:00:00 в формате unixtime
}


function task5()
{
    $karl = "Карл у Клары украл Кораллы<br/>";
    echo str_replace('К', '', "$karl"); //Убираем заглавные К
    $botle = "Две бутылки лимонада";
    echo str_replace('Две', 'Три', "$botle"); // Меняем Два на Три
}
function task6()
{
    $data = "Hello again!";
    file_put_contents('test.txt', $data);
    echo file_get_contents('test.txt');
}
