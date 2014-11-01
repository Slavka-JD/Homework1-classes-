<?php

include "autoloader.php";

$freja = new Freja('she', '2', 'Will kill you');
$kali = new Kali('she', '6', 'Really loves you');
$perun = new Perun('he', '2', 'Very unpredictable guy');

echo $freja->makeMiracles();
echo $freja->behaviour();
echo "<br/>";

echo $kali->makeMiracles();
echo $kali->behaviour();
echo "<br/>";

echo $perun->makeMiracles();
echo $perun->behaviour();
echo "<br/>";



