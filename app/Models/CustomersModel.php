<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomersModel extends Model {
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $protectFields = false;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['image', 'name', 'phoneNumber', 'address','email','username','password'];
    protected $useTimestamps = true;
	public function getAllCustomers(){ 
		return $this->findAll();
	}
	public function getDetailCustomers($id){
		return $this->find($id);
	}
}
