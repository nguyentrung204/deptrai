<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table = 'profile';
	
	protected $fillable = ['*'];
   
    protected $guarded = ['*'];
	
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
