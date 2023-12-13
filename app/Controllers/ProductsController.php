<?php
namespace App\Controllers;
use Faker\Factory;
use App\Controllers\BaseController;
use App\Models\ProductsModel;

class ProductsController extends BaseController {
	public function index() {
		$products = $this->productsModel->getAllProducts();
		$data = ["title" => "Home","nama" => "Radit","products" => $products,];
        return view('products/index', $data);
    }
	public function create() {
		if (!$this->validate([
		  'image' => ['rules' => ['is_image[image]','mime_in[image,image/jpg,image/jpeg,image/png,image/webp]','max_size[image,1024]'],
			'errors' => ['max_size' => 'ukuran gambar terllau besar','is_image' => 'please input format gambar','mime_in' => 'please input gambar'],
		  ],
		])) {
		  $this->session->setFlashData("error", "Failed for add data please check your image");
		  return redirect()->to(base_url("home"));
		}
		$fileImage = $this->request->getFile('image');// ambil gambar
		if ($fileImage->getError() == 4) {$image = 'default.jpg';
		} else {$image = $fileImage->getRandomName(); // generate nama image biar random
		  $fileImage->move('image', $image);// pindahkan gambar Image ke file kita dan pada folder public/img 
		}
		$title = $this->request->getVar("title");
		$category = $this->request->getVar("category");
		$price = $this->request->getVar("price");
		$quantity = $this->request->getVar("quantity");
		$data = ["image" => $image,"title" => $title,"category" => $category,"price" => $price,"quantity" => $quantity];
		$this->productsModel->create($data);
		$this->session->setFlashData("success", "Products has been added");
		return redirect()->to(base_url("products"));
    }

	public function update($id){
		$products = $this->productsModel->getDetailProducts($id);
		$data = ["title" => "Update Products","products" => $products,
			"validation" => \Config\Services::validation(),
		];
		return view("products/update", $data);
	}

	public function updateAction($id){
		if (!$this->validate([
		  'title' => ['errors' => ['required' => '{field} harus diisi']
		  ],
		  'image' => ['rules' => ['is_image[image]','mime_in[image,image/jpg,image/jpeg,image/png,image/webp]','max_size[image,1024]',
			],
			'errors' => ['max_size' => 'ukuran gambar terllau besar','is_image' => 'please input format gambar','mime_in' => 'please input gambar'
			],
		  ],
		  'category' => 'required','price' => 'required','quantity' => 'required',
		])) {
		  return redirect()->to(base_url("products/update/" . $id))->withInput();
		}
		
		$fileImage = $this->request->getFile('image'); // ambil gambar
		if ($fileImage->getError() == 4) {
			 $image = $this->request->getVar('old_image') ?? 'default.jpg'; // Keep the existing image if no new image is uploaded
		} else {
			$image = $fileImage->getRandomName(); // generate nama image biar random
			$fileImage->move('image', $image); // pindahkan gambar Image ke file kita dan pada folder public/img 
			if ($this->request->getVar('old_image') && $this->request->getVar('old_image') != 'default.jpg') { // Delete the old image if a new one is uploaded
				unlink('image/' . $this->request->getVar('old_image'));
			}
		}
		$title = $this->request->getVar("title");
		$category = $this->request->getVar("category");
		$price = $this->request->getVar("price");
		$quantity = $this->request->getVar("quantity");
		$data = ["image" => $image,"title" => $title,"category" => $category,"price" => $price,"quantity" => $quantity];
		$this->productsModel->updateProducts($id, $data);
		$this->session->setFlashData("success", "Products has been updated");
		return redirect()->to(base_url("products/update/" . $id));
	}
	public function destroy($id){
		$this->productsModel->delete($id);
		$this->session->setFlashData("success", "Products has been deleted");
		return redirect()->to(base_url("products"));
	}
	
	
	
	public function form() {
		$data = ["title" => "Items"];
		return view('products/create', $data);
	}
	public function formAction() {
		$title = $this->request->getVar("title");
		$category = $this->request->getVar("category");
		$price = $this->request->getVar("price");
		$quantity = $this->request->getVar("quantity");

		$data = [
		  "title" => $title,
		  "category" => $category,
		  "price" => $price,
		  "quantity" => $quantity,
		];

		if ($title) {
		  $this->productsModel->Save($data);
		  $this->session->setFlashData("success", "Item Has been added");
		} else {
		  $this->session->setFlashData("error", "Item Failed for added");
		}
		return redirect()->to(base_url("products"));//url not view
	}
	public function detail($id) {
		$products = $this->productsModel->getDetailProducts($id);
		$customerId = ($id == 1) ? $id : 1;
		$customer = $this->customersModel->getDetailCustomers($customerId);
		$name = $customer['name'];
		$phoneNumber = $customer['phoneNumber'];
		$address = $customer['address'];
		$data = [
			"title" => "Order Detail","products" => $products,
			"customers" => ['name' => $name,'phoneNumber' => $phoneNumber,'address' => $address],
		];
		return view('products/detail', $data);
	}

}