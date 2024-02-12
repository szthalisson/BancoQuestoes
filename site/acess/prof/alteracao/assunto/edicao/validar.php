<?php
  require "../../../../../conexao.php";
  session_start();

  $nome = $_POST['nome'];
  $disciplina = $_POST['disciplina'];
  
  $sql = "SELECT * FROM assunto WHERE nome = '$nome' and disciplina = '$disciplina'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Assunto já cadastrado, tente outro!'); location.href = 'editar.php';</script>";
  } else {
    $sql = "UPDATE assunto SET disciplina = '$disciplina', nome = '$nome' WHERE nome = '{$_SESSION['disc']}'";
    $result = mysqli_query($conn, $sql);

    if ($result){
      echo "<script>alert('Assunto editado com sucesso!'); location.href = '../../../alterar.php';</script>";
    } else {
      echo "<script>alert('Erro ao editar assunto!'); location.href = '../../../alterar.php';</script>";
    }
  }
?>