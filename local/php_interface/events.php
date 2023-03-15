<?php
$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler(
    "main",
    "OnEpilog", [
        "\\Aclips\\CustomCrm\\Handler",
        "loadCustomExtension"
    ]
);

$eventManager->addEventHandler('crm', 'onEntityDetailsTabsInitialized', [
        'Aclips\\CustomCrm\\Handler',
        'setCustomTabs'
    ]
);