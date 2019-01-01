<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>.:: SysMax - Receitu&aacute;rio ::.</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="./app.site/app.css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="./app.site/app.css/estiloGeral.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body class="color lighten cinza-5">
        <header class="page-footer blue-grey lighten-1" style="width: auto; height: 90px;">
            <a href="./index.php" >
                <img  id="logoSec"  class="responsive-img brand-logo light" src="./app.site/app.img/icon_sec_saude1.png"
                      alt="Logo Secretaria de Sa&uacute;de..." style="text-align: left !important; margin: -10px 0px 10px 10px;">
            </a>
            <!--Lista do Menu do Header -->
            <ul id="slide-out" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background blue-grey">
                        </div>
                        <a href="#user"><img class="circle" src="./app.site/app.img/icon_sec_saude.png"></a>
                    </div>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de m&eacute;dicos...">local_hospital</i>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de Medicamentos...">local_pharmacy</i>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de pacientes...">assignment_ind</i>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de usu&aacute;rios...">face</i>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Receitas m&eacute;dicas simples...">receipt</i>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Receitas m&eacute;dicas especial...">book</i>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Impress&otilde;es...">print</i>
                </li>
                <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;">
                    <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Sobre o sistema...">live_help</i>
                </li>
            </ul>
            <div class="responsive" style="width: auto; float: right; margin-top: -20px;">
                <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-med-and-up"><i class="material-icons small" style="color: #FFFFFF;">confirmation_number</i></a>
                <div class="nav-wrapper">
                    <ul id="navWrapper" class="right hide-on-med-and-down" style="padding:0px !important; margin-right: 5px;">
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="P&aacute;gina inicial..."
                               onclick="document.location = 'index.php'">home</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de m&eacute;dicos..."
                               onclick="document.location = '?class=cadMedicos'">local_hospital</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de Medicamentos..."
                               onclick="document.location = '?class=cadMedicamentos'">local_pharmacy</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de pacientes..."
                               onclick="document.location = '?class=cadPacientes'">assignment_ind</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Cadastro de usu&aacute;rios..."
                               onclick="document.location = '?class=cadUsuarios'">face</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Receitas m&eacute;dicas simples..."
                               onclick="document.location = '?class=cadRecSimples'">receipt</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Receitas m&eacute;dicas especial..."
                               onclick="document.location = '?class=cadRecEspecial'">book</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Impress&otilde;es..."
                               >print</i>
                        </li>
                        <li class="center hoverable waves-effect waves-light" style="width: 95px; height: 60px !important; -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;">
                            <i class="material-icons small center" style="color: #FFFFFF; padding-top: 12px;" title="Sobre o sistema..."
                               >live_help</i>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <main class="container">
            