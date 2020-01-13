<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php print $head ?>
<title><?php print $head_title ?></title>
<?php print $styles ?><?php print $scripts ?>
<?php $theme_path = base_path().drupal_get_path('theme', variable_get('theme_default','none'));?>
<!--[if lt IE 7]>
    <style type="text/css">
        img, div, a, input { behavior: url(<?php print $theme_path;?>/js/iepngfix.htc) }
    </style>
    <script type="text/javascript" src="<?php print $theme_path;?>/js/iepngfix_tilebg.js"></script>
    <![endif]-->
</head>
<body class="main-body">
<div id="wrapper_body">
<div id="wrapperMain">
  <div id="header">
    <div class="logo"><a href="<?php print $front_page ?>"><img src="<?php print $theme_path;?>/images/logo.png" alt="Logo" width="249" height="102" border="0" /></a></div>	<?php if($wishlist){?>
    <div class="wishlist"><?php print $wishlist;?></div>    <?php }?>
  </div>  
  <div id="banner">
    <div class="banner_left">
      <div class="banner_menu">
        <ul>
          <li><!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4d7e3cff0f539c33" class="addthis_button_compact">Weiterempfehlen</a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4d7e3cff0f539c33"></script>
<!-- AddThis Button END --></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="/print<?php echo $_SERVER["REQUEST_URI"];?>">Drucken</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a title="AGB" href="/wishlist" >Merkzettel</a></li>
        </ul>
      </div>
      <div class="banner_text"><a href="<?php print $front_page ?>"><img src="<?php print $theme_path;?>/images/banner_text.png" alt="" width="378" height="86" border="0" /></a></div>
    </div>
    <div class="banner_image"></div>
  </div>
  <div id="menu">
  	<?php global $user;?>
  	<ul class="links primary-links"><li class="menu-231 first"><a title="" href="/">Sartseite</a></li>
	<li class="menu-263"><a title="Pflegestufen" href="/content/pflegestufen">Pflegestufen</a></li>
	<li class="menu-264"><a title="Neuigkeiten" href="/content/neuigkeiten">Neuigkeiten</a></li>
	<?php if(!$user->uid){?>
	<li class="menu-237"><a title="" href="/nursing_register">Pflegedienst anmelden</a></li>
	<?php }else{?>
	<li class="menu-237"><a title="" href="/nursing_register">Mein Profil</a></li>
	<?php }?>
	<li class="menu-265"><a title="Funktion" href="/node/4">Funktion</a></li>
	<?php if(!$user->uid){?>
	<li class="menu-239 last"><a title="" href="/nursing/login">Pflegedienst login</a></li>
	<?php }else{?>
	<li class="menu-239 last"><a title="" href="/logout">Abmelden</a></li>
	<?php }?>
	</ul>
    <?php if (isset($primary_links)) : ?>
    <?php #print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
    <?php endif; ?>
    <?php if (isset($secondary_links)) : ?>
    <?php #print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
    <?php endif; ?>
  </div>
  <div id="container_wrapper">
    <div class="container_left" <?php if($is_front){print 'id="contentCol"';}?>>
      <div id="container">
      <?php if ($left): ?>
      <div id="sidebar-left" class="sidebar"> <?php print $left ?> </div>
      <?php endif; ?>
      <div class="content">
        <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>		<?php if(variable_get($_SERVER["REQUEST_URI"],'') == ''){			variable_set($_SERVER["REQUEST_URI"], $title);		}?>
        <?php if ($title && !$is_front):?>
        <h1><?php print $title;?></h1>
        <?php endif; ?>
        <?php if ($tabs && !$is_front): print '<div><ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
        <?php if ($tabs2 && !$is_front): print '<div><ul class="tabs secondary">'. $tabs2 .'</ul></div>'; endif; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
        <?php print $help; ?>
        <div class="clear-block"> <?php print $content ?> </div>
        <?php print $feed_icons ?> </div>
      <?php if ($right): ?>
      <div id="sidebar-right" class="sidebar"> <?php print $right ?> </div>
      <?php endif; ?>
    </div>	<?php if ($content_middle): ?>      <div id="content-middle"> <?php print $content_middle; ?> </div>      <?php endif; ?>
    <?php if($is_front){?>      
      <?php }?>
    </div>
    <?php if($is_front){?>
    <div class="container_right">
      <div id="flashContent">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="450" height="500" id="ToolTipfla" align="middle">
          <param name="movie" value="ToolTipfla.swf" />
          <param name="quality" value="high" />
          <param name="bgcolor" value="#ffffff" />
          <param name="play" value="true" />
          <param name="loop" value="true" />
          <param name="wmode" value="window" />
          <param name="scale" value="showall" />
          <param name="menu" value="true" />
          <param name="devicefont" value="false" />
          <param name="salign" value="" />
          <param name="allowScriptAccess" value="sameDomain" />
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="ToolTipfla.swf" width="450" height="500">
            <param name="movie" value="ToolTipfla.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#ffffff" />
            <param name="play" value="true" />
            <param name="loop" value="true" />
            <param name="wmode" value="window" />
            <param name="scale" value="showall" />
            <param name="menu" value="true" />
            <param name="devicefont" value="false" />
            <param name="salign" value="" />
            <param name="allowScriptAccess" value="sameDomain" />
            <!--<![endif]--> 
            <a href="http://www.adobe.com/go/getflash"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /> </a> 
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
      </div>
    </div>
     <?php }?>
  </div>
</div>
<div style="clear:both"></div>
<div id="footerWrap">
  <div id="footer">
    <div class="moduletable-copy">(c) Copyright 2011 FindePflegedienst. All Rights Reserved.</div>
    <div class="moduletable-fnav">
      <ul>
        <li><a href="/content/nutzungsbedingungen">Nutzungsbedingungen</a></li>
        <li><a href="/content/agb">AGB</a></li>
        <li><a href="/content/impressum">Impressum</a></li>
        <li><a href="/contact">Kontakt</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php print $closure ?>
</div>
</body>
</html>
