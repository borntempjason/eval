<?php
/**
 * Point Of Sale Scanner
 *
 * @package     Pricecheck
 *
 *
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

if (version_compare(phpversion(), '5.3.0', '<')===true) {
    echo  '<div style="font:12px/1.35em arial, helvetica, sans-serif;">
	<div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
	<h3 style="margin:0; font-size:1.7em; font-weight:normal; text-transform:none; text-align:left; color:#2f2f2f;">
	This package only supports PHP 5.3 and above</h3></div><p>Please update your PHP with composer</div>';
	exit;
}

define('POSS_ROOT', getcwd());

/**
 * includes main application file
 */

$possFilename = POSS_ROOT . '/app/Pricecheck.php';

if (!file_exists($possFilename)) {
    echo $possFilename." was not found";
    exit;
}

require_once $possFilename;
ini_set('display_errors', 1);

umask(0);
