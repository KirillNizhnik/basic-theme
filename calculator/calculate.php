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
    while($baseNumsPlus1 > $STATIC_MOON) {
            $baseNumsPlus1 = $baseNumsPlus1 - $STATIC_MOON;
    }
    while($baseNumsPlus2 > $STATIC_GROUND){
        $baseNumsPlus2 = $baseNumsPlus2-$STATIC_GROUND;
    }
    while ($baseNumsPlus3 > $STATIC_SUN){
        $baseNumsPlus3 = $baseNumsPlus3-$STATIC_SUN;
    }
    $array1Table3 = get_physical_data($baseNumsPlus1);
    $array2Table3 = get_em_data($baseNumsPlus2);
    $array3Table3 = get_in_data($baseNumsPlus3);
//    dd($array1Table3);
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
    $code = calculateCodeAndTask($day, $month, $year, $typology);
    //fin code
    $fin_code = $muladhara * $manipura;
    $code1 = $code['code1'];
    $code2 = $code['code2'];
    $html = '<section class="calculator-response" id="calculator-response">
        <div class="container">
            <div class="calculator-response-inner" id="response">
                <div class="calculator-response-user-info">
                    <div class="calculator-response-user-info-date-birth">
                        Дата нарождения: ' . $day . '-' . $month . '-' . $year . '
                    </div>
                    <div class="calculator-response-user-info-age">
                        Вік: ' . (date('Y') - $year) . '
                    </div>
                </div>
                <div class="calculator-response-columns">
                    <div class="calculator-response-chacroanalysis">
                        <h3 class="calculator-response-chacroanalysis-title">
                            Чакроаналіз
                        </h3>
                        <ul class="calculator-response-chacroanalysis-list">
                            <li class="calculator-response-chacroanalysis-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/1.png" alt=""
                                     class="calculator-response-chacroanalysis-item-img">
                                <div class="calculator-response-chacroanalysis-item-text">
                                    Сахасрара
                                </div>
                                <div class="calculator-response-chacroanalysis-item-percent">
                                    ' . $sahasrara . '%
                                </div>
                            </li>
                            <li class="calculator-response-chacroanalysis-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/2.png" alt=""
                                     class="calculator-response-chacroanalysis-item-img">
                                <div class="calculator-response-chacroanalysis-item-text">
                                    Aджна
                                </div>
                                <div class="calculator-response-chacroanalysis-item-percent">
                                    ' . $ajna . '%
                                </div>
                            </li>
                            <li class="calculator-response-chacroanalysis-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/3.png" alt=""
                                     class="calculator-response-chacroanalysis-item-img">
                                <div class="calculator-response-chacroanalysis-item-text">
                                    Вішудха
                                </div>
                                <div class="calculator-response-chacroanalysis-item-percent">
                                    ' . $vishudha . '%
                                </div>
                            </li>
                            <li class="calculator-response-chacroanalysis-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/4.png" alt=""
                                     class="calculator-response-chacroanalysis-item-img">
                                <div class="calculator-response-chacroanalysis-item-text">
                                    Анахата
                                </div>
                                <div class="calculator-response-chacroanalysis-item-percent">
                                    ' . $anahata . '%
                                </div>
                            </li>
                            <li class="calculator-response-chacroanalysis-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/5.png" alt=""
                                     class="calculator-response-chacroanalysis-item-img">
                                <div class="calculator-response-chacroanalysis-item-text">
                                    Маніпура
                                </div>
                                <div class="calculator-response-chacroanalysis-item-percent">
                                    ' . $manipura . '%
                                </div>
                            </li>
                            <li class="calculator-response-chacroanalysis-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/6.png" alt=""
                                     class="calculator-response-chacroanalysis-item-img">
                                <div class="calculator-response-chacroanalysis-item-text">
                                    Свадхістана
                                </div>
                                <div class="calculator-response-chacroanalysis-item-percent">
                                    ' . $svadhistana . '%
                                </div>
                            </li>
                            <li class="calculator-response-chacroanalysis-item">
                                <img src="' . get_template_directory_uri() . '/assets/images/7.png" alt=""
                                     class="calculator-response-chacroanalysis-item-img">
                                <div class="calculator-response-chacroanalysis-item-text">
                                    Муладхара
                                </div>
                                <div class="calculator-response-chacroanalysis-item-percent">
                                    ' . $muladhara . '%
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="calculator-response-two-columns">
                        <div class="calculator-response-contour-of-specialness">
                            <h3 class="calculator-response-contour-of-specialness-title">Контури</h3>
                            <ul class="calculator-response-contour-of-specialness-list">
                                <li class="calculator-response-contour-of-specialness-item">
                                    <div class="calculator-response-contour-of-specialness-item-title">
                                        Темперамент:
                                    </div>
                                    <div class="calculator-response-contour-of-specialness-item-descr">
                                        ' . $array1Table3[1] . '
                                    </div>
                                </li>
                                <li class="calculator-response-contour-of-specialness-item">
                                    <div class="calculator-response-contour-of-specialness-item-title">
                                        Характер:
                                    </div>
                                    <div class="calculator-response-contour-of-specialness-item-descr">
                                        ' . $array2Table3[1] . '
                                    </div>
                                </li>
                                <li class="calculator-response-contour-of-specialness-item">
                                    <div class="calculator-response-contour-of-specialness-item-title">
                                        Інтелект:
                                    </div>
                                    <div class="calculator-response-contour-of-specialness-item-descr">
                                        ' . $array3Table3[1] . '
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="calculator-response-typology-of-specialness">
                            <div class="calculator-response-typology-of-specialness-descr">
                                ' . $typology . ' типологія
                            </div>
                        </div>
                        <div class="calculator-response-womans-and-mans-cob">
                            <h3 class="calculator-response-womans-and-mans-title">
                                Жіноча та чоловіча енергія
                            </h3>
                            <div class="calculator-response-womans-and-mans-cob-con">
                                <div class="calculator-response-womans-and-mans-cob-in">
                                    Інь: ' . $yang . '
                                </div>
                                <div class="calculator-response-womans-and-mans-cob-an">
                                    Ян: ' . $yin . '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calculator-response-columns-2">
                    <div class="calculator-response-emotional-type">
                        <h3 class="calculator-response-emotional-type-title">
                            Емоціональний тип
                        </h3>
                        <div class="calculator-response-emotional-type-descr">
                            ' . $react_type["Эмоциональный тип реактивности"] . '
                        </div>
                        <div class="calculator-response-emotional-type-container">
                            <div class="calculator-response-emotional-type-1 calculator-response-emotional-types">
                                Я: ' . $react_type["Я"] . '

                            </div>
                            <div class="calculator-response-emotional-type-2 calculator-response-emotional-types">
                                Ми: ' . $react_type["Мы"] . '
                            </div>
                        </div>
                    </div>
                    <div class="calculator-response-the-power-of-energy">
                        <h3 class="calculator-response-the-power-of-energy-title">
                            Сила енергетики
                        </h3>
                        <div class="calculator-response-the-power-of-energy-container">
                            <div class="calculator-response-the-power-of-energy-container-want">
                                Хочу <span>' . $want . '</span>
                            </div>
                            <div class="calculator-response-the-power-of-energy-container-i-can">
                                Можу <span>' . $i_can . '</span>
                            </div>
                        </div>
                        <div class="sexual-potential">
                            Енергетичний потенціал
                            <span>' . $energy_potential . '</span>
                        </div>
                    </div>
                    <div class="calculator-response-emotional-type">
                        <div class="calculator-response-emotional-type-container new-con">
                            <div class="calculator-response-emotional-type-1 calculator-response-emotional-types">
                                Iнтуїція: ' . $intuition . '
                            </div>
                            <div class="calculator-response-emotional-type-2 calculator-response-emotional-types">
                                Логіка: ' . $logic . '
                            </div>
                        </div>
                    </div>
                </div>
                <div class="last-position">
                    <ul class="live-tasks">
                        <h3 class="">
                            Задачі
                        </h3>
                        <li class="live-task">
                            <div class="live-task-name">
                                Родова
                            </div>
                            <div class="live-task-descr">
                                 ' . $code['generic-task'] . '
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Карма минулого
                            </div>
                            <div class="live-task-descr">
                                ' . $code['carma-task'] . '
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Теперішня
                            </div>
                            <div class="live-task-descr">
                                ' . $code['present-task'] . '
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Батьківська
                            </div>
                            <div class="live-task-descr">
                                ' . $code['parent-task'] . '
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="calculator-response-periods-of-life">
                    <h3 class="calculator-response-periods-of-life-title">
                        Періоди життя
                    </h3>
                    <ul class="calculator-response-periods-of-life-list">
                        <li class="calculator-response-periods-of-life-item">
                            <div class="calculator-response-periods-of-life-item-periods">
                                до 12 років
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-1">
                                ' . $code1[2] . '
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-2">
                                ' . $code2[2] . '
                            </div>
                        </li>
                        <li class="calculator-response-periods-of-life-item">
                            <div class="calculator-response-periods-of-life-item-periods">
                                12-24 років
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-1">
                                ' . $code1[3] . '
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-2">
                                ' . $code2[3] . '
                            </div>
                        </li>
                        <li class="calculator-response-periods-of-life-item">
                            <div class="calculator-response-periods-of-life-item-periods">
                                24-36 років
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-1">
                                ' . $code1[4] . '
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-2">
                                ' . $code2[4] . '
                            </div>
                        </li>
                        <li class="calculator-response-periods-of-life-item">
                            <div class="calculator-response-periods-of-life-item-periods">
                                36-48 років
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-1">
                                ' . $code1[5] . '
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-2">
                                ' . $code2[5] . '
                            </div>
                        </li>
                        <li class="calculator-response-periods-of-life-item">
                            <div class="calculator-response-periods-of-life-item-periods">
                                48-60 років
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-1">
                                ' . $code1[6] . '
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-2">
                                ' . $code2[6] . '
                            </div>
                        </li>
                        <li class="calculator-response-periods-of-life-item">
                            <div class="calculator-response-periods-of-life-item-periods">
                                більше 60 років
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-1">
                                ' . $code1[7] . '
                            </div>
                            <div class="calculator-response-periods-of-life-item-num-2">
                                ' . $code2[7] . '
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="last-position live-position-1">
                    <ul class="live-tasks">
                        <li class="live-task">
                            <div class="live-task-name">
                                Потенціал душі
                            </div>
                            <div class="live-task-descr">
                                ' . $code['potential-soul'] . '
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Втілення душі
                            </div>
                            <div class="live-task-descr">
                                ' . $code['embodiment-soul'] . '
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Фінкод
                            </div>
                            <div class="live-task-descr">
                                ' . $fin_code . '
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Прогноз
                            </div>
                            <div class="live-task-descr">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>' .  $code1[1] . '/' . $code2[1] . '</th>
                                            <th>' .  $code1[2] . '/' . $code2[2] . '</th>
                                            <th>' .  $code1[3] . '/' . $code2[3] . '</th>
                                            <th>' .  $code1[4] . '/' . $code2[4] . '</th>
                                            <th>' .  $code1[5] . '/' . $code2[5] . '</th>
                                            <th>' .  $code1[6] . '/' . $code2[6] . '</th>
                                            <th>' .  $code1[7] . '/' . $code2[7] . '</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
        <td>' . intval($year) .  '</td>
        <td>' . (intval($year) + 1) .  '</td>
        <td>' . (intval($year) + 2) .  '</td>
        <td>' . (intval($year) + 3) .  '</td>
        <td>' . (intval($year) + 4) .  '</td>
        <td>' . (intval($year) + 5) .  '</td>
        <td>' . (intval($year) + 6) .  '</td>
    </tr>
    <tr>
        <td>' . (intval($year) + 7) .  '</td>
        <td>' . (intval($year) + 8) .  '</td>
        <td>' . (intval($year) + 9) .  '</td>
        <td>' . (intval($year) + 10) .  '</td>
        <td>' . (intval($year) + 11) .  '</td>
        <td>' . (intval($year) + 12) .  '</td>
        <td>' . (intval($year) + 13) .  '</td>
    </tr>
    <tr>
        <td>' . (intval($year) + 14) .  '</td>
        <td>' . (intval($year) + 15) .  '</td>
        <td>' . (intval($year) + 16) .  '</td>
        <td>' . (intval($year) + 17) .  '</td>
        <td>' . (intval($year) + 18) .  '</td>
        <td>' . (intval($year) + 19) .  '</td>
        <td>' . (intval($year) + 20) .  '</td>
    </tr>
    <tr>
        <td>' . (intval($year) + 21) .  '</td>
        <td>' . (intval($year) + 22) .  '</td>
        <td>' . (intval($year) + 23) .  '</td>
        <td>' . (intval($year) + 24) .  '</td>
        <td>' . (intval($year) + 25) .  '</td>
        <td>' . (intval($year) + 26) .  '</td>
        <td>' . (intval($year) + 27) .  '</td>
    </tr>
    <tr>
        <td>' . (intval($year) + 28) .  '</td>
        <td>' . (intval($year) + 29) .  '</td>
        <td>' . (intval($year) + 30) .  '</td>
        <td>' . (intval($year) + 31) .  '</td>
        <td>' . (intval($year) + 32) .  '</td>
        <td>' . (intval($year) + 33) .  '</td>
        <td>' . (intval($year) + 34) .  '</td>
    </tr>
    <tr>
        <td>' . (intval($year) + 35) .  '</td>
        <td>' . (intval($year) + 36) .  '</td>
        <td>' . (intval($year) + 37) .  '</td>
        <td>' . (intval($year) + 38) .  '</td>
        <td>' . (intval($year) + 39) .  '</td>
        <td>' . (intval($year) + 40) .  '</td>
        <td>' . (intval($year) + 41) .  '</td>
    </tr>
    <tr>
        <td>' . (intval($year) + 42) .  '</td>
        <td>' . (intval($year) + 43) .  '</td>
        <td>' . (intval($year) + 44) .  '</td>
        <td>' . (intval($year) + 45) .  '</td>
        <td>' . (intval($year) + 46) .  '</td>
        <td>' . (intval($year) + 47) .  '</td>
        <td>' . (intval($year) + 48) .  '</td>
    </tr>
    <tr>
        <td>' . (intval($year) + 49) .  '</td>
    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>';
    return $html;
}

