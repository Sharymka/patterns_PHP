<?php
use Observer\Searcher;

require_once "bootstrap.php";

$searcher1 = new Searcher('Ivan', 'ivan@mail.ru', 10);
$searcher2 = new Searcher('Petr', 'petr@mail.ru', 14);

$jobVacancyService = new \Observer\JobVacancyService();
$jobVacancyService->attach($searcher1);
$jobVacancyService->attach($searcher2);

$jobVacancyService->addNewVacancy('HR');