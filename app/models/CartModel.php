<?php
/*
 * Kế thừa từ class Model
 *
 * */
class CartModel extends Model {

    function tableFill(){
       return 'carts';
    }

    function fieldFill(){
        return '*';
    }

    function primaryKey(){
        return 'id';
    }

    public function list(){
        $data = $this->db->table('carts')->get();
        return $data;
    }

    public function insertUsers($data){
        //$this->db->table('users')->delete();
        $this->db->table('users')->insert($data);
        return $this->db->lastId();
    }
}