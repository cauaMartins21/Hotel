<?php

include_once('../../controller/conexao.php');
$sql = "SELECT * FROM hospede";

	$dados = mysqli_query($conexao, $sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Listagem de Hóspedes</title>
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

            input {
            outline: none;
            }

            div {
            margin-top: 100px;
            background:rgba(0,191,255,0.9);
            border-radius: 20px;
            margin: 10px;
            }


            #cadastro, 
            #login{
            position: absolute;
            top: 0px;
            width: 88%;   
            padding: 18px 6% 60px 6%;
            margin: 0 0 35px 0;
            background: #f7f7f7;
            border: 1px solid rgba(147, 184, 189,0.9);

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
            background-color: #F07F3E;
            color: white;
            background-image: url("https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2017/08/29/1013/Grand-Hyatt-Rio-de-Janeiro-P443-Pool.jpg/Grand-Hyatt-Rio-de-Janeiro-P443-Pool.16x9.jpg?imwidth=1920");
            width: 1200px;
            min-height: 560px;    
            margin: 0px auto;
            position: relative;


            }

            .btn {
            margin-top: 10px;
            margin: 10px;
            }
            div {
            margin-top: 10%;
            padding:0;
            font-family: Arial,sans-serif;
            }

            td {
            color: white;
            }
        
        
         </style>

</head>
            <body>
                <div class="container" >
                    <h1 class="text-center" >Listagem De Hóspedes</h1>

                    <table class="table table-hover">

                    <thead class="table-dark" style="text-align: center" >
                    <tr>
                    <th>EMAIL</th>
                    <th>NOME COMPLETO</th>
                    <th>CPF</th>
                    <th>ENDEREÇO</th>
                    <th>TELEFONE</th>
                    <th>LOGIN</th>
                    <th>AÇÕES</th>
                    </tr>

                    </thead>



            <tbody class="text-center">

            <?php

                        while ($linha = mysqli_fetch_assoc($dados) ) {
               
                            $codigo = $linha['codigo'];
                            $email = $linha['email'];
                            $nome_completo = $linha['nome_completo'];
                            $cpf = $linha['cpf'];
                            $endereco = $linha['endereco'];
                            $telefone = $linha['telefone'];
                            $login = $linha['login'];
                            

                         echo "<tr>

                                <td>$email</td> 
                                <td>$nome_completo</td>
                                <td>$cpf</td>
                                <td>$endereco</td>
                                <td>$telefone</td>
                                <td>$login</td>

                                <td>
										<i class='bi-pencil'></i>
										<i class='bi-trash' ></i>
									</td>
                                
                        
                        
                        
                                </tr>";


  }
?>


            </tbody>

            </table>
            <a class="btn btn-dark" href="javascript:history.back()">Voltar</a>

            </div>


            <script src="js/bootstrap.min.js"></script>

            </body>
</html>