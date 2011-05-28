<div id='cross_container'>
<div class='quarter qt ql' id='q1'>
	<h3>Contact details</h3>
	<?php print cic_directory_theme_var('Address', $address_block); ?>
	<?php print cic_directory_theme_var('Phone', $church['phone']); ?>
	<?php print cic_directory_theme_var('Email', $church['email'], 'email'); ?>
	<?php print cic_directory_theme_var('Website', $church['website'], 'url'); ?>
	<?php print cic_directory_theme_var('Contact', $church['contact']); ?>
	<?php print cic_directory_theme_var('County', $about['county']); ?>
	<?php print cic_directory_theme_var('Council', $about['dbc']); ?>
	<?php print cic_directory_theme_var('Ward', $about['ward']); ?>
	<?php print cic_directory_theme_var('Circuit', $about['circuit']); ?>
	<?php print cic_directory_theme_var('District', $about['district']); ?>	
</div>

<div class='quarter qt qr' id='q2'>
	<h3>About</h3>
	<?php print cic_directory_theme_var('Who we serve', $about['who']); ?>
	<?php print cic_directory_theme_var('What we do', $about['what']); ?>
</div>

<div class='quarter qb ql' id='q3'>
	<h3>Maps and links</h3>
	<?php print cic_directory_theme_var('Google map', $links['map'], 'url', array('type'=>'image','file'=>'globe.png')); ?>	
	<?php print cic_directory_theme_var('Stats for mission', $links['stats'], 'url', array('type'=>'image','file'=>'s4m.png')); ?>	
	<?php print cic_directory_theme_var('ONS statistics', $links['ons'], 'url', array('type'=>'image','file'=>'stats.png')); ?>	
	</div>

<div class='quarter qb qr' id='q4'>
	<h3>Documents</h3>
	<?php print cic_directory_theme_var('', $docs['none']); ?>	
	<?php print cic_directory_theme_var('', $docs['1']); ?>	
	<?php print cic_directory_theme_var('', $docs['2']); ?>	
	<?php print cic_directory_theme_var('', $docs['3']); ?>	
</div>
</div>
<div id='cross_footer'></div>
