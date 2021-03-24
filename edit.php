<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar vaga');

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

if(isset($_POST['title'],$_POST['description'],$_POST['active'])){
    
    $obVacancy->title       = $_POST['title'];
    $obVacancy->description = $_POST['description'];
    $obVacancy->active      = $_POST['active'];
    $obVacancy->update();    

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';
