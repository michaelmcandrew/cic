<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=true">
</script>

<div id='cross_container'>
<div class='quarter qt ql' id='q1'>
	<h3>Contact details</h3>
	<?php print cic_directory_theme_var('Address', $address_block); ?>
	<?php print cic_directory_theme_var('Phone', $church['phone']); ?>
	<?php print cic_directory_theme_var('Email', $church['email'], 'email'); ?>
	<?php print cic_directory_theme_var('Website', $church['website'], 'url'); ?>
	<?php print cic_directory_theme_var('Contact', $church['contact']); ?>
</div>

<div class='quarter qt qr' id='q2'>
	<h3>About</h3>
	<?php print cic_directory_theme_var('Who we serve', $about['who']); ?>
	<?php print cic_directory_theme_var('County', $about['county']); ?>
	<?php print cic_directory_theme_var('Council', $about['dbc']); ?>
	<?php print cic_directory_theme_var('Ward', $about['ward']); ?>
	<?php print cic_directory_theme_var('Circuit', $about['circuit']); ?>
	<?php print cic_directory_theme_var('District', $about['district']); ?>	
</div>

<div class='quarter qb ql' id='q3'>
	<h3>Maps and links</h3>
	<?php print cic_directory_theme_var('', $links['map_link'], 'image', $links['map_link_image']); ?>	
	<?php print cic_directory_theme_var('', $links['ons'], 'image', $links['ons_image']); ?>	
	<?php print cic_directory_theme_var('', $links['stats'], 'image', $links['stats_image']); ?>	
	</div>

<div class='quarter qb qr' id='q4'>
	<h3>Documents</h3>
	<?php print cic_directory_theme_var('', $docs['1']); ?>	
	<?php print cic_directory_theme_var('', $docs['2']); ?>	
	<?php print cic_directory_theme_var('', $docs['3']); ?>	
</div>
</div>
<div id='cross_footer'></div>
