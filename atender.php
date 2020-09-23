<?php

    require_once('conexao.php');

    $ID = $_GET['ID'];

    if ($ID != "") {
    $Status = 'atendido';
    $sql = "update atendimentos set Atendimento = now(), Status = '$Status' where id = " . $ID;

    $resultado = mysqli_query($conexao, $sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Chamado</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/atendimentoStyle.css">

</head>

<body>
  <h1 >Cliente <?php echo $ID ?> siga ao setor de atendimento</h1>
  <script>
    setTimeout(function() {window.location.href = "listaAtendimento.php"}, 4000);
  </script>
</body>

</html>