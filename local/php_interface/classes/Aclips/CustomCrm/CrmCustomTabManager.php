<?php

namespace Aclips\CustomCrm;

use Bitrix\Main\Loader;

Loader::includeModule('crm');
class CrmCustomTabManager
{
    /**
     * CRM права текущего пользователя
     * @var \CCrmPerms
     */
    protected \CCrmPerms $userPermissions;

    public function __construct()
    {
        $this->userPermissions = \CCrmPerms::GetCurrentUserPermissions();
    }

    /**
     * Получение актуальных вкладок
     * @param int $elementId
     * @param int $entityTypeID
     * @param array $tabs
     * @return array
     */
    public function getActualEntityTab(int $elementId, int $entityTypeID, array $tabs = []): array
    {
        switch ($entityTypeID) {
            case \CCrmOwnerType::Deal:
                $tabs = $this->getActualDealTabs($tabs, $elementId);
                break;
            case \CCrmOwnerType::Company:
                // @TODO Реализовать получение вкладок для компаний
                break;
            case \CCrmOwnerType::Contact:
                // @TODO Реализовать получение вкладок для контактов
                break;
        }

        return $tabs;
    }

    /**
     * Получение актуальных вкладок элемента сущности "Сделка"
     * @param array $tabs
     * @param int $elementId
     * @return array
     */
    private function getActualDealTabs(array $tabs, int $elementId): array
    {
        $canUpdateDeal = \CCrmDeal::CheckUpdatePermission($elementId, $this->userPermissions);

        if ($canUpdateDeal) {
            $tabs[] = [
                'id' => 'component_users',
                'name' => 'Пользователи',
                'enabled' => !empty($elementId),
                'loader' => [
                    'serviceUrl' => '/local/components/aclips/base.grid/lazyload.ajax.php?&site=' . \SITE_ID . '&' . \bitrix_sessid_get(),
                    'componentData' => [
                        'template' => '',
                        'params' => [
                            // Параметры вызываемого компонента ($arParams)
                        ]
                    ]
                ]
            ];
        }

        return $tabs;
    }
}