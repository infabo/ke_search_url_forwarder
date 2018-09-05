<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'URL Forwarder for ke_search',
    'description' => 'Makes pretty URLs possible and also allows to create correct pagebrowser links with method = post',
    'category' => 'misc',
    'author' => 'Ingo Fabbri',
    'author_email' => 'der_ulmen@yahoo.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.2',
    'constraints' => array(
        'depends' => array(
            'typo3' => '',
        ),
        'conflicts' => array(),
        'suggests' => array()
    ),

    'autoload' => array(
        'psr-4' => array('Infabo\\KeSearchUrlForwarder\\' => 'Classes')
    )
);