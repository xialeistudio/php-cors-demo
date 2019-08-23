<?php
/**
 * @author xialeistudio
 * @date 2019-08-23
 */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Token');
header('Content-Type: application/json;charset=utf-8');
echo json_encode(['version' => '1.0.0'], 320);