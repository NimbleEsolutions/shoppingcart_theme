<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	use App\Models\ProductModel;

	class Product extends Controller
	{
		public function index()
		{
			$data['product'] = (new ProductModel())->where('prod_name',''.str_replace('%20',' ',str_replace('%28','(', str_replace('%29',')',service('uri')->getSegment(3)))).'')->get()->getResultArray();
			// print_r($data['product']);die();
			return view('product/product_details',$data);
		}
	}
?>