<?php
/* Smarty version 3.1.30, created on 2018-03-21 23:42:51
  from "C:\OSPanel\domains\lab15\templates\404.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab2c3cbe7fb39_95575859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40a481801b5a20ddf0a296b3105061e324ba4619' => 
    array (
      0 => 'C:\\OSPanel\\domains\\lab15\\templates\\404.html',
      1 => 1520785358,
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
function content_5ab2c3cbe7fb39_95575859 (Smarty_Internal_Template $_smarty_tpl) {
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
