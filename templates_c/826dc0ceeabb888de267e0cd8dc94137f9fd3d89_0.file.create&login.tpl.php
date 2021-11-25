<?php
/* Smarty version 3.1.39, created on 2021-11-20 19:15:00
  from 'C:\xampp\htdocs\tp\templates\create&login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61993b24a89092_48241591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '826dc0ceeabb888de267e0cd8dc94137f9fd3d89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\create&login.tpl',
      1 => 1637432090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61993b24a89092_48241591 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="createUser" method="POST">
    <input type="text" name="usuario" id="usuarioCreado" placeholder="Ingrese usuario">
    <input type="password" name="contraseña" id="contraseñaCreado" placeholder="Ingrese una contraseña">
    <button type="submit">Enviar</button>
</form>

<form action="login" method="POST">
    <input type="text" id="usuarioLogueado" placeholder="Ingrese usuario">
    <input type="password" id="contraseñaLogueado" placeholder="Ingrese una contraseña">
    <button type="submit">Login</button>
</form><?php }
}
