<?php 

if(count($errors) > 0): ?>

<div>
	<?php foreach ($errors as $error):?>
	
		<pc class="error"><?php echo "$error"?></p>
		<?php endforeach ?>
</div>

<?php endif ?>

