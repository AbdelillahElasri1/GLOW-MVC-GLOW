<?php 

/**
 * pages class
 */
class Product
{
	use Controller;

	public function index()
	{
        // $product = new ProductM;
        // $arr['name'] = $_POST['name'];

		//$product->first($arr);
		$this->view('product');
	}
    
}
