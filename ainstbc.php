<?php include_once "config.php";?> 
<?php 
$nome = $_POST['nome'];
$data = date('Y-m-d');
$cnpj = $_POST['cnpj'];
$inscestadual = $_POST['inscestadual'];
$responsavel = $_POST['responsavel'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco']; 
$num = $_POST['num'];
$numcomp = $_POST['numcomp'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];
$status = $_post['status'];
if(isset($_FILES ['imagem'])){
   $ext = strtolower(substr($_FILES ['imagem']['name'],-4));// pega a extenção do arquivo
   $imagem = date("Y_m_d_h_i_s").$ext;// Muda o nome da imagem e concatena com a variavel acima
   $dir = './imagens/';
   move_uploaded_file( $_FILES ['imagem']['tmp_name'],$dir.$imagem);
   
}

$sql = "INSERT INTO tbclientes(nome,imagem,data,cnpj,inscestadual,responsavel,cpf,rg, endereco,num,numcomp,bairro,cidade,estado,celular,email,obs,status)VALUES('$nome','$imagem','$data','$cnpj','$inscestadual','$responsavel','$cpf','$rg','$endereco','$num', '$numcomp','$bairro','$cidade','$estado','$celular','$email','$obs','$status')";

if (mysqli_query($conn, $sql)){
    header("Location: addtbc.php");
 }else{
    echo "Deu erro". $sql."<br>" . mysqli_error($conn);
 }
mysqli_close($conn);
?>