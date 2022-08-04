<?php
    #Conectando com o arquivo de conexão do banco de dados
    include('conexao.php');

    #Pegando as informações dos inputs e salvando temporariamenete em variaveis
    $mail = $_POST['email'];
    $pass = $_POST['senha'];

    /*
        Enviando os dadoos salvos nas variavei para o banco de dados para serem salvos
        permanemtemente (isso se n forem excluidos dps)
    */

    $inject = "INSERT INTO user(email, senha) VALUES ('$mail', '$pass')";
   
    #Verificando se os dados foram enviados
    if(mysqli_query($conexao, $inject)){
        echo "Cadatro bem sucedido";
    }else{
        die ("Falha ao cadastrar".$conexao ->error);
    }

    #Cortando a conexão com  oo banco de dados
    mysqli_close($conexao);

    #Redireciionando para a pagina de login apos o cadastro ser efetuado
    header("Location: login.php");
?>