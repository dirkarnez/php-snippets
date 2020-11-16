<?php

$isValidForm
= getData($_POST, "day", $day)
&& getData($_POST, "month", $month)
&& getData($_POST, "year", $year);

function getData($obj, $objKey, &$destination) {
    if (!isset($obj[$objKey])) {
        return false;
    }
    $destination = $obj[$objKey];
    return !empty($destination);
}
