<?php
include "satu.php";
$sp = new sepeda();
$sp->setMerk("Poligon");

echo "Merk Motor : " . $sp->getMerk(@$m);
