<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");


use Bitrix\Main\DI\ServiceLocator;
use Aclips\BookRental\Entity\Edition;

$serviceLocator = ServiceLocator::getInstance();

// Получение сервиса
$entityManager = $serviceLocator->get('aclips.bookrental.entityManager');

// Создание объекта "издание"
$edition = new Edition();

// Заполняем свойства объекта
$edition->name = 'Котенок Шмяк и большая 123';
$edition->publishingYear = 2020;
$edition->publishingHouseId = 1;
$edition->genreId = 3;
$edition->description = 'Приключения котёнка Шмяка...';
$edition->description123 = '2222';

// Сохранение в базу
if($entityManager->save($edition)) {
    // Получаем объект из репозитория
    $processRepository = $entityManager->getRepository(Edition::class);
    $smyakEdition = $processRepository->getById($edition->id);

    print "Название публикации: ".$smyakEdition->name;
    // Название публикации: Котенок Шмяк и большая тыква

}