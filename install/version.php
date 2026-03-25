<?php
declare(strict_types=1);

$composerFile = dirname(__DIR__) . '/composer.json';
$modifiedAt   = filemtime($composerFile);
$composer     = json_decode(file_get_contents($composerFile));


$arModuleVersion = [
    'VERSION'      => $composer->version,
    'VERSION_DATE' =>  date('Y-m-d H:i:s', $modifiedAt)
];
