<?php
$table = [
    1 => ['normal' => [31, 12, 26, 4], 'leap' => [31, 13, 27, 5]],
    2 => ['normal' => [28, 7, 26, 9], 'leap' => [29, 7, 26, 9]],
    3 => [31, 22, 23, 11],
    4 => [30, 15, 21, 14],
    5 => [31, 7, 18, 16],
    6 => [30, 0, 16, 19],
    7 => [31, 15, 13, 21],
    8 => [31, 7, 10, 23],
    9 => [30, 0, 8, 26],
    10 => [31, 15, 5, 28],
    11 => [30, 8, 3, 31],
    12 => [31, 0, 0, 0],
];

function get_month_numbers($month, $year){
    global $table;
    $is_leap_year = ((($year % 4) == 0 && ($year % 100) != 0) || ($year % 400) == 0);
    if ($month == 1 || $month == 2) {
        $values = $is_leap_year ? $table[$month]['leap'] : $table[$month]['normal'];
    } else {
        $values = $table[$month];
    }
    return $values;


}