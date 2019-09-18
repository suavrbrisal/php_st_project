<?php
/* Smarty version 3.1.30, created on 2018-03-14 23:55:17
  from "W:\domains\lab15\templates\products.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa98c35c01de5_66278937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '320dd246efa47f9320d9eeea1437858ab28840c0' => 
    array (
      0 => 'W:\\domains\\lab15\\templates\\products.html',
      1 => 1520787315,
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
function content_5aa98c35c01de5_66278937 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
   <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    
    <body>         
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <div class="container">
            <div class="product">
                <h2 class="new">Товары</h2>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupeproducts']->value, 'groupe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
?>
                <div class="pink">  
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupe']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                    <div class="col-md-3 box-in-at">                       
                        <div class=" grid_box portfolio-wrapper">		
                            <a href="/single/<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
" > <img src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['foto'][0];?>
" class="img-responsive" alt="">
                                <?php if ($_smarty_tpl->tpl_vars['prod']->value['issize'] == 1 || $_smarty_tpl->tpl_vars['prod']->value['iscolor'] == 1) {?>
                                <div class="zoom-icon">
                                    <?php if ($_smarty_tpl->tpl_vars['prod']->value['issize'] == 1) {?>
                                    <ul class="in-by">
                                        <li><h5>Размер:</h5></li>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value['sizes'], 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                                        <li><span><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</span></li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                        
                                    </ul>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['prod']->value['iscolor'] == 1) {?>
                                    <ul class="in-by-color">
                                        <li><h5>цвет:</h5></li>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value['colors'], 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
                                        <li><span class="color" style="background: #<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"> </span></li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                        
                                    </ul>
                                    <?php }?>

                                </div>
                                <?php }?>
                            </a> 	
                        </div>                        
                        <!---->
                        <div class="grid_1 simpleCart_shelfItem">
                            <a href="#" class="cup item_add" data-id="<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
"><span class=" item_price" ><?php echo $_smarty_tpl->tpl_vars['prod']->value['price'];?>
 <i> </i> </span></a>					
                        </div>
                        <!---->
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <div class="clearfix"> </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>    
            <!---->
            <div class="col-md-4 box-in-at">
            
            </div>
            <div class="col-md-4 box-in-at">
            <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

            </div>
            <div class="col-md-4 box-in-at">
            
            </div>
        </div>        
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
