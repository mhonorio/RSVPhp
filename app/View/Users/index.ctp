<?php
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>

<?php echo $user['User']['id']; ?>
<?php echo $user['User']['username']; ?>
<?php echo $user['User']['role']; ?>
<?php echo $user['User']['created']; ?>
<?php echo $user['User']['modified']; ?>

<?php endforeach; ?>