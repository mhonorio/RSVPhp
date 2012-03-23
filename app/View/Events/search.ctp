<?php //debug($guest); ?>

<?php if(!$guest) { ?>

<h3>
	<p>Desculpe, não foi possível localizar seu nome.</p>

	<p>Caso esteja tendo problemas, favor ligar para <?php echo $event['Event']['phone_number']; ?></p>
	<br /><br />
	<p><a href="/">Tentar novamente</a></p>
</h3>

<?php } else { ?>


<h1><p>Olá <b><?php echo $guest['Guest']['first_name']; ?> <?php echo $guest['Guest']['last_name']; ?></b>,</p></h1>

<br /><br />

<?php if(!$guest['Guest']['confirmed']) { ?>

	<h3>
		<p>Deseja confirmar sua ida

		<?php if($guest['Guest']['companions'] > 0) { ?>
			e de mais <b><?php echo $guest['Guest']['companions']; ?></b> familiar(es) 
		<?php } ?>

		ao <b><?php echo $guest['Event']['name']; ?></b>

		na <b><?php echo $guest['Event']['location']; ?></b> no dia <b><?php echo $guest['Event']['dateF']; ?></b>
	
		<br /><br />
	</h3>
	
	<p style="font-size: 20px;">
	<?php
	echo $this->Html->link(
		'Sim',
		array('controller' => 'guests', 'action' => 'confirm', $guest['Guest']['hash']),
		array(),
		"Deseja realmente confirmar a presença?"
	);
	?>
	</p>
	
	<br /><br />
	
	<p style="font-size: 15px;">
		<a href="/">Não</a>
	</p>
<?php } else { ?>
	
	<h3>
		<p>Você já confirmou sua presença!</p>
		
		Beijos,<br />
		<b><?php echo $guest['Event']['organizers']; ?></b>
	</h3>
	
	<br /><br /><br />
	
	<?php echo $this->element('location'); ?>
	
<?php 
	}
}
?>
