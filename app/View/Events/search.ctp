<?php //debug($guest); ?>

<?php if(!$guest) { ?>

<p>Desculpe, não foi possível localizar seu nome.</p>

<p>Caso esteja tendo problemas, favor ligar para <?php echo $event['Event']['phone_number']; ?></p>

<p><a href="/">Tentar novamente</a></p>

<?php } else { ?>


<p>Olá <b><?php echo $guest['Guest']['first_name']; ?> <?php echo $guest['Guest']['last_name']; ?></b>,</p>


<?php if(!$guest['Guest']['confirmed']) { ?>

	<p>Deseja confirmar sua ida

	<?php if($guest['Guest']['companions'] > 0) { ?>
		e de mais <b><?php echo $guest['Guest']['companions']; ?></b> familiar(es) 
	<?php } ?>

	ao <b><?php echo $guest['Event']['name']; ?></b>

	na <b><?php echo $guest['Event']['location']; ?></b> no dia <b><?php echo $guest['Event']['dateF']; ?></b>

	<p>
	<?php
	echo $this->Html->link(
		'Sim',
		array('controller' => 'guests', 'action' => 'confirm', $guest['Guest']['id']),
		array(),
		"Deseja realmente confirmar?"
	);
	?>
	</p>

	<p>
		<a href="/">Não</a>
	</p>
<?php } else { ?>
	
	<p>Você já confirmou sua participação!</p>
	
	Beijos,<br />
	<b><?php echo $guest['Event']['organizers']; ?></b>
	
<?php 
	}
}
?>