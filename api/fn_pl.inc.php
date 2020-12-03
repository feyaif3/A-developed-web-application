<?php
require_once ("oo_bll.inc.php");

function renderPlayerRow(BLLPlayer $pp)
{
    $trow = <<<PROW
    		<tr>
    		    <td>{$pp->squadno}</td>
    		    <td>{$pp->position}</td>
				<td>{$pp->firstname} {$pp->lastname}</td>
				<td>{$pp->nationality}</td>
			</tr>
PROW;
    return $trow;
}

function renderSquadTable(BLLSquad $psquad)
{
    $trowdata = "";
    foreach ($psquad->squadlist as $tp)
    {
        $trowdata .= renderPlayerRow($tp);
    }

    $ttable = <<<TABLE
<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Position</th>
							<th>Name</th>
							<th>Nationality</th>
						</tr>
					</thead>
					<tbody>
					{$trowdata}
					</tbody>
</table>
TABLE;
    return $ttable;
}

?>