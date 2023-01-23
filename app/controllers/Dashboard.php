<?php 

/**
 * dashboard class
 */
class Dashboard
{
	use Controller;

	public function index()
	{	
		$this->view('statistique');
	}

    public function productdashboard(){
        $this->view('productdashboard');
    }
    public function addproduct() {
        $this->view('addproduct');
        $product = new ProductM;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form
            $imgName = $_FILES['image']['name'];
            $imgTmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($imgTmp, 'image/upload/' . $imgName);

            // sanitize post data
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if(isset($_POST['submit'])){
                $data = [

                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'mobile' => $_POST['mobile'],
                    'password' => $_POST['password']
                ];
            }
            $product->insert($data);

                
            //$sql = "insert into `crud` (name, email, mobile, password) values ('$name','$email','$mobile','$password')";
            


        
       
    }
    
    // public function statistique(){
    //     $this->view('statistique');
    // }
    // public function check($sess){
    //     $_SESSION['USER'] == $sess;
    //     if (empty($sess)) {
    //         redirect('login');
    //     }
    // }
    }
}
