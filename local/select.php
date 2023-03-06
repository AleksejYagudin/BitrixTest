<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');?>
<?php \Bitrix\Main\UI\Extension::load('aclips.ui-selector') ?>

<select id='my_select'>
    <option data-tab='tab_1' value='1'>Option 1</option>
    <option data-tab='tab_2' value='2'>Option 2</option>
    <option data-tab='tab_3' value='3'>Option 3</option>
    <option data-tab='tab_4' selected value='4'>Option 4</option>
    <option data-tab='tab_4' value='5'>Option 5</option>
</select>

<script type="text/javascript">

    BX.ready(function () {
        BX.Plugin.UiSelector.createTagSelector('my_select', {
            tabs: [
                {id: 'tab_1', title: 'Tab 1', itemOrder: {title: 'asc'}},
                {id: 'tab_2', title: 'Tab 2', itemOrder: {title: 'asc'}},
                {id: 'tab_3', title: 'Tab 3', itemOrder: {title: 'asc'}},
                {id: 'tab_4', title: 'Tab 4', itemOrder: {title: 'asc'}}
            ]
        })
    })
</script>
<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
