<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vacancy;

$obVacancy = Vacancy::getVacancies();
//echo "<pre>"; print_r($obVacancy); echo "</pre>"; exit;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';
