<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;
use App\Models\Childeren;

class UserChilderen extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id',
       'teacher_id',
       'Childeren_id'
    ];
    public function Users():BelongsToMany
	{
		return $this->belongsToMany('App\Models\User');
   	}
    public function Childerens():BelongsToMany
	{
		return $this->belongsToMany('App\Models\Childeren');
   	}

}
