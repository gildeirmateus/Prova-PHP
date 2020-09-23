<?php

	require_once('conexao.php');

	if(isset($_POST['Nome']) && $_POST['Nome'] != ""){

		$Nome = $_POST['Nome'];
		$Telefone = $_POST['Telefone'];
		$Atividade = $_POST['Atividade'];
        $Registro = $_POST['Registro'];
        $Status = 'espera';

		
		$sql = "insert into Atendimentos (Nome, Telefone, Atividade, Registro, Status)
				values ('$Nome', '$Telefone', '$Atividade', now(), '$Status')";
		
		
		$resultado = mysqli_query($conexao, $sql);

		if ($resultado){
			$_GET['msg'] = 'Dados inseridos com sucesso';
			$_POST = null;
		}elseif(!$resultado){
			$_GET['msg'] = 'Falha ao inserir a mensagem';
		}
	}
	
	if(isset($_GET['msg']) && $_GET['msg'] != ""){
		echo $_GET['msg'];
	}
 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mensagens Enviadas</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/listaStyle.css">
</head>
<body>
    <h2>Clientes:</h2>

    <table><tr>
        <td><label for="ID">ID:</label></td>
        <td><label for="Nome">Nome:</label></td>
        <td><label for="Telefone">Telefone:</label></td>
        <td><label for="Atividade">Atividade:</label></td>        
        <td><label for="Registro">Registro:</label></td>
        <td><label for="Atendimento">Atendimento:</label></td>
        <td><label for="Status">Status:</label></td>
        
        </tr>

        <tr>
            <?php
                $sql = "select ID, Nome, Telefone, Atividade, Registro, Atendimento, Status from atendimentos ";
                $resultado = mysqli_query($conexao, $sql);

                while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                    <td> <?= $dados['Nome'] ?></td>
                    <td> <?= $dados['Telefone'] ?> </td>
                    <td> <?= $dados['Atividade'] ?> </td>
                    <td> <?= $dados['Registro'] ?> </td>
                    <td> <?= $dados['Atendimento'] ?> </td>
                    <td> <?= $dados['Status'] ?> </td>
                    <td>
                    <?php
                        if ($dados['Status'] == 'espera') {
                            echo'
                                <a href="atender.php?ID='.$dados['ID'].'">Atender</a>
                                <a href="cancelar.php?ID='.$dados['ID'].'">Cancelar</a>
                            ';
                        } 
                    ?>
                    </td>
                </tr>
            <?php }

            mysqli_close($conexao);

            ?>
        </tr>
    </table>

    <p> <a href="formRegistro.php">Voltar</a></p>
</body>
</html>