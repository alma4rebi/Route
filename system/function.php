<?php
//===================================================
//============= Developmets functions ===============
//===================================================

//=============[ pre() is print array ]==============
function pre($arr,$them=1){
  switch ($them) {
    case 1: $color='#2295bc'; $background='#e4e7e7'; break;
    case 2: $color='#e4e7e7'; $background='#2295bc'; break;
    case 3: $color='#064439'; $background='#51bba8'; break;
    case 4: $color='#efc75e'; $background='#324d5b'; break;
    case 5: $color='#000000'; $background='#B1EEA1'; break;
    case 6: $color='#fff'; $background='#e2574c';    break;
    default:    $color='#2295bc'; $background='#e4e7e7'; break;
  }?>
    <pre style="direction: ltr;background:<?= $background;?>;color:<?= $color;?>;
    max-width: 90%;margin: 30px auto;overflow:auto;
    font-family: Monaco,Consolas, 'Lucida Console',monospace;font-size: 16px;padding: 20px;"><?php print_r($arr); echo "</pre>";
}

function dpre(){
    die( call_user_func_array('pre', func_get_args()) );
}
//=======[ br() is print new line string ]===========
function br($line) {
    echo $line."<br/>";
}
