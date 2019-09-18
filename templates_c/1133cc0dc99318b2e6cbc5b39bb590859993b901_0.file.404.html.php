<?php
/* Smarty version 3.1.30, created on 2018-03-14 23:38:23
  from "W:\domains\lab15\templates\404.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa9883f9e59e5_99828478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1133cc0dc99318b2e6cbc5b39bb590859993b901' => 
    array (
      0 => 'W:\\domains\\lab15\\templates\\404.html',
      1 => 1520785357,
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
function content_5aa9883f9e59e5_99828478 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    
    <body> 

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
        
        <div class="container">
            <div class="four">
                <h1>404</h1>

                <p>Страница не работает</p>

                <a href="index.html" class="more go">Назад</a>

            </div>
        </div>
        
       <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
