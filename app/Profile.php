<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $fillable =[
	'user_id'
	];

	public function users()
	{
		$this->belongsTo('App\User');
	}

}
