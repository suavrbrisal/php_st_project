<?php
/* Smarty version 3.1.30, created on 2018-03-21 23:42:51
  from "C:\OSPanel\domains\lab15\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab2c3cb085839_79105283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '042cc8d44279e2c112b4caca9158f5b675244548' => 
    array (
      0 => 'C:\\OSPanel\\domains\\lab15\\templates\\banner.tpl',
      1 => 1521145728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab2c3cb085839_79105283 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--banner-->
<div class="banner">
    <div class="container">	
        <div class="wmuSlider example1">
            <div class="wmuSliderWrapper">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discountarray']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <article style="position: absolute; width: 100%; opacity: 0;"> 
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="single/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                                <div class="banner-top-in">
                                    <img src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['value']->value['foto'][0];?>
" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span class="item_price" ><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
 <i> </i> </span></div>
                                <div class="off">
                                    <label><?php echo $_smarty_tpl->tpl_vars['value']->value['discount'];?>
%</label>
                                    <p><?php echo $_smarty_tpl->tpl_vars['value']->value['fullname'];?>
</p>
                                </div>
                                
                            </div>
                            

                        </div>
						

                        

                        

                    </div>
                                 
                           <div class="clearfix"> </div>     
                               
                </article>
                                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                              
            </div>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
                <li><a href="#" class="">1</a></li>
                <li><a href="#" class="wmuActive">2</a></li>
            </ul>
        </div>
        <!---->
        <?php echo '<script'; ?>
 src="/views/scripts/jquery.wmuSlider.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
>
            $('.example1').wmuSlider({
                pagination: true,
                nav: false,
            });
        <?php echo '</script'; ?>
> 	

    </div>   
</div>
<?php }
}
