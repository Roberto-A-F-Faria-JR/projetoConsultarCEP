<?php

require '../model/viaCEP.php';

use \App\model\viaCEP;

if (strlen($_POST['cep']) >= 8) {
    $result = viaCEP::searchCEP($_POST['cep']);
} else {
    $result = NULL;
}

echo json_encode($result);