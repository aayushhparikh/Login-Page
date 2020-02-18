<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $checkUser) : ?>
  	  <p><?php echo $checkUser ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
