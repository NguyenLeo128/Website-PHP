<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('IndexModel');
		$this->load->library('cart');
		// $this->load->library('email');
		$this->data['category'] = $this->IndexModel->getCategoryHome();
		$this->data['brand'] = $this->IndexModel->getBrandHome();
	}
	public function index()
	{
		//phan trang
		$config = array();
		$config["base_url"]         = base_url().'/pagination';
        $config["total_rows"]       = ceil($this->IndexModel->countAllProduct()); //dem tat ca san pham
        $config["per_page"]         = 4; // tung trang
        $config['uri_sengment']     = 2; //lay so trang hien tai
        $config['use_page_numbers'] = true; //trang co so
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close'] 	= '</ul>';
        $config['first_link'] 		= 'First';
        $config['first_tag_open'] 	= '<li>';
        $config['first_tag_close'] 	= '</li>';
        $config['last_link'] 		= 'Last';
        $config['last_tag_open'] 	= '<li>';
        $config['last_tag_close'] 	= '</li>';
        $config['cur_tag_open'] 	= '<li class="active"><a>';
        $config['cur_tag_close'] 	= '</a></li>';
        $config['num_tag_open'] 	= '<li>';
        $config['num_tag_close'] 	= '</li>';
        $config['next_tag_open'] 	= '<li>';
        $config['next_tag_close'] 	= '</li>';
        $config['prev_tag_open'] 	= '<li>';
        $config['prev_tag_close'] 	= '</li>';

        $this->pagination->initialize($config); // tu dong tao trang
		$this->page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0; 
		$this->data["links"] = $this->pagination->create_links(); //tu dong tao link phan trang
		$this->data['allproduct_pagination'] = $this->IndexModel->getIndexPagination($config['per_page'], $this->page);




		// $this->data['allproduct'] = $this->IndexModel->getAllProduct();
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/home', $this->data);
		$this->load->view('pages/template/footer');
	}
	public function category($id)
	{
		
		$this->data['category_product'] = $this->IndexModel->getCategoryProduct($id);
		$this->data['title'] = $this->IndexModel->getCategoryTitle($id);
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/category', $this->data);
		$this->load->view('pages/template/footer');
	}
	public function brand($id)
	{
		
		$this->data['brand_product'] = $this->IndexModel->getBrandProduct($id);
		$this->data['title'] = $this->IndexModel->getBrandTitle($id);
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/brand', $this->data);
		$this->load->view('pages/template/footer');
	}
	public function cart()
	{
		
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/cart');
		$this->load->view('pages/template/footer');
	}
	public function add_to_cart()
	{
		$product_id = $this->input->post('product_id');
		$quantity = $this->input->post('quantity');
		$this-> data['product_details'] = $this->IndexModel->getProductDetails($product_id);
		//cart
		foreach($this-> data['product_details'] as $pro)
		$cart = array(
			'id'      => $pro->id,
			'qty'     => $quantity,
			'price'   => $pro->price,
			'name'    => $pro->title,
			'options' => array('image' => $pro->image)
			);
			
		$this->cart->insert($cart);
		redirect(base_url().'gio-hang', 'refresh');
	}
	public function delete_all_cart()
	{
		$this->cart->destroy();
		redirect(base_url().'gio-hang', 'refresh');
	}
	public function delete_item($rowid)
	{
		$this->cart->remove($rowid);
		redirect(base_url().'gio-hang', 'refresh');
	}
	public function update_cart_item()
	{
		$rowid = $this->input->post('rowid');
		$quantity = $this->input->post('quantity');
		foreach($this->cart->contents() as $items){
			if($rowid == $items['rowid']){
				$cart = array(
					'rowid' => $rowid,
					'qty'     => $quantity,
					);
					
				$this->cart->update($cart);
			}
		}
		// redirect(base_url().'gio-hang', 'refresh');
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function product($id)
	{
		$this->data['product_details'] = $this->IndexModel->getProductDetails($id);
		$this->data['list_comments'] = $this->IndexModel->getListComments($id);
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/product_details', $this->data);
		$this->load->view('pages/template/footer');
	}

	//login
	public function login()
	{
		
		// $this->load->view('pages/template/header');
		$this->load->view('pages/login');
		// $this->load->view('pages/template/footer');
	}
	public function login_customer(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'You must provide a %s.']);
		if ($this->form_validation->run())
		{
				$email= $this->input->post('email');
				$password= md5($this->input->post('password'));
				$this->load->model('LoginModel');
				$result = $this->LoginModel->checkLoginCustomer($email, $password);
				if($result){
					$session_array = [
						'id' => $result[0]->id,
						'username' => $result[0]->name,
						'email' => $result[0]->email,
					];
					$this->session->set_userdata('loggedInCustomer',$session_array); 
					$this->session->set_flashdata('success','Login Successfully'); 
					redirect(base_url('/'));
				}else{
					$this->session->set_flashdata('error', 'Wrong Email or password please login again');
					redirect(base_url('dang-nhap'));
				}
		}
		else
		{
			$this->login();
		}
	}
	//check out
	public function checkout(){
		if($this->session->userdata('loggedInCustomer') && $this->cart->contents()){

			$this->load->view('pages/template/header', $this->data);
			$this->load->view('pages/checkout');
			$this->load->view('pages/template/footer');
		}else{
			redirect(base_url().'gio-hang');
		}
	}
	public function confirm_checkout(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('address', 'Address', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'You must provide a %s.']);
		// $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'You must provide a %s.']);
		if($this->form_validation->run() == TRUE){
			$email= $this->input->post('email');
			$shipping_method= $this->input->post('shipping_method');
			$phone= $this->input->post('phone');
			$address=$this->input->post('address');
			$name= $this->input->post('name');
			$note= $this->input->post('note');
			$data = array(
				'name' => $name,
				'email' => $email,
				'method' => $shipping_method,
				'address' => $address,
				'phone' => $phone,
				'note' => $note,
			);
			$this->load->model('LoginModel');
			
			$result = $this->LoginModel->NewShipping($data);
			if($result){
				//add order
				$order_code = rand(00, 99999);
				$data_order = array(
					'order_code' => $order_code,
					'ship_id' => $result,
					'status' => 1,
				);
				$insert_order = $this->LoginModel->insert_order($data_order);
				//add order_details
				foreach($this->cart->contents() as $items){
					$data_order_details = array(
						'order_code' => $order_code,
						'product_id' => $items['id'],
						'quantity' => $items['qty'],
					);
					$insert_order_details = $this->LoginModel->insert_order_details($data_order_details);
				}
				$this->cart->destroy();
				redirect(base_url('/thanks'));
			}else{
				$this->session->set_flashdata('error', 'Wrong Email or password please login again');
				redirect(base_url('/checkout'));
			}
		}else{
			$this->checkout();
		}
	}
	public function dang_ky(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('address', 'Address', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'You must provide a %s.']);
		if ($this->form_validation->run())
		{
				$email= $this->input->post('email');
				$password= md5($this->input->post('password'));
				$name= $this->input->post('name');
				$address=$this->input->post('address');
				$phone= $this->input->post('phone');
				
				$data = array(
					'email' => $email,
					'password' => $password,
					'name' => $name,
					'address' => $address,
					'phone' => $phone
				);
				$this->load->model('LoginModel');
				$result = $this->LoginModel->NewCustomer($data);
				if($result){
					$session_array = [
						'email' => $email,
						
						'name' => $name,
						

					];
					$this->session->set_userdata('loggedInCustomer',$session_array); 
					$this->session->set_flashdata('success','Login Successfully'); 
					redirect(base_url('/'));
				}else{
					$this->session->set_flashdata('error', 'Wrong Email or password please login again');
					redirect(base_url('dang-nhap'));
				}
		}
		else
		{
			$this->login();
		}
	}
	public function dang_xuat(){
		$this->session->sess_destroy('LoggedInCustomer');
		redirect(base_url('/'));
	}
	//thanks

	public function thanks()
	{
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/thanks', );
		$this->load->view('pages/template/footer');
	}

	//Tim kiem
	public function tim_kiem(){
		if(isset($_GET['keyword']) && $_GET['keyword'] != ''){
			$keyword = $_GET['keyword'];
		}
		$this->data['product'] = $this->IndexModel->getProductByKeyword($keyword);
		$this->data['title'] = $keyword;
		$this->load->view('pages/template/header', $this->data);
		$this->load->view('pages/timkiem', $this->data);
		$this->load->view('pages/template/footer');
	}

	//send mail

	public function send_mail(){
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'huydinh022@gmail.com';
		$config['smtp_pass'] = 'hydinh13200129'; //tfxvnesgvaurzidq
		$config['smtp_port'] = 465;
		$config['charset'] = 'utf-8';
		$this->email->initialize($config);
		$this->email->set_newline('\r\n');

		//config mail
		$this->email->from('huydinh022@gmail.com', 'My send mail');
		$this->email->to('truongquanghy13@gmail.com');
		$this->email->subject('Đơn hàng đã được nhận');
		$this->email->message('Đã được nhập đơn hàng và chờ thêm phản hồi');

		//send mail
		$this->email->send();

	}
	public function comment_send(){
		$data = [
			'name' => $this->input->post('name_comment'),
			'summary' => $this->input->post('summary'),
			'product_id_comment' => $this->input->post('product_id_comment'),
			'review' => $this->input->post('comment'),
			'status' => 1,
			'dated' => Carbon\Carbon::now('Asia/Ho_Chi_Minh')
		];
		// $this->load->model('IndexModel');
    	$this->IndexModel->insertComment($data);
        $this->session->set_flashdata('success','Add Success Brand'); 
        // $this->
		redirect($_SERVER['HTTP_REFERER']);
	}
}
