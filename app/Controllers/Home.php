<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use \App\Models\ProductModel;

class Home extends BaseController
{
	public function index()
	{
		$data['product'] = (new ProductModel())->where('prod_isDelete',0)->get()->getResultArray();
		return view('home/home',$data);
	}
}
