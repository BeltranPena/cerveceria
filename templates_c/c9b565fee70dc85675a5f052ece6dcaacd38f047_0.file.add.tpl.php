<?php
/* Smarty version 3.1.39, created on 2021-10-25 16:13:33
  from 'C:\xampp\htdocs\tp\templates\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176bb8d873768_49316348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9b565fee70dc85675a5f052ece6dcaacd38f047' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\add.tpl',
      1 => 1635165294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176bb8d873768_49316348 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form" action='createBeer' method='post'>
    <input type='text' name='nombre' id='nombre' placeholder='nombre'>
    <input type='text'name='resumen' id='resumen' placeholder='resumen'>
    <input type='number' name='ibu' id='ibu' placeholder='IBU'>
    <input type='text' name='alcohol' id='alcohol' placeholder='alcohol'>
    <input type='number'name='id_tipo' id='id_tipo' placeholder='id tipo'>
    <input type='submit' value='Guardar'>
</form><?php }
}
