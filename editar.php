<?php include_once "config.php"; ?>
<?php
$id = $_GET['id'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, "utf8");
$result_nomes = "SELECT * FROM tbclientes WHERE id = '$id' LIMIT 1";
$resultado_nomes = mysqli_query($conn, $result_nomes);
while ($linha = mysqli_fetch_array($resultado_nomes)) {
    $id = $linha['id'];
    $data = date('d/m/Y', strtotime($linha['data']));
    $nome = $linha['nome'];
    $cnpj = $linha['cnpj'];
    $inscestadual = $linha['inscestadual'];
    $responsavel = $linha['responsavel'];
    $cpf = $linha['cpf'];
    $rg = $linha['rg'];
    $endereco = $linha['endereco'];
    $num = $linha['num'];
    $numcomp = $linha['numcomp'];
    $bairro = $linha['bairro'];
    $cidade = $linha['cidade'];
    $estado = $linha['estado'];
    $celular = $linha['celular'];
    $email = $linha['email'];
    $obs = $linha['obs'];
    $status = $linha['status'];
    $imagem = $linha['imagem'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <?php include_once "top.php"; ?>
</head>

<body>

    <header>
        <br>
        <nav>
            <ul>
                <li><a href="index.php">Home</li></a>
                <li><a href="addtbc.php">Cadastrar</li></a>
                <li><a href="#"><?php include_once "form_busca.php"; ?></li></a>
            </ul>
        </nav>
        <style>
            header {
                background-color: #142952;
            }

            nav li {
                list-style: none;
                /*Remove o marcadore das li*/
                display: inline-block;
                /*Posiciona as li lado a lado*/
                margin: 0px 100px 20px 10px;
                /*Fas o espaçamento entre as li*/
            }
        </style>
    </header>
    <br>

    <div class="modal fade" id="AbrirModal" tabindex="-01" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-hearder">
                    <h5 class="modal-title" id="ModalLabel">Alterar Imagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <center><img src="./imagens/<?php echo $imagem;?>" width="250" height="250"></center>
                </div>

                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <form method="post" name="cliente" action="atualizar.php">
        <br>
        </div class="form col-md-3">
        <a href="#" data-toggle="modal" data-target="#AbrirModal">
        <img src="./imagens/<?php echo $imagem; ?>" width="100" height="100"></a>
        <div>
        <br>
        <div class="form col-md-2">
            <label>Data</label>
            <input class="form-control" type="text" name="data" id="data" maxlength="10" value="<?php echo $data; ?>" placeholder="00/00/000" required>

            <input type="hidden" name="id" maxlength="150" value="<?php echo $id; ?>">

        </div>

        <div class="form col-md-4">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" maxlength="150" value="<?php echo $nome; ?>" required>

            <input type="hidden" name="id" maxlength="150" value="<?php echo $id; ?>">
        </div>

        <div class="form col-md-4">
            <label>CNPJ</label>
            <input class="form-control" type="text" name="cnpj" maxlength="15" value="<?php echo $cnpj; ?>">
        </div>

        <div class="form col-md-4">
            <label>Inscrição Estadual</label>
            <input class="form-control" type="text" name="inscestadual" maxlength="15" value="<?php echo $inscestadual; ?>">
        </div>

        <div class="form col-md-2">
            <label>Responsável</label>
            <input class="form-control" type="text" name="responsavel" maxlength="30" value="<?php echo $responsavel; ?>">
        </div>

        <div class="form col-md-2">
            <label>CPF</label>
            <input class="form-control" type="text" id="cpf" name="cpf" maxlength="11" value="<?php echo $cpf; ?>" required>
        </div>

        <div class="form col-md-2">
            <label>RG</label>
            <input class="form-control" type="text" name="rg" maxlength="15" value="<?php echo $rg; ?>">
        </div>

        <div class="form col-md-4">
            <label>Endereço</label>
            <input class="form-control" type="text" name="endereco" maxlength="100" value="<?php echo $endereco; ?>">
        </div>

        <div class="form col-md-2">
            <label>Número</label>
            <input class="form-control" type="text" name="num" maxlength="10" value="<?php echo $num; ?>">
        </div>

        <div class="form col-md-4">
            <label>Complemento</label>
            <input class="form-control" type="text" name="numcomp" maxlength="100" value="<?php echo $numcomp; ?>">
        </div>

        <div class="form col-md-4">
            <label>Bairro</label>
            <input class="form-control" type="text" name="bairro" maxlength="30" value="<?php echo $bairro; ?>">
        </div>

        <div class="form col-md-2">
            <label>Cidade</label>
            <input class="form-control" type="text" name="cidade" maxlength="30" value="<?php echo $cidade; ?>">
        </div>

        <div class="form col-md-2">
            <label>Estado</label>
            <input class="form-control" type="text" name="estado" maxlength="30" value="<?php echo $estado; ?>">
        </div>

        <div class="form col-md-2">
            <label>Celular</label>
            <input class="form-control" type="text" id="celular" name="celular" maxlength="15" value="<?php echo $celular; ?>" required>
        </div>

        <div class="form col-md-4">
            <label>E-mail</label>
            <input class="form-control" type="text" name="email" maxlength="50" value="<?php echo $email; ?>">
        </div>

        <div class="form col-md-4">
            <label>Observação</label>
            <input class="form-control" type="text" name="obs" maxlength="50" value="<?php echo $obs; ?>">
        </div>

        <div class="form col-md-2">
            <Label>Status</Label>
            <select class="form-control" name="status">
                <option value="<?php echo $status; ?>;"> <?php echo $status; ?>
                </option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>

        </select>
        </div>

        <div class="form col-md-4">
        <br>
        <input type="submit" value="Enviar">
        </div>

    </form>
    </div>
</body>

</html>