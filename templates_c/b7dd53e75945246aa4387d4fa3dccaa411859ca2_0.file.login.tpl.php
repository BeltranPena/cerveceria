<?php
/* Smarty version 3.1.39, created on 2021-11-23 14:01:12
  from 'C:\xampp\htdocs\tp\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ce618648937_03590651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7dd53e75945246aa4387d4fa3dccaa411859ca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\login.tpl',
      1 => 1637672460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619ce618648937_03590651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><a class='volver' href="home">Volver</a></h3>

<form action="verify" method="POST">
    <input type="text" name="usuario" id="usuario" placeholder="Ingrese usuario" required>
    <input type="email" name="email" id="email" placeholder="Ingrese un mail" required>
    <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese una contraseña" required>
    <input type="submit" value="Login">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
