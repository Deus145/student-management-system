<?php if (count($error_auth) > 0): ?>
	<div class = "error">
		<?php foreach ($error_auth as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>			