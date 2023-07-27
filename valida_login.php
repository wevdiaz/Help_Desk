<?php 
  
  $usuario_autentificado = false;

  $usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => 'abcdw'),
    array('email' => 'yokito@bol.com.br', 'senha' => '112233')
  );

  
   foreach($usuarios_app as $user) {
    
    if ($_POST['email'] === $user['email'] && $_POST['senha'] === $user['senha']) {
      $usuario_autentificado = true;
    }
    
   }

   if ($usuario_autentificado) {
    echo 'Usuário Autenticado com sucesso!';
   } else {
    header('Location: index.php?login=erro');
   }

  //  echo '<pre>';
  //  print_r($_POST);
  //  echo '</pre>';

  //  echo '<br/>';
   
  //  echo $_POST['email'];
  //  echo '<br/>';
  //  echo $_POST['senha'];

   
?>