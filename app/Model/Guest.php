<?php

class Guest extends AppModel
{
	public $name = 'Guest';
	
	public $belongsTo = array('Event');
	
	/*public $validate = array(
		'first_name' => array(
			'alphaNumeric' => array(
				'rule' => 'alphaNumeric',
				'required' => true,
				'message' => 'Favor digitar o primeiro nome'
			)
		)
	);*/
}