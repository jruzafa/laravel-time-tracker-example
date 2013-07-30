<?php

/**
* Model for Project object
* @package project
* @subpackage Eloquent
*/

class Project extends Eloquent{

	// Except id for Project::create
	protected $guarded = array('id');


    public function user(){
        return $this->belongsTo('User');
    }

    public function times(){
        return $this->hasMany('Time');
    }
}