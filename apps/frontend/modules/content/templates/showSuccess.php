<h1>Hallo Welt!</h1>

  <p>Um  <?php echo $hour; ?> Uhr. 
  <?php if($hour >= 17): ?> Und das am Abend!
<?php endif; ?>
<form method="post" action="<?php echo url_for('content/update') ?>">
<label for="name">Wie ist dein Name?</label>
<input type="text" name="name" id="name" value="" />
<input type="submit" value="Ok" />
<?php echo link_to('Nein, meinen Namen sag ich nicht!', 'content/update') ?>
</form>