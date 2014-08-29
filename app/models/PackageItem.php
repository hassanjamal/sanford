<?php

class PackageItem extends \Eloquent {

    protected $fillable = ['description', 'value', 'quantity'];
    protected $guarded = [];
    protected $table = 'packageItems';

    public function package()
    {
        return $this->belongsTo('Package');
    }
}