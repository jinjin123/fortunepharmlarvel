<?php

class Serie extends Eloquent {

	
	public function markets()
	{
		return $this->belongsTo('Market');
	}
	


}