<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('table');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$path = __DIR__ . '/key.json';
$client->setAuthConfig($path);

$service = new Google\Service\Sheets($client);

$spreadsheetId = '10hsB_y7mjsbcJsoEG38YmpPSoCJFbQkii0hmgyVjGuA';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        $_POST['email'],
        $_POST['category'],
        $_POST['title'],
        $_POST['description']
    ];

    $range = 'Лист1!A1';
    $values = [$data];
    $valueRange = new Google_Service_Sheets_ValueRange(['values' => $values]);

    $options = ['valueInputOption' => 'USER_ENTERED'];

    $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $options);

    header('Location: main.php');
    exit();
}
?>