<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar vaga');

use \App\Entity\Vacancy;
$obVacancy = new Vacancy;

if(isset($_POST['title'],$_POST['description'],$_POST['active'])){
    
    $obVacancy->title       = $_POST['title'];
    $obVacancy->description = $_POST['description'];
    $obVacancy->active      = $_POST['active'];
    $obVacancy->register();    

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';
