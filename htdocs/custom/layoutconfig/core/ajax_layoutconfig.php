<?php
// Endpont AJAX do módulo LayoutConfig
require '../../../main.inc.php';
if (!$user->admin) { http_response_code(403); echo json_encode(['error'=>'access denied']); exit; }
header('Content-Type: application/json');

$action = GETPOST('action','alpha');
$file = DOL_DOCUMENT_ROOT . '/custom/layoutconfig/data/presets.json';
switch ($action) {
    case 'load':
        if (file_exists($file)) {
            echo file_get_contents($file);
        } else {
            echo json_encode(new stdClass());
        }
        break;
    case 'save':
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(400);
            echo json_encode(['error'=>'invalid JSON']);
            exit;
        }
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
        echo json_encode(['status'=>'ok']);
        break;
    default:
        http_response_code(400);
        echo json_encode(['error'=>'invalid action']);
} 