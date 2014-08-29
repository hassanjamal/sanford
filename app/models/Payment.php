<?php

class Payment extends \Eloquent {
	protected $fillable = ['user_id', 'payment_date', 'pairs', 'amount'];
    protected $table = 'payments';

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}