<?php
/* Smarty version 3.1.39, created on 2021-10-15 01:22:15
  from 'C:\xampp\htdocs\tp\templates\create&login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168bba7d9e525_71954158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '826dc0ceeabb888de267e0cd8dc94137f9fd3d89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\create&login.tpl',
      1 => 1634253731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168bba7d9e525_71954158 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="createUser" method="POST">
    <input type="text" name="usuario" id="usuario" placeholder="Ingrese usuario">
    <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese una contraseña">
    <button type="submit">Enviar</button>
</form>

<form action="login" method="POST">
    <input type="text" id="usuario" placeholder="Ingrese usuario">
    <input type="password" id="contraseña" placeholder="Ingrese una contraseña">
    <button type="submit">Login</button>
</form><?php }
}
