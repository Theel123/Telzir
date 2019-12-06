<?php
require_once('../models/ModelPrecificacao.php');
$precificacoes = new parametrosCalculados();
 
if (!empty($_GET['id_chamada'])) {
print('<pre>');
print_r($_POST);
die();
  $bairro      =  $_POST['bairros'];
  $cidade      =  $_POST['cidades'];
  $endereco      =  $_POST['enderecos'];
  $nome            =  $_POST['nome_funcionario'];
  $cpf         =  $_POST['cpf'];
  $rg          =  $_POST['rg'];
  $nascimento      =  $_POST['dataNascimento'];
  $civil           =  $_POST['estadoCivil'];
  $sexo            =  $_POST['groupOfDefaultRadios'];
  $email       =  $_POST['email'];
  $telefone      =  $_POST['telefone'];
  $celular     =  $_POST['celular'];
  $numero          =  $_POST['numero'];
  $cargo           =  $_POST['cargo'];
  $admissao        =  $_POST['dataAdmissao'];
  $complemento   =  $_POST['complemento'];
  $filhos          =  $_POST['filhos'];
 
  $precificacoes->editar($bairro,$cidade,$endereco,$nome,$cpf,$rg,$nascimento,$civil,$sexo,$email,$telefone,
    $celular,$numero,$admissao,$complementpo,$cargo,$filhos);
  header('Location: ../precificacao.php');
} 
