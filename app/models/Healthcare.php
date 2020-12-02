<?php

class Healthcare extends Eloquent {

	public function markets()
    {
        return $this->belongsTo('Market');
    }
	

}