
<?php
class UserModel extends Model {
    function tableFill(){
        return 'users';
     }
 
     function fieldFill(){
         return '*';
     }
 
     function primaryKey(){
         return 'id';
     }

    public function list(){
        $data = $this->db->table('users')->get();
        return $data;
    }

    public function find($id){
        $data = [
            'Sản phẩm 1',
            'Sản phẩm 2',
            'Sản phẩm 3'
        ];
        return $data[$id];
    }
}