<?php

//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;

//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('email' => 'adm@admin.com.br', 'password' => 'admin')
);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
        $usuario_autenticado = true;
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';
    }else{
        header('Location: index.php?login=erro');
    }


?>