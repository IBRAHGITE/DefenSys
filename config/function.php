<?php
function Redirect($url)
{
  if (!headers_sent()) {
    $redirect_url = $_SERVER['HTTP_HOST'] . '/' . $url;
    exit(header('Location:' . $redirect_url));
  } else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="' . $url . '";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
    echo '</noscript>';
    exit;
  }
}
//-- Epurer une table en rétirant en les valeurs nulles et les tableaux
function Data($data)
{
    foreach ($data as $key => $value) {
        if (($key = array_search('', $data)) !== false) {
            unset($data[$key]);
        }
    }

    foreach ($data as $key => $value) {
        if (($value = in_array('Choisir', $data, true)) !== false) {
            unset($data[$key]);
        }
    }

    foreach ($data as $key => $value) {
        if (is_array($value) === true) {
            unset($data[$key]);
        }
    }

    foreach ($data as $key => $value) {
        $data_return[$key] = htmlentities(trim($value), ENT_QUOTES);
    }

    if (isset($data_return)) {
        return $data_return;
    } else {
        return $data_return = array();
    }
}
function uploadFileByHexa($hexa)
{ //TRANSFROM HEXADECIMAL DATA TO BASIC FILE
    $file = "";
    if (!preg_match('/[^a-fA-F0-9]/', $hexa)) {
        $file = hex2bin($hexa);
        $type = detectFileType($file);
        $file = 'data:' . $type . ';base64,' . base64_encode($file);
    }
    return $file;
}

function detectFileType($binaryData)
{ // DETECTE THE TYPE FILE ON BINARY DATA
    $byteSignatures = [
        "25504446" => "application/pdf",
        "D0CF11E0A1B11AE1" => "application/msword",
        "474946383761" => "image/gif",
        "474946383961" => "image/gif",
        "89504E470D0A1A0A" => "image/png",
        "FFD8" => "image/jpeg",
        // "504B0304" => "application/zip", // DOCX, XLSX, etc. sont des ZIPs
        "504B0304" => "application/msword", // DOCX, XLSX, etc. sont des ZIPs
    ];

    foreach ($byteSignatures as $signature => $mime) {
        if (substr($binaryData, 0, strlen($signature) / 2) == hex2bin($signature)) {
            return $mime;
        }
    }

    return "application/octet-stream"; // default MIME type
}
function loadFileToHexa($tmp_name)
{ // TRANSFORM BASIC FILE TO HEXADEICMAL DATA
    $file = null;
    if (!empty($tmp_name)) {
        $file = bin2hex(file_get_contents($tmp_name));
    }
    return $file;
}
function jours($data)
{
    foreach ($data as $key => $value) {
        switch ($value['jour']) {
            case 6:
                $data[$key]['jour'] = 'Samedi';
                break;
            case 7:
                $data[$key]['jour'] = 'Dimanche';

                break;
            case 1:
                $data[$key]['jour'] = 'Lundi';

                break;
            case 2:
                $data[$key]['jour'] = 'Mardi';

                break;
            case 3:
                $data[$key]['jour'] = 'Mercredi';

                break;
            case 4:
                $data[$key]['jour'] = 'Jeudi';

                break;
            case 5:
                $data[$key]['jour'] = 'Vendredi';

                break;
        }
    }

    return $data;
}