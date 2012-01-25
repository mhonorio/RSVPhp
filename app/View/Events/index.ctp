<h2>Faltam <?php echo $event['Event']['days']; ?> dias!</h2>

<br /><br />

<h3>Para confirmar sua presença em nosso casamento, digite os dados abaixo.</h3>

<br /><br /><br />
<?php

echo $this->Form->create('Event', array(
	'action' => 'search'
));

echo $this->Form->input('first_name', array('label' => 'Primeiro nome'));

echo $this->Form->input('last_name', array('label' => 'Último nome'));

echo $this->Form->end('Próximo');