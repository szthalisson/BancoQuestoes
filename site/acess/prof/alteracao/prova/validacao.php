<?php
  session_start();
  $disc = (int)$_POST['disc'];
  $_SESSION['disc'] = $disc;
  $alt = $_POST['alt'];

  if ($alt == "editar") {
    echo "<script>location.href = 'edicao/editar.php'</script>";
  } else {
    echo "<script>location.href = 'remocao/apagar.php'</script>";
  }
?>