<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Dimensions;

if (!defined('ABSPATH')) exit;

class Elementor_Teacher_Progress_Widget extends Widget_Base {

    public function get_name() {
        return 'teacher_progress_widget';
    }

    public function get_title() {
        return __('Teacher Progress', 'teacher-progress');
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return ['general'];
    }

    public function register_controls() {
        // === Form Controls ===
        $this->start_controls_section('form_section', [
            'label' => __('Form', 'teacher-progress'),
        ]);

        $this->add_control('form_placeholder', [
            'label' => __('Input Placeholder'),
            'type' => Controls_Manager::TEXT,
            'default' => 'Unesite svoj ID nastavnika',
        ]);

        $this->add_control('form_button_text', [
            'label' => __('Button Text'),
            'type' => Controls_Manager::TEXT,
            'default' => 'Prikaži napredak',
        ]);

        $this->end_controls_section();

        // === Form Wrapper Styling ===
        $this->start_controls_section('form_wrapper_style', [
            'label' => __('Form Wrapper', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_responsive_control('form_wrapper_align', [
            'label' => __('Text Alignment'),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => ['title' => 'Left', 'icon' => 'eicon-text-align-left'],
                'center' => ['title' => 'Center', 'icon' => 'eicon-text-align-center'],
                'right' => ['title' => 'Right', 'icon' => 'eicon-text-align-right'],
            ],
            'selectors' => [
                '{{WRAPPER}} .tpw-form-wrapper' => 'text-align: {{VALUE}}',
            ],
        ]);

        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'form_wrapper_bg',
            'selector' => '{{WRAPPER}} .tpw-form-wrapper',
        ]);

        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'form_wrapper_border',
            'selector' => '{{WRAPPER}} .tpw-form-wrapper',
        ]);

        $this->add_group_control(Group_Control_Box_Shadow::get_type(), [
            'name' => 'form_wrapper_shadow',
            'selector' => '{{WRAPPER}} .tpw-form-wrapper',
        ]);

        $this->add_responsive_control('form_wrapper_padding', [
            'label' => __('Padding'),
            'type' => Controls_Manager::DIMENSIONS,
            'selectors' => [
                '{{WRAPPER}} .tpw-form-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ],
        ]);

        $this->add_responsive_control('form_wrapper_margin', [
            'label' => __('Margin'),
            'type' => Controls_Manager::DIMENSIONS,
            'selectors' => [
                '{{WRAPPER}} .tpw-form-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ],
        ]);

        $this->end_controls_section();
        // === Input Styling ===
        $this->start_controls_section('input_style', [
            'label' => __('Input Field', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'input_typo',
            'selector' => '{{WRAPPER}} .tpw-form-wrapper input',
        ]);

        $this->add_control('input_color', [
            'label' => __('Text Color'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .tpw-form-wrapper input' => 'color: {{VALUE}}'],
        ]);

        $this->add_control('input_bg', [
            'label' => __('Background Color'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .tpw-form-wrapper input' => 'background-color: {{VALUE}}'],
        ]);

        $this->add_responsive_control('input_width', [
            'label' => __('Width'),
            'type' => Controls_Manager::SLIDER,
            'range' => ['px' => ['min' => 50, 'max' => 600]],
            'selectors' => ['{{WRAPPER}} .tpw-form-wrapper input' => 'width: {{SIZE}}{{UNIT}}'],
        ]);

        $this->end_controls_section();

        // === Button Styling ===
        $this->start_controls_section('button_style', [
            'label' => __('Submit Button', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typo',
            'selector' => '{{WRAPPER}} .tpw-form-wrapper button',
        ]);

        $this->add_control('button_color', [
            'label' => __('Text Color'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .tpw-form-wrapper button' => 'color: {{VALUE}}'],
        ]);

        $this->add_control('button_bg', [
            'label' => __('Background Color'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .tpw-form-wrapper button' => 'background-color: {{VALUE}}'],
        ]);

        $this->add_responsive_control('button_width', [
            'label' => __('Width'),
            'type' => Controls_Manager::SLIDER,
            'range' => ['px' => ['min' => 50, 'max' => 600]],
            'selectors' => ['{{WRAPPER}} .tpw-form-wrapper button' => 'width: {{SIZE}}{{UNIT}}'],
        ]);

        $this->end_controls_section();
        // === Teacher Name ===
        $this->start_controls_section('teacher_name_style', [
            'label' => __('Teacher Name', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'teacher_name_typo',
            'selector' => '{{WRAPPER}} .tpw-teacher-name',
        ]);

        $this->add_control('teacher_name_align', [
            'label' => __('Text Alignment'),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => ['title' => 'Left', 'icon' => 'eicon-text-align-left'],
                'center' => ['title' => 'Center', 'icon' => 'eicon-text-align-center'],
                'right' => ['title' => 'Right', 'icon' => 'eicon-text-align-right'],
            ],
            'selectors' => ['{{WRAPPER}} .tpw-teacher-name' => 'text-align: {{VALUE}}'],
        ]);

        $this->end_controls_section();

        // === Region Text ===
        $this->start_controls_section('region_style', [
            'label' => __('Region', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'region_typo',
            'selector' => '{{WRAPPER}} .tpw-teacher-region',
        ]);

        $this->add_control('teacher_region_align', [
            'label' => __('Text Alignment'),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => ['title' => 'Left', 'icon' => 'eicon-text-align-left'],
                'center' => ['title' => 'Center', 'icon' => 'eicon-text-align-center'],
                'right' => ['title' => 'Right', 'icon' => 'eicon-text-align-right'],
            ],
            'selectors' => ['{{WRAPPER}} .tpw-teacher-region' => 'text-align: {{VALUE}}'],
        ]);

        $this->end_controls_section();

        // === Material Block ===
        $this->start_controls_section('material_style', [
            'label' => __('Material Block', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'material_bg',
            'selector' => '{{WRAPPER}} .tpw-material',
        ]);

        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'material_border',
            'selector' => '{{WRAPPER}} .tpw-material',
        ]);

        $this->add_group_control(Group_Control_Box_Shadow::get_type(), [
            'name' => 'material_shadow',
            'selector' => '{{WRAPPER}} .tpw-material',
        ]);

        $this->add_responsive_control('material_padding', [
            'label' => __('Padding'),
            'type' => Controls_Manager::DIMENSIONS,
            'selectors' => ['{{WRAPPER}} .tpw-material' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'],
        ]);

        $this->add_responsive_control('material_margin', [
            'label' => __('Margin'),
            'type' => Controls_Manager::DIMENSIONS,
            'selectors' => ['{{WRAPPER}} .tpw-material' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'],
        ]);

        $this->add_control('material_align', [
            'label' => __('Text Alignment'),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => ['title' => 'Left', 'icon' => 'eicon-text-align-left'],
                'center' => ['title' => 'Center', 'icon' => 'eicon-text-align-center'],
                'right' => ['title' => 'Right', 'icon' => 'eicon-text-align-right'],
            ],
            'selectors' => ['{{WRAPPER}} .tpw-material' => 'text-align: {{VALUE}}'],
        ]);

        $this->end_controls_section();
        // === Bubble Styling ===
        $this->start_controls_section('bubble_style', [
            'label' => __('Progress Bubbles', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_responsive_control('bubble_size', [
            'label' => __('Bubble Size'),
            'type' => Controls_Manager::SLIDER,
            'range' => ['px' => ['min' => 10, 'max' => 100]],
            'default' => ['size' => 40],
        ]);

        $this->add_responsive_control('bubble_gap', [
            'label' => __('Gap Between Bubbles'),
            'type' => Controls_Manager::SLIDER,
            'default' => ['size' => 15],
        ]);

        $this->add_control('bubble_text_size', [
            'label' => __('Emoji Size'),
            'type' => Controls_Manager::SLIDER,
            'default' => ['size' => 20],
        ]);

        $this->add_control('bubble_bg_color', [
            'label' => __('Bubble Background'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .tpw-bubble' => 'background-color: {{VALUE}}'],
        ]);

        $this->add_control('bubble_text_color', [
            'label' => __('Emoji Color'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .tpw-bubble' => 'color: {{VALUE}}'],
        ]);

        $this->add_control('bubble_align', [
            'label' => __('Text Alignment'),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => ['title' => 'Left', 'icon' => 'eicon-text-align-left'],
                'center' => ['title' => 'Center', 'icon' => 'eicon-text-align-center'],
                'right' => ['title' => 'Right', 'icon' => 'eicon-text-align-right'],
            ],
            'selectors' => ['{{WRAPPER}} .tpw-bubble' => 'text-align: {{VALUE}}'],
        ]);

        $this->end_controls_section();

        // === Message Styling ===
        $this->start_controls_section('message_style', [
            'label' => __('Confirmation Message', 'teacher-progress'),
            'tab' => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'message_typo',
            'selector' => '{{WRAPPER}} .tpw-message',
        ]);

        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'message_bg',
            'selector' => '{{WRAPPER}} .tpw-message',
        ]);

        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'message_border',
            'selector' => '{{WRAPPER}} .tpw-message',
        ]);

        $this->add_responsive_control('message_padding', [
            'label' => __('Padding'),
            'type' => Controls_Manager::DIMENSIONS,
            'selectors' => ['{{WRAPPER}} .tpw-message' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'],
        ]);

        $this->end_controls_section();
    }
    public function render() {
        $settings = $this->get_settings_for_display();
        $xml = simplexml_load_file(plugin_dir_path(__FILE__) . 'nastavnik.xml');
    
        $is_editor = \Elementor\Plugin::$instance->editor->is_edit_mode();
    
        if ($is_editor) {
            $teacher_id = 'KriKoc'; 
        } else {
            $teacher_id = isset($_POST['tpw_teacher_id']) ? sanitize_text_field($_POST['tpw_teacher_id']) : '';
        }
    
        echo '<div class="tpw-form-wrapper">';
        echo '<form method="post">';
        echo '<input type="text" name="tpw_teacher_id" placeholder="' . esc_attr($settings['form_placeholder']) . '" value="' . esc_attr($teacher_id) . '">';
        echo '<button type="submit">' . esc_html($settings['form_button_text']) . '</button>';
        echo '</form>';
        echo '</div>';
    

        if ($teacher_id) {
            $teacher = $xml->xpath("//nastavnik[@id='$teacher_id']")[0];
            if ($teacher) {
                echo '<div class="tpw-teacher">';
                echo '<h2 class="tpw-teacher-name">' . esc_html($teacher->ime) . '</h2>';
                echo '<p class="tpw-teacher-region"><strong>Županija:</strong> ' . esc_html($teacher->zupanija) . '</p>';

                foreach ($teacher->zadacnice->materijali as $m) {
                    echo '<div class="tpw-material">';
                    echo '<h3 class="tpw-material-title">Materijal ID: ' . esc_html($m['id']) . '</h3>';
                    echo '<p class="tpw-material-count">Broj poslanih materijala: ' . esc_html($m->broj_obradjenih_materijala) . '</p>';

                    echo '<div class="tpw-bubbles" style="display: flex; flex-wrap: wrap; gap: ' . $settings['bubble_gap']['size'] . 'px;">';
                    $bubbles = ['📥', '✅', '🧹', '🕵️‍♀️', ($m->materijal_potrebna_pomoc_nastavnika == 'Da' ? '🆘' : '🏁')];
                    foreach ($bubbles as $emoji) {
                        echo '<div class="tpw-bubble" style="width:' . $settings['bubble_size']['size'] . 'px;height:' . $settings['bubble_size']['size'] . 'px;font-size:' . $settings['bubble_text_size']['size'] . 'px;display:flex;justify-content:center;align-items:center;border-radius:50%;">' . $emoji . '</div>';
                    }
                    echo '</div>';

                    echo '<div class="tpw-message">' . $m->potvrda . '</div>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p class="tpw-error">Nema pronađenih podataka za unesen ID.</p>';
            }
        }
    }
}
