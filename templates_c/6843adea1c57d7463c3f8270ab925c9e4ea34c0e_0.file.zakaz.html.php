<?php
/* Smarty version 3.1.30, created on 2018-03-25 20:38:21
  from "C:\OSPanel\domains\18\lab15\templates\zakaz.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab7de8d767b98_83440723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6843adea1c57d7463c3f8270ab925c9e4ea34c0e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\18\\lab15\\templates\\zakaz.html',
      1 => 1521999380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ab7de8d767b98_83440723 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    
    <body> 
        
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="container">
            <div class="contact">
                <div class="contact-in">
                    
                    <div class=" col-md-9 contact-left">

                        <form id="register_form" name="register_form" method="post" action="/registration/newuser">
    <table>
        <h3>Оформление доставки</h3>
								<div class="billing-field">
									<div class="col-md-6 form-group">
										<label>Фамилия</label>
										<input class="form-control" type="text" name="surname">
									</div>
									<div class="col-md-6 form-group">
										<label>Имя</label>
										<input class="form-control" type="text" name="name">
									</div>
									<div class="col-md-12 form-group">
										<label>Адрес доставки</label>
										<input class="form-control"  type="text" name="address">
									</div>
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12 woocommerce-info">
									<input type="checkbox" name="box">
									<label>Сохранить данные</label>
								</div>
		   
		   	<tr>
            <td>
            <input class="order zakaz" type="submit"  name="submit" id="submit" value="Заказать" onsubmit="return validate(this.form)"/>   
            </td>
        </tr>
		   
    </table>

</form>
                    </div>


                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        
    </div>
</div>

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
