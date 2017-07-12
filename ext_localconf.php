<?php
if (!defined ('TYPO3_MODE')) die('Access denied.');

$configurationArray = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
if (is_array($configurationArray) && array_key_exists('explicitAllow', $configurationArray) && $configurationArray['explicitAllow'] == 1) {
	$TYPO3_CONF_VARS['BE']['explicitADmode'] = 'explicitAllow';
}

$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'AOE\\BeGroups\\Service\\TceMain\\ProcessFieldArray';
