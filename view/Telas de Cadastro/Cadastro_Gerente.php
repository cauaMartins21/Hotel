<?php

include_once ('../../controller/conexao.php');

if (isset ($_POST['submit'])) {


$login = $_POST ['login'];
$nome_completo = $_POST ['nome_completo'];
$endereco = $_POST ['endereco'];
$cpf = $_POST ['cpf'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$confirmacao_senha = $_POST ['confirmacao_senha'];

echo $email;
echo $nome_completo;
echo $cpf;
echo $endereco;
echo $telefone;
echo $login;
echo $senha;
echo $confirmacao_senha;


$sql ="INSERT INTO gerente
           (login, nome_completo, endereco, cpf, telefone, email, senha, confirmacao_senha)
        VALUE
           ('$login','$nome_completo', '$endereco', '$cpf', '$telefone', '$email', '$senha', '$confirmacao_senha')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    mensagem ("nome cadastrado com sucesso!", "success");
 } else {
     mensagem ("Não foi possivel cadastrar o produto ", 'danger');
 }
}
?>

<!-------------------------------PHP----------------------------------->


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">

 <meta name="viewport" 
 content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Cadastro de Gerente</title>
    
        <style>
    
        body {
        background-color: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,68,121,1) 35%, rgba(0,212,255,1) 100%); 
        color: white;
        display: block;
        background: no-repeat;
        border: solid 0px black;
        }

        .btn {
        margin-top: 8px;
        }


        div {
        margin-top: 10%;
        background:rgba(0,191,255,0.8);
        border-radius: 10px;
        }        


        #cadastro, 
        #login{
        position: absolute;
        top: 0px;
        width: 88%;   
        padding: 18px 6% 60px 6%;
        margin: 0 0 35px 0;
        background: #f7f7f7;
        border: 1px solid rgba(147, 184, 189,0.8);

        -webkit-box-shadow: 5px;
        border-radius: 5px;

        -webkit-animation-duration: 0.5s;
        -webkit-animation-timing-function: ease;
        -webkit-animation-fill-mode: both;

        animation-duration: 0.5s;
        animation-timing-function: ease;
        animation-fill-mode: both;
        }

        /* placeholder */
        ::-webkit-input-placeholder  {
        color: #bebcbc; 
        font-style: italic;
        }

        input:-moz-placeholder,
        textarea:-moz-placeholder{
        color: #bebcbc;
        font-style: italic;
        }

        p{
        margin-bottom:15px;
        }

        .content p:first-child{
        margin: 0px;
        }

        label{
        color: white;
        position: relative;
        }

        h1:after{
        content: ' ';
        display: block;
        width: 100%;
        height: 2px;
        margin-top: 10px;
        background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
        background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
        }


        h1{
        font-size: 48px;
        color: white;
        padding: 2px 0 10px 0;
        font-family: Arial,sans-serif;
        font-weight: bold;
        text-align: center;
        padding-bottom: 30px;
        }

        body {
        color: white;
        background-image: url("https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2017/08/29/1013/Grand-Hyatt-Rio-de-Janeiro-P443-Pool.jpg/Grand-Hyatt-Rio-de-Janeiro-P443-Pool.16x9.jpg?imwidth=1920");
        width: 600px;
        min-height: 560px;    
        margin: 0px auto;
        position: relative;
        }

        .btn {
        margin-top: 10px;
        margin: 10px;
        }

        div {
        margin-top: 20%;
        padding:0;
        font-family: Arial,sans-serif;
        }

        </style>

    </head>

    <body>

 
 
 <div class="container" >

  <form action="cadastro_gerente.php" method="POST">
         
       <h1 class="text-center">Cadastro de Gerente</h1>
       
        <div class="row" >

          <div class="col">
          <label>Login</label>
          <input type="text" class="form-control" placeholder="Informe o Login" name="login" method="POST">
          </div>
        </div>


            <div class="row" >

<div class="col">
<label>Nome Completo</label>
<input type="text" class="form-control" placeholder="Informe o Nome Completo" name="nome_completo" method="POST" >
</div>

  <div class="col-5">
    <label>Endereço</label>
    <input type="text" class="form-control" placeholder="Confirme seu Endereço" name="endereco" method="POST" >
    </div>
            </div>


            <div class="row">
            
            <div class="col-4">
            
              <label>CPF</label>
              <input type="text" class="form-control" placeholder="CPF(somente números)" pattern="[0-9]{11}" name="cpf" method="POST" >
              </div>
                
             <div class="col-5">
              <label>Telefone</label>
             <input type="number" class="form-control" placeholder="(00)0000-0000" name="telefone" method="POST" >
           </div>
           
            </div>

            
            <div class="row">
              <div class="col-6">
                <label>E-mail</label>
                <input type="text" class="form-control" placeholder="Insira seu Email completo" name="email" method="POST">
              </div>
              
              <div class="col-5">
              <label>Senha</label>
              <input type="password" class="form-control" placeholder="Crie uma senha" name="senha" method="POST">
              </div>
            </div>
            
           
            <div class="row">
            <div class="col-5">
              <label>Confirma Senha</label>
              <input type="password" class="form-control" placeholder="Confirme sua senha" name="confirmacao_senha" method="POST">
              </div>
            </div>

            
            <div class="row" >
            
                <div class="col" >
                    <input type="submit" name="submit" class="btn btn-dark" value="cadastrar">
                </div>

            </div>

      </form>
        
          </div>
        <br>
        <script src="js/bootstrap.min.js" ></script>
      <br>
    </body>

</html>