<?php
    require_once('conexao.php');

    $ID = $_GET['ID'];

    if ($ID != "") {
    $Status = 'cancelado';
    $sql = "update atendimentos set atendimento =  now(), status = '$Status' where ID = " . $ID;

    $resultado = mysqli_query($conexao, $sql);
    if ($resultado) {
        $msg = "Atendimento Cancelado!";
    }
    echo "<script>window.location.href='listaAtendimento.php?msg=$msg';</script>";
    }
?>