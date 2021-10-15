<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:42:33
  from 'C:\xampp\htdocs\tp\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616896399f54e9_84452215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a62ec47779407fd135f8cc71571db000199d4aad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\tabla.tpl',
      1 => 1634244150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616896399f54e9_84452215 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->resumen;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->ibu;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->alcohol;?>
</td>
                <td><a href="deleteBeer/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
">Borrar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
