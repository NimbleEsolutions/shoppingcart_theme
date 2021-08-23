<?php 
	namespace App\Models;
	use CodeIgniter\Model;

	class Upload extends Model
	{
		protected $table = 'sh_upload';
		protected $primaryKey = 'up_id';

		protected $returnType = 'array';
		protected $allowedFields = ['up_type','up_type_id','up_url','up_createdBy','up_createdOn','up_isDelete'];

	}
?>