<?php 
	namespace App\Models;
	use CodeIgniter\Model;

	class ProductModel extends Model
	{
		protected $table = "sh_product";
		protected $primaryKey = 'prod_id';

    	protected $returnType     = 'array';
		protected $allowedFields = ['prod_name','prod_category','prod_desc','prod_video_link','prod_download_link','prod_price','prod_sale_price','prod_stock_status','prod_quantity','prod_avg_rate','prod_total_sale','prod_likes','prod_createdOn','prod_createdBy','product_isDelete'];		
		
	}
?>