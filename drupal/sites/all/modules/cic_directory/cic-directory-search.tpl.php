
<div id='form'>


<?php echo $form; ?>

</div>

<?php if(isset($results)): ?>

	<div id='results'>
	<p>The following Churches match your query:</p>
	
	<div id='table'>
		<?php echo $results; ?>
	</div>
	
	<?php if(isset($pager)): ?>

		<div id='pager'>
			<?php echo $pager; ?>
		</div>
		

	<?php endif; ?>

	</div>
<?php else: ?>
<p><i>Sorry, your search did not match any churches or projects.</i></p>
<p>Suggestions:</p>
<ul>
	<li>Try fewer search words and criteria</li>
	<li>Make sure search words are spelt correctly</li>
</ul>
<?php endif; ?>

