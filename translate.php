<?php
// définitions principales

$dictionary=
[
    'cat'    => 'chat',
    'dog'    => 'chien',
    'monkey' => 'singe',
    'panter' => 'panthère',
    'whale'  => 'baleine'
];
$animal = 'panter';
$lang = 'fr';
// code principal
switch($lang){
     case 'fr':
        foreach($dictionary as $en=>$fr){
            if($animal==$en){
                $message="\"$animal\" en français est $fr.";
                break 2;
            }
        }
        $message="le mot \"$animal\" n'existe pas dans notre traducteur en $lang.";
        break; 
    case 'en':
        foreach($dictionary as $en=>$fr){
            if($animal==$fr){
                $message="\"$animal\" en anglais est $en.";
                break 2;
            }
        }
        $message="le mot \"$animal\" n'existe pas dans notre traducteur en $lang.";
        break; 
        default:
        $message="la langue \"$lang\" n'existe pas dans notre dictionnaire.";
}
echo $message;

