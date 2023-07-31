<?php 

  session_start();
  
  $usuario_autentificado = false;
  $usuarios_id = null;
  $usuarios_perfil_id = null;

  $perfis = array(1 => 'Administrativo', 2 => 'Usuario' );

  $usuarios_app = array(
    array('id' => 1,'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 2,'email' => 'yokito@bol.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 3,'email' => 'bruce@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 4,'email' => 'joshua@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
  );

  
   foreach($usuarios_app as $user) {
    
    if ($_POST['email'] === $user['email'] && $_POST['senha'] === $user['senha']) {
      $usuario_autentificado = true;
      $usuarios_id = $user['id'];
      $usuarios_perfil_id = $user['perfil_id'];
    }
    
   }

   if ($usuario_autentificado) {
    header('Location: home.php');
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuarios_id;
    $_SESSION['perfil_id'] = $usuarios_perfil_id;

   } else {
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
   }

  

   
?>