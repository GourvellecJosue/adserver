<?php

namespace Adserver\Options;

use WhiteFrame\Helloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
	use SoftDeletes;
	
	//protected $presenter = 'Adserver\Presenters\TagPresenter';
	//protected $transformer = 'Adserver\Transformers\TagTransformer';
	protected $repository = 'Adserver\Repositories\TagRepository';
	protected $controller = 'Adserver\Controllers\TagController';

	protected $table = 'tags';
	protected $dates = ['delete_at'];

	protected $guarded = [
		'id'
	];

	public function adverts()
	{
		return $this->morphedByMany('Adserver\Files', 'taggable');
	}

	/**
	 * Get all of the videos that are assigned this tag.
	 */
	public function websites()
	{
		return $this->morphedByMany('Adserver\Entities', 'taggable');
	}
}