<?php

namespace Aclips\CustomCrm;
use Bitrix\Main\EventResult;
use Bitrix\Main\Event;

class Handler
{
    /**
     * Загрузка js компонентов
     */
    public static function loadCustomExtension()
    {
        global $APPLICATION;

        $currentDirectory = $APPLICATION->getCurDir();

        if (mb_strpos($currentDirectory, '/crm/deal/details/') !== false) {
           // \Bitrix\Main\UI\Extension::load('aclips.custom_crm');
        }
    }

    /**
     * Получение актуальных вкладок элемента CRM
     * @param Event $event
     * @return EventResult
     */
    static function setCustomTabs(Event $event): EventResult
    {
        $entityId = $event->getParameter('entityID');
        $entityTypeID = $event->getParameter('entityTypeID');
        $tabs = $event->getParameter('tabs');

        $crmCustomTabManager = new CrmCustomTabManager();

        $tabs = $crmCustomTabManager->getActualEntityTab($entityId, $entityTypeID, $tabs);

        return new EventResult(EventResult::SUCCESS, [
            'tabs' => $tabs,
        ]);
    }
}