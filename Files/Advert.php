<?php

namespace Adserver\Files;

use WhiteFrame\Helloquent\Model;

class Advert extends Model
{

	//protected $presenter = 'Adserver\Presenters\AdvertPresenter';
	//protected $transformer = 'Adserver\Transformers\AdvertTransformer';
	protected $repository = 'Adserver\Repositories\AdvertRepository';
	protected $controller = 'Adserver\Controllers\AdvertController';

	protected $table = 'adverts';

	protected $guarded = [
		'id'
	];

	public function tags()
	{
		return $this->morphToMany('Adserver\Options\Tag', 'taggable');
	}

	public function websites()
	{
		return $this->belongsToMany('Adserver\Entities\Website');
	}

}