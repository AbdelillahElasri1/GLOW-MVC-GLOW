<?php 

/**
 * Login class
 */
class Login
{
	use Controller;

	public function index()
	{
		$data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new User;
			$arr['email'] = $_POST['email'];

			$row = $user->first($arr);
			
			if($row)
			{
				if($row->password === $_POST['password'])
				{
					$_SESSION['USER'] = $row;
					redirect('dashboard');
				} else {
					redirect('login');
				}
			}
			if (isset($_SESSION['USER'])) {
				redirect('dashboard');
			} else{
				session_destroy();
				redirect('login');
			}

			$user->errors['email'] = "Wrong email or password";

			$data['errors'] = $user->errors;
		}
		
		$this->view('login', $data);
	}

}
