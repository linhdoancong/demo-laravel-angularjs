<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersItems extends Model
{
    //
    protected $table = 'users_items';
    protected $fillable = array('user_id', 'item_id');
    public $timestamps = false;
}
