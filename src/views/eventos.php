<?php
$Eventos = new Evento("data/eventos.json");
$eventos_array = $Eventos->all();
$sla = true;

?>

<table id="Eventos">
    <tr>
        <?php echo ($sla) ?  "<th>ID</th>":"" ?>
        <th>Data</th>
        <th>Evento</th>
        <th>Descrição</th>
    </tr>
    <?php 
    foreach ($eventos_array['eventos'] as $key => $evento) {
        echo "<tr>";
        echo ($sla) ?  "<td>".$key."</td>":"";
        echo "<td>".$evento["data"]."</td>";
        echo "<td>".$evento["titulo"]."</td>";
        echo "<td>".$evento["descricao"]."</td>";
        echo "</tr>";
    }
    ?>
</table>