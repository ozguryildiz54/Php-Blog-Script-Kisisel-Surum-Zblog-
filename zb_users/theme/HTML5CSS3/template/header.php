<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>{$name}-{$title}</title>
	<meta name="generator" content="{$zblogphp}" />
	<meta name="renderer" content="webkit" />
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
	<script src="{$host}zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/zblogphp.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="{$host}zb_users/theme/{$theme}/script/common.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1000,fadeduration:[500,100]},controlHTML:'<img src="{$host}zb_users/theme/HTML5CSS3/img/yukaricik.png" style="width:48px; height:48px" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:'#top',state:{isvisible:false,shouldvisible:false},scrollup:function(){if(!this.cssfixedsupport)this.$control.css({opacity:0})
		var dest=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto)
		if(typeof dest=="string"&&jQuery('#'+dest).length==1)dest=jQuery('#'+dest).offset().top
		else
		dest=0
		this.$body.animate({scrollTop:dest},this.setting.scrollduration);},keepfixed:function(){var $window=jQuery(window)
		var controlx=$window.scrollLeft()+$window.width()-this.$control.width()-this.controlattrs.offsetx
		var controly=$window.scrollTop()+$window.height()-this.$control.height()-this.controlattrs.offsety
		this.$control.css({left:controlx+'px',top:controly+'px'})},togglecontrol:function(){var scrolltop=jQuery(window).scrollTop()
		if(!this.cssfixedsupport)this.keepfixed()
		this.state.shouldvisible=(scrolltop>=this.setting.startline)?true:false
		if(this.state.shouldvisible&&!this.state.isvisible){this.$control.stop().animate({opacity:1},this.setting.fadeduration[0])
		this.state.isvisible=true}else if(this.state.shouldvisible==false&&this.state.isvisible){this.$control.stop().animate({opacity:0},this.setting.fadeduration[1])
		this.state.isvisible=false}},init:function(){jQuery(document).ready(function($){var mainobj=scrolltotop
		var iebrws=document.all
		mainobj.cssfixedsupport=!iebrws||iebrws&&document.compatMode=="CSS1Compat"&&window.XMLHttpRequest
		mainobj.$body=(window.opera)?(document.compatMode=="CSS1Compat"?$('html'):$('body')):$('html,body')
		mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>').css({position:mainobj.cssfixedsupport?'fixed':'absolute',bottom:mainobj.controlattrs.offsety,right:mainobj.controlattrs.offsetx,opacity:0,cursor:'pointer'}).attr({title:''}).click(function(){mainobj.scrollup();return false}).appendTo('body')
		if(document.all&&!window.XMLHttpRequest&&mainobj.$control.text()!='')mainobj.$control.css({width:mainobj.$control.width()})
		mainobj.togglecontrol()
		$('a[href="'+mainobj.anchorkeyword+'"]').click(function(){mainobj.scrollup()
		return false})
		$(window).bind('scroll resize',function(e){mainobj.togglecontrol()})})}}
		scrolltotop.init()
	</script>
	
	<style type="text/css">

		.social {
		  text-align: center;
		  font-size: 2.5em;
		  color: #555;
		  overflow: hidden;

		  a {
			color: inherit;
			text-decoration: none;
		  }
		  
		  i {
			margin: .3em;
			cursor: pointer;
			transition: color 300ms ease, margin-top 300ms ease;
			transform: translateZ(0);	
		  }
		}

  </style>
		
	<div class="social">
	  
	  <a href="https://www.facebook.com/yildizozgur54" target="_blank">
		<i class="icon-facebook-sign" style="color:#3b5998;"></i>
	  </a>
	  
	  <a href="https://twitter.com/ozguryildiz54" target="_blank">
		<i class="icon-twitter" style="color:#77DDF6;"></i>
	  </a>
	  
	  <a href="https://www.instagram.com/ozguryildiz54/" target="_blank">
		<i class="icon-instagram" style="color:#fbad50;"></i>
	  </a>
	  
	  <a href="https://www.youtube.com/channel/UC_rbURmZlgwLv1v9KNZKtTw?disable_polymer=true" target="_blank">
		<i class="icon-youtube-sign" style="color:#cc181e;"></i>
	  </a>
	  
	  <a href="https://github.com/ozguryildiz54" target="_blank">
		<i class="icon-github" style="color:black;"></i>
	  </a>
	  
	  <a href="https://stackoverflow.com/users/8563925/%C3%96zg%C3%BCr-yildiz" target="_blank">
		<i class="icon-stackexchange" style="color:#ED780E;"></i>
	  </a>
	  
	  <a href="https://www.linkedin.com/in/ozguryildiz54" target="_blank">
		<i class="icon-linkedin-sign" style="color:#0177B5;"></i>
	  </a>
	  
	  <a href="https://plus.google.com/107872125696555801414" target="_blank">
		<i class="icon-google-plus-sign" style="color:#D43402;"></i>
	  </a>
	  
	  <a href="mailto:ozguryildiz.ada@gmail.com" target="_blank">
		<i class="icon-envelope" style="color:#F7B401;"></i> 
	  </a>
	  
	</div>
	</br>
		
{$header}
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" /> 
{/if}

</head>



