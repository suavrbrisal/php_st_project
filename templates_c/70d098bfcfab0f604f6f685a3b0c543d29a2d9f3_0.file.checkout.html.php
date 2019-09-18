<?php
/* Smarty version 3.1.30, created on 2018-03-27 14:18:34
  from "C:\oS\OSPanel\domains\18\lab15\templates\checkout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aba288a402b00_69652610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70d098bfcfab0f604f6f685a3b0c543d29a2d9f3' => 
    array (
      0 => 'C:\\oS\\OSPanel\\domains\\18\\lab15\\templates\\checkout.html',
      1 => 1522003110,
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
function content_5aba288a402b00_69652610 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container">
            <div class="check">	 
                <div class="col-md-3 cart-total">
                    <a class="continue" href="/">Вернуться к покупкам</a>
                    <div class="price-details">
                        <h3>Цена</h3>
                        <span>Цена</span>
                        <span class="total1 simpleCart_total"></span>
                        <span>Скидка</span>
                        <span class="total1">---</span>
                        <span>Доставка</span>
                        <span class="total1"></span>
                        <div class="clearfix"></div>				 
                    </div>	
                    <ul class="total_price">
                        <li class="last_price"> <h4>Всего</h4></li>	
                        <li class="last_price simpleCart_total"><span></span></li>
                        
                    </ul><form>
					<ul class="total_price">
					
					<font align="center" color="orange"><h4>Оформление доставки</h4></font>
								<div class="billing-field">
									<div class="col-md-6 form-group">
										<label>Фамилия</label>
										<input class="form-control" type="text" id="zakaz-surname" name="surname">
									</div>
									<div class="col-md-6 form-group">
										<label>Имя</label>
										<input class="form-control" type="text" id="zakaz-name" name="name">
									</div>
									<div class="col-md-12 form-group">
										<label>Адрес доставки</label>
										<input class="form-control"  type="text" id="zakaz-adress" name="address">
									</div>
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12 woocommerce-info">
									<input type="checkbox" name="box">
									<label>Сохранить данные</label>
								</div>
								</ul>
					


                    <div class="clearfix"></div>
                    <div class="continue zakaz" data-id="<?php echo $_smarty_tpl->tpl_vars['cartarray']->value;?>
">Заказать</div>
      
					</form>

                    <div class="total-item">
                        <h4>Купоны</h4>
                        <a class="cpns" href="#">Ввести купон</a>
                        <p><a href="#">Подпишитесь на обновления</a> чтобы воспольоваться купонами</p>
                    </div>
                </div>
              <!--  <?php echo '<script'; ?>
>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 <?php echo '</script'; ?>
> -->
                <div class="col-md-9 cart-items">
                    <h1>Корзина товаров</h1>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartarray']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                     <div id="korzina" class="cart-header">

                        <div class="cart-sec simpleCart_shelfItem">

                            <div class="cart-item cyc">
                                <img src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['foto'][0];?>
" class="img-responsive" alt=""/>
                                <div class="close2 myclose" data-id="<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['id'];?>
"> 
                            
                        </div>
                            </div>
                            <div class="cart-item-info">
                                <h3><a href="/single/<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['name'];?>
</a><span><?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['price'];?>
</span></h3>
                                <?php if ($_smarty_tpl->tpl_vars['prod']->value['infor']['issize'] == 1) {?>
                                <ul class="qty">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value['infor']['sizes'], 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                                    <li><p>Размер : <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</p></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                    
                                </ul>
                                <?php }?>

                                <div class="delivery">
                                    <p>Плата за обслуживание: 300 руб</p>
                                    <span>Доставка 2-3 рабочих дня</span>
                                    <div class="clearfix"></div>
                                </div>	
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
