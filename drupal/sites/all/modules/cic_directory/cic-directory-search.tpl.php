
<div id='form'>



</div>

<?php if(isset($results)): ?>
	<?php echo $form; ?>
	<?php if($results['count']>0): ?>
		
		<div id='results'>
		<p>The following Churches match your query:</p>

		<div id='table'>
			<?php echo $results['table']; ?>
		</div>

		<?php if(isset($pager)): ?>

			<div id='pager'>
				<?php echo $pager; ?>
			</div>


		<?php endif; ?>
		
	<?php else: ?>
		
		<p><i>Sorry, your search did not match any churches or projects.</i></p>
		<p>Suggestions:</p>
		<ul>
			<li>Try fewer search words and criteria</li>
			<li>Make sure search words are spelt correctly</li>
		</ul>
		
	<?php endif; ?>

<?php else: ?>
	<p>Welcome to Commitment in Communities’ (CiC) database. This facility has been provided to enable easy access to a range of information on Methodist Churches and projects, and ecumenical and partnership working with other faiths and organisations.</p>
	<p>The information available is as current as we can make it but in the event that you have more up-to-date information on your church or project, please let us know by <a href="http://www.c-i-c.org.uk/contact.html">contacting CiC</a>. Also, as feedback is very important to us, please use the <a href="http://www.c-i-c.org.uk/request.html">comment form on our website</a> to let us know how the facility is performing or to provide suggestions on how to improve it.</p>
	<?php echo $form; ?>
	
	<!-- add any intro text here if desired -->
<?php endif; ?>

