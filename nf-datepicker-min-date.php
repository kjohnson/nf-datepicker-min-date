<?php

/*
 * Plugin Name: Ninja Forms - Datepicker Min Date
 */

add_filter( 'ninja_forms_enqueue_scripts', 'nf_datepicker_options' );
function nf_datepicker_options() {
    wp_localize_script( 'nf_datepicker_mindate', 'nfDatepickerMinDate', array(
        'date' => 'December 21, 2016',
        'field_key' => 'my_date'
    ) );
    wp_enqueue_script( 'nf_datepicker_mindate', plugin_dir_url( __FILE__ ) . 'script.js', array( 'jquery' ), false, true );
}
