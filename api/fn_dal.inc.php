<?php

// Include the Class Include
require_once ("oo_bll.inc.php");
require_once ("oo_pl.inc.php");

function DAL_CreateSquad(): BLLSquad
{
    $tplayerdata = [];
    $tplayerdata[] = new BLLPlayer(1, "GK", "Marc-Andre", "ter Stegen", "Belgian");
    $tplayerdata[] = new BLLPlayer(3, "DF", "Gerard", "Pique");
    $tplayerdata[] = new BLLPlayer(4, "MF", "Ivan", "Rakitic", "Croatian");
    $tplayerdata[] = new BLLPlayer(5, "DF", "Sergio", "Busquets");
    $tplayerdata[] = new BLLPlayer(7, "MF", "Arda", "Turan", "Turkish");
    $tplayerdata[] = new BLLPlayer(8, "MF", "Andres", "Iniesta", "Spanish", "Captain");

    $tsquad = new BLLSquad();
    $tsquad->squadname = "Barcelona First Team";
    $tsquad->captainindex = "8";
    $tsquad->squadlist = $tplayerdata;
    return $tsquad;
}

?>