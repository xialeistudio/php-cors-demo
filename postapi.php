<?php
/**
 * @author xialeistudio
 * @date 2019-08-23
 */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Token, Content-Type');
header('Content-Type: application/json;charset=utf-8');

$data = json_decode(file_get_contents('php://input'), true);
echo json_encode($data, 320);