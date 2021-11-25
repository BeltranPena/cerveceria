<?php
/* Smarty version 3.1.39, created on 2021-11-25 03:46:17
  from 'C:\xampp\htdocs\tp\templates\showInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef8f9b5b812_99974673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97ab9311df348dd525012022effa61d2e09f47eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\showInfo.tpl',
      1 => 1637808368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619ef8f9b5b812_99974673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><a class='volver' href="home">Volver</a></h3>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>IBU</th>
            <th>Alcohol</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->resumen;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->ibu;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->alcohol;?>
</td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody id="tabla">
    
    </tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['rol']->value == 1 || $_smarty_tpl->tpl_vars['rol']->value == 2) {?>
    <form id="vue-comment">
    <input type="text" id="usuario" name="input-user"required>
        <input type="text" id="comentario" name="puntaje" placeholder="comentario" required>
        <input type="number" id="calificacion" placeholder="calificacion" required>
        <input type="button" id="submit">
    </form>    
<?php }?>

<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
