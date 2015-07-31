<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Article extends Model implements SluggableInterface{

	protected $fillable =[
	'emp_name',
	'title',
	'article',
	'slug'
	];
	
	use SluggableTrait;

	protected $sluggable =[
    'build_from' => 'title',
    'save_to'    => 'slug',
    'on_update'  => true
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function getTagListAttribute()
    {
        return $this->tags->Lists('id');
    }

}
