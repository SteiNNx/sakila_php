<?php

$options = "";
include_once '../model/DAO_Film.php';
if (!$_POST["eligido"] == 000) {
    $aux_id = $_POST["eligido"];
    $dao_fl = new DAO_Film();
    $datos = $dao_fl->getPeliculaByIdActor($aux_id);
    while ($row = mysqli_fetch_array($datos)) {
        $options .= "<option value='" . $row['film_id'] . "'>" . 'Id: ' . $row['film_id'] . ' ,' . $row['title'] . "</option>";
    }
}
echo $options;
