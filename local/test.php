<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php

$reportManager = new Aclips\Report\ReportManager();
$report = $reportManager->getReportByCode('Test');

$report->setFilter([
    'SOME_LIST' => [1,2,3]
]);

$report->generateDocument();

$path = $_SERVER['DOCUMENT_ROOT'] . '/local/tmp/test2.html';
$result = $report->makeHtmlFile($path);

print file_get_contents($result);


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>