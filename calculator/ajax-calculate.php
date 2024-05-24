<?php
add_action('wp_ajax_ajax_calculate', 'ajax_calculate_handler');
add_action('wp_ajax_nopriv_ajax_calculate', 'ajax_calculate_handler');



function ajax_calculate_handler(): void {

    $birthday = isset($_POST['birthday']) ? sanitize_text_field($_POST['birthday']) : '';
    $handedness = isset($_POST['handedness']) ? sanitize_text_field($_POST['handedness']) : '';
    if (empty($birthday)) {
        wp_send_json_error('Дата народження не вказана.');
    }

    $date_parts = explode('-', $birthday);
    if (count($date_parts) !== 3) {
        wp_send_json_error('Неправильний формат дати.');
    }
    list($year, $month, $day) = $date_parts;
    $response = calculate($day, $month,$year, $handedness);
    wp_send_json_success($response);
    wp_die();
}


