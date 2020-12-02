<?php

class Banner extends Eloquent {


  public function image()
    {
        return $this->belongsTo('Image');
    }




}