<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vacancy;
use \App\Db\Pagination;
use \App\Session\Login;

Login::requireLogin();

//$search = $_GET['busca'];
$search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
$active = filter_input(INPUT_GET, 'active', FILTER_SANITIZE_STRING);
$active = in_array($active, ['s','n']) ? $active : '';

$conditions = [
    strlen($search) ? 'title LIKE "%'.str_replace(' ','%',$search).'%"' : null,
    strlen($active) ? 'active = "'.$active.'"' : null
];

$conditions = array_filter($conditions);

$where = implode(' AND ', $conditions);

$total = Vacancy::getTotal($where);
$limit = 5;
$obPagination = new Pagination($total, $_GET['page'] ?? 1, $limit);

$obVacancy = Vacancy::getVacancies($where, null, $obPagination->getLimit());
//echo "<pre>"; print_r($obVacancy); echo "</pre>"; exit;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';
