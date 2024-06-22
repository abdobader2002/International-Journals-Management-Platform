<?php

require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

if (isset($data->text)) {
    $text = $data->text;

    try {
        $client = new Client("AIzaSyCgXd9yAJs3EWI2bEcuMUd5fU5FdNAOEVc");

        $response = $client->geminiPro()->generateContent(
            new TextPart($text),
        );

        echo json_encode(['response' => $response->text()]);
    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Invalid input']);
}
?>



