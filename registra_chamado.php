<?php


  $title = str_replace('#', '-', $_POST['title']);
  $category = str_replace('#', '-', $_POST['category']);
  $description = str_replace('#', '-', $_POST['description']);

  $texto = $title . '# ' . $category . '# ' . $description . PHP_EOL;

  $arquivo = fopen('arquivo.txt', 'a'); 

  fwrite($arquivo, $texto);

  fclose($arquivo);

  echo $texto;

  header('Location: abrir_chamado.php');

?>