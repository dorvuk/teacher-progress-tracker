<?php
/**
 * Plugin Name: Teacher Progress
 * Description: Prikazuje u kojoj su fazi poslani materijali
 * Version: 1.2
 * Author: Dorian Vuk
 */

if (!defined('ABSPATH')) exit;

function tpw_register_teacher_widget($widgets_manager) {
    require_once(__DIR__ . '/teacher-progress-widget.php');
    $widgets_manager->register(new \Elementor_Teacher_Progress_Widget());
}
add_action('elementor/widgets/register', 'tpw_register_teacher_widget');
