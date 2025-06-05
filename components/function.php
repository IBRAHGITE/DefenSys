<?php
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