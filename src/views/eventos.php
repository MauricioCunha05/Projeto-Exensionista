<?php
$Eventos = new Evento("data/eventos.json");
$eventos_array = $Eventos->all()['eventos'];
?>

<table id="Eventos">
    <tr>
        <th>Data</th>
        <th>Evento</th>
        <th>Descrição</th>
    </tr>
    <?php 
    foreach ($eventos_array as $evento) {
        echo "<tr>";
        echo "<td>".$evento["data"]."</td>";
        echo "<td>".$evento["titulo"]."</td>";
        echo "<td>".$evento["descricao"]."</td>";
        echo "</tr>";
    }
    ?>
</table>