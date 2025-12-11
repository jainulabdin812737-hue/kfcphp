<?php

// ---- Prevent InfinityFree JS challenge ----
header("X-Requested-With: XMLHttpRequest");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Handle OPTIONS preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

include "config.php";

$method = $_SERVER['REQUEST_METHOD'];

// Helper: Read JSON or Form
function getInput()
{
    $raw = file_get_contents("php://input");

    // Try JSON
    $json = json_decode($raw, true);

    if ($json !== null) {
        return $json;
    }

    // Fallback (InfinityFree sometimes blocks JSON)
    if (!empty($_POST)) {
        return $_POST;
    }

    // No data found
    return [];
}

switch ($method) {

    // =================== GET ===================
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $sql = "SELECT * FROM applicants WHERE id=$id";
        } else {
            $sql = "SELECT * FROM applicants ORDER BY id DESC";
        }

        $result = $conn->query($sql);
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        echo json_encode($data);
        break;

    // =================== POST (INSERT) ===================
    case 'POST':

        $input = getInput();

        if (empty($input)) {
            echo json_encode(["error" => "No data received"]);
            exit;
        }

        $name       = $conn->real_escape_string($input['name'] ?? '');
        $email      = $conn->real_escape_string($input['email'] ?? '');
        $phone      = $conn->real_escape_string($input['phone'] ?? '');
        $address    = $conn->real_escape_string($input['address'] ?? '');
        $experience = $conn->real_escape_string($input['experience'] ?? '');
        $years      = intval($input['years'] ?? 0);
        $state      = $conn->real_escape_string($input['state'] ?? '');
        $city       = $conn->real_escape_string($input['city'] ?? '');
        $district   = $conn->real_escape_string($input['district'] ?? '');
        $pincode    = $conn->real_escape_string($input['pincode'] ?? '');

        $sql = "INSERT INTO applicants 
                (name, email, phone, address, experience, years, state, city, district, pincode)
                VALUES ('$name', '$email', '$phone', '$address',
