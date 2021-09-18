<?php
function calculateAge($month, $day, $year)
{
    date_default_timezone_set('America/New_York');
    $currentDate = date('m/d/Y', time());
    $currentDate = str_replace('/', '', $currentDate);
    $age = substr($currentDate, 4, 4) - $year;
    if ($month < substr($currentDate, 0, 2))
        return $age;
    elseif ($month = substr($currentDate, 0, 2) && $day < substr($currentDate, 2, 2))
        return $age;
    else
        return $age - 1;
}

function calculateDateDifference($month, $day, $year)
{
    date_default_timezone_set('America/New_York');
    $currentDate = date('m/d/Y', time());
    $currentDate = str_replace('/', '', $currentDate);
    $monthDiff = abs($month - substr($currentDate, 0, 2));
    if ($day < substr($currentDate, 2, 2))
        $dayDiff = abs($day - substr($currentDate, 2, 2));
    else
        $dayDiff = (31 - $day) + substr($currentDate, 2, 2);
    $yearDiff = abs($year - substr($currentDate, 4, 4));
    return $dateDiff = array($monthDiff, $dayDiff, $yearDiff);
}

?>