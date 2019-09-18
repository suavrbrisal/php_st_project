<?php
/* Smarty version 3.1.30, created on 2018-03-24 20:41:33
  from "C:\OSPanel\domains\18\lab15\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab68dcddb0cc4_57263677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce57d39485312c29698f7b43fe6da88750c4b5f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\18\\lab15\\templates\\footer.tpl',
      1 => 1521666546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab68dcddb0cc4_57263677 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="http://intermag/"><img src="../views/images/logo.jpg" alt=""></a>
				<p class="footer-class">©Кривошеина МКИС31<a href="" target="_blank"></a> </p>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.html">О Нас</a> </li>
					<li><a href="contact.html">Свяжитесь с нами</a></li>
					<li ><a href="products.html" >Наши магазины</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<ul class="term">
					<li><a href="#">Условия и положения</a> </li>
					<li><a href="#">Мы в прессе</a></li>
					<li ><a href="#" >Отзывы</a></li>	
				</ul>
				<ul class="term">
					<li><a href="#">Присоединяйтесь к нам</a> </li>
					<li><a href="#">Веселые видосики</a></li>
					
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>Совершайте покупки вместе с нами</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
                                        <li ><a href="#" ><i class="we-at-at"> </i></a></li>
                                        <li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					<?php echo '</script'; ?>
>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div><?php }
}
