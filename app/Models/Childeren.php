<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Childeren extends Model
{
    use HasFactory;
    protected $fillable = [
         'name',
         'birth',
    ];
    public function Users():BelongsToMany
	{
		return $this->belongsToMany('App\Models\User');
   	}
    public function UserChilderens():BelongsToMany
	{
		return $this->belongsToMany('App\Models\UserChilderen');
   	}
}
