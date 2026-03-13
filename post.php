<?php

header('Content-Type: application/json');

$response = [
    'status' => 'error',
    'message' => 'Aucun fichier reçu.',
    'files_traités' => []
];

$uploadDir = 'upload/';

if (!is_dir($uploadDir) || !is_writable($uploadDir)) {
    $response['message'] = "Erreur serveur : le dossier '$uploadDir' est inaccessible.";
    echo json_encode($response);
    exit;
}

if (isset($_FILES['mesFichiers'])) {
    
    $files = $_FILES['mesFichiers'];
    $nbr = count($files['name']);
    
    $response['status'] = 'success';
    $response['message'] = "$nbr fichier(s) reçu(s) par le serveur.";

    for ($i = 0; $i < $nbr; $i++) {
        if ($files['error'][$i] === UPLOAD_ERR_OK) {
            
            $tmpName = $files['tmp_name'][$i];
            $safeName = basename($files['name'][$i]);
            $destination = $uploadDir . $safeName;

            if (move_uploaded_file($tmpName, $destination)) {
                $response['files_traités'][] = [
                    'name' => $safeName,
                    'status' => 'uploadé'
                ];
            } else {
                $response['files_traités'][] = [
                    'name' => $files['name'][$i],
                    'status' => 'échec (déplacement)'
                ];
            }
        } else {
             $response['files_traités'][] = [
                'name' => $files['name'][$i],
                'status' => 'échec (erreur code ' . $files['error'][$i] . ')'
            ];
        }
    }
}

echo json_encode($response);

?>