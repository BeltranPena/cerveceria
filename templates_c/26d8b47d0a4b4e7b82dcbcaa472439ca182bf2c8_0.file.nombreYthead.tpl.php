<?php
/* Smarty version 3.1.39, created on 2021-10-14 20:30:40
  from 'C:\xampp\htdocs\tp\templates\nombreYthead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61687750429f34_77454030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d8b47d0a4b4e7b82dcbcaa472439ca182bf2c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\nombreYthead.tpl',
      1 => 1634236237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61687750429f34_77454030 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class='nombreCat'>lista por categoria: <?php echo $_smarty_tpl->tpl_vars['titulo']->value->tipo;?>
 </h1>;
<h3 class='descCat'><?php echo $_smarty_tpl->tpl_vars['titulo']->value->descripcion;?>
</h3>;
<h3><a class='volver' href="../home">Volver</a></h3>;

<table class="tabla">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>IBU</th>
            <th>Alcohol</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beers']->value, 'beer');
$_smarty_tpl->tpl_vars['beer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['beer']->value) {
$_smarty_tpl->tpl_vars['beer']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->resumen;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->ibu;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->alcohol;?>
</td>
                <td><a href="deleteBeer/"<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
>Borrar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
