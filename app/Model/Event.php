<?php

class Event extends AppModel
{
	public $name = 'Event';
	
	public $hasMany = array('Guest');
	
	public $virtualFields = array('dateF' => "DATE_FORMAT(date, '%d/%m/%Y às %H:%i')");
}