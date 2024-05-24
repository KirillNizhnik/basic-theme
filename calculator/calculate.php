<?php

$STATIC_MOON = 23;
$STATIC_GROUND = 28;
$STATIC_SUN = 33;



function calculate ($day, $month, $year, $handedness){
    $year_number_list = get_year_numbers($year);
    $month_number_list = get_month_numbers((int)$month, $year);
    $day_in_month = $month_number_list[0];
    $month_number_list = [$month_number_list[1], $month_number_list[2], $month_number_list[3]];
    $dayMinusDayBirthDay = $day_in_month - $day;
    $baseNumsPlus1 = $year_number_list[0] + $month_number_list[0] + $dayMinusDayBirthDay;
    $baseNumsPlus2 = $year_number_list[1] + $month_number_list[1] + $dayMinusDayBirthDay;
    $baseNumsPlus3 = $year_number_list[2] + $month_number_list[2] + $dayMinusDayBirthDay;
    global $STATIC_MOON;
    global $STATIC_GROUND;
    global $STATIC_SUN;
    if ($baseNumsPlus1 > $STATIC_MOON){
        $baseNumsPlus1 = $baseNumsPlus1-$STATIC_MOON;
    }
    if ($baseNumsPlus2 > $STATIC_GROUND){
        $baseNumsPlus2 = $baseNumsPlus2-$STATIC_GROUND;
    }
    if ($baseNumsPlus3 > $STATIC_SUN){
        $baseNumsPlus3 = $baseNumsPlus3-$STATIC_SUN;
    }
    $array1Table3 = get_physical_data($baseNumsPlus1);
    $array2Table3 = get_em_data($baseNumsPlus2);
    $array3Table3 = get_in_data($baseNumsPlus3);
    $stringNums1 = $array1Table3[0];
    $stringNums2 = $array2Table3[0];
    $stringNums3 = $array3Table3[0];
    //percent
    $numbers = explode("-", $stringNums1);
    $muladhara = (int)$numbers[0];
    $svadhistana= (int)$numbers[1];
    $numbers = explode("-", $stringNums2);
    $manipura = (int)$numbers[0];
    $anahata= (int)$numbers[1];
    $numbers = explode("-", $stringNums3);
    $vishudha = (int)$numbers[0];
    $ajna = (int)$numbers[1];
    $sahasrara = ($muladhara + $svadhistana + $manipura + $anahata + $vishudha + $ajna) / 6;
    $sahasrara = ceil($sahasrara);

    //react_type
    $react_type = get_type($baseNumsPlus2);

    //intuition logic
    if ($handedness === 'right'){
        $logic = $manipura + $ajna;
        $intuition = $anahata + $vishudha;

    }elseif($handedness === 'left'){
        $logic = $manipura + $vishudha;
        $intuition = $anahata + $ajna;
    }

    //Yin Yang
    $yin = $svadhistana + $manipura + $anahata;
    $yang = $muladhara + $vishudha + $ajna;

    //want, i can
    $want = get_want($yin, $yang);
    $i_can = $muladhara;

    //energy potential
    $energy_potential = $want * $i_can;

    //Type
    $typology = calculateDateValue($day, $month, $year);

    //code
    $code = calculateCodeAndTypology($day, $month, $year, $typology);
    dd($code);
    return $react_type;
}

function  get_want($yin, $yang){
    if ($yin > $yang){
        return $yin - $yang;
    }else{
        return $yang - $yin;
    }
}


function calculateDateValue($day, $month, $year) {
    $date = strval($day) . strval($month) . strval($year);

    $sum = 0;

    for ($i = 0; $i < strlen($date); $i++) {
        $sum += intval($date[$i]); // Преобразуем символ в целое число и добавляем к сумме
    }

    while ($sum > 9) {
        $temp = strval($sum);
        $sum = 0;
        for ($i = 0; $i < strlen($temp); $i++) {
            $sum += intval($temp[$i]);
        }
    }

    return $sum;
}

function calculateCodeAndTypology($day, $month, $year, $typology) {
    $step1 = $day * $month * $year;

    $step2 = $day + $month;

    $step3 = $step2 + $typology; // Добавляем 4 к каждому числу

    $step3_day = adjustToSingleDigit($day + $typology);
    $step3_month = adjustToSingleDigit($month + $typology);
    $step3_year = adjustToSingleDigit($year + $typology);

    $period_code = $step3_day . "/" . $step3_month . "/" . $step3_year;

    $typology = adjustToSingleDigit($step3);

    return array('period_code' => $period_code, 'typology' => $typology);
}

function adjustToSingleDigit($number) {
    $numberStr = strval($number);
    $sum = 0;
    for ($i = 0; $i < strlen($numberStr); $i++) {
        $sum += intval($numberStr[$i]);
    }
    while ($sum > 9) {
        $temp = strval($sum);
        $sum = 0;
        for ($i = 0; $i < strlen($temp); $i++) {
            $sum += intval($temp[$i]);
        }
    }
    return $sum;
}

