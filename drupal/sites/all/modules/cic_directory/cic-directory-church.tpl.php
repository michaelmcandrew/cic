<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=true">
</script>

<div id='cross_container'>
<div class='quarter' id='q1'>
	<h3>Contact details</h3>
	<h4>Address</h4>
	<p><?php print $address_block; ?></p>
	<h4>Phone</h4>
	<p><?php print $church['phone']; ?></p>
	<h4>Email</h4>
	<p><?php print $church['email']; ?></p>
	<h4>Website</h4>
	<p><?php print $church['home_url'] ?></p>
	</div>

<div class='quarter' id='q2'>
	<h3>About</h3>
	<h4>Who we serve</h4>
	<p><?php print $about['who']; ?></p>	
	<h4>County</h4>
	<p><?php print $about['county']; ?></p>	
	<h4>District/Borough/Council</h4>
	<p><?php print $about['dbc']; ?></p>
	<h4>Ward</h4>
	<p><?php print $about['ward']; ?></p>
	<h4>Circuit</h4>
	<p><?php print $about['circuit']; ?></p>
	<h4>District</h4>
	<p><?php print $about['district']; ?></p>
	
</div>

<div class='quarter' id='q3'>
	<h3>Maps and links</h3>
 	<div id="map_canvas"></div>
	<p><?php print $links['ons']; ?></p>
</div>

<div class='quarter' id='q4'>
	<h3>Documents</h3>
	<p><a href="<?php print $docs['1']; ?>">Document 1</a></p>
	<p><a href="<?php print $docs['2']; ?>">Document 2</a></p>
	<p><a href="<?php print $docs['3']; ?>">Document 3</a></p>
</div>
</div>
<div id='cross_footer'></div>
