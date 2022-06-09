<?php

include_once ('../../controller/conexao.php');

if (isset ($_POST['submit'])) {


$nome_completo = $_POST ['nome_completo'];
$preco =  $_POST['preco'];
$horario_disponivel = $_POST['horario_disponivel'];


echo $nome_completo;
echo $preco;
echo $horario_disponivel;


$sql ="INSERT INTO servico
           (nome_completo, preco, horario_disponivel)
        VALUE
           ('$nome_completo','$preco','$horario_disponivel')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    mensagem ("nome cadastrado com sucesso!", "success");
 } else {
     mensagem ("Não foi possivel cadastrar ", "danger");
 }
}
?>


<!------------------PHP-------------->



<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">

 <meta name="viewport" 
 content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Cadastro de Serviço</title>
    
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
        margin-top: 100px;
        background:rgba(0,191,255,0.8);
        border-radius: 10px;
        margin: 5px;
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
        width: 500px;
        min-height: 560px;    
        margin: 0px auto;
        position: relative;
        }

        .btn {
        margin-top: 9px;
        }

        div {
        margin-top: 50%;
        padding:0;
        font-family: Arial,sans-serif;
                }
        </style>

    </head>

    <body>

        
        <div class="container" >
            <form action="Cadastro_Serviço.php" method="POST" > 

        <h1 class="text-center">Cadastro de Serviço</h1>

            <div class="row" >

<div class="col">
<label>Nome Completo</label>
<input type="text" class="form-control" placeholder="Informe o Nome Completo" name="nome_completo" method="POST" >
</div>

  <div class="col-5">
    <label>Preço</label>
    <input type="number" class="form-control" placeholder="R$:0,00" name="preco" method="POST" >
    </div>

    <div class="col-5">
    <label>Horario de Disponibilidade</label>
    <input type="time" class="form-control" placeholder="Confirme seu horário" name="horario_disponivel" method="POST" >
    </div>
  </div>


            <div class="row" >
            
                <div class="col" >
                    <input type="submit" class="btn btn-dark" value="Cadastrar" name="submit" >
                </div>

            </div>

            </form>
        </div>
        <br>
        <script src="js/bootstrap.min.js" ></script>
      <br>
    </body>

</html>