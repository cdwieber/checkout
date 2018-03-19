<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'name'];

    public function group() {
    	return $this->belongsTo('App\SettingGroup');
    }
}
