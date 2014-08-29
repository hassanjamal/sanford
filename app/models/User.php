<?php

class User extends \Eloquent {
	protected $fillable = [];
    protected $table = 'users';

    public  function usertree()
    {
        return $this->hasMany('UsersTree', 'user_id');
    }
    public function payments()
    {
        return $this->hasMany('Payment', 'user_id');
    }
}