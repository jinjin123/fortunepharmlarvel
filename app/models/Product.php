<?php

class Product extends Eloquent {

	public function markets()
    {
        return $this->belongsTo('Market');
    }
	
  	public function series()
    {
        return $this->belongsTo('Serie');
    }
	
	
	public function indications()
	{
		return $this->belongsToMany('Indication', 'products_indications');
	}
	
	
		
	public function fixedindications()
	{
		return $this->belongsToMany('Fixedindication', 'products_fixedindications');
	}

	

}