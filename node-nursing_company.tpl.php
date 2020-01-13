<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
#echo '<pre>';print_r($node->field_image);echo '</pre>';
?>

<div id="node-<?php print $node->nid; ?>"	class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
  <?php #print $picture ?>
  <?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
  <!--<?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted; ?></span>
  <?php endif; ?>-->
  <div class="content-left clear-block">
    <div class="sub-title"><?php print $node->field_title[0]['value'];?></div>
    <div class="company-details"><?php print $node->content['body']['#value']; ?></div>
    <?php if($node->field_image[0]['view']){?>
    <div class="image-block">
      <div class="title-heading"><?php print t('Zur vergr&ouml;&szlig;ern bewegen Sie tittle den Mauszeiger &uuml;ber das entsprechende Bid');?></div>
      <div id="large-image"><img	src="/<?php print $node->field_image[0]['filepath']?>" class="start"	width="400" height="300"	title="<?php print $node->field_image[0]['data']['description']?>"	alt="<?php print $node->field_image[0]['data']['description']?>"	border="0"></div>
      <div class="thumbs">
        <?php foreach ($node->field_image as $key => $value){
	$image_thumb = explode('/', $node->field_image[$key]['filepath']);
	?>
        <a class="gallery" href="#nogo"> <img	src="/sites/default/files/imagefield_thumbs/<?php print $image_thumb[count($image_thumb)-1]?>"	alt="<?php print $node->field_image[$key]['data']['description']?>"	title="<?php print $node->field_image[$key]['data']['description']?>"	border="0" height="73" width="100"> <em><img	src="/<?php print $node->field_image[$key]['filepath']?>"	title="<?php print $node->field_image[$key]['data']['description']?>"	alt="<?php print $node->field_image[$key]['data']['description']?>"	border="0" height="300" width="400"></em> </a>
        <?php }?>
      </div>
      <div class="clear"></div>
    </div>
    <?php }?>
    <div class="title-heading"><?php print t('Leistungsspektrum')?></div>
    <ul id="service-list">
      <?php foreach ($node->field_service_list as $a_service_list){
	$service_list[] = $a_service_list['value'];
}
?>
      <li>
        <div		class="<?php echo (in_array(1, $service_list)?'selected':'unselected')?> txtline"><?php print t('Krankenkassenzulassung');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(2, $service_list)?'selected':'unselected')?> txtline"><?php print t('Hauskrankenpflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(3, $service_list)?'selected':'unselected')?> txtline"><?php print t('Kinderkrankenpflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(4, $service_list)?'selected':'unselected')?> txtline"><?php print t('Intensivpflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(5, $service_list)?'selected':'unselected')?> txtline"><?php print t('Vollzeitpflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(6, $service_list)?'selected':'unselected')?> txtline"><?php print t('Kurzzeitpflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(7, $service_list)?'selected':'unselected')?> txtline"><?php print t('Tagespflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(8, $service_list)?'selected':'unselected')?> txtline"><?php print t('Stationäre Pflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(9, $service_list)?'selected':'unselected')?> txtline"><?php print t('Hausnotruf');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(10, $service_list)?'selected':'unselected')?> txtline"><?php print t('Rheaklinik');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(11, $service_list)?'selected':'unselected')?> txtline"><?php print t('Therapieangebote');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(12, $service_list)?'selected':'unselected')?> txtline"><?php print t('Hauswirtschaftliche Versorgung');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(13, $service_list)?'selected':'unselected')?> txtline"><?php print t('Essen auf Räder');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(14, $service_list)?'selected':'unselected')?> txtline"><?php print t('Fußpflege');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(15, $service_list)?'selected':'unselected')?> txtline"><?php print t('Betreutes Wohnen');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(16, $service_list)?'selected':'unselected')?> txtline"><?php print t('Sterbebegleitung');?></div>
      </li>
      <li>
        <div		class="<?php echo (in_array(16, $service_list)?'selected':'unselected')?> txtline"><?php print t('Kursangebote für Angehörige');?></div>
      </li>
    </ul>
  </div>
  <div class="content-right clear-block"><!-- <div id="map" style="width:280px;height:200px; overflow:hidden; margin:0px"></div> -->
    <style type="text/css">
