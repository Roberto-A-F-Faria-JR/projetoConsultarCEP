<?php

require __DIR__.'/vendor/autoload.php';

use \App\model\viaCEP;

$ZipCodeAddress = viaCEP::searchCEP("06226030");


print_r($ZipCodeAddress);