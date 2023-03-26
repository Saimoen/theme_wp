<?php
add_action('montheme_import_content', function () {
    touch(__DIR__ . '/demo-' . time());
});
add_filter('cron_schedules', function ($schedules) {
    $schedules['ten_seconds'] = [
        'interval' => 10,
        'display' => __('Toutes les 10 secondes', 'montheme'),
    ];
    return $schedules;
});

if (!wp_next_scheduled('montheme_import_content')) {
    wp_schedule_event(time(), 'hourly', 'montheme_import_content');
}
;