v:* {	behavior: url(#default#VML);}
</style>
    <script type="text/javascript"	src="/sites/all/themes/finde/scripts/ym4r-gm.js"></script> <script	src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAO9NFOOS4peIaFnoV619hmhQY_PVlW6iZ5J6l2O49SMJi0jbMfhSc584mGCduI6DJCvmQP8EaMpRIpw"	type="text/javascript"></script> <script type="text/javascript">		/*var latitude = '<?php print $node->field_latitude[0]['value']?>';		var longitude = '<?php print $node->field_longitude[0]['value']?>';		var map;		if(latitude && longitude){			window.onload = addCodeToFunction(window.onload,function() {				if (GBrowserIsCompatible()) {					map = new GMap2(document.getElementById("map"));					map.setCenter(new GLatLng(latitude,longitude),11);					map.addOverlay(addInfoWindowToMarker(new GMarker(new GLatLng(latitude,longitude),{title : "<?php print $node->title?>"}),"<div style='line-height:18px'><h4 style='padding:0px; margin:0px'>Address</h4><br> <?php print $node->field_street[0]['value']?>  </div>",{}));					map.addControl(new GMapTypeControl());				}			});		}*/
	</script>
    <div class="title-heading"><?php print t('Contact')?></div>
    <div><?php print $node->field_street[0]['value']?></div>
    <div><?php print $node->field_zip_code[0]['value']?></div>
    <div><?php print $node->field_city[0]['value']?></div>
    <div><?php print t('Tel')?>: <?php print $node->field_phone[0]['value']?></div>
    <div><?php print t('Fax')?>: <?php print $node->field_fax[0]['value']?></div>
    <div style="margin-top: 40px;"><a style="color: #BC63AB" href="mailto:<?php print $node->field_email_address[0]['value'] ?>?Subject=Anfrage von Pflegedienst.de"><strong>E-mailan den Pflegedienst senden</strong></a></div>
    <div><a style="color: #BC63AB"	href="<?php print $node->field_homepage[0]['value']?>"><strong>Homepage des Pflegedienstes aufrufen</strong></a></div>
    <?php /*?>    <div><a style="color:#BC63AB" href="http://www.<?php print $title ?>.de"><strong>Pflegedienst auf den Merkzellel setzen</strong></a></div><?php */?>
    <?php if($node->is_listed){?>
    <div style="margin-top: 10px"><a rel="nofollow" href="/wishlist">Pflegedienstgespeichert (Merkzettel aufrufen)</a></div>
    <?php }else{?>
    <div style="margin-top: 10px"><a rel="nofollow"	href="/add_to_wishlist/<?php print $node->nid;?>">Zum Merkzettelhinzuf&uuml;gen</a></div>
    <?php }?>
    <div id="tellform">
      <h3>Empfehlen Sie diese Pflegedienst <br />
        Ihren Freunden & Bekannten
        </h>
      </h3>
      <div class="messages error"></div>
      <form id="forward-form" name="forward-form" method="post"	accept-charset="UTF-8"	action="/forward?path=node/<?php echo $node->nid?>">
        Ihr Name *: <br>
        <input id="edit-name" name="name" class="fld_tell required"	maxlength="80" type="text">
        <br>
        Ihre eMail *:<br>
        <input id="edit-email" name="email" class="fld_tell required"	maxlength="80" type="text">
        <br>
        Empfauml;nger Name *:<br>
        <input id="edit-recipientname" name="recipientname"	class="fld_tell required" maxlength="80" type="text">
        <br>
        Empf&auml;nger Email *:<br>
        <input id="edit-recipients" name="recipients" class="fld_tell required"	maxlength="80" type="text">
        <br>
        <?php $theme_path = drupal_get_path('theme', 'finde');?>
        <input	id="edit-submit" src="/<?php echo $theme_path?>/images/submit3.png"	name="submit" value="Sauna empfehlen" type="image">
        <input	type="hidden" value="node/<?php echo $node->nid?>" id="edit-path"	name="path">
        <input type="hidden" value="" id="edit-path-cid"	name="path_cid">
        <input type="hidden" value=" "	id="edit-forward-footer" name="forward_footer">
        <!--<input type="submit" class="form-submit" value="Send Message" id="edit-submit" name="op">-->
        <input type="hidden" value="form-94033345b5428c3e91bb5f24dbe4b905"	id="form-94033345b5428c3e91bb5f24dbe4b905" name="form_build_id">
        <input	type="hidden" value="<?php echo drupal_get_token('forward_form');?>"	id="edit-forward-form-form-token" name="form_token">
        <input	type="hidden" value="forward_form" id="edit-forward-form"	name="form_id">
      </form>
    </div>
  </div>
  <div class="clear-block">
    <div class="meta">
      <?php if ($taxonomy): ?>
      <div class="terms"><?php print $terms ?></div>
      <?php endif;?>
    </div>
    <?php if ($links): ?>
    <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>
</div>