function  get_want($yin, $yang){
    if ($yin > $yang){
        return $yin - $yang;
    }else{
        return $yang - $yin;
    }
}


function calculateDateValue($day, $month, $year): int
{
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

function calculateCodeAndTask($day, $month, $year, $typology): array{
    $day_month = (int)($day . $month);
    $multiply = $day_month * $year;
    $sum_of_day_month_digits = sum_of_year_digits($day_month);
    $multiply_split = str_split($multiply);
    $generic_carma = calculate_generic_carma($sum_of_day_month_digits, $multiply_split, $typology);
    //generic task
    $generic_task = $generic_carma['generic_task'];
    //carma task
    $carma_task = $generic_carma['carma_task'];
    //codes
    $code1 = $generic_carma['code1'];
    $code2 = $generic_carma['code2'];
    //present task
    $first_and_lust = get_first_and_last_digit($multiply);
    $sum_first_and_last = array_sum($first_and_lust);
    $split = str_split($sum_first_and_last);
    $sum_first_and_last = array_sum($split);
    $two_number_code = $typology + $sum_first_and_last;
    while ($two_number_code > 9){
        $two_number_code = str_split($two_number_code);
        $two_number_code = array_sum($two_number_code);
    }
    $present_task = $sum_first_and_last . '/' . $two_number_code;
    //parent task
    $code = $sum_of_day_month_digits + $sum_first_and_last;
    $code = str_split($code);
    $parent_task= array_sum($code);
    while ($parent_task > 9){
        $parent_task = str_split($parent_task);
        $parent_task = array_sum($parent_task);
    }
    $parent_task1 = $parent_task + $typology;
    while ($parent_task1 > 9){
        $parent_task1 = str_split($parent_task1);
        $parent_task1 = array_sum($parent_task1);
    }
    $parent_task = $parent_task . '/' . $parent_task1;
    //potential_soul
    $last_element = end($code1);
    $potential_soul_1 = $sum_first_and_last + $last_element;
    while ($potential_soul_1 > 9){
        $potential_soul_1 = str_split($potential_soul_1);
        $potential_soul_1 = array_sum($potential_soul_1);
    }
    $potential_soul_2 = $potential_soul_1 + $typology;
    while ($potential_soul_2 > 9){
        $potential_soul_2 = str_split($potential_soul_2);
        $potential_soul_2 = array_sum($potential_soul_2);
    }
    $potential_soul = $potential_soul_1 . "/" . $potential_soul_2;
    //embodiment soul
    $embodiment_soul = ($day . $month . $year);
    $embodiment_soul = str_split($embodiment_soul);
    $embodiment_soul = array_sum($embodiment_soul);

    return ['present-task' => $present_task, 'parent-task' => $parent_task,
        'generic-task' => $generic_task,
        'carma-task'=>$carma_task, 'potential-soul' => $potential_soul,
        'embodiment-soul' => $embodiment_soul, 'code1' => $code1, 'code2' => $code2];
}


function calculate_generic_carma($sum_of_day_month_digits, $multiply_split, $typology) : array
{
    array_unshift($multiply_split, $sum_of_day_month_digits);
    $array = null;
    foreach ($multiply_split as $number){
        $num = $number + $typology;
        if ($num>9){
            $num = str_split($num);
            $num = array_sum($num);

        }
        $array[] = $num;
    }
    while ($multiply_split[0] > 9){
        $multiply_split[0] = str_split($multiply_split[0]);
        $multiply_split[0] = array_sum($multiply_split[0]);
    }
    while ($multiply_split[1] > 9){
        $multiply_split[1] = str_split($multiply_split[1]);
        $multiply_split[1] = array_sum($multiply_split[1]);
    }

    $generic_task = $multiply_split[0]  . '/' . $array[0];
    $carma_task = $multiply_split[1]  . '/' . $array[1];

    return ["generic_task" => $generic_task, "carma_task" => $carma_task, "code1" => $multiply_split, "code2" => $array];
}

function sum_of_year_digits($num) : int {
    $digits = str_split($num);
    return array_sum($digits);
}


function get_first_and_last_digit($number) : array {
    $number_str = (string)$number;
    $first_digit = $number_str[0];
    $last_digit = $number_str[strlen($number_str) - 1];
    return [$first_digit, $last_digit];
}

function get_first_digit($number) : array {
    $number_str = (string)$number;
    $first_digit = $number_str[0];
    $last_digit = $number_str[strlen($number_str) - 1];
    return [$first_digit, $last_digit];
}
function adjustToSingleDigit($number): int
{
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

