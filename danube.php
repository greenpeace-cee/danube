<?php

require_once 'danube.civix.php';

use CRM_Danube_ExtensionUtil as E;

/**
 * Hook docs:
 * @link https://docs.civicrm.org/dev/en/latest/hooks/list/
 */

function danube_civicrm_config(&$config): void {
  _danube_civix_civicrm_config($config);
}

function danube_civicrm_install(): void {
  _danube_civix_civicrm_install();
}

function danube_civicrm_enable(): void {
  _danube_civix_civicrm_enable();
}

function danube_civicrm_themes(&$themes) {
    $themes['danube'] = [
        'ext' => 'danube',
        'title' => 'Danube',
        'prefix' => 'streams/danube/',
        'search_order' => ['danube', '_riverlea_core_', '_fallback_'],
    ];
}

function danube_civicrm_navigationMenu(&$menu) {
    _danube_civix_insert_navigation_menu($menu, NULL, [
        'label' => '',
        'icon' => 'danube__flag danube__flag_austria',
        'name' => 'danube__flag',
        'url' => '#',
        'weight' => 2,
    ]);
    _danube_civix_navigationMenu($menu);
}
