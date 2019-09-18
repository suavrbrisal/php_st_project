<?php
/* Smarty version 3.1.30, created on 2018-03-14 23:47:15
  from "W:\domains\lab15\templates\contact.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa98a530aeeb6_23331689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8c71ece7583a75cb474cd48c7dca7ca6e1e5c2' => 
    array (
      0 => 'W:\\domains\\lab15\\templates\\contact.html',
      1 => 1520785737,
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
function content_5aa98a530aeeb6_23331689 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h2>Контакты</h2>
                <div class="contact-in">
                    <div class=" col-md-3 contact-right">
                        <h5>Информация о компании</h5>
                        <p>Россия, Ростов-на-Дону</p>
                        <p>площадь Гагарина, 1</p>
                        <p>Телефон:+7 999 999 99 99</p>
                        <p>Email: <a href="https://@mail.ru" target="_blank">aaaaaaa@mail.ru</a></p>
                        <p>Мы в сети: <a href="https://vk.com" target="_blank">Вконтакте</a>, <a href="https://instagram.com" target="_blank">Instagram</a></p>
                    </div>
                    <div class=" col-md-9 contact-left">

                        <form >
                            <div>
                                <span>ФИО</span>
                                <input name="userName" type="text" class="textbox">
                            </div>
                            <div>
                                <span>E-Mail</span>
                                <input name="userEmail" type="text" class="textbox">
                            </div>
                            <div>
                                <span>Описание</span>
                                <textarea name="userMsg"> </textarea>
                            </div>
                            <div>
                                <input type="submit" value="Отправить">

                            </div>
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
