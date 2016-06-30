<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Newtown.' . $_EXTKEY,
    'Process',
    array(
        'UrlForwarder' => 'forward'
    ),
    // non-cacheable actions
    array(
        'UrlForwarder' => 'forward'
    )
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Realurl.php:Newtown\\KeSearchUrlForwarder\\Realurl->addAutoConfig';