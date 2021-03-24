<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vacancy;
use \App\Session\Login;

Login::requireLogin();

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$obVacancy = Vacancy::getVacancy($_GET['id']);
//echo "<pre>"; print_r($obVacancy instanceof Vacancy ); echo "</pre>"; exit;

if(!$obVacancy instanceof Vacancy){  
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['remove'])){
    
    $obVacancy->remove();    

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-remove.php';
include __DIR__.'/includes/footer.php';
