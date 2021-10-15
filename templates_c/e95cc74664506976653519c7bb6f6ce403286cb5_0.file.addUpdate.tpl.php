<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:41:02
  from 'C:\xampp\htdocs\tp\templates\addUpdate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616895dee5f846_06370133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95cc74664506976653519c7bb6f6ce403286cb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\addUpdate.tpl',
      1 => 1634244040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616895dee5f846_06370133 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form" action='createBeer' method='post'>
    <input type='text' name='nombre' id='nombre' placeholder='nombre'>
    <input type='text'name='resumen' id='resumen' placeholder='resumen'>
    <input type='number' name='ibu' id='ibu' placeholder='IBU'>
    <input type='text' name='alcohol' id='alcohol' placeholder='alcohol'>
    <input type='number'name='id_tipo' id='id_tipo' placeholder='id tipo'>
    <input type='submit' value='Guardar'>
</form>
<form class="form" action='updateBeer'. method='post'>
    <input type='number' name='id_cerveza' id='id_cerveza' placeholder='id_cerveza'>
    <input type='text' name='nombre' id='nombre' placeholder='nombre'>
    <input type='text'name='resumen' id='resumen' placeholder='resumen'>
    <input type='number' name='ibu' id='ibu' placeholder='IBU'>
    <input type='text' name='alcohol' id='alcohol' placeholder='alcohol'>
    <input type='number'name='id_tipo' id='id_tipo' placeholder='id tipo'>
    <input type='submit' value='Actualizar'>
</form><?php }
}
