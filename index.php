<?php

function __autoload($className)
{
    include "/home/zmejka/sites/Homework1/" . $className . ".php";
}

$freja = new Freja('she', '2', 'light');
echo $freja->makeMiracles();
echo $freja->initialization($gender, $arms, $side);
echo $freja->behaviour($action);

$kali = new Kali('she', '6', 'dark');
echo $kali->makeMiracles();
echo $kali->initialization($gender, $arms, $side);
echo $kali->behaviour($action);

$perun = new Perun('he', '2', 'both');
echo $perun->makeMiracles();
echo $perun->initialization($gender, $arms, $side);
echo $perun->behaviour($action);