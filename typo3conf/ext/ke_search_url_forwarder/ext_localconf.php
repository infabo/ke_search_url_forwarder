<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Newtown.' . $_EXTKEY,
    'Process',
    array(
        'UrlForwarder' => 'forward',
    ),
    // non-cacheable actions
    array(
        'UrlForwarder' => 'forward',
    )
);