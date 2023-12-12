Aplikasi Simple Online Shop

## Installasi
1. Atur database di app\Config\Database.php
  public array $default = [
    'DSN'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'ecom_2',
  ];
  
2. php spark db:seed ProductsSeeder

## Fitur
1. Halaman Login
    ```
    http://localhost:8080/
    ```
![Screenshot 1](public/image/1_Login.JPG)

2. Create Account
    ```
    http://localhost:8080/
    ```
![Screenshot 2](public/image/2_Registrasi.JPG)

2. Halaman Dashboard
    ```
    http://localhost:8080/dashboard
    ```
![Screenshot 3](public/image/3_Dashboard.JPG)
	
3. Halaman Products
    ```
    http://localhost:8080/products
    ```
![Screenshot 4](public/image/4_Products.JPG)

4. Seeder Products
php spark db:seed ProductsSeeder

5. Menghapus Product
![Screenshot 5](public/image/5_Delete.JPG)

6. Mengupdate Product
![Screenshot 6](public/image/6_Update.JPG)

7. Checkout Product
![Screenshot 7](public/image/7_Checkout.JPG)

8. Pop up Modal
![Screenshot 8](public/image/8_Modal.JPG)

9. Form Add Product
![Screenshot 9](public/image/9_Add.JPG)