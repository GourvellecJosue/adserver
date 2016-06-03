<?php

namespace Adserver\Controllers;

use WhiteFrame\Http\Controller\Resource\Controller;

class AdvertController extends Controller
{
	protected $entity = 'Adserver\Files\Advert';
	protected $views = 'adverts';
	protected $endpoint = 'adverts';
	protected $request = 'Adserver\Requests\AdvertRequest';
	
}