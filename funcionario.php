<?php
  include('Funcionarios.php');

  $cpf = $_POST['cpf'];

  $funcionarios = new Funcionarios();

  $func = $funcionarios->find($cpf);
   
  echo '<h2>';
  echo 'Nome: '. $func['nome'] . '<br>';
  echo ' CPF: ' . $func['cpf'] . '<br>';
  echo 'Salário anterior: R$  ' . $func['salario'];
  echo '</h2>'

?>