<?php 
class Cart extends Controller{
    
    public $data = [], $model = [];
    private $cartModel;
    public function __construct(){
        //construct
        $this->cartModel = $this->model('CartModel');
    }
    
    public function index(){
        //Index
        $carts = $this->cartModel->list();
        
        $this->data['sub_content']['new_title'] = 'cart';// tiêu đề
        $this->data['sub_content']['new_content'] = 'CArt'; // biến 
        $this->data['sub_content']['new_author'] = 'Hoàng an';// 
        $this->data['sub_content']['page_title'] = 'Test tiêu đề';
        // cách sử dụng biến ở trong view
        $this->data['sub_content']['carts'] = $carts;
        $this->data['content'] = 'carts/index';// view  render
        $this->render('layouts/client_layout', $this->data);
    }
}