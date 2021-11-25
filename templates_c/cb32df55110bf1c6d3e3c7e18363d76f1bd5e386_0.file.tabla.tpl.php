<?php
/* Smarty version 3.1.39, created on 2021-11-22 18:10:24
  from 'C:\xampp\htdocs\tp\templates\Vue\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bcf0054bfc2_31148097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb32df55110bf1c6d3e3c7e18363d76f1bd5e386' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\Vue\\tabla.tpl',
      1 => 1637600588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bcf0054bfc2_31148097 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <tr v-for="cerveza in cervezas">
        <td><a :href="'beerInfo/' + cerveza.id_cerveza"> {{cerveza.nombre}} </a></td>
        <td>{{ cerveza.resumen }}</td>
        <td v-if=""><a :href="'deleteBeer/' + cerveza.id_cerveza"><img class="icon" src="images/goma.png"></td>
        <td v-if=""><a :href="'updateBeer/' + cerveza.id_cerveza"><img class="icon" src="images/edit.png"></td>
    </tr>
<?php }
}
