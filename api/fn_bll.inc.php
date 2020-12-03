<?php

function processFormData($pdata)
{
    $tclean = $pdata ?? "";
    if (! empty($tclean))
    {
        $tclean = trim($tclean);
        $tclean = stripslashes($tclean);
        $tclean = htmlspecialchars($tclean);
    }
    return $tclean;
}

function nullAsEmpty(array &$pdata, $tkey)
{
    $pdata[$tkey] = $pdata[$tkey] ?? "";
}

?>