<?php 

  session_start();
  
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
    header('Location: home.php');
    $_SESSION['autenticado'] = 'SIM';

   } else {
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
   }

  

   
?>