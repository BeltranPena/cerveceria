<?php
/* Smarty version 3.1.39, created on 2021-10-14 21:02:05
  from 'C:\xampp\htdocs\tp\templates\titulo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61687eade10408_67016774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd51f686223f13acd65a3ebfe29ba64f13be10617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\titulo.tpl',
      1 => 1634238122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61687eade10408_67016774 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class='nombreCat'>lista por categoria: <?php echo $_smarty_tpl->tpl_vars['titulo']->value->tipo;?>
 </h1>;
<h3 class='descCat'><?php echo $_smarty_tpl->tpl_vars['titulo']->value->descripcion;?>
</h3>
<h3><a class='volver' href="home">Volver</a></h3><?php }
}
