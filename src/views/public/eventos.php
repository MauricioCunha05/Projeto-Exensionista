<?php
if (!defined('APP_BOOTSTRAPPED')) {
    http_response_code(403);
    exit('Forbidden');
}

$Eventos = new Evento(PROJECT_ROOT."/data/eventos.json");
$eventos_array = $Eventos->all()['eventos'];

uasort($eventos_array, function ($a, $b) {
    $ad = DateTime::createFromFormat('d/m/Y', $a['data']);
    $bd = DateTime::createFromFormat('d/m/Y', $b['data']);
    return $ad <=> $bd;   
});

require 'modals/modal_desc.php';
?>

<div class="d-flex flex-column align-items-end">
    <div class="table-responsive border rounded overflow-auto" id="viewtable-container">
        <table class="table fs-5" id="viewtable">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Evento</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                foreach ($eventos_array as $key => $evento) {
                    echo "<tr data-id=".$key.">
                            <td class='data-value'>".$evento["data"]."</td>
                            <td class='text-nowrap titulo-value' >".$evento["titulo"]."</td>

                            <td>
                                <div class=''>
                                    <div class='descricao text-truncate desc-value' style='max-width:10.4rem; max-height:2rem'>".$evento["descricao"]."</div>
                                    <a
                                        class='link-underline link-underline-opacity-0 text-nowrap'
                                        data-bs-toggle='modal'
                                        data-bs-target='#descModal'
                                        href='#'
                                        >
                                        Ver descrição completa
                                    </a>
                                </div>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
