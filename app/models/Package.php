<?php

class Package extends \Eloquent {
	protected $fillable = [];
    protected $table = 'packages';


    public  function packageitems()
    {
        return $this->hasMany('PackageItem');
    }
}