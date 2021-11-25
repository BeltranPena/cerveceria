<?php
/* Smarty version 3.1.39, created on 2021-11-23 14:00:11
  from 'C:\xampp\htdocs\tp\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ce5db6b37d2_72407659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a62ec47779407fd135f8cc71571db000199d4aad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\tabla.tpl',
      1 => 1637672393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619ce5db6b37d2_72407659 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="tabla">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beers']->value, 'beer');
$_smarty_tpl->tpl_vars['beer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['beer']->value) {
$_smarty_tpl->tpl_vars['beer']->do_else = false;
?>
            <tr>
                <td><a href="beerInfo/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
"><?php echo $_smarty_tpl->tpl_vars['beer']->value->nombre;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->resumen;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['rol']->value == 2) {?>
                    <td><a href="deleteBeer/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
"><img class="icon" src="images/goma.png"></td>
                    <td><a href="updateBeer/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
"><img class="icon" src="images/edit.png"></td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
