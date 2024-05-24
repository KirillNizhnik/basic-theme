<?php
$physical_data = [
    '1' => ['33-55', 'Сангвінік'],
    '2' => ['55-72', 'Сангвінік -Холерик'],
    '3' => ['15-65', 'Чуйкий Холерик'],
    '4' => ['50-72', 'Сангвінік -Холерик'],
    '5' => ['30-41', 'Меланхолік -Холерик'],
    '6' => ['75-21', 'Флегматик'],
    '7' => ['45-72', 'Сангвінік -Холерик'],
    '8' => ['60-22', 'Флегматик'],
    '9' => ['35-28', 'Меланхолік'],
    '10' => ['35-49', 'Сангвінік'],
    '11' => ['95-22', 'Флегматик'],
    '12' => ['30-99', 'Чуйкий Холерик'],
    '13' => ['40-61', 'Сангвінік'],
    '14' => ['20-55', 'Чуйкий Холерик'],
    '15' => ['40-28', 'Меланхолік'],
    '16' => ['90-21', 'Флегматик'],
    '17' => ['50-83', 'Сангвінік -Холерик'],
    '18' => ['10-45', 'Чуйкий Холерик'],
    '19' => ['99-55', 'Сангвінік -Флегматик'],
    '20' => ['30-52', 'Сангвінік'],
    '21' => ['20-79', 'Чуйкий Холерик'],
    '22' => ['80-63', 'Сангвінік -Флегматик'],
    '23' => ['25-51', 'Меланхолік-Холерик'],
];

$em_data = [
    '1' => ['69-95', 'Пристрасний'],
    '2' => ['75-27', 'Егоїстичний (лідерський)'],
    '3' => ['31-45', 'Емпатичний'],
    '4' => ['62-77', 'Пристрасний'],
    '5' => ['50-59', 'Емпатичний'],
    '6' => ['44-68', 'Емпатичний'],
    '7' => ['12-45', 'Самовідданий інтегративний'],
    '8' => ['06-23', 'Холодний'],
    '9' => ['81-54', 'Егоїстичний (лідерський)'],
    '10' => ['25-77', 'Самовідданий інтегративний'],
    '11' => ['18-50', 'Самовідданий інтегративний'],
    '12' => ['44-59', 'Емпатичний'],
    '13' => ['25-68', 'Самовідданий інтегративний'],
    '14' => ['50-77', 'Пристрасний'],
    '15' => ['50-99', 'Пристрасний'],
    '16' => ['50-36', 'Сентиментальний'],
    '17' => ['50-41', 'Сентиментальний'],
    '18' => ['31-14', 'Холодний'],
    '19' => ['99-54', 'Егоїстичний (лідерський)'],
    '20' => ['44-32', 'Сентиментальний'],
    '21' => ['62-41', 'Сентиментальний'],
    '22' => ['25-18', 'Холодний'],
    '23' => ['69-59', 'Егоїстичний (лідерський)'],
    '24' => ['56-41', 'Сентиментальний'],
    '25' => ['44-68', 'Емпатичний'],
    '26' => ['37-41', 'Холодний'],
    '27' => ['56-73', 'Пристрасний'],
    '28' => ['44-73', 'Емпатичний']
];

$in_data = [
    '1' => ['64-35', 'Гармонійний художній'],
    '2' => ['21-65', 'Дискретний'],
    '3' => ['21-65', 'Дискретний'],
    '4' => ['93-82', 'Зверхпродуктивний'],
    '5' => ['43-41', 'Гармонійний художній'],
    '6' => ['00-99', 'Дискретний'],
    '7' => ['57-88', 'Продуктивний розумовий'],
    '8' => ['07-41', 'Прикладний розумовий'],
    '9' => ['29-35', 'Прикладний змішаний'],
    '10' => ['86-35', 'Гармонійний художній'],
    '11' => ['29-82', 'Гармонійний розумовий'],
    '12' => ['86-41', 'Гармонійний художній'],
    '13' => ['14-71', 'Дискретний'],
    '14' => ['50-59', 'Продуктивний змішаний'],
    '15' => ['78-65', 'Продуктивний художній'],
    '16' => ['93-24', 'Аналоговий'],
    '17' => ['84-71', 'Продуктивний художній'],
    '18' => ['29-41', 'Прикладний змішаний'],
    '19' => ['26-71', 'Гармонійний розумовий'],
    '20' => ['99-82', 'Зверхпродуктивний'],
    '21' => ['07-76', 'Дискретний'],
    '22' => ['14-35', 'Прикладний розумовий'],
    '23' => ['50-65', 'Продуктивний змішаний'],
    '24' => ['26-18', 'Прикладний змішаний'],
    '25' => ['29-88', 'Гармонійний розумовий'],
    '26' => ['93-59', 'Продуктивний художній'],
    '27' => ['57-82', 'Продуктивний розумовий'],
    '28' => ['29-29', 'Прикладний змішаний'],
    '29' => ['29-88', 'Гармонійний розумовий'],
    '30' => ['71-47', 'Гармонійний художній'],
    '31' => ['07-35', 'Прикладний розумовий'],
    '32' => ['64-59', 'Продуктивний змішаний'],
    '33' => ['29-82', 'Гармонійний розумовий'],
];

function get_physical_data($number): array
{
    global $physical_data;
    return $physical_data[$number];

}

function get_em_data($number):array
{
    global $em_data;
    return $em_data[$number];
}
function get_in_data($number):array
{
    global $in_data;
    return $in_data[$number];
}