<?php

require('Models/connetion.php');


$connect = new Connetion();

$servicios = $connect->getServis();

require('Views/V_viewUSers.php');
