<?php

echo $this->Form->create('Event', array(
	'action' => 'search'
));

echo $this->Form->input('first_name', array('label' => 'Primeiro nome'));

echo $this->Form->input('last_name', array('label' => 'Último nome'));

echo $this->Form->end('Próximo');