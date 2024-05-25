<?php
/*
Template Name: Calculator
*/
get_header()
?>

<section class="calculator">
    <div class="container">
        <div class="calculator__inner" id="calculator-title">
            <h1 class="calculator-title">
                Чакроаналіз
            </h1>

            <div class="calculator-data-form">
                <label id="handedness-label" for="handedness">Оберіть домінуючу руку:
                    <select id="handedness" name="handedness">
                        <option value="right">Правша</option>
                        <option value="left">Лівша</option>
                    </select></label>
                <label class="calculator-date-label" for="birthday">
                    Введіть дату народження:

                    <input type="date" id="birthday" placeholder="">
                </label>
                <input type="submit" value="Розрахувати" class="calculator-submit" id="calculator-submit-btn">
            </div>
        </div>
    </div>
</section>
<section class="calculator-response">
    <div class="container">
        <div class="calculator-response-inner" id="response">
            <div class="calculator-response-user-info">
                <div class="calculator-response-user-info-date-birth">
                    Дата нарождения: 22-2-2222
                </div>
                <div class="calculator-response-user-info-age">
                    Вік: -198
                </div>
            </div>
            <div class="calculator-response-columns">
                <div class="calculator-response-chacroanalysis">
                    <h3 class="calculator-response-chacroanalysis-title">
                        Чакроаналіз
                    </h3>
                    <ul class="calculator-response-chacroanalysis-list">
                        <li class="calculator-response-chacroanalysis-item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt=""
                                 class="calculator-response-chacroanalysis-item-img">
                            <div class="calculator-response-chacroanalysis-item-text">
                                Сахасрара
                            </div>
                            <div class="calculator-response-chacroanalysis-item-percent">
                                73%
                            </div>
                        </li>
                        <li class="calculator-response-chacroanalysis-item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/2.png" alt=""
                                 class="calculator-response-chacroanalysis-item-img">
                            <div class="calculator-response-chacroanalysis-item-text">
                                Aджна
                            </div>
                            <div class="calculator-response-chacroanalysis-item-percent">
                                73%
                            </div>
                        </li>
                        <li class="calculator-response-chacroanalysis-item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/3.png" alt=""
                                 class="calculator-response-chacroanalysis-item-img">
                            <div class="calculator-response-chacroanalysis-item-text">
                                Вішудха
                            </div>
                            <div class="calculator-response-chacroanalysis-item-percent">
                                73%
                            </div>
                        </li>
                        <li class="calculator-response-chacroanalysis-item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/4.png" alt=""
                                 class="calculator-response-chacroanalysis-item-img">
                            <div class="calculator-response-chacroanalysis-item-text">
                                Анахата
                            </div>
                            <div class="calculator-response-chacroanalysis-item-percent">
                                73%
                            </div>
                        </li>
                        <li class="calculator-response-chacroanalysis-item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/5.png" alt=""
                                 class="calculator-response-chacroanalysis-item-img">
                            <div class="calculator-response-chacroanalysis-item-text">
                                Маніпура
                            </div>
                            <div class="calculator-response-chacroanalysis-item-percent">
                                73%
                            </div>
                        </li>
                        <li class="calculator-response-chacroanalysis-item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/5.png" alt=""
                                 class="calculator-response-chacroanalysis-item-img">
                            <div class="calculator-response-chacroanalysis-item-text">
                                Свадхістана
                            </div>
                            <div class="calculator-response-chacroanalysis-item-percent">
                                73%
                            </div>
                        </li>
                        <li class="calculator-response-chacroanalysis-item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/7.png" alt=""
                                 class="calculator-response-chacroanalysis-item-img">
                            <div class="calculator-response-chacroanalysis-item-text">
                                Муладхара
                            </div>
                            <div class="calculator-response-chacroanalysis-item-percent">
                                73%
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
                                    Сангвінік
                                </div>
                            </li>
                            <li class="calculator-response-contour-of-specialness-item">
                                <div class="calculator-response-contour-of-specialness-item-title">
                                    Характер:
                                </div>
                                <div class="calculator-response-contour-of-specialness-item-descr">
                                    Сентиментальний
                                </div>
                            </li>
                            <li class="calculator-response-contour-of-specialness-item">
                                <div class="calculator-response-contour-of-specialness-item-title">
                                    Інтелект:
                                </div>
                                <div class="calculator-response-contour-of-specialness-item-descr">
                                    Дискретний
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="calculator-response-typology-of-specialness">
                        <div class="calculator-response-typology-of-specialness-descr">
                            3-а типологія
                        </div>

                    </div>
                    <div class="calculator-response-womans-and-mans-cob">
                        <h3 class="calculator-response-womans-and-mans-title">
                            Жіноча та чоловіча енергія
                        </h3>
                        <div class="calculator-response-womans-and-mans-cob-con">
                            <div class="calculator-response-womans-and-mans-cob-in">
                                Інь: 121
                            </div>
                            <div class="calculator-response-womans-and-mans-cob-an">
                                Ян: 146
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calculator-response-columns-2">
                <div class="calculator-response-the-power-of-energy">
                    <h3 class="calculator-response-the-power-of-energy-title">
                        Сила енергетики
                    </h3>
                    <div class="calculator-response-the-power-of-energy-container">
                        <div class="calculator-response-the-power-of-energy-container-want">
                            Хочу <span>25</span>
                        </div>
                        <div class="calculator-response-the-power-of-energy-container-i-can">
                            Можу <span>35</span>
                        </div>
                    </div>
                    <div class="sexual-potential">
                        Енергетичний потенціал
                        <span>875</span>
                    </div>
                </div>
                <div class="calculator-response-emotional-type">
                    <h3 class="calculator-response-emotional-type-title">
                        Емоціональний тип
                    </h3>
                    <div class="calculator-response-emotional-type-descr">
                        Енергійний
                    </div>
                    <div class="calculator-response-emotional-type-container">
                        <div class="calculator-response-emotional-type-1 calculator-response-emotional-types">
                            Я: 48
                        </div>
                        <div class="calculator-response-emotional-type-2 calculator-response-emotional-types">
                            Ми: 39,6
                        </div>
                    </div>
                </div>
                <div class="calculator-response-emotional-type">
                    <div class="calculator-response-emotional-type-container">
                        <div class="calculator-response-emotional-type-1 calculator-response-emotional-types">
                            Iнтуїція: 48
                        </div>
                        <div class="calculator-response-emotional-type-2 calculator-response-emotional-types">
                            Логіка: 39,6
                        </div>
                    </div>
                </div>
            </div>
            <div class="last-position">
                <ul class="live-tasks">
                    <li class="live-task">
                        <div class="live-task-name">
                            Родова
                        </div>
                        <div class="live-task-descr">
                            test
                        </div>
                    </li>
                    <li class="live-task">
                        <div class="live-task-name">
                            Карма минулого
                        </div>
                        <div class="live-task-descr">
                            test
                        </div>
                    </li>
                    <li class="live-task">
                        <div class="live-task-name">
                            Теперішня
                        </div>
                        <div class="live-task-descr">
                            test
                        </div>
                    </li>
                    <li class="live-task">
                        <div class="live-task-name">
                            Батьківська
                        </div>
                        <div class="live-task-descr">
                            test
                        </div>
                    </li>

                </ul>
                    <ul class="live-tasks">
                        <li class="live-task">
                            <div class="live-task-name">
                                Потенціал душі
                            </div>
                            <div class="live-task-descr">
                                test
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Втілення душі
                            </div>
                            <div class="live-task-descr">
                                test
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Фін код
                            </div>
                            <div class="live-task-descr">
                                test
                            </div>
                        </li>
                        <li class="live-task">
                            <div class="live-task-name">
                                Прогноз
                            </div>
                            <div class="live-task-descr">
                                test
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
                            0
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-2">
                            6
                        </div>
                    </li>
                    <li class="calculator-response-periods-of-life-item">
                        <div class="calculator-response-periods-of-life-item-periods">
                            12-24 років
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-1">
                            2
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-2">
                            8
                        </div>
                    </li>
                    <li class="calculator-response-periods-of-life-item">
                        <div class="calculator-response-periods-of-life-item-periods">
                            24-36 років
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-1">
                            2
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-2">
                            8
                        </div>
                    </li>
                    <li class="calculator-response-periods-of-life-item">
                        <div class="calculator-response-periods-of-life-item-periods">
                            36-48 років
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-1">
                            2
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-2">
                            8
                        </div>
                    </li>
                    <li class="calculator-response-periods-of-life-item">
                        <div class="calculator-response-periods-of-life-item-periods">
                            48-60 років
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-1">
                            2
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-2">
                            8
                        </div>
                    </li>
                    <li class="calculator-response-periods-of-life-item">
                        <div class="calculator-response-periods-of-life-item-periods">
                            більше 60 років
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-1">
                            2
                        </div>
                        <div class="calculator-response-periods-of-life-item-num-2">
                            8
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php

get_footer()

?>


