<?php 
class User extends Controller{
    
    public $data = [], $model = [];
    public $userModel;
    public function __construct(){
        //construct
        $this->userModel = $this->model('UserModel');
    }
    
    public function index(){
        //Index
        $user = $this->userModel->list();
    
        $this->data['sub_content']['new_title'] = 'Tin tức 1';
        $this->data['sub_content']['new_content'] = 'Nội dung 1';
        $this->data['sub_content']['new_author'] = 'Hoàng an';
        $this->data['sub_content']['page_title'] = 'Test tiêu đề';
        $this->data['sub_content']['user_list'] = $user;
        $this->data['content'] = 'users/index';
        $this->render('layouts/client_layout', $this->data);
    }
}