<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CustomersModel;

class CustomersController extends BaseController{
	public function register(){
		$validationRules = ['name' => 'required','phoneNumber' => 'required','address' => 'required',];
		if (!$this->validate($validationRules)) {
			return redirect()->to(base_url('customers/create'))->withInput()->with('validation', $this->validator);
		}
		$fileImage = $this->request->getFile('image');
		if ($fileImage->getError() == 4) {$image = 'default.jpg';
		} else {$image = $fileImage->getRandomName();
			$fileImage->move('image', $image);
		}
		$name = $this->request->getVar('name');
		$phoneNumber = $this->request->getVar('phoneNumber');
		$address = $this->request->getVar('address');
		$data = ['image' => $image,'name' => $name,'phoneNumber' => $phoneNumber,'address' => $address];
		$this->customersModel->insert($data);
		$this->session->setFlashData('success', 'Customers has been added successfully');
		return redirect()->to(base_url('/'));
	}
    public function login(){
		$data = ["title" => "Login"];
        return view('customers/create', $data);
    }
	public function loginAction(): string {
		$email = $_POST["email"];
		$password = $_POST["password"];
		$customers = $this->customersModel->getAllCustomers();
		$data = ["title" => "Dashboard","nama" => "Framework Web","kelas" => "5D","customers" => $customers,];
		return view('customers/index', $data);
	}
	
	
	
	public function index(){
        $customers = $this->customersModel->getAllCustomers();
		$data = ["title" => "Dashboard","customers" => $customers,];
        return view('customers/index', $data);
	}
}
