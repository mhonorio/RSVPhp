<?php

class Guest extends AppModel
{
	public $name = 'Guest';
	
	public $belongsTo = array('Event');
	
	public $virtualFields = array(
		'dateF' => "DATE_FORMAT(Guest.modified, '%d/%m/%Y às %H:%i')"
	);
	
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