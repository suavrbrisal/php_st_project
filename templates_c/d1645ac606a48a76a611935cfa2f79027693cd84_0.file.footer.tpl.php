<?php
/* Smarty version 3.1.30, created on 2018-03-11 21:29:23
  from "C:\OSPanel\domains\localhost\16\LAB\lab15\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa57583c21d08_51547961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1645ac606a48a76a611935cfa2f79027693cd84' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\16\\LAB\\lab15\\templates\\footer.tpl',
      1 => 1520785695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa57583c21d08_51547961 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="/"><img src="/views/images/logo.png" alt=""></a>
				<p class="footer-class">© 2018 </p>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.html">О нас</a> </li>
					<li><a href="contact.html">   Наши контакты</a></li>
					<li ><a href="products.html" >  Наша история</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<ul class="term">
					<li><a href="#">  Отзывы</a> </li>
					<li><a href="#">  Какие мы молдцы</a></li>
					<li ><a href="#" >  Наши успехи</a></li>	
				</ul>
				<ul class="term">
					<li><a href="#">  Все хорошо</a> </li>
					<li><a href="#">  Видео</a></li>
					
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>Оплата осуществляется:</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
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

	</div>
<?php }
}
