<?php

if (!defined('APP_BOOTSTRAPPED')) {
    http_response_code(403);
    exit('Forbidden');
}

if (empty($_POST)){
    header("Location: /index.php");
}

?>
<form action="actions/edit.php" method="post">
    <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
    <input type="date" name="data" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d', strtotime(datetime: $_POST["data"])) ?>">
    <input type="text" name="titulo" value="<?= $_POST["titulo"] ?>" placeholder="Título">
    <textarea name="descricao" placeholder="Descrição"><?= $_POST["descricao"] ?></textarea>
    <button type="submit">Salvar</button>
</form>