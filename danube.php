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
