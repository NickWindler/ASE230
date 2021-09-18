<?php
function jsonToArray($inputFile)
{
    if (file_exists($inputFile)) {
        $file = file_get_contents($inputFile);
        $array = json_decode($file, true);
        return $array;
    }
    return [];
}

function getJsonElement($inputFile, $element)
{
    if (file_exists($inputFile)) {
        $file = file_get_contents($inputFile);
        $array = json_decode($file, true);
        return $array[$element];
    }
    return [];
}

function saveArrayToFile($inputArray, $inputFile)
{
    if (file_exists($inputFile)) {
        $array = json_encode($inputArray);
        file_put_contents($inputFile, $array);
    }
}

?>