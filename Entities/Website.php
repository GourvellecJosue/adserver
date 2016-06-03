<?php

namespace Adserver\Entities;

use WhiteFrame\Helloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Website extends Model
{
	use SoftDeletes;

	//protected $presenter = 'Adserver\Presenters\WebsitePresenter';
	//protected $transformer = 'Adserver\Transformers\WebsiteTransformer';
	protected $repository = 'Adserver\Repositories\WebsiteRepository';
	protected $controller = 'Adserver\Controllers\WebsiteController';

	protected $table = 'websites';
	protected $dates = ['delete_at'];

	protected $guarded = [
		'id'
	];

	public function tags()
	{
		return $this->morphToMany('Adserver\Options\Tag', 'taggable');
	}

	public function images()
	{
		return $this->belongsToMany('Adserver\Files\Advert');
	}
}