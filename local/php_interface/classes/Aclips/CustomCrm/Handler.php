<?php

namespace Aclips\CustomCrm;

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
}