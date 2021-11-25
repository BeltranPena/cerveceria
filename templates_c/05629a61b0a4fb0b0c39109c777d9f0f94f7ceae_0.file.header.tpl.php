<?php
/* Smarty version 3.1.39, created on 2021-11-23 13:57:34
  from 'C:\xampp\htdocs\tp\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ce53eb78052_89930440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05629a61b0a4fb0b0c39109c777d9f0f94f7ceae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\templates\\header.tpl',
      1 => 1637672252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ce53eb78052_89930440 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
            <html lang='en'>
            <head>
                <base href="<?php echo BASE_URL;?>
" />
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' type='text/css' href='css/style.css'>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
                <title>Cerveceria</title>

                <!-- development version, includes helpful console warnings -->
                <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"><?php echo '</script'; ?>
>
            </head>
            <body>
            <img class='logo' src='images/banner.png' alt='logo'>";
            <nav>
                <div id="navegador">
                    <ul>
                        <li><h4><a href='tipos/1'>clasicas</a></h4></li>
                        <li><h4><a href='tipos/2'>modernas</a></h4></li>
                        <li><h4><a href='tipos/3'>worldwide</a></h4></li>
                    </ul>
                </div>
                <div id="login">
                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['rol']->value != 0) {?>
                            <li><h4><a href='logout'>logout</a></h4></li>
                        <?php } else { ?>
                            <li><h4><a href='login'>login</a></h4></li>
                            <li><h4><a href='register'>registrarse</a></h4></li>
                        <?php }?>
                    </ul>
                </div>
            </nav><?php }
}
