<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Data\satu\Conflict();
$conflict2 = new Data\dua\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;