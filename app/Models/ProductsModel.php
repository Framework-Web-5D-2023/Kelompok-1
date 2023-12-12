<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductsModel extends Model {
	protected $table = 'products';
	protected $primaryKey = 'id';
	protected $protectFields = false;
    protected $useSoftDeletes = true; // Enables soft deletes
	protected $allowedFields = ['image', 'title', 'description', 'price', 'quantity', 'category', 'discount'];
	protected $useTimestamps = true; //Dates = required to alter .sql created_at, updated_at // Enables automatic timestamps
	//CRUD Methods
	public function getAllProducts(){ 
		return $this->findAll();
	}
	public function getDetailProducts($id){
		return $this->find($id);
	}
	public function create($data){
		return $this->insert($data);
	}
	public function updateProducts($id, $data){
		return $this->update($id, $data);
	}
}