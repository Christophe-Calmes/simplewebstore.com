<?php
$idNav = filter($_POST['idNav']);
$requetteSQL = "TRUNCATE TABLE `journaux`";
$action = new system\RCUD($requetteSQL, $prepare);
$action->CUD();
header('location:../index.php?idNav='.$idNav.'&message=Journeaux vidé.');
