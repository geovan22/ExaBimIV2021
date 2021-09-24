<?php
/* Smarty version 3.1.39, created on 2021-09-24 06:08:59
  from 'C:\xampp\htdocs\ExaBimIV2021\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d4f5b3c6de5_00727608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e02104f1fdb06f2a7ca2c658026916610cbce01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ExaBimIV2021\\templates\\Cabeceras\\Header.tpl',
      1 => 1623263401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d4f5b3c6de5_00727608 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
        <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

        <?php } else { ?>
            Home
        <?php }?>
      </title>  
    </head>

    <body>
    
    
    
    <?php }
}
