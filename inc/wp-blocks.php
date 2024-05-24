<?php
function custom_information_block_render() {
    if (!current_user_can('administrator')) {
        return '<div class="information-block">
                    <h2>Ласкаво просимо на нашу домашню сторінку!</h2>
                    <p>Тут ви знайдете останні новини, корисні статті та інші цікаві матеріали.</p>
                </div>';
    }
}


function register_custom_information_block() {
    register_block_type('custom/information-block', array(
        'render_callback' => 'custom_information_block_render',
    ));
}
add_action('init', 'register_custom_information_block');
