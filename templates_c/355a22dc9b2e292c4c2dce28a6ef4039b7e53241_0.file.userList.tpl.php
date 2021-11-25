<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:18:28
  from 'C:\xampp\htdocs\tp\templates\userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ed654f0c4b4_98476847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355a22dc9b2e292c4c2dce28a6ef4039b7e53241' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\userList.tpl',
      1 => 1637799430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ed654f0c4b4_98476847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table>
    <thead>
        <tr>
            <th>Usuario</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td>
            <td><a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><img class="icon" src="images/goma.png"></td>
            <td><a href="upgradeUser/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><img class="icon" src="images/flecha.png"></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
