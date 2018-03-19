<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingGroup extends Model
{
	protected $fillable = ['id', 'name'];

    public function setting() {
    	return $this->hasMany('App\Setting');
    }
}
