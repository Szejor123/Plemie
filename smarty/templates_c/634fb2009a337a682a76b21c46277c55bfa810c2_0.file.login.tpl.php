<?php
/* Smarty version 3.1.39, created on 2021-04-27 13:19:21
  from 'C:\xampp\htdocs\ley\smarty\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6087f339f1a345_73355307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634fb2009a337a682a76b21c46277c55bfa810c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ley\\smarty\\templates\\login.tpl',
      1 => 1619097275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6087f339f1a345_73355307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 text-center">
            <h1>Zaloguj się</h1>
            <form action="/login" method="post">
                <input type="hidden" name="action" value="login">
                <div class="form-group">
                    <label for="login">Adres e-mail:</label>
                    <input class="form-control" type="email" name="login" id="login">
                </div>
                <div class="form-group">
                    <label for="password">Hasło:</label>
                    <input class="form-control" type="password" name="password" id="password">  
                </div>
                <button class="btn btn-primary" type="submit">Zaloguj się</button>
                <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
                <?php }?>
            </form>
        </div>
    </div>
</div><!-- /container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
