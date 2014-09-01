<?php
$settings['display'] = 'horizontal';
$settings['fields'] = array(
    'url' => array(
        'caption' => 'Url',
        'type' => 'text'
    ),

    'lang' => array(
        'caption' => 'Language',
        'type' => 'dropdown',
        'elements' => '@CHUNK langlist'
    )
);
$settings['templates'] = array(
    'outerTpl' => '[+wrapper+]',
    'rowTpl' => ' <link rel="alternate" hreflang="[+lang+]" href="[+url+]"/> '
);
$settings['configuration'] = array(
    'enablePaste' => false,
    'enableClear' => true
);