<?php
/* Smarty version 3.1.30, created on 2018-03-11 21:34:09
  from "C:\OSPanel\domains\localhost\16\LAB\lab15\templates\checkout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa576a1d4d026_27071974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5817c9c99f3ea017b51b492045a3e25a9ca98b1' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\16\\LAB\\lab15\\templates\\checkout.html',
      1 => 1492862410,
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
function content_5aa576a1d4d026_27071974 (Smarty_Internal_Template $_smarty_tpl) {
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
								</ul>
					


                    <div class="clearfix"></div>
  <a class="continue" href="/zakaz">Заказать</a>
					</form>

                    <div class="total-item">
                        <h4>Купоны</h4>
                        <a class="cpns" href="#">Ввести купон</a>
                        <p><a href="#">Подпишитесь на обновления</a> чтобы воспольоваться купонами</p>
                    </div>
                </div>
                
                <div class="col-md-9 cart-items">
                    <h1>Корзина товаров</h1>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartarray']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                    <div class="cart-header">
                        <div class="myclose" name="tovar" id="tovar" data-id="<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['id'];?>
"> </div>
                        <div class="cart-sec simpleCart_shelfItem">
                            
                            <div class="cart-item cyc">
                                <img src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['foto'][0];?>
" class="img-responsive" alt=""/>
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
