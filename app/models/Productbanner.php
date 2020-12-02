<?php

class Productbanner extends Eloquent {

	/*
	public function markets()
    {
        return $this->belongsTo('Market');
    }
	*/
	/*
  	public function series()
    {
        return $this->belongsTo('Serie');
    }
	 
	 */
	/*
	public function markets()
	{
		return $this->belongsToMany('Market', 'productbanners_series');
	}
	*/
	
	
	public function series()
    {
        return $this->belongsToMany('Serie', 'productbanners_series');
    }
}