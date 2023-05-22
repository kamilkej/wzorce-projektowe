<?php
include('InputText.php');
include('InputWithLabel.php');
include('InputWithDatalist.php');
$ent = new InputText('unit',5,3);
$ent = new InputWithLabel($ent, 'Klasa', 'outside');
$ent = new InputWithDatalist($ent, 'unitsSet', ['3TP', '1TD', '2TF', '4PT5', '8b']);
echo $ent->render();