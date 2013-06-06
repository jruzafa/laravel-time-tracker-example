<?php

/**
* Model for Project object
* @package project
* @subpackage Eloquent
*/

class Project extends Eloquent{

	// Except id for Project::create
	protected $guarded = array('id');
}