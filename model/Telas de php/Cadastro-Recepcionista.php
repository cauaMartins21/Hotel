<?php 

public class recepcionista{
    
     private $codigo;
     private $email;
     private $nome_completo;
     private $cpf;
     private $rg;
     private $endereco;
     private $telefone;
     private $login;
     private $horario_trabalho;
     private $senha;
     private $confirmacao_senha;
    
     function getcodigo() {
        return $this - > codigo; 
    }
    
        function getemail() {
        return $this - > email; 
    }
    
        function getnome_completo() {
        return $this - > nome_completo; 
    } 
    
        function getcpf() {
        return $this - > cpf;
    } 
    
        function getrg() {
        return $this - > rg; 
    } 
    
        function getendereco() {
        return $this - > endereco; 
    } 
        function gettelefone() {
        return $this - > telefone; 
    } 
        function getlogin() {
        return $this - > login; 
    } 
        function getsenha() {
        return $this - > senha; 
    } 
        function getconfirmacao_senha() {
        return $this - > confirmacao_senha; 
    } 
      }
        ?>