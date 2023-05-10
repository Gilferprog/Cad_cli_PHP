<?php include_once"config.php";?>

<?php 
$usuario_f = $_POST['usuario'];
"<br>";
$senha_f = $_POST['senha'];

$sql="SELECT * FROM tbusuarios WHERE usuario='$usuario_f'";
$result = mysqli_query($conn, $sql);
while ($linha = mysqli_fetch_assoc($result)) {
    session_start();
    $_SESSION['usuario'] = $usuario = $linha['usuario'];
} if($usuario===$usuario_f){
    echo "Usuário encontrado";
    header("Location: index.php");
}else{
    echo "Usuário não existe";
    header("Location: login.php");
}




?>