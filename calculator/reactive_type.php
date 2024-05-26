<?php

$data_hz = [
    1 => ["Маркер" => 1, "Эмоциональный тип реактивности" => "Зверхенергійний", "Я" => 59.5, "Мы" => 97],
    2 => ["Маркер" => 2, "Эмоциональный тип реактивности" => "Пристрасний Адаптивний Егоїстичний", "Я" => 85, "Мы" => 45],
    3 => ["Маркер" => 3, "Эмоциональный тип реактивности" => "Середньореактивний", "Я" => 48, "Мы" => 39.6],
    4 => ["Маркер" => 4, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1],
    5 => ["Маркер" => 5, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1],
    6 => ["Маркер" => 6, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1],
    7 => ["Маркер" => 7, "Эмоциональный тип реактивности" => "Самовідданий Інтегративний", "Я" => 20, "Мы" => 60],
    8 => ["Маркер" => 8, "Эмоциональный тип реактивности" => "Холодний", "Я" => 20.7, "Мы" => 18.3],
    9 => ["Маркер" => 9, "Эмоциональный тип реактивности" => "Пристрасний Адаптивний Егоїстичний", "Я" => 85, "Мы" => 45],
    10 => ["Маркер" => 10, "Эмоциональный тип реактивности" => "Самовідданий Інтегративний", "Я" => 20, "Мы" => 60],
    11 => ["Маркер" => 11, "Эмоциональный тип реактивности" => "Самовідданий Інтегративний", "Я" => 20, "Мы" => 60],
    12 => ["Маркер" => 12, "Эмоциональный тип реактивности" => "Энергичный", "Я" => 51.4, "Мы" => 68.1],
    13 => ["Маркер" => 13, "Эмоциональный тип реактивности" => "Самоотверженный Интегративный", "Я" => 20, "Мы" => 60],
    14 => ["Маркер" => 14, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1],
    15 => ["Маркер" => 15, "Эмоциональный тип реактивности" => "Зверхенергійний", "Я" => 59.5, "Мы" => 97],
    16 => ["Маркер" => 16, "Эмоциональный тип реактивности" => "Середньореактивний", "Я" => 48, "Мы" => 39.6],
    17 => ["Маркер" => 17, "Эмоциональный тип реактивности" => "Середньореактивний", "Я" => 48, "Мы" => 39.6],
    18 => ["Маркер" => 18, "Эмоциональный тип реактивности" => "Холодний", "Я" => 20.7, "Мы" => 18.3],
    19 => ["Маркер" => 19, "Эмоциональный тип реактивности" => "Пристрасний Адаптивний Егоїстичний", "Я" => 85, "Мы" => 45],
    20 => ["Маркер" => 20, "Эмоциональный тип реактивности" => "Середньореактивний", "Я" => 48, "Мы" => 39.6],
    21 => ["Маркер" => 21, "Эмоциональный тип реактивности" => "Середньореактивний", "Я" => 48, "Мы" => 39.6],
    22 => ["Маркер" => 22, "Эмоциональный тип реактивности" => "Холодний", "Я" => 20.7, "Мы" => 18.3],
    23 => ["Маркер" => 23, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1],
    24 => ["Маркер" => 24, "Эмоциональный тип реактивности" => "Середньореактивний", "Я" => 48, "Мы" => 39.6],
    25 => ["Маркер" => 25, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1],
    26 => ["Маркер" => 26, "Эмоциональный тип реактивности" => "Середньореактивний", "Я" => 48, "Мы" => 39.6],
    27 => ["Маркер" => 27, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1],
    28 => ["Маркер" => 28, "Эмоциональный тип реактивности" => "Енергійний", "Я" => 51.4, "Мы" => 68.1]
];

function get_type($num): array
{
    global $data_hz;
    return $data_hz[$num];
}

