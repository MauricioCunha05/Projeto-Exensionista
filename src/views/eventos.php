<?php
$Eventos = new Evento("data/eventos.json");
$eventos_array = $Eventos->all()['eventos'];
uasort($eventos_array, function ($a, $b) {
    $dateA = DateTime::createFromFormat('m-d-Y', $a['data'] . '-2025');
    $dateB = DateTime::createFromFormat('m-d-Y', $b['data'] . '-2025');

    return $dateA <=> $dateB;
});

?>

<table id="Eventos">
    <tr>
        <th>Data</th>
        <th>Evento</th>
        <th>Descrição</th>
    </tr>
    <?php 
    foreach ($eventos_array as $key => $evento) {
        echo "<tr>";
        echo "<td>".$evento["data"]."</td>";
        echo "<td>".$evento["titulo"]."</td>";
        echo "<td>".$evento["descricao"]."</td>";
        echo "</tr>";
    }
    ?>
</table>