<?php 

class Product extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Products_model');
        $this->load->helper('url');
	}
    function index($data=null) {
    	//var_dump($this->Product_model->getAllProduct());
        $data['products'] = $this->Products_model->listProducts();
        //var_dump($data['products']);exit;

        $this->load->view('admin/product', $data);
    }
    function addProduct() {
        if(!empty($_POST)) {
            if(!empty($_POST['name'])) $data['error'] = 'Hãy điền tên sản phẩm';
        	elseif(!empty($_POST['thumb'])) $data['error'] = 'Hãy điền ảnh sản phẩm';
            else {
        		$data = array(
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'category_id' => $_POST['category'],
                    'description' => $_POST['description'],
                    'thumb' => $_POST['thumb'],
                );
        		$this->Product_model->addProduct($data);
                $data['success'] = 'Thêm sản phẩm thành công';
        	}
        	return $this->index($data);
        }
        return $this->load->view('',$data);
    	//var_dump($this->Product_model->getAllProduct());
    }
    function updateProduct($id) {
        if(!empty($_POST)) {
        	if(!empty($_POST['name'])) $data['error'] = 'Hãy điền tên sản phẩm';
            elseif(!empty($_POST['thumb'])) $data['error'] = 'Hãy điền ảnh sản phẩm';
            else {
            	$data = array(
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'category_id' => $_POST['category'],
                    'description' => $_POST['description'],
                    'thumb' => $_POST['thumb'],
                );
            	$this->Product_model->updateProduct($data,$id);
                $data['success'] = 'Update sản phẩm thành công';
            }
        }
        $data['product'] = $this->Products_model->getProducts($id);
        $data['product']->image = $this->Products_model->getImageProducts($id);
        $data['product']->category_name = $this->Category_model->getNameCategory($data['product']->category_id);
        
        return $this->load->view('',$data);
    }
    function deteleProduct($id) {
    	if($this->Product_model->deteleProduct($id)) $data['success'] = 'Xóa sản phẩm thành công';
        else $data['error'] = 'Xóa sản phẩm thất bại';
        return $this->index($data);
    }
}

?>