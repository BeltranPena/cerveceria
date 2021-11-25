<?php
/* Smarty version 3.1.39, created on 2021-10-25 16:15:34
  from 'C:\xampp\htdocs\tp\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176bc06604a96_69530321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f43300895b73d466c013aab5282aca7f47cdfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\update.tpl',
      1 => 1635171330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6176bc06604a96_69530321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><a class='volver' href="home">Volver</a></h3>

<form class="form" action='changeBeer/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' method='post'>
    <input type='text' name='nombre' id='nombre' placeholder='nombre'>
    <input type='text'name='resumen' id='resumen' placeholder='resumen'>
    <input type='number' name='ibu' id='ibu' placeholder='IBU'>
    <input type='text' name='alcohol' id='alcohol' placeholder='alcohol'>
    <input type='number'name='id_tipo' id='id_tipo' placeholder='id tipo'>
    <input type='submit' value='Actualizar'>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
