<?php
/* Smarty version 3.1.30, created on 2018-03-11 21:32:06
  from "C:\OSPanel\domains\localhost\16\LAB\lab15\templates\single.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa57626cacd51_87271481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ffca30bd58eed1a119ffcc137769c0a27366fcb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\16\\LAB\\lab15\\templates\\single.html',
      1 => 1489945844,
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
function content_5aa57626cacd51_87271481 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
        <link rel="stylesheet" href="/views/css/etalage.css">
        <?php echo '<script'; ?>
 src="/views/scripts/jquery.etalage.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            jQuery(document).ready(function ($) {

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });

            });
        <?php echo '</script'; ?>
>
    </head>


    <body> 

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="content">
            <div class="container">
                <div class="single">
                    <div class="col-md-9 top-in-single">
                        <div class="col-md-5 single-top">	
                            <ul id="etalage">                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['foto'], 'path');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
?>
                                <li>
                                    <a href="#">
                                        <img class="etalage_thumb_image img-responsive" src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" alt="" >
                                        <img class="etalage_source_image img-responsive" src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" alt="" >
                                    </a>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                              
                            </ul>
                        </div>	
                        <div class="col-md-7 single-top-in">
                            <div class="single-para">
                                <h4><?php echo $_smarty_tpl->tpl_vars['value']->value['fullname'];?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['value']->value['smalldiscription'];?>
</p>
                                <div class="star-on">
                                    <ul>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#"> 30 просмотра/ов </a>/
                                        <a href="#">  Написать отзыв</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                                <label  class="add-to"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</label>

                                <div class="available">
                                    <h6>Доступные варианты:</h6>
                                    <ul>
                                        <li>Размер:<select>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['sizes'], 'sise');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sise']->value) {
?>
                                                <option><?php echo $_smarty_tpl->tpl_vars['sise']->value;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                                
                                            </select></li>
                                        <li>Цена указана в:
                                            <select>
                                                <option>Руб</option>
                                                <option>U.S.Dollar</option>
                                                <option>Euro</option>
                                            </select></li>
                                    </ul>
                                </div>

                                <a href="#" class="cart item_add" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">Добавить в покупки</a>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <!----- tabs-box ---->
                        <div class="sap_tabs">	
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list">
                                    <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Описание</span></li>
                                    <div class="clearfix"></div>
                                </ul>				  	 
                                <div class="resp-tabs-container">
                                    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Описание</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                        <div class="facts">
                                            <p > <?php echo $_smarty_tpl->tpl_vars['value']->value['opis'];?>
</p>
                                                  
                                        </div>
                                    </div>
									</div>
                                    </div>
                            <?php echo '<script'; ?>
 src="/views/scripts/easyResponsiveTabs.js" type="text/javascript"><?php echo '</script'; ?>
>
                            <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', /Types: default, vertical, accordion           
                width: 'auto', /auto or any width like 600px
                fit: true   / 100% fit in a container
            });
        });
                            <?php echo '</script'; ?>
>	
                        </div>
                    </div>
                    <div class="col-md-3 at-single">
                        <div class="single-bottom">
                            <h4>Бренды</h4>
                            <ul>
                                <?php $_smarty_tpl->_assignInScope('i', 0);
?>
                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['brends'], 'brend');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brend']->value) {
?>
                                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                                <li>
                                    <input type="checkbox"  id="brand<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="">
                                    <label for="brand<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span></span><?php echo $_smarty_tpl->tpl_vars['brend']->value['name'];?>
</label>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                
                            </ul>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['iscolor'] == 1) {?>
                        <div class="single-bottom">
                            <h4>Цвета</h4>
                            <?php $_smarty_tpl->_assignInScope('i', 0);
?>
                            <ul> 
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['colors'], 'col');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
?>
                                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                                <li>
                                    <input type="checkbox"  id ="color<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"  value=""><label for="color<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="color: #<?php echo $_smarty_tpl->tpl_vars['col']->value['colorkod'];?>
"><span></span><?php echo $_smarty_tpl->tpl_vars['col']->value['colorname'];?>
</label>
                                </li> 
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                            </ul>                           
                        </div>
                        <?php }?>
                        <div class="single-bottom">
                            <h4>Похожие товары</h4>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['categoryproduct'], 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                            <div class="product-go">
                                <img class="img-responsive fashion" src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['foto'][0];?>
" alt="">
                                <div class="grid-product">
                                    <a href="/single/<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
" class="elit"><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
</a>
                                    <span class=" price-in"><small><?php echo $_smarty_tpl->tpl_vars['prod']->value['price'];?>
</small><?php echo $_smarty_tpl->tpl_vars['prod']->value['price'];?>
</span>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                    <div class="clearfix"> </div>		
                </div>


            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
