
<div id='form'>

<p>Introductory text.</p>

<?php echo $form; ?>

</div>

<?php if(isset($results)): ?>

	<div id='results'>
	<p>The following Churches match your query.</p>
	
	<div id='table'>
		<?php echo $results; ?>
	</div>
	
	<?php if(isset($pager)): ?>

		<div id='pager'>
			<?php echo $pager; ?>
		</div>
		
	<?php endif; ?>

	</div>

<?php endif; ?>

