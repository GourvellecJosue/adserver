<?php

namespace Adserver\Controllers;

use WhiteFrame\Http\Controller\Resource\Controller;

class WebsiteController extends Controller
{
	protected $entity = 'Adserver\Entities\Website';
	protected $views = 'websites';
	protected $endpoint = 'websites';
	protected $request = 'Adserver\Requests\WebsiteRequest';
}