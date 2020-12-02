<?php

class Faq extends Eloquent {

  
	public function faqserie()
    {
        return $this->belongsTo('Faqserie');
    }


}
