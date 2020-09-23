<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulário</title>
        <link rel="stylesheet" href="css/formStyle.css">
    </head>

    <body>
        <div id="box">
            <form class="formulario" method="post" action="listaAtendimento.php"> 
                <h1>Cadastro do cliente</h1> 
                
                <input type="hidden" name="ID" value="<?= $ID; ?>">

                <div class="field">
                    <label for="Nome">Nome:</label>
                    <input type="text" id="Nome" name="Nome" placeholder="Digite o nome*" required>
                </div>         

                <div class="field">
                     <label for="Telefone">Telefone:</label>
                     <input type="text" id="Telefone" name="Telefone"  placeholder="Digite o telefone*">
                </div>

                <div class="field">
                    <label for="Atividade">Atividade:</label>
                    <select name="Atividade">
                        <option value="Segunda via da conta">Segunda Via de Conta</option>
                        <option value="Mudança de endereço">Mudança de Endereço</option>
                        <option value="Suspenção do serviço">Suspensão do Serviço</option>
                        <option value="Negociação de debitos">Negociação de Débitos</option>
                    </select>
                </div>

                <input type="hidden" name="Registro" value="<?= $Registro; ?>">

                <input type="submit" name="mensagens" value="Enviar">
            </form>
        </div>

    </body>
</html>