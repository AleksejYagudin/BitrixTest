<?php
$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler(
    "main",
    "OnEpilog", [
        "\\Aclips\\CustomCrm\\Handler",
        "loadCustomExtension"
    ]
);
