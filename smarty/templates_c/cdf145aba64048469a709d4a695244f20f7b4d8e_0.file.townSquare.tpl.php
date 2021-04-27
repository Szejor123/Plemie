<?php
/* Smarty version 3.1.39, created on 2021-04-27 13:34:03
  from 'C:\xampp\htdocs\ley\smarty\templates\townSquare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6087f6abcd78e5_26374900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf145aba64048469a709d4a695244f20f7b4d8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ley\\smarty\\templates\\townSquare.tpl',
      1 => 1619097275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6087f6abcd78e5_26374900 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Plac wojskowy</h3>
        <table class="table table-bordered">
            <tr>
                <th>Nazwa jednostki</th>
                <th>Ilość jednostek</th>
                <th>Do wyszkolenia</th>
                <th>Trenuj</th>
            </tr>
            <tr>
                <td>Włócznicy</td>
                <td>0</td>
                <form method="post" action="/newUnit">
                    
                    <td><input type="number" name="spearmen" id="spearmen"></td>
                    <td><button type="submit">Wyszkol</button></td>
                </form>
            </tr>

            <tr>
                <td>Łucznicy</td>
                <td>0</td>
                <form method="post" action="/newUnit">
                    
                    <td><input type="number" name="archer" id="archer"></td>
                    <td><button type="submit">Wyszkol</button></td>
                </form>
            </tr>

            <tr>
                <td>Kawaleria</td>
                <td>0</td>
                <form method="post" action="/newUnit">
                    
                    <td><input type="number" name="cavalry" id="cavalry"></td>
                    <td><button type="submit">Wyszkol</button></td>
                </form>
            </tr>

        </table>
<h3>Obecne armie:</h3>


        <table class="table table-bordered">
            <tr>
                <th>Nazwa armii</th>
                <th>Włócznicy</th>
                <th>Łucznicy</th>
                <th>Kawaleria</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['armyList']->value, 'army');
$_smarty_tpl->tpl_vars['army']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['army']->value) {
$_smarty_tpl->tpl_vars['army']->do_else = false;
?>
            <tr>
                <td></td>
                <td><?php echo $_smarty_tpl->tpl_vars['army']->value->spearmen;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['army']->value->archers;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['army']->value->cavalry;?>
</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
<?php }
}
