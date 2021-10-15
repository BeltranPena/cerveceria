<?php
/* Smarty version 3.1.39, created on 2021-10-14 21:26:35
  from 'C:\xampp\htdocs\tp\templates\empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168846b09f419_83459965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00604ba8dfe9e0344b16056cfcab58fb687cead5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\empty.tpl',
      1 => 1634239589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168846b09f419_83459965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class='error'>Oops! Parece que la categoria no tiene elementos.</h2>
<h3><a class='volver' href="home">Volver</a></h3>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
