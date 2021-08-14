<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>
<div class="main-im">  
<div id="open_im" onclick="open_im()" class="open-im">&nbsp;</div>
<div class="im_main" id="im_main">
<div id="close_im" onclick="close_im()" class="close-im"><a href="javascript:void(0);" title="点击关闭" style="text-decoration: none;" data-wpel-link="internal">&nbsp;</a></div>
<a href="http://wpa.qq.com/msgrd?v=3&uin=757534571&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="产品销售咨询" data-wpel-link="external" rel="nofollow external noopener noreferrer"> <span>QQ技术咨询</span>
<div class="qq-container"></div>
<div class="qq-hover-c"><img class="img-qq" src="http://test.smurfgod.com:8081/wp-content/uploads/2021/08/qq.png"></div>
</a>
<div class="im-tel">
	<div class="b2b">
	<div>大咖咨询</div>
	<div class="tel-num"> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=757534571&site=qq&menu=yes" data-wpel-link="external" rel="nofollow external noopener noreferrer"><img border="0" src="http://test.smurfgod.com:8081/wp-content/uploads/2021/08/qq_ico.png" alt="开源产品"></a></div>
	<div class="tel-num"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=757534571&site=qq&menu=yes" alt="定制产品"></a></div>
	</div>
	<div class="solution">
	<div class="tel-num" style="margin:16px 0px 6px"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=757534571&site=qq&menu=yes" data-wpel-link="external" rel="nofollow external noopener noreferrer"><img border="0" src="http://test.smurfgod.com:8081/wp-content/uploads/2021/08/qq_ico.png" alt="解决方案"></a></div>
	</div>
	<div class="b2b">
	<div>售后服务</div>
	<div class="tel-num"><a target="_blank" href="//qm.qq.com/cgi-bin/qm/qr?k=I4CFUlRyR6NrwXVrtoJR_R_eXYSw7-XT&amp;jump_from=webapi" data-wpel-link="external" rel="nofollow external noopener noreferrer"><img border="0" src="http://test.smurfgod.com:8081/wp-content/uploads/2021/08/group.png" alt="售后服务"></a></div>
	</div>
</div>
<div class="im-footer" style="position:relative">
	<div class="weixing-container" onmousemove="weixinShow()" onmouseout="weixinHide()">
	<div class="weixing-show" id="weixing-show" style="display: none;">
		<div class="weixing-txt">13024522122<br>微信扫一扫<br>
		游戏大咖微信</div>
		<img class="weixing-ma" src="http://test.smurfgod.com:8081/wp-content/uploads/2021/08/015e5f45a6-400x400-1-150x150.jpeg">
		<div class="weixing-sanjiao"></div>
		<div class="weixing-sanjiao-big"></div>
	</div>
	</div>
	<div class="go-top"><a href="#" title="返回顶部"></a> </div>
	<div style="clear:both"></div>
</div>
</div>
</div>
<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<script>
var im_div=document.getElementById("im_main");
var openim_div=document.getElementById("open_im");
var weixin_div=document.getElementById("weixing-show");

  function close_im(){
    im_div.style.display="none";
    openim_div.style.display="block";
  }
  function open_im(){
    im_div.style.display="block";
    openim_div.style.display="none";
  }
  function weixinShow(){
   
    weixin_div.style.display="block";
  }
  function weixinHide(){
    weixin_div.style.display="none";
  }
</script>
<div 
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>
	<?php 
	astra_header_before(); 

	astra_header(); 

	astra_header_after();

	astra_content_before(); 
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
