<?php

class Time extends Eloquent{

    // Except id for Project::create
    protected $guarded = array('id');

    public function user(){
        return $this->belongsTo('User');
    }

    public function project(){
        return $this->belongsTo('Project');
    }
